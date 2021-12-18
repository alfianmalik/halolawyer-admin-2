@extends('layout.backend.app')
@section('content')
<!-- Content Row -->
<div class="row">
    <div class="container mt-5">
        <div class="row">
            <div class="mb-2 col-md-8">
              <div class="card card-default">
                <div class="row p-3">
                    <div class="col-md-8">
                        <h2>Konsultasi Chat</h2>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-danger  float-right">End Chat</button>
                    </div>
                </div>
                <div class="card-header">
                    Waktu Tersisa 15:49
                </div>
                <div class="card-body">
                  <div class="">
                      <div class="row">
                          <div class="col-md-12">
                                @if($conversationId)
                                <div class="w-100 py-2">
                                    <chat-messages :conversation="{{ $conversationId }}"></chat-messages>
                                </div>
                                <div class="w-100">
                                <chat-form
                                        :conversation="{{ $conversationId }}"
                                        :user="{{ auth()->user() }}"
                                        :participants = "{{ $participants }}"
                                        @emitToParent="messageToChat($event)"
                                ></chat-form>
                                </div>
                                @endif
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="mb-2 col-md-4">
              @if($conversationId)
                <conversation-participants :conversation="{{ $conversationId }}"></conversation-participants>
              @endif
            </div>
        </div>
    </div>
</div>
@stop

@push('js')
<script>
    var conversation = {!! isset($conversation) ? json_encode($conversation) : '' !!};
    var participants = {!! isset($participants) ? json_encode($participants) : '' !!};
</script>
@endpush