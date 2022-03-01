@extends('layout.backend.app',[
    'title' => 'Manage Lawyer'
])

@section('content')
<h5 class="text-black my-4 font-weight-bold">Add New User Mitra Hukum</h5>
<div class="mb-4">
    <ul class="nav nav-tabs" id="nav-tab">
        <li class="nav-item active">
            <a class="nav-link " data-toggle="tab" href="#a" id="a-tab" role="tab" aria-controls="a" aria-selected="true">
                <span class="badge badge-primary p-2">1</span>
                Identitas Mitra
            </a>
        </li>
        <li class="nav-item" >
            <a class="nav-link" data-toggle="tab" href="#b" id="b-tab" role="tab" aria-controls="b" aria-selected="false">
                <span class="badge badge-primary p-2 ">2</span>
                Profesi
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#c" role="tab" aria-controls="c" aria-selected="false">
                <span class="badge badge-primary p-2 ">3</span>
                Pemilihan Wilayah Kerja
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="tab" href="#d" role="tab" aria-controls="d" aria-selected="false">
                <span class="badge badge-primary p-2 ">4</span>
                Pendidikan &
                Spesialisasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#e" role="tab" aria-controls="e" aria-selected="false">
                <span class="badge badge-primary p-2 ">5</span>
                Pengalaman
                Perkara</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#f" role="tab" aria-controls="f" aria-selected="false">
                <span class="badge badge-primary p-2 ">6</span>
                Layanan Mitra</a>
        </li>
    </ul>
    <form action="{{ route("lawyers.new.post") }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="tab-content bg-white" id="nav-tabContent">
            <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="home-tab">
                @include('admin.lawyer.store.identity')
            </div>
            <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="profile-tab">
                @include('admin.lawyer.store.profession')
            </div>
            <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="contact-tab">
                @include('admin.lawyer.store.workarea')
            </div>
            <div class="tab-pane fade " id="d" role="tabpanel" aria-labelledby="home-tab">
                @include('admin.lawyer.store.specialization')
            </div>
            <div class="tab-pane fade" id="e" role="tabpanel" aria-labelledby="profile-tab">
                @include('admin.lawyer.store.case_experience')
            </div>
            <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="contact-tab">
                @include('admin.lawyer.store.layanan')
            </div> 
        </div>
    </form>
</div>
@stop