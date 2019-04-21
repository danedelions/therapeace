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
                        <div class="recent_heading">
                            <h4><a href="/" ><i class="far fa-arrow-alt-circle-left"></i>&nbsp;Back</a></h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <input type="text" class="search-bar" placeholder="Search">
                                <span class="input-group-addon">
                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="inbox_chat">
                        @foreach($contacts AS $contact)
                            <div class="chat_list {{ $recipient == $contact->user_id ? 'active_chat' : '' }}"
                                 style="cursor:pointer;"
                                 onclick="javascript:window.location.href = '{{ route('messaging.index', $contact->user_id) }}'">
                                <div class="chat_people align-items-center d-flex">
                                    <div class="chat_img text-info">
                                        <i class="fa fa-user-circle fa-2x"></i>
                                    </div>
                                    <div class="chat_ib">
                                        <h5 class="">{{ $contact->fullname }}
                                            @if(optional($threadList->get($contact->user_id))->unseen_count)
                                                <span class="badge badge-pill badge-secondary chat_date">{{ optional($threadList->get($contact->user_id))->unseen_count  }}</span>
                                            @endif
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mesgs bg-white h-100">
                    @if($recipient)
                    <div class="msg_history" id="message-history">
                        @foreach($thread as $message)
                            @if($message->sent_from == Auth::id())
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>{{ $message->message  }}</p>
                                        <span class="time_date">{{ $message->created_at->diffForHumans(Carbon\Carbon::now())  }}</span>
                                    </div>
                                </div>
                            @else
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"> <i class="fa fa-user-circle fa-2x"></i></div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>{{ $message->message  }}</p>
                                            <span class="time_date">{{ $message->created_at->diffForHumans(Carbon\Carbon::now()) }}</span></div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="type_msg">
                        {!! Form::open(['url' => route('messaging.send', $recipient), 'method' => 'post']) !!}
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