@extends('layout.backend.app',[
    'title' => 'Manage User'
])

@section('content')
<div class="bg-white mb-4">
  <div class="py-3 p-2 ">
      <h5 class="m-0 font-weight-bold text-dark ml-2">Customer</h5>
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
                      <th></th>
                      <th>No</th>
                      <th>Nama Customer</th>
                      <th>Email</th>
                      <th>Tanggal Registrasi</th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th></th>
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
                          <td></td>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->created_at }}</td>
                          <th>
                              <i class="fa fa-eye"></i>
                              
                              <i class="fa fa-pencil">&nbsp;</i>
                          </th>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>

@stop