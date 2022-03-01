<div class="container">
    <div class="row pt-5">
        <div class="col-md-8 offset-md-1">
            <h5 class="text-black font-weight-bold">Identitas Mitra</h5>

            <div class="form-group row mt-5">
                <label for="name" class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-9">
                    <upload-profile></upload-profile>
                </div>
            </div>

            <div class="form-group row mt-5">
                <label for="name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" aria-describedby="basic-addon3" name="name" placeholder="Nama Lengkap">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" class="form-control" name="email" aria-describedby="basic-addon3" placeholder="Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label">No Hp</label>
                <div class="col-sm-9">
                    <input type="text" id="phone" class="form-control" name="phone" aria-describedby="basic-addon3" placeholder="No Handphone">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9 mt-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" checked>
                        <label class="custom-control-label" for="male">Pria</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="female">Wanita</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="place_of_birth" class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="place_of_birth" aria-describedby="basic-addon3" name="place_of_birth" placeholder="Tempat Lahir">
                </div>
            </div>

            <div class="form-group row">
                <label for="dob" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" id="dob" class="form-control" name="dob" aria-describedby="basic-addon3" placeholder="Tanggal Lahir">
                </div>
            </div>
            <hr>

            <div class="form-group row">
                <label for="bank_name" class="col-sm-3 col-form-label">Nama Bank</label>
                <div class="col-sm-9">
                    <input type="text" id="bank_name" class="form-control" name="bank_name" aria-describedby="basic-addon3" placeholder="Nama Bank">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_rek" class="col-sm-3 col-form-label">No Rekening</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="no_rek" aria-describedby="basic-addon3" name="no_rek" placeholder="No Rekening">
                </div>
            </div>

            <div class="form-group row">
                <label for="recipient_name" class="col-sm-3 col-form-label">Nama Penerima</label>
                <div class="col-sm-9">
                    <input type="text" id="recipient_name" class="form-control" name="recipient_name" aria-describedby="basic-addon3" placeholder="Nama Penerima">
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