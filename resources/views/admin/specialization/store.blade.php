@extends('layout.backend.app')

@section('content')
<div class="bg-white mb-4 col-md-6">
    <div class="py-3 p-2 row">
        <div class="col-md-6">
          <h5 class="m-0 font-weight-bold text-dark ml-2">Tambah Spesialisasi</h5>
        </div>
    </div>
    <div class="">
        <form action="{{ route("specialization.store") }}" method="post" class="">
            @csrf
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <h6 for="title" class="text-dark font-weight-bolder">Spesialisasi</h6>
                    <input type="text" class="form-control" name="name" id="title" value="" placeholder="">
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <store-spesialisasi></store-spesialisasi>
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