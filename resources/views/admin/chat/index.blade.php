@extends('layout.backend.app')

@section('content')
<div class="bg-white mb-4">
    <div class="py-3 p-2 ">
        <h4 class="m-0 font-weight-bold text-dark mt-3 mb-3 ml-2">Chat Customer</h4>
    </div>
    <div style="border-top: 1px solid #eee;">
        <div class="row col-md-5 mt-3">
            <div class="form-group has-search ml-3">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Jadwal Konsultasi</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Jadwal Konsultasi</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>
                                <div class="form-check  pl-4" style="margin-top: -17px;margin-right: -20px">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                  </label>
                                </div>
                            </td>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user_first_name }} {{ $order->user_last_name }}</td>
                            <td>{{ $order->user_email }}</td>
                            <td>{{ $order->user_phone }}</td>
                            <td>{{ $order->lawyer_schedule }}</td>
                            <th>
                                <button class="btn btn-outline-{{ $order->is_waiting?"primary":($order->is_finished?"danger":"primary") }} btn-sm" {{ $order->is_waiting?"disabled":($order->is_finished?"Live Chat":"disabled") }}>
                                    <i class="fa fa-circle" style="font-size: 6px;top: -10px" aria-hidden="true"></i> {{ $order->is_waiting?"Proses":($order->is_finished?"Live Chat":"Live Chat") }}
                                </a>
                            </th>
                            <th>
                                <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#view{{ $order->id }}">
                                    <i class="fa fa-eye"></i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="view{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">
                                                Body
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route("chat.show", $order->order_uuid) }}" class="btn btn-outline-primary btn-sm {{ $order->is_waiting?"Proses":($order->is_finished?"Live Chat":"disabled") }}">
                                    <i class="fa fa-comments"></i> Live Chat
                                </a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop