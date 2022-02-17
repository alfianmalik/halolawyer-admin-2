@extends('layout.backend.app')

@section('content')
<div class="bg-white mb-4">
    <div class="py-3 p-2 row">
        <div class="col-md-6">
          <h5 class="m-0 font-weight-bold text-dark ml-2">Tentang Kami</h5>
        </div>
    </div>
    <div style="border-top: 1px solid #eee;" class="container">
        <form action="{{ route("admin.footer.update", ["id" => $footer->id]) }}" method="post">
            @csrf
            <input type="hidden" name="footer_type" value="aboutus">
            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="form-group">
                        <h6 for="title" class="text-dark font-weight-bolder">Judul</h6>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $footer->title }}" placeholder="">
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="form-group">
                        <h6 for="contents" class="text-dark font-weight-bolder">Konten</h6>
                        <textarea name="contents" id="" cols="30" rows="10" class="summernote">{{ $footer->contents }}</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
  
@stop