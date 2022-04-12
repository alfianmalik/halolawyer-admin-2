<div class="container">
    <div class="row pt-5">
        <div class="col-md-8 offset-md-1">
            <h5 class="text-black font-weight-bold">Detail Kantor & Profesi Mitra Hukum</h5>

            <div class="form-group row mt-5">
                <label for="office_name" class="col-sm-4 col-form-label">Nama Kantor</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="office_name" aria-describedby="basic-addon3" name="office_name" placeholder="Nama Kantor" value="{{ $lawyer->lawyers_law_firm->law_firm_name }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="province" class="col-sm-4 col-form-label">Provinsi</label>
                <div class="col-sm-8">
                    <input type="text" id="province" class="form-control" name="province" aria-describedby="basic-addon3" placeholder="Provinsi"  value="{{ $lawyer->lawyers_law_firm->province }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                <div class="col-sm-8">
                    <input type="text" id="city" class="form-control" name="city" aria-describedby="basic-addon3" placeholder="Kabupaten / Kota"  value="{{ $lawyer->lawyers_law_firm->city }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="postal_code" class="col-sm-4 col-form-label">Kode Pos</label>
                <div class="col-sm-8">
                    <input type="text" id="postal_code" class="form-control" name="postal_code" aria-describedby="basic-addon3" placeholder="Kode Pos"  value="{{ $lawyer->lawyers_law_firm->postal_code }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="alanat" class="col-sm-4 col-form-label">Detail Alamat</label>
                <div class="col-sm-8">                  
                    <textarea class="form-control" name="alamat" id="alanat" rows="3"> {{ $lawyer->lawyers_law_firm->address }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="office_email" class="col-sm-4 col-form-label">Email Kantor</label>
                <div class="col-sm-8">
                    <input type="email" id="office_email" class="form-control" name="office_email" aria-describedby="basic-addon3" placeholder="Email Kantor"  value="{{ $lawyer->lawyers_law_firm->email_law_firm }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="office_phone" class="col-sm-4 col-form-label">No Telepon Kantor</label>
                <div class="col-sm-8">
                    <input type="text" id="office_phone" class="form-control" name="office_phone" aria-describedby="basic-addon3" placeholder="No Telepon Kantor"  value="{{ $lawyer->lawyers_law_firm->phone }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_izin_advokat" class="col-sm-4 col-form-label">No Izin Advokat / Kartu Anggota</label>
                <div class="col-sm-8">
                    <input type="text" id="no_izin_advokat" class="form-control" name="no_izin_advokat" aria-describedby="basic-addon3" placeholder="No Izin Advokat / Kartu Anggota"  value="{{ $lawyer->lawyers_law_firm->id_card_number }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="long_work_experience" class="col-sm-4 col-form-label">Lama Pengalaman Kerja </label>
                <div class="col-sm-8">
                    <select class="form-control" name="long_work_experience" id="long_work_experience">
                        @for ($i = 1; $i < 50 ; $i++)
                            <option value="{{ $i }}" {{ $lawyer->lawyers_law_firm->long_working_years==$i?"selected":""  }}>{{ $i }} Tahun</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="advokat_year" class="col-sm-4 col-form-label">Tahun Penyumpahan Advokat</label>
                <div class="col-sm-8">
                    <input type="text" id="advokat_year" class="form-control" name="advokat_year" aria-describedby="basic-addon3" placeholder="Tahun Penyumpahan Advokat" value="{{ $lawyer->lawyers_law_firm->years_of_advocate_swearing }}">
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
                    {{ $lawyer->lawyers_law_firm->lawyers_law_firm_files }}
                    <upload-file :names="{{ $lawyer->lawyers_law_firm->lawyers_law_firm_files }}"></upload-file>
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <label for="prabono" class="col-sm-4 col-form-label">Kasus Probono</label>
                <div class="col-sm-8">
                    <!-- Rounded switch -->
                    <label class="switch mt-2">
                        <input type="checkbox" name="probono" checked="{{ $lawyer->lawyers_law_firm->prabono?"checked":"" }}">
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