<ul class="navbar-nav bg-white sidebar shadow-sm rounded sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset("images/halolawyer.png") }}" alt="">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mt-3">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user"
            aria-expanded="true" aria-controls="user">
            <i class="fas fa-users"></i>
            <span>Manajemen User</span>
        </a>
        <div id="user" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user') }}">
                    <span>Customer</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Mitra</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('casecategory.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Kasus</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product"
            aria-expanded="true" aria-controls="product">
            <i class="fas fa-users"></i>
            <span>Produk</span>
        </a>
        <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user') }}">
                    <span>Layanan Mitra</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Layanan Dokumen</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Artikel & E Journal</span>
                </a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('chat') }}">
            <i class="fa fa-comments"></i>
            <span>Chat</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Marketing</span>
        </a>
    </li>
    

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Sales</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Monitoring</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
            aria-expanded="true" aria-controls="setting">
            <i class="fas fa-users"></i>
            <span>Setting</span>
        </a>
        <div id="setting" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user') }}">
                    <span>Notifikasi</span>
                </a>
                <a class="collapse-item" href="{{ route('aboutus') }}">
                    <span>Tentang Kami</span>
                </a>
                <a class="collapse-item" href="{{ route('faq') }}">
                    <span>FAQ</span>
                </a>
                <a class="collapse-item" href="{{ route('contactus') }}">
                    <span>Hubungi Kami</span>
                </a>
                <a class="collapse-item" href="{{ route('useragreement') }}">
                    <span>Syarat & Ketentuan</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Syarat & Ketentuan Mitra</span>
                </a>
                <a class="collapse-item" href="{{ route('privacy') }}">
                    <span>Kebijakan Privasi</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Gabung HaloLawyer</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Ingin Bekerja Sama?</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Kontributar HaloLawyer</span>
                </a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Admin Account</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user') }}">
                    <span>Semua User</span>
                </a>
                <a class="collapse-item" href="{{ route('profile') }}">
                    <span>Profile Saya</span>
                </a>
                <a class="collapse-item" href="{{ route('lawyers') }}">
                    <span>Add New Admin</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>