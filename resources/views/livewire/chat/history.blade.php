<!-- Chat History -->
<div class="col app-chat-history bg-body">
    <x-alert />
    <div class="chat-history-wrapper">
        <div class="chat-history-header border-bottom">
            @if (isset(session('cat_with')['emp_photo_file']))
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex overflow-hidden align-items-center">
                    <i class="ti ti-menu-2 ti-sm cursor-pointer d-lg-none d-block me-2" data-bs-toggle="sidebar"
                        data-overlay data-target="#app-chat-contacts"></i>
                    <div class="flex-shrink-0 avatar">
                        <img src="{{ asset(session('cat_with')['emp_photo_file']) }}" alt="Avatar" class="rounded-circle"
                            data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-right" />
                        </div>
                    <div class="chat-contact-info flex-grow-1 ms-2">
                        <h6 class="m-0">{{ session('cat_with')['name'] }}</h6>
                        <small class="user-status text-muted">{{ session('cat_with')->title->job_ar }}</small>
                    </div>
                </div>

            </div>
            @endif
        </div>
        <div class="chat-history-body bg-body">
            <ul class="list-unstyled chat-history">

                @if ($messages !==[])
                @foreach ( $messages as $message )
                @if ($message->from_user_id==Auth::user()->id)
                {{--  //me  --}}
                <li class="chat-message chat-message-right">
                    <div class="d-flex overflow-hidden">
                        <div class="chat-message-wrapper flex-grow-1">
                            <div class="chat-message-text">
                                <p class="mb-0">{{ $message->message  }}</p>
                            </div>
                            <div class="text-end text-muted mt-1">
                                <i class="ti ti-checks ti-xs me-1 text-success"></i>
                                <small>{{ $message->created_at  }}</small>
                            </div>
                        </div>
                        <div class="user-avatar flex-shrink-0 ms-3">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset(Auth::user()->emp_photo_file) }}" alt="Avatar" class="rounded-circle" />
                            </div>
                        </div>
                    </div>
                </li>
                @else
                {{--  //contact  --}}
                <li class="chat-message">
                    <div class="d-flex overflow-hidden">
                        <div class="user-avatar flex-shrink-0 me-3">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset(session('cat_with')['emp_photo_file']) }}" alt="Avatar" class="rounded-circle" />
                            </div>
                        </div>
                        <div class="chat-message-wrapper flex-grow-1">
                            <div class="chat-message-text">
                                <p class="mb-0">{{ $message->message  }}</p>
                            </div>
                            <div class="text-muted mt-1">
                                <small>{{ $message->created_at  }}</small>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
                @endif

            </ul>
        </div>
        <!-- Chat message form -->
        <div class="chat-history-footer shadow-sm">
            @livewire('chat.send-message')
        </div>
    </div>
</div>
<!-- /Chat History -->





