@extends('layout.backend.app',[
    'title' => 'Manage User'
])

@section('content')
<div class="bg-white mb-4 col-md-10">
    <div class="py-3 p-2 row">
        <div class="col-md-6">
            <h5 class="m-0 font-weight-bold text-dark ml-2">Edit Customer</h5>
        </div>
    </div>
    <div style="border-top: 1px solid #eee;" class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h5 class="font-weight-bold text-black-color">
                    Profil
                </h5>
                <div>
                    Tanggal Registrasi {{ $user->created_at }}
                </div>
                <form action="{{ route("user.edit", ['uuid' => $user->uuid]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">Nama Depan</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name }}" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Nama Belakang</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $user->last_name }}" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">No Handphone</label>
                                <input type="text" class="form-control"  name="phone" id="phone" value="{{ $user->phone }}" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label> <br>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Wanita</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="dob" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

@stop
