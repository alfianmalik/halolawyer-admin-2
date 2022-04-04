@extends('layout.backend.app')

@section('content')
<div class="bg-white mb-4 col-md-6">
    <div class="py-3 p-2 row">
        <div class="col-md-6">
          <h5 class="m-0 font-weight-bold text-dark ml-2">Tambah Kategori Kasus</h5>
        </div>
    </div>
    <div class="">
        <form action="{{ route("casecategory.store") }}" method="post" class="">
            @csrf
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <h6 for="title" class="text-dark font-weight-bolder">Kategori Kasus</h6>
                    <input type="text" class="form-control" name="name" id="title" value="" placeholder="">
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <h6 for="title" class="text-dark font-weight-bolder">Deskripsi Kategori Kasus</h6>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" ></textarea>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="form-group files">
                    <h6 for="title" class="text-dark font-weight-bolder">Upload Icon</h6>
                    <input type="file" class="form-control" name="icon">
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <!-- Rounded switch -->
                <h6 for="title" class="text-dark font-weight-bolder">Status</h6>
                <label class="switch">
                    <input type="checkbox" name="is_activated">
                    <span class="slider round"></span>
                </label>
            </div>
            
            <div class="col-md-12 mt-4">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>
  </div>
  
@stop