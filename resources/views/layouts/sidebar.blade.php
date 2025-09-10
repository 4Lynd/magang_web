<style>
	.sidebar-menu .menu-header {
    padding: 8px 15px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    color: #6c757d; /* abu-abu */
    border-bottom: 1px solid #e0e6f5;
    margin: 10px 0 5px 0;
}

</style>


<!-- Sidebar wrapper start -->
<nav id="sidebar-wrapper" class="sidebar-wrapper">
    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">

            {{-- === ADMIN (kepala divisi, kepegawaian, sekretaris) === --}}
                <li class="menu-header">Halaman Admin</li>

                <li class="{{ request()->routeIs('dashboard') ? 'active current-page' : '' }}">
    <a href="{{ route('dashboard') }}">
        <i class="bi bi-speedometer2"></i>
        <span class="menu-text">Dashboard</span>
    </a>
</li>

<li class="{{ request()->routeIs('pengguna.*') ? 'active current-page' : '' }}">
    <a href="{{ route('pengguna.index') }}">
        <i class="bi bi-people"></i>
        <span class="menu-text">Manajemen User</span>
    </a>
</li>

<li class="{{ request()->routeIs('aktivasi.*') ? 'active current-page' : '' }}">
    <a href="{{ route('aktivasi.index') }}">
        <i class="bi bi-people"></i>
        <span class="menu-text">Aktivasi Pengguna</span>
    </a>
</li>

<li class="{{ request()->routeIs('divisi.*') ? 'active current-page' : '' }}">
    <a href="{{ route('divisi.index') }}">
        <i class="bi bi-diagram-3"></i>
        <span class="menu-text">Divisi</span>
    </a>
</li>

<li class="{{ request()->routeIs('konfirmasi_pengajuan.*') ? 'active current-page' : '' }}">
    <a href="{{ route('konfirmasi_pengajuan.index') }}">
        <i class="bi bi-journal-check"></i>
        <span class="menu-text">Konfirmasi Pengajuan</span>
    </a>
</li>

<li class="{{ request()->routeIs('dokumen.*') ? 'active current-page' : '' }}">
    <a href="">
        <i class="bi bi-file-earmark-text"></i>
        <span class="menu-text">Dokumen</span>
    </a>
</li>

<li class="{{ request()->routeIs('laporan.*') ? 'active current-page' : '' }}">
    <a href="">
        <i class="bi bi-clipboard-data"></i>
        <span class="menu-text">Laporan</span>
    </a>
</li>

            

            <!-- {{-- === PENANGGUNG JAWAB === --}}
                <li class="menu-header">Halaman Penanggung Jawab</li>

                <li class="active current-page">
                    <a href="{{ route('dashboard') }}">
                        <i class="bi bi-speedometer2"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-person-lines-fill"></i>
                        <span class="menu-text">Data Mahasiswa Magang</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-diagram-3"></i>
                        <span class="menu-text">Ketersediaan Divisi</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-patch-check"></i>
                        <span class="menu-text">Sertifikat</span>
                    </a>
                </li>
            

            {{-- === MENTOR === --}}
                <li class="menu-header">Halaman Mentor</li>

                <li class="active current-page">
                    <a href="{{ route('dashboard') }}">
                        <i class="bi bi-speedometer2"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-person-lines-fill"></i>
                        <span class="menu-text">Data Mahasiswa Magang</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-diagram-3"></i>
                        <span class="menu-text">Ketersediaan Divisi</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-award"></i>
                        <span class="menu-text">Sertifikat</span>
                    </a>
                </li>
            

            {{-- === MAHASISWA === --}}
                <li class="menu-header">Halaman Mahasiswa</li>

                <li class="active current-page">
                    <a href="{{ route('dashboard') }}">
                        <i class="bi bi-speedometer2"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-pencil-square"></i>
                        <span class="menu-text">Pengajuan Magang</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-diagram-3"></i>
                        <span class="menu-text">Ketersediaan Divisi</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="bi bi-check2-circle"></i>
                        <span class="menu-text">Status Penerimaan</span>
                    </a>
                </li>
            

            {{-- === UNIVERSAL MENU (semua role) === --}}
            <li class="menu-header">Akun</li>
            <li>
                <a href="">
                    <i class="bi bi-person-circle"></i>
                    <span class="menu-text">Profil</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="menu-text">Logout</span>
                </a>
            </li> -->
        </ul>
    </div>
    <!-- Sidebar menu ends -->
</nav>
<!-- Sidebar wrapper end -->
