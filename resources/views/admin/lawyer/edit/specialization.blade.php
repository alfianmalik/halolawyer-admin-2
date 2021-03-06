<div class="container">
    <div class="row pt-5">
        <div class="col-md-8 offset-md-1">
            <h5 class="text-black font-weight-bold">Pendidikan Formal</h5>
            {{ $lawyer->educations }}
            <edit-pendidikan-formal :educations="{{ $lawyer->educations }}"></edit-pendidikan-formal>

            <h5 class="text-black font-weight-bold mt-5">Pendidikan Non Formal</h5>

            <pendidikan-non-formal :nonformaleducations="{{ $lawyer->lawyers_unformal_educations }}"></pendidikan-non-formal>

            <h5 class="text-black font-weight-bold mt-5">Spesialisasi</h5>
            <edit-spesialisasi :cases='{{ $case_categories }}' :specialization='{{ $specialization }}' :lawyercategory="{{ json_encode($lawyer_categories) }}" :lawyerspecializations="{{ $lawyer_specializations }}"></edit-spesialisasi>

            <hr>
            <div class="justify-content-end row">
                <a class="btn btn-primary" data-toggle="tab" href="#e" role="tab" aria-controls="home" aria-selected="true">Next</a>
            </div>
        </div>
    </div>
</div>
