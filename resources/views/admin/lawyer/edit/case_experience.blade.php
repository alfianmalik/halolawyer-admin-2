<div class="container">
    <div class="row pt-5">
        <div class="col-md-8 offset-md-1">
            <h5 class="text-black font-weight-bold mt-5">Pengalaman Perkara</h5>
            
            <case-experience :cases="{{ $case_categories }}"></case-experience>
            <hr>
            <div class="justify-content-end row">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>