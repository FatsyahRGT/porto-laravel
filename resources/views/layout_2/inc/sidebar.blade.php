<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    {{-- @php
        if (Auth::user()->id_level == 1) {
            $dashboard = url('admin/dashboard');
            $profile = url('admin/profiles');
            $pengalaman = url('admin/experiences');
            $pendidikan = url('admin/educations');
            $keahlian = url('admin/skills');
            $hoby = url('admin/interests');
            $penghargaan = url('admin/awards');
        }elseif (Auth::user()->id_level == 2) {
            $dashboard = url('user/dashboard');
        }
    @endphp --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Compro </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Website
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-book"></i>
            <span>Master Website</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Website:</h6>
                <a class="collapse-item" href="{{ url('profile') }}">Profil</a>
                <a class="collapse-item" href="{{ url('pengalaman') }}">Pengalaman</a>
                <a class="collapse-item" href="{{ url('pendidikan') }}">Pendidikan</a>
                <a class="collapse-item" href="{{ url('keahlian') }}">Keahlian</a>
                <a class="collapse-item" href="{{ url('bprog') }}">Bahasa Pemrograman</a>
                <a class="collapse-item" href="{{ url('project') }}">Projek</a>
                <a class="collapse-item" href="{{ url('contact') }}">Kontak</a>
                <a class="collapse-item" href="{{ url('porto') }}">Portofolio</a>
                {{-- @if (Auth::user()->id_level === 1)
                <a class="collapse-item" href="{{ $profile }}">Profil</a>
                <a class="collapse-item" href="{{ $pengalaman }}">Pengalaman</a>
                <a class="collapse-item" href="{{ $pendidikan }}">Pendidikan</a>
                <a class="collapse-item" href="{{ $keahlian }}">Keahlian</a>
                <a class="collapse-item" href="{{ $hoby }}">Hobi</a>
                <a class="collapse-item" href="{{ $penghargaan }}">Penghargaan</a>

                @elseif (Auth::user()->id_level === 2)
                <a class="collapse-item" href="">Profil</a>
                <a class="collapse-item" href="">Pengalaman</a>
                <a class="collapse-item" href="#">Pendidikan</a>
                <a class="collapse-item" href="#">Keahlian</a>
                <a class="collapse-item" href="#">Hobi</a>
                <a class="collapse-item" href="#">Penghargaan</a>
                @endif --}}
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
