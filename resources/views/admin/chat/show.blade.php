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
                        <button class="btn btn-danger  float-right" data-target="#endChat" data-toggle="modal">End Chat</button>

                        <!-- Modal -->
                        <div class="modal fade" id="endChat" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Menyelesaikan Chat</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                Apakah anda ingin menyelesaikan CHAT ini?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route("selesai.konsultasi.chat", ['uuid' => $order->order_uuid]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">End Chat</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    Waktu Tersisa
                    <vac :start-time="{{ $startTime }}" :end-time="{{ $endTime }}" :auto-start="false" ref="start">
                        <span
                          slot="process"
                          slot-scope="{ timeObj }">
                            @{{ timeObj.m }}:@{{ timeObj.s }}
                          </span>
                      </vac>
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
                                    @if(!$order->is_finished)
                                        <chat-form
                                                :conversation="{{ $conversationId }}"
                                                :user="{{ auth()->user() }}"
                                                :participants = "{{ $participants }}"
                                                @emitToParent="messageToChat($event)"
                                        ></chat-form>
                                    @endif
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

@push('css')
<script>
    var conversation = {!! isset($conversation) ? json_encode($conversation) : '' !!};
    var participants = {!! isset($participants) ? json_encode($participants) : '' !!};
</script>
@endpush