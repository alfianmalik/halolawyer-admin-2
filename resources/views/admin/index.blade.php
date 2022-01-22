@extends('layout.backend.app',[
    'title' => 'Dashboard',
])
@section('content')
<div class="bg-white mb-4">
    <div class="py-3 p-2 ">
        <h5 class="m-0 font-weight-bold text-dark ml-2">Dashboard</h5>
    </div>
    <div style="border-top: 1px solid #eee;">
        <div class="row col-md-5 mt-3">
            <div class="form-group has-search ml-3">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Cari Nama Customer atau Mitra">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No Invoice</th>
                        <th>Nama Customer</th>
                        <th>Nama Mitra</th>
                        <th>Waktu Konsultasi</th>
                        <th>Kategori Layanan</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No Invoice</th>
                        <th>Nama Customer</th>
                        <th>Nama Mitra</th>
                        <th>Waktu Konsultasi</th>
                        <th>Kategori Layanan</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->no_invoice }}</td>
                            <td>{{ $order->user_first_name }} {{ $order->user_last_name }}</td>
                            <td>{{ $order->user_first_name }} {{ $order->user_last_name }}</td>
                            <td>{{ $order->lawyer_schedule }}</td>
                            <td>{{ $order->services }}</td>
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

@push('js')

    <!-- Page level plugins -->
    <script src="{{ asset('template/backend/sb-admin-2') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/chart-pie-demo.js"></script>
@endpush