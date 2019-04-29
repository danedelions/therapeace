<?php
namespace App\Http\Controllers;
use App\BookingRequest;
use Illuminate\Http\Request;
use App\Appointment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class TherapistCalander extends Controller
{
    public function __invoke(Request $request, BookingRequest $bookingRequest)
    {
        $bookingRequest->load([
            'client.user',
            'bookingDetails',
            'appointment'
        ]);
        Auth::user()->load([
            'therapist.appointments' => function ($q) {
                $q->with(['booking', 'client'])->whereHas('booking', function ($booking) {
                    return $booking->where('status', 1);
                });
            }
        ]);
        $events = Auth::user()->therapist->appointments->map(function ($item) {
            return [
                'title' => $item->booking->client->full_name,
                'start' => "{$item->start_date} {$item->start_date_time}",
                'end'   => "{$item->end_date} {$item->end_date_time}"
            ];
        });
        return view('therapist.calendar', [
            'bookingRequest' => $bookingRequest,
            'events'         => $events
        ]);
    }
    public function saveAppointment(Request $request, BookingRequest $bookingRequest)
    {
        $validator = \Validator::make($request->all(), [
            'start_date'         => 'required|date',
            'end_date'           => 'required|date',
            'start_date_time'    => 'required|date_format:H:i',
            'end_date_time'      => 'required|date_format:H:i',
            'other_services'     => 'sometimes|nullable|string',
            'other_services_fee' => 'sometimes|nullable|numeric',
        ]);
        $bookingRequest->load('appointment');
        Auth::user()->load([
            'therapist.appointments'
        ]);
        $validator->after(function ($v) use ($request, $bookingRequest) {
            if ($v->errors()) {
                $startDateTime = Carbon::parse("{$request->start_date} {$request->start_date_time}");
                $endDateTime   = Carbon::parse("{$request->end_date} {$request->end_date_time}");
                /** @NOTE: lte => Less than or equal */
                if ($endDateTime->lte($startDateTime)) {
                    $v->errors()->add('end_date_time', 'This should be after start date and time');
                    return;
                }
                $conflicts = data_get(Auth::user(), 'therapist.approvedAppointments')
                    ->filter(function ($existingAppointment) use ($startDateTime, $bookingRequest) {
                        // ignore the same appointments
                        if(optional($bookingRequest->appointment)->id === $existingAppointment->id){
                            return false;
                        }
                        return $startDateTime->between($existingAppointment->start_timestamp, $existingAppointment->end_timestamp);
                    });
                if($conflicts->isNotEmpty()){
                    $v->errors()->add('start_date', 'Conflict');
                    $v->errors()->add('end_date', 'Conflict');
                    $v->errors()->add('end_date_time', 'Conflict');
                    $v->errors()->add('start_date_time', 'Conflict');
                }
            }
        });
        $input = $validator->validate();
        $appointment = array_merge(
            $input,
            $bookingRequest->only(['client_id', 'therapist_id']),
            ['name' => '-', 'address' => '-']
        );
        \DB::transaction(function () use ($bookingRequest, $appointment) {
            if ($bookingRequest->appointment()->exists()) {
                $bookingRequest->appointment()->update($appointment);
            } else {
                $bookingRequest->approve();
                $bookingRequest->appointment()->create($appointment);
            }
        });
        // session()->flash('successBook', 'Booking successful');
        return redirect()->back()->with('message', 'Booking successful');
    }


    public function rejectAppointment(Request $request, BookingRequest $bookingRequest)
    {
        $bookingRequest->reject();
        return redirect()->back()->with('rejectStatus', true);
    }
    public function finishedAppointment(Request $request, BookingRequest $bookingRequest)
    {
        $bookingRequest->finish();
        return redirect()->back()->with('finishStatus', true);
    }
    public function cancelAppointment(Request $request, BookingRequest $bookingRequest)
    {
        $bookingRequest->cancel();
        return redirect()->back()->with('cancelStatus', true);
    }

    
}