@extends('layout.backend.app',[
    'title' => 'Manage User'
])

@section('content')
<div class="bg-white mb-4">
  <div class="py-3 p-2 row">
      <div class="col-md-6">
        <h5 class="m-0 font-weight-bold text-dark ml-2">Produk Layanan Mitra</h5>
      </div>
      <div class="col-md-6">
        <button type="button" name="" id="" class="btn btn-primary btn-sm float-right mt-1">Add New</button>
      </div>
  </div>
  <div style="border-top: 1px solid #eee;">
      <div class="row">
          <div class="col-md-6 mt-3">
              <div class="form-group has-search ml-3">
                <form action="{{ route("user") }}" method="get">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" name="q" class="form-control" placeholder="Cari Kategori">
                </form>
              </div>
          </div>
      </div>
      <div class="table-responsive">
          <table class="table" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th><input type="checkbox" class="" name="" id="" value="checkedValue"></th>
                      <th>No</th>
                      <th>Kategori Layanan</th>
                      <th>Durasi</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th><input type="checkbox" class="" name="" id="" value="checkedValue"></th>
                      <th>No</th>
                      <th>Kategori Layanan</th>
                      <th>Durasi</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                  </tr>
              </tfoot>
              <tbody>
                  @foreach ($services as $service)
                      <tr>
                          <td>
                            <input type="checkbox" class="" name="" id="" value="checkedValue">
                          </td>
                          <td>{{ $service->id }}</td>
                          <td>{{ $service->service->service_name }}</td>
                          <td>@if ($service->time ){{ $service->time }} Menit @else - @endif</td>
                          <td>Rp. {{ number_format($service->price, 0, ".", "."); }}</td>
                          <td>{{ $service->status }}</td>
                          <th>
                              <a class="text-reset" href="{{ route("product.mitra.edit", $service->id) }}">
                                <i class="fa fa-pencil-alt mr-2"></i>
                              </a>

                              <!-- Button trigger modal -->
                              <i class="fa fa-eye cursor-pointer" data-toggle="modal" data-target="#modelService{{ $service->id }}"></i>

                              <!-- Modal -->
                              <div class="modal fade" id="modelService{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title">Detail Produk Layanan Mitra</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                          </div>
                                          <div class="modal-body row">
                                            <div class="col-md-12">
                                              <div class="my-2">
                                                  <div>Nama Kategori Layanan</div>
                                                  <div class="text-reset font-weight-normal">{{ $service->service->service_name }}</div>
                                              </div>

                                              <div class="my-2">
                                                  <div>Benefit Layanan</div>
                                                  <div class="font-weight-normal">{{ $service->benefit }}</div>
                                              </div>

                                              <div class="my-2">
                                                  <div>Deskripsi Layanan</div>
                                                  <div class="font-weight-normal">{{ $service->description }}</div>
                                              </div>

                                              <div class="my-2">
                                                <div>Durasi</div>
                                                <div class="font-weight-normal">{{ $service->time }}</div>
                                              </div>

                                              <div class="my-2">
                                                <div>Harga</div>
                                                <div class="font-weight-normal">{{ $service->price }}</div>
                                              </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="my-2">
                                                    <div>Share HaloLawyer</div>
                                                    <div class="text-reset font-weight-normal">{{ $service->share }}</div>
                                                </div>

                                                <div class="my-2">
                                                    <div>Tampilkan Profil Mitra</div>
                                                    <div class="font-weight-normal">{{ $service->is_open_profile }}</div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="my-2">
                                                    <div>Komisi dari Mitra</div>
                                                    <div class="text-reset font-weight-normal">{{ $service->commission }}</div>
                                                </div>

                                                <div class="my-2">
                                                    <div>Status</div>
                                                    <div class="font-weight-normal">{{ $service->is_active }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center text-center">
                                            <button type="button" class="btn btn-primary px-5" data-dismiss="modal">Ok</button>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </th>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          <div>{{ $services->links('vendor.pagination.custom') }}</div>
      </div>
  </div>
</div>

@stop
