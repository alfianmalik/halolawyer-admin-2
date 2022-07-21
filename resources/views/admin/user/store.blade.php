@extends('layout.backend.app')

@section('content')
<div class="bg-white mb-4 col-md-6">
    <div class="py-3 p-2 row">
        <div class="col-md-6">
          <h5 class="m-0 font-weight-bold text-dark ml-2">Tambah User</h5>
        </div>
    </div>
    <div class="">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route("user.new.store") }}" method="post" class="p-2">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <h6 for="title" class="text-dark font-weight-bolder">Nama Depan</h6>
                        <input type="text" class="form-control" name="first_name" id="title" value="" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <h6 for="title" class="text-dark font-weight-bolder">Nama Belakang</h6>
                        <input type="text" class="form-control" name="last_name" id="title" value="" placeholder="Last Name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="form-group">
                        <h6 for="title" class="text-dark font-weight-bolder">Email</h6>
                        <input type="email" class="form-control" name="email" id="title" value="" placeholder="Email">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="form-group">
                        <h6 for="title" class="text-dark font-weight-bolder">Nomor Telepon</h6>
                        <input type="text" class="form-control" name="phone" id="title" value="" placeholder="Telepon">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="form-group">
                        <h6 for="title" class="text-dark font-weight-bolder">Password Generator</h6>
                        @php
                            $pass = generateRandomString(12)
                        @endphp
                        <input type="text"  disabled class="form-control" name="password" id="title" value="{{ $pass }}" placeholder="Password">
                        <input type="hidden" name="password" id="title" value="{{ $pass }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>
  </div>

@stop
