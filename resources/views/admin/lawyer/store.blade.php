@extends('layout.backend.app',[
    'title' => 'Manage Lawyer'
])

@section('content')
<h5 class="text-black my-4 font-weight-bold">Add New User Mitra Hukum</h5>
<div class="mb-4">
    
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#1" role="tab" aria-controls="home" aria-selected="true">
                <span class="badge badge-primary p-2">1</span>
                Identitas Mitra
            </a>
        </li>
        <li class="nav-item" >
            <a class="nav-link" data-toggle="tab" href="#2" role="tab" aria-controls="home" aria-selected="true">
                <span class="badge badge-primary p-2 ">2</span>
                Profesi
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#3" role="tab" aria-controls="home" aria-selected="true">
                <span class="badge badge-primary p-2 ">3</span>
                Pemilihan Wilayah Kerja
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#4" role="tab" aria-controls="home" aria-selected="true">
                <span class="badge badge-primary p-2 ">4</span>
                Pendidikan &
                Spesialisasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#5" role="tab" aria-controls="home" aria-selected="true">
                <span class="badge badge-primary p-2 ">5</span>
                Pengalaman
                Perkara</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#6" role="tab" aria-controls="home" aria-selected="true">
                <span class="badge badge-primary p-2 ">6</span>
                Layanan Mitra</a>
        </li>
    </ul>
    <div class="tab-content bg-white" id="myTabContent">
        <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="contact-tab">...</div>
        <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="5" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="6" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
</div>
@stop