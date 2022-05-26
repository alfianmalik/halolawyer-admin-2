@extends('layout.backend.app',[
    'title' => 'Manage User'
])

@section('content')
<div class="bg-white mb-4">
  <div class="py-3 p-2 row">
      <div class="col-md-6">
        <h5 class="m-0 font-weight-bold text-dark ml-2">Produk Layanan Dokumen</h5>
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
                      <th>Kategori Layanan</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th><input type="checkbox" class="" name="" id="" value="checkedValue"></th>
                      <th>No</th>
                      <th>Layanan Dokumen</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                  </tr>
              </tfoot>
              <tbody>
                  @foreach ($documents as $document)
                      <tr>
                          <td>
                            <input type="checkbox" class="" name="" id="" value="checkedValue">
                          </td>
                          <td>{{ $document->id }}</td>
                          <td>{!! $document->title !!}</td>
                          <td>Rp. {{ number_format($document->price, 0, ".", "."); }}</td>
                          <td>{{ $document->status }}</td>
                          <th>
                              <a class="text-reset">
                                <i class="fa fa-pencil-alt mr-2"></i>
                              </a>

                              <!-- Button trigger modal -->
                              <i class="fa fa-eye cursor-pointer" data-toggle="modal" data-target="#modelDocument{{ $document->id }}"></i>

                              <!-- Modal -->
                              <div class="modal fade" id="modelDocument{{ $document->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                          </th>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          <div>{{ $documents->links('vendor.pagination.custom') }}</div>
      </div>
  </div>
</div>

@stop
