@extends('layout.backend.app')

@section('content')
<div class="bg-white mb-4">
    <div class="py-3 p-2 row">
        <div class="col-md-6">
          <h5 class="m-0 font-weight-bold text-dark ml-2">Tentang Kami</h5>
        </div>
    </div>
    <div style="border-top: 1px solid #eee;" class="container">
        <div class="row">
            <div class="col-md-8 mt-3">
                <div class="form-group">
                    <h6 for="first_name" class="text-dark font-weight-bolder">Judul</h6>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $footer }}" placeholder="">
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <h6 for="first_name" class="text-dark font-weight-bolder">Konten</h6>
                    <textarea name="" id="" cols="30" rows="10" class="form-control">{{ $footer }}</textarea>
                </div>
            </div>
        </div>
    </div>
  </div>
  
@stop