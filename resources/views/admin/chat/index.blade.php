@extends('layout.backend.app')

@section('content')
<div class="bg-white mb-4">
    <div class="py-3 p-2 ">
        <h5 class="m-0 font-weight-bold text-dark ml-2">Chat Customer</h5>
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
                            <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                            <td>{{ $order->user_email }}</td>
                            <td>{{ $order->user_phone }}</td>
                            <td>{{ $order->lawyer_schedule }}</td>
                            <th>
                                <button class="btn btn-outline-{{ $order->is_waiting?"primary":($order->is_finished?"danger":"primary") }} btn-sm" {{ $order->is_waiting && $order->is_finished == 0?"disabled":($order->is_finished?"":"disabled") }}>
                                    <i class="fa fa-circle" style="font-size: 6px;top: -10px" aria-hidden="true"></i> {{ $order->is_waiting && $order->is_finished == 0?"Proses":($order->is_finished?"Finish":"Live Chat") }}
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
                                                <h5 class="modal-title">Detail Layanan Konsultasi Chat</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body row">
                                                <div class="col-md-12">

                                                    <div class="my-2 row">
                                                        <div class="col-md-6">Nama Customer</div>
                                                        <div class="col-md-6 text-reset font-weight-normal">: {{ $order->user_first_name }} {{ $order->user_last_name }}</div>
                                                    </div>

                                                    <div class="my-2 row">
                                                        <div class="col-md-6">Email</div>
                                                        <div class="col-md-6 text-reset font-weight-normal">: {{ $order->user_email }}</div>
                                                    </div>

                                                    <div class="my-2 row">
                                                        <div class="col-md-6">No Hp</div>
                                                        <div class="col-md-6 text-reset font-weight-normal">: {{ $order->user_phone }}</div>
                                                    </div>

                                                    <div class="my-2 row">
                                                        <div class="col-md-6">Jadwal Konsultasi</div>
                                                        <div class="col-md-6 text-reset font-weight-normal">: {{ $order->lawyer_schedule }}</div>
                                                    </div>

                                                    <div class="my-2 row">
                                                        <div class="col-md-6">Status</div>
                                                        <div class="col-md-6 text-reset font-weight-normal">: </div>
                                                    </div>

                                                    <div class="my-2 row">
                                                        <div class="col-md-6">Detail Masalah</div>
                                                        <div class="col-md-6 text-reset font-weight-normal">: {{ $order->catatan }}</div>
                                                    </div>
                                                </div>
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

            <div>{{ $orders->links('vendor.pagination.custom') }}</div>
        </div>
    </div>
</div>
@stop
