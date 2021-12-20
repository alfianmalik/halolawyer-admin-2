@extends('layout.backend.app')

@section('content')
<div class="shadow mb-4">
    <div class="py-3 p-2">
        <h6 class="m-0 font-weight-bold text-primary">Chat</h6>
    </div>
    <div class="">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user_first_name }} {{ $order->user_last_name }}</td>
                            <td>{{ $order->user_email }}</td>
                            <td>{{ $order->user_phone }}</td>
                            <td>{{ $order->lawyer_schedule }}</td>
                            <th>
                                <button class="btn btn-primary btn-sm">
                                    {{ $order->is_waiting?"Proses":($order->is_finished?"Live Chat":"Pending") }}
                                </a>
                            </th>
                            <th>
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <a href="{{ route("chat.show", $order->order_uuid) }}" class="btn btn-primary {{ $order->is_waiting?"Proses":($order->is_finished?"Live Chat":"disabled") }}">
                                    Live Chat
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