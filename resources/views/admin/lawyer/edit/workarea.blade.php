<div class="container">
    <div class="row pt-5">
        <div class="col-md-8 offset-md-1">
            <h5 class="text-black font-weight-bold">Pemilihan Wilayah Kerja</h5>
            
            <work-area :userprovince="{{ $lawyer->lawyers_workarea->first()->province }}" :usercity="{{ $lawyer->lawyers_workarea->first()->city }}"></work-area>
            <hr>
            <div class="justify-content-end row">
                <a class="btn btn-primary" data-toggle="tab" href="#d" role="tab" aria-controls="home" aria-selected="true">Next</a>
            </div>
        </div>
    </div>
</div>