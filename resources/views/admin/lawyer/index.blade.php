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
                      <th></th>
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
                    <th></th>
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
                          <td></td>
                          <td>{{ $user->id }}</td>
                          
                          <td></td>
                          <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td></td>
                          <th>
                              <i class="fa fa-eye"></i>
                              
                              <i class="fa fa-pencil">&nbsp;</i>
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