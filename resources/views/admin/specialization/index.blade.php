@extends('layout.backend.app',[
    'title' => 'Manage User'
])

@section('content')
<div class="bg-white mb-4">
  <div class="py-3 p-2 row">
        <div class="col-md-12">
            <h5 class="m-0 font-weight-bold text-dark ml-2">Manajemen Kasus</h5>
        </div>
        <div class="col-md-12 row pt-3" style="border-bottom: 1px solid #eee;">
            <div class="col-md-6">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link color-primary" href="{{ route("casecategory.index") }}">Kategori Kasus</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link color-primary" href="{{ route("specialization.index") }}">Spesialisasi</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 float-right">
                <a href="{{ route("specialization.store") }}" class="btn btn-primary btn-sm float-right mt-1">Add New</a>
            </div>
        </div>
  </div>
  <div>
      <div class="row">
          <div class="col-md-6 mt-3">
              <div class="form-group has-search ml-3">
                <form action="{{ route("user") }}" method="get">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" name="q" class="form-control" placeholder="Cari Nama Spesialisasi">
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
                      <th>Specialization</th>
                      <th>Kategori Kasus</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th><input type="checkbox" class="" name="" id="" value="checkedValue"></th>
                      <th>No</th>
                      <th>Specialization</th>
                      <th>Kategori Kasus</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                  </tr>
              </tfoot>
              <tbody>
                  @foreach ($specializations as $specialization)
                      <tr>
                            <td>
                                <input type="checkbox" class="" name="" id="" value="checkedValue">
                            </td>
                            <td>{{ $specialization['external_id'] }}</td>
                            <td>{{ $specialization['name'] }}</td>
                            <td>
                                @foreach($specialization['case_category'] as $case_category)
                                    {{ category_name($case_category['case_category_id']) }},
                                @endforeach
                            </td>
                            <td> 
                                <span class="badge badge-secondary">
                                    {{ $specialization['is_activated']?"Active":"Not Active" }}
                                </span>
                            </td>
                          <th>
                              <a class="text-reset" href="{{ route("specialization.edit", ['id' => $specialization['external_id']]) }}">
                                <i class="fa fa-pencil-alt mr-2"></i>
                              </a>

                              <!-- Button trigger modal -->
                              <i class="fa fa-eye cursor-pointer" data-toggle="modal" data-target="#modelUser{{ $specialization['external_id'] }}"></i>
                                                            
                              <!-- Modal -->
                              <div class="modal fade" id="modelUser{{ $specialization['external_id'] }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title font-weight-bold">Detail Spesialisasi</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                          </div>
                                          <div class="modal-body row">
                                              <div class="col-md-12">
                                                <div class="my-2">
                                                    <div>Nama</div>
                                                    <div class="text-reset font-weight-normal">{{ $specialization['name'] }}</div>
                                                </div>

                                                <div class="my-2">
                                                    <div>Kategori Kasus</div>
                                                    <div class="font-weight-normal">
                                                        @foreach($specialization['case_category'] as $case_category)
                                                            {{ category_name($case_category['case_category_id']) }},
                                                        @endforeach
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="modal-footer justify-content-center text-center">
                                              <button type="button" class="btn btn-primary px-5" data-dismiss="modal">Ok</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <i class="fa fa-trash ml-2 cursor-pointer"  data-toggle="modal" data-target="#modelId-{{ $specialization['external_id'] }}"></i>
                              
                              <!-- Modal -->
                              <div class="modal fade" id="modelId-{{ $specialization['external_id'] }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title"></h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                          </div>
                                            <form action="{{ route("specialization.delete", ["id" => $specialization['external_id']]) }}" method="post">
                                                @csrf
                                                <div class="modal-body container">
                                                    <h3 class="col-md-12 text-center">
                                                        Hapus Spesialisasi
                                                    </h3>
                                                    <div class="form-group">
                                                        <label for="">Konfirmasi Password</label>
                                                        <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer text-center" style="margin: 0px auto">
                                                    <button type="submit" class="btn btn-danger" >Hapus</button>
                                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                      </div>
                                  </div>
                              </div>
                          </th>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          {{-- <div>{{ $specializations->links('vendor.pagination.custom') }}</div> --}}
      </div>
  </div>
</div>

@stop