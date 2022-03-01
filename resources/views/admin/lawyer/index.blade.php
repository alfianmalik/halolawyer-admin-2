@extends('layout.backend.app',[
    'title' => 'Manage Lawyer'
])

@section('content')
<div class="bg-white mb-4">
  <div class="py-3 p-2 row">
      <div class="col-md-6">
        <h5 class="m-0 font-weight-bold text-dark ml-2">Mitra</h5>
      </div>
      <div class="col-md-6">        
        <a href="{{ route("lawyers.new") }}" class="btn btn-primary btn-sm float-right mt-1">Add New</a>
      </div>
  </div>
  <div style="border-top: 1px solid #eee;">
      <div class="row">
          <div class="col-md-6 mt-3">
              <div class="form-group has-search ml-3">
                    <form action="{{ route("lawyers") }}" method="get">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" name="q" class="form-control" placeholder="Cari Nama Customer atau Mitra">
                    </form>
              </div>
          </div>
      </div>
      <div class="table-responsive">
          <table class="table" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>
                        <input type="checkbox" class="" name="" id="" value="checkedValue">
                      </th>
                      <th>No</th>
                      <th>Photo</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Wilayah Kerja</th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>
                        <input type="checkbox" class="" name="" id="" value="checkedValue">
                    </th>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Wilayah Kerja</th>
                    <th>Tindakan</th>
                  </tr>
              </tfoot>
              <tbody>
                  @foreach ($lawyers as $user)
                      <tr>
                          <td>
                            <input type="checkbox" class="" name="" id="" value="checkedValue">
                          </td>
                          <td>{{ $user->id }}</td>
                          
                          <td></td>
                          <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td></td>
                          <th>
                            <i class="fa fa-pencil-alt mr-2"></i>
                            <!-- Button trigger modal -->
                            <i class="fa fa-eye cursor-pointer" data-toggle="modal" data-target="#modelUser{{ $user->id }}"></i>
                            <!-- Modal -->
                            <div class="modal fade" id="modelUser{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title font-weight-bold">Detail User Mitra</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-md-12">
                                                <h5 class="font-weight-bold mb-2">
                                                    Profil
                                                </h5>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Tanggal Registrasi</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ date("d F Y", strtotime($user->created_at)) }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Nama</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->first_name }} {{ $user->last_name }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">No Hp</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->phone }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Email</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->email }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Jenis Kelamin</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->gender }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Tanggal Lahir</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->dob }} {{ $user->last_name }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Status</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->is_active }}</div>
                                                </div>

                                                <hr class="my-3">

                                                <h5 class="font-weight-bold mb-2">
                                                    Bank Account
                                                </h5>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Nama Bank</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->account_number?$user->account_number->bank_name:"" }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Nomor Rekening</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->account_number?$user->account_number->no_rekening:"" }}</div>
                                                </div>

                                                <div class="my-2 row">
                                                    <div class="col-md-6">Nama Penerima</div>
                                                    <div class="col-md-6 text-reset font-weight-normal">{{ $user->account_number?$user->account_number->nama_penerima:"" }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center text-center">
                                            <button type="button" class="btn btn-primary px-5" data-dismiss="modal">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <i class="fa fa-ban ml-2"></i>
                          </th>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          <div>{{ $lawyers->links('vendor.pagination.custom') }}</div>
      </div>
  </div>
</div>
@stop