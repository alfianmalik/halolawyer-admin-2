<div class="container">
    <div class="row pt-5">
        <div class="col-md-8 offset-md-1">
            <h5 class="text-black font-weight-bold">Identitas Mitra</h5>

            <div class="form-group row mt-5">
                <label for="name" class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-9">
                    <upload-profile url="{{ $lawyer->profile_picture }}"></upload-profile>
                </div>
            </div>

            <div class="form-group row mt-5">
                <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" aria-describedby="basic-addon3" value="{{ $lawyer->first_name }} {{ $lawyer->last_name }}" name="name" placeholder="Nama Lengkap" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" class="form-control" name="email" aria-describedby="basic-addon3" placeholder="Email" required value="{{ $lawyer->email }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">No Hp</label>
                <div class="col-sm-9">
                    <input type="text" id="phone" class="form-control" name="phone" aria-describedby="basic-addon3" placeholder="No Handphone" required value="{{ $lawyer->phone }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9 mt-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" checked value="male">
                        <label class="custom-control-label" for="male">Pria</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="female">
                        <label class="custom-control-label" for="female">Wanita</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="place_of_birth" class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="place_of_birth" aria-describedby="basic-addon3" name="place_of_birth" placeholder="Tempat Lahir" value="{{ $lawyer->bod_place }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="dob" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" id="dob" class="form-control" name="dob" aria-describedby="basic-addon3" placeholder="Tanggal Lahir" value="{{ $lawyer->bod }}">
                </div>
            </div>
            <hr>

            <div class="form-group row">
                <label for="bank_name" class="col-sm-3 col-form-label">Nama Bank</label>
                <div class="col-sm-9">
                    <input type="text" id="bank_name" class="form-control" name="bank_name" aria-describedby="basic-addon3" placeholder="Nama Bank" value="{{ $lawyer->account_number?$lawyer->account_number->bank_name:"" }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_rek" class="col-sm-3 col-form-label">No Rekening</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="no_rek" aria-describedby="basic-addon3" name="no_rekening" placeholder="No Rekening" value="{{ $lawyer->account_number?$lawyer->account_number->no_rekening:"" }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="nama_penerima" class="col-sm-3 col-form-label">Nama Penerima</label>
                <div class="col-sm-9">
                    <input type="text" id="nama_penerima" class="form-control" name="nama_penerima" aria-describedby="basic-addon3" placeholder="Nama Penerima" value="{{ $lawyer->account_number?$lawyer->account_number->nama_penerima:"" }}">
                </div>
            </div>

            <hr class="mt-5">
            <div class="form-group row mt-5">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <generate-password></generate-password>
                </div>
            </div>
            <hr class="mt-5">
            <div class="justify-content-end row">
                <a class="btn btn-primary" data-toggle="tab" href="#b" role="tab" aria-controls="home" aria-selected="true">Next</a>
            </div>
        </div>
    </div>
</div>