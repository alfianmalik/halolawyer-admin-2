<div class="container">
    <div class="row pt-5">
        <div class="col-md-8 offset-md-1">
            <h5 class="text-black font-weight-bold">Detail Kantor & Profesi Mitra Hukum</h5>

            <div class="form-group row mt-5">
                <label for="office_name" class="col-sm-4 col-form-label">Nama Kantor</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="office_name" aria-describedby="basic-addon3" name="office_name" placeholder="Nama Kantor">
                </div>
            </div>

            <div class="form-group row">
                <label for="province" class="col-sm-4 col-form-label">Provinsi</label>
                <div class="col-sm-8">
                    <input type="text" id="province" class="form-control" name="province" aria-describedby="basic-addon3" placeholder="Provinsi">
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                <div class="col-sm-8">
                    <input type="text" id="city" class="form-control" name="city" aria-describedby="basic-addon3" placeholder="Kabupaten / Kota">
                </div>
            </div>

            <div class="form-group row">
                <label for="postal_code" class="col-sm-4 col-form-label">Kode Pos</label>
                <div class="col-sm-8">
                    <input type="text" id="postal_code" class="form-control" name="postal_code" aria-describedby="basic-addon3" placeholder="Kode Pos">
                </div>
            </div>

            <div class="form-group row">
                <label for="alanat" class="col-sm-4 col-form-label">Detail Alamat</label>
                <div class="col-sm-8">                  
                    <textarea class="form-control" name="alamat" id="alanat" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="office_email" class="col-sm-4 col-form-label">Email Kantor</label>
                <div class="col-sm-8">
                    <input type="email" id="office_email" class="form-control" name="office_email" aria-describedby="basic-addon3" placeholder="Email Kantor">
                </div>
            </div>

            <div class="form-group row">
                <label for="office_phone" class="col-sm-4 col-form-label">No Telepon Kantor</label>
                <div class="col-sm-8">
                    <input type="text" id="office_phone" class="form-control" name="office_phone" aria-describedby="basic-addon3" placeholder="No Telepon Kantor">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_izin_advokat" class="col-sm-4 col-form-label">No Izin Advokat / Kartu Anggota</label>
                <div class="col-sm-8">
                    <input type="text" id="no_izin_advokat" class="form-control" name="no_izin_advokat" aria-describedby="basic-addon3" placeholder="No Izin Advokat / Kartu Anggota">
                </div>
            </div>

            <div class="form-group row">
                <label for="long_work_experience" class="col-sm-4 col-form-label">Lama Pengalaman Kerja </label>
                <div class="col-sm-8">
                    <select class="form-control" name="long_work_experience" id="long_work_experience">
                        @for ($i = 1; $i < 20 ; $i++)
                            <option value="{{ $i }}">{{ $i }} Tahun</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="advokat_year" class="col-sm-4 col-form-label">Tahun Penyumpahan Advokat</label>
                <div class="col-sm-8">
                    <input type="text" id="advokat_year" class="form-control" name="advokat_year" aria-describedby="basic-addon3" placeholder="Tahun Penyumpahan Advokat">
                </div>
            </div>

            <div class="form-group row">
                <label for="dokumen" class="col-sm-4 col-form-label">Dokumen Terkait
                    <br>
                    <div class="card" style=" ">
                        <div class="card-body p-0" style="background: rgba(244, 245, 247, 1);font-size:12px">
                            <ol class="">
                                <li>kartu anggota</li>    
                                <li>  Berita acara penyumpahan advokat</li>
                                <li> Sertifikat kursus, seminar yang pernah diikuti</li>
                                <li> Serta penghargaan yang berkaitan dengan kepengacaraan</li>
                            </ol>  
                        </div>
                    </div>
                </label>
                
                <div class="col-sm-8">
                    <upload-file></upload-file>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <label for="prabono" class="col-sm-4 col-form-label">Kasus Probono</label>
                <div class="col-sm-8">
                    <!-- Rounded switch -->
                    <label class="switch mt-2">
                        <input type="checkbox" name="probono">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="justify-content-end row">
                <a class="btn btn-primary" data-toggle="tab" href="#c" role="tab" aria-controls="home" aria-selected="true">Next</a>
            </div>
        </div>
    </div>
</div>