@extends('layout.backend.app',[
    'title' => 'Manage User'
])

@section('content')
<div class="bg-white mb-4">
  <div class="py-3 p-2 row">
      <div class="col-md-6">
        <h5 class="m-0 font-weight-bold text-dark ml-2">Customer</h5>
      </div>
      <div class="col-md-6">
        <button type="button" name="" id="" class="btn btn-outline-primary btn-sm float-right mt-1  ml-2"> <i class="fa fa-file-export"></i> Export</button>
        <a href="{{ route("user.new") }}" name="" id="" class="btn btn-primary btn-sm float-right mt-1">Add New</a>
      </div>
  </div>
  <div style="border-top: 1px solid #eee;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <div class="row">
          <div class="col-md-6 mt-3">
              <div class="form-group has-search ml-3">
                <form action="{{ route("user") }}" method="get">
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
                      <th><input type="checkbox" class="" name="" id="" value="checkedValue"></th>
                      <th>No</th>
                      <th>Nama Customer</th>
                      <th>Email</th>
                      <th>Tanggal Registrasi</th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th><input type="checkbox" class="" name="" id="" value="checkedValue"></th>
                      <th>No</th>
                      <th>Nama Customer</th>
                      <th>Email</th>
                      <th>Tanggal Registrasi</th>
                      <th>Tindakan</th>
                  </tr>
              </tfoot>
              <tbody>
                  @foreach ($users as $user)
                      <tr>
                          <td>
                            <input type="checkbox" class="" name="" id="" value="checkedValue">
                          </td>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->created_at }}</td>
                          <th>
                              <a class="text-reset" href="{{ route("user.edit", ['uuid' => $user->uuid]) }}">
                                <i class="fa fa-pencil-alt mr-2"></i>
                              </a>

                              <!-- Button trigger modal -->
                              <i class="fa fa-eye cursor-pointer" data-toggle="modal" data-target="#modelUser{{ $user->id }}"></i>

                              <!-- Modal -->
                              <div class="modal fade" id="modelUser{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title font-weight-bold">Detail User Customer</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                          </div>
                                          <div class="modal-body row">
                                              <div class="col-md-6">
                                                <div class="my-2">
                                                    <div>Name</div>
                                                    <div class="text-reset font-weight-normal">{{ $user->first_name }} {{ $user->last_name }}</div>
                                                </div>

                                                <div class="my-2">
                                                    <div>No Hp</div>
                                                    <div class="font-weight-normal">{{ $user->phone }}</div>
                                                </div>

                                                <div class="my-2">
                                                    <div>Email</div>
                                                    <div class="font-weight-normal">{{ $user->email }}</div>
                                                </div>
                                              </div>

                                                <div class="col-md-6">
                                                    <div class="my-2">
                                                        <div>Tanggal Registrasi</div>
                                                        <div class="text-reset font-weight-normal">{{ date("d F Y", strtotime($user->created_at)) }}</div>
                                                    </div>

                                                    <div class="my-2">
                                                        <div>Jenis Kelamin</div>
                                                        <div class="font-weight-normal">{{ !$user->gender?"-":$user->gender }}</div>
                                                    </div>

                                                    <div class="my-2">
                                                        <div>Tanggal Lahir</div>
                                                        <div class="font-weight-normal">{{ $user->bod }}</div>
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
          <div>{{ $users->links('vendor.pagination.custom') }}</div>
      </div>
  </div>
</div>

@stop
