@extends('layouts.both')

@section('title', 'Messaging')

@section('page-section')
    @php $recipient = request()->route('recipientId') @endphp
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}">
    <!------ Include the above in your HEAD tag ---------->

    <div class="messaging-below">
        <h3 class="text-center">Messaging</h3>
        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="row">
                            <div class="col-md-8">
                                Your Therapists
                            </div>
                            <div class="col-md-4" style="margin-bottom: 15px;">
                               <br>
                            </div>
                        </div>
                        <!-- {!! Form::open(['url' => url()->current(), 'method' => 'get']) !!} 
                            <div class="row">
                                <div class="col-md-8">
                                     {!! Form::inputGroup('text', null, 'name', request()->name ?? null, ['placeholder' => 'Therapist Name']) !!}
                                </div>
                                <div class="col-md-4">
                                   <button type="submit" class="btn pull-right"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        {!! Form::close() !!} -->
                    </div>
                    <div class="inbox_chat">
                        @foreach($contacts AS $contact)
                            <div class="chat_list {{ $recipient == $contact->user_id ? 'active_chat' : '' }}">
                                <div class="chat_people align-items-center d-flex hover1"> <!--h-->
                                    <div class="incoming_msg_img" >
                                        <img src="">
                                    </div>
                                    <div class="chat_ib">
                                        <div class="form-row">
                                            <label onclick="javascript:window.location.href = '{{ route('client.index', $contact->user_id) }}'" style="cursor:pointer;">
                                                {{ $contact->fullname }}
                                                &nbsp;
                                                @if(optional($threadList->get($contact->user_id))->unseen_count)
                                                    <div class="badge badge-pill badge-secondary chat_date">
                                                        {{ optional($threadList->get($contact->user_id))->unseen_count  }}
                                                    </div>
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    <div class="right_side_btn" id="show1"> <!--s-->
                                        <div class="dropdown" style="cursor:pointer;">
                                            <a data-id="{{$contact->user_id}}" id="dropdownMenu1{{$contact->user_id}}" data-toggle="dropdown"
                                                  aria-expanded="false" >
                                                <i class="fas fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1{{$contact->user_id}}">
                                                <li>
                                                    <a data-toggle="modal" data-target="#view-modal-{{$contact->user_id}}">
                                                        <button type="submit" style="cursor:pointer; border: none; background-color: white;">
                                                        Delete thread
                                                        </button>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL -->
                                <div class="modal fade" id="view-modal-{{$contact->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Just a reminder...</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <div class="modal-body" id="modalView">
                                        
                                        <br>
                                        
                                        <div class="col-sm-12">
                                            <center>This thread will only be removed/deleted once your appointment with <b>{{ $contact->fname }}</b> is finished.</center><br>
                                            <center>
                                                <button data-dismiss="modal" class="btn btn-default">Okay</button>
                                            </center>
                                        </div>                    
                                    </div>
                                </div>
                            <!-- MODAL -->
                        @endforeach
                    </div>
                </div>

                <div class="mesgs bg-white h-100">
                    @if($recipient)
                        <div class="msg_history" id="message-history">
                            @foreach($thread as $message)
                                @if($message->sent_from == Auth::id())
                                    <div class="outgoing_msg" >
                                        <!-- @if($message->sent_to == Auth::id())
                                            <div class="incoming_msg_img">
                                                <img src="{{ asset('storage/{$therapist->image}') }}">
                                            </div>
                                        @endif -->
                                        <div class="sent_msg" >
                                            <div class="sent_withd_msg hover2"><!--h-->
                                                <h1>
                                                    {{ Auth::user()->client->fullname }}&nbsp;
                                                </h1>   
                                                    <div class="right_side_btn">
                                                        <div class="dropdown" style="cursor:pointer;">
                                                            <a data-id="{{ $contact['id'] }}"
                                                              id="dropdownMenu{{ $contact['id'] }}" data-toggle="dropdown"
                                                              aria-expanded="false" ><i id="" class="fas fa-bars fa-sm">&nbsp;</i>
                                                            </a><!--s-->

                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $contact['id'] }}">
                                                                <li>
                                                                    @if($message->status == 0)
                                                                        {!! Form::open(['url' => route('client.remove.reply', $message->id), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure you want to remove this reply? Therapist will notice this.")']) !!}
                                                                            <button type="submit" style="cursor:pointer; border: none; background-color: white;" center>Remove Reply
                                                                            </button>
                                                                    {!! Form::close() !!}

                                                                    @else
                                                                        {!! Form::open(['url' => route('client.delete.reply', $message->id), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure you want to delete? Therapist will notice this.")']) !!}
                                                                        <button type="submit" style="cursor:pointer; border: none; background-color: white;" center>Delete Reply
                                                                        </button>
                                                                    {!! Form::close() !!}
                                                                    @endif
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                
                                                <br>

                                                @if(!empty($message))
                                                    @if($message->status == 1)
                                                        <p>This message was removed</p>
                                                    @else
                                                    <p >{{ $message->message  }}</p>
                                                    @endif
                                                    <span id="show2" class="time_date_right"><!--s-->
                                                        {{ $message->created_at->diffForHumans(Carbon\Carbon::now()) }}
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="incoming_msg" ><!--1 FOR PICTURE-->
                                        <!-- @if($message->sent_to == Auth::id())
                                            <div class="incoming_msg_img">
                                                <img src="{{ asset('storage/{$therapist->image}') }}">
                                            </div>
                                        @endif -->
                                        <div class="received_msg">
                                            <div class="received_withd_msg hover3" ><!--h-->
                                                <h1>
                                                    {{ $contact->fullname }}&nbsp;
                                                </h1>
                                                    <div class="left_side_btn" >
                                                        <div class="dropdown" style="cursor:pointer;">
                                                            <a data-id="{{ $contact['id'] }}"
                                                              id="dropdownMenu{{ $contact['id'] }}" data-toggle="dropdown"
                                                              aria-expanded="false" ><i id="" class="fas fa-bars fa-sm">&nbsp;</i>
                                                            </a><!--s-->

                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{ $contact['id'] }}">
                                                                <li>
                                                                    @if($message->status == 0)
                                                                        {!! Form::open(['url' => route('client.remove.reply', $message->id), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure you want to remove this reply? Therapist will notice this.")']) !!}
                                                                            <button type="submit" style="cursor:pointer; border: none; background-color: white;" center>Remove Reply
                                                                            </button>
                                                                    {!! Form::close() !!}

                                                                    @else
                                                                        {!! Form::open(['url' => route('client.delete.reply', $message->id), 'method' => 'delete', 'onsubmit' => 'javascript:return confirm("Are you sure you want to delete? Therapist will notice this.")']) !!}
                                                                        <button type="submit" style="cursor:pointer; border: none; background-color: white;" center>Delete Reply
                                                                        </button>
                                                                    {!! Form::close() !!}
                                                                    @endif
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                <br>
                                                
                                                @if(!empty($message))
                                                    @if($message->status == 1)
                                                        <p>This message was removed</p>
                                                    @else
                                                    <p >{{ $message->message  }}</p>
                                                    @endif
                                                    <span id="show3" class="time_date_left"><!--s-->
                                                        {{ $message->created_at->diffForHumans(Carbon\Carbon::now()) }}
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="type_msg">
                            {!! Form::open(['url' => route('client.send', $recipient), 'method' => 'post']) !!}
                            <div class="input_msg_write">
                                {!! Form::inputGroup('text', null, 'message', null, ['placeholder' => 'Type a message...']) !!}

                                <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane"></i></button>

                            </div>
                            {!! Form::close() !!}
                        </div>
                    @else
                        <p class="text-info text-center">Choose a recipient from the left</p>
                    @endif
                </div>


            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script type="text/javascript">

      $(document).ready(function(){

        var objDiv = document.getElementById("message-history");
        if(objDiv){
          objDiv.scrollTop = objDiv.scrollHeight;
        }

        $('.submit').click(function (e){
          e.preventDefault();
          var $this = $(this)
          $this.closest('form').attr('action', $(this).data('url'));
          $this.closest('form').submit();
        })
        // $('.update-appointment').submit(function(e) {
        //     e.preventDefault();
        //     console.log(e);
        // })
      })
    </script>
@endpush