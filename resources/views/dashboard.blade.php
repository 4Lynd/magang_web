@extends('layouts.app')

@section('content')

        <!-- Welcome Card -->
        <div class="row gx-3 mb-4">
            <div class="col-12">
                <div class="card bg-gradient-primary text-white mb-3">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="text-white mb-2">Sistem Manajemen Magang</h4>
                                <p class="mb-0 opacity-75">DISKOMINFOTIK Kabupaten Tuban</p>
                            </div>
                            <div class="text-end">
                                <i class="bi bi-building fs-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Statistics Row -->
        <div class="row gx-3 mb-10">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-2">
                            <i class="bi bi-people-fill fs-1 text-primary lh-1"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="m-0 text-secondary fw-normal">Total Pengguna</h6>
                            <h3 class="m-0 text-primary">247</h3>
                        </div>
                        <small class="text-muted">
                            <i class="bi bi-arrow-up text-success me-1"></i>
                            +12 dari bulan lalu
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-2">
                            <i class="bi bi-file-earmark-text-fill fs-1 text-warning lh-1"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="m-0 text-secondary fw-normal">Pengajuan Aktif</h6>
                            <h3 class="m-0 text-warning">23</h3>
                        </div>
                        <small class="text-muted">
                            <i class="bi bi-clock text-warning me-1"></i>
                            Menunggu konfirmasi
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="arrow-label bg-success text-white">+18%</div>
                        <div class="mb-2">
                            <i class="bi bi-person-check-fill fs-1 text-success lh-1"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="m-0 text-secondary fw-normal">Magang Aktif</h6>
                            <h3 class="m-0 text-success">45</h3>
                        </div>
                        <small class="text-muted">
                            <i class="bi bi-arrow-up text-success me-1"></i>
                            Dari 12 divisi
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="arrow-label bg-info text-white">+24%</div>
                        <div class="mb-2">
                            <i class="bi bi-award-fill fs-1 text-info lh-1"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="m-0 text-secondary fw-normal">Selesai</h6>
                            <h3 class="m-0 text-info">156</h3>
                        </div>
                        <small class="text-muted">
                            <i class="bi bi-arrow-up text-success me-1"></i>
                            Total keseluruhan
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary Statistics Row -->
        <div class="row gx-3 mb-4">
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-circle bg-primary bg-opacity-10">
                                <i class="bi bi-mortarboard text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 text-secondary">Mahasiswa</h6>
                                <h4 class="mb-0 text-primary">128</h4>
                                <small class="text-muted">Terdaftar aktif</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-circle bg-secondary bg-opacity-10">
                                <i class="bi bi-people text-secondary fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 text-secondary">Siswa SMK</h6>
                                <h4 class="mb-0 text-secondary">89</h4>
                                <small class="text-muted">Terdaftar aktif</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-circle bg-purple bg-opacity-10">
                                <i class="bi bi-person-workspace text-purple fs-4"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 text-secondary">Pendamping</h6>
                                <h4 class="mb-0" style="color: #6f42c1;">30</h4>
                                <small class="text-muted">Dosen & Guru</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart and Activity Row -->
        <div class="row gx-3 mb-4">
            <!-- Quick Actions Card -->
            <div class="col-xl-4 col-12">
                <div class="card mb-3 border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0 fw-bold text-primary">
                            <i class="bi bi-lightning-fill me-2"></i>Aksi Cepat
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm d-flex align-items-center">
                                <i class="bi bi-person-plus me-2"></i>
                                Aktivasi Pengguna Baru
                                <span class="badge bg-warning text-dark ms-auto">8</span>
                            </a>
                            <a href="#" class="btn btn-outline-warning btn-sm d-flex align-items-center">
                                <i class="bi bi-clipboard-check me-2"></i>
                                Konfirmasi Pengajuan
                                <span class="badge bg-warning text-dark ms-auto">23</span>
                            </a>
                            <a href="#" class="btn btn-outline-success btn-sm d-flex align-items-center">
                                <i class="bi bi-building me-2"></i>
                                Kelola Divisi
                                <span class="badge bg-success ms-auto">12</span>
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm d-flex align-items-center">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                Laporan Magang
                                <span class="badge bg-info ms-auto">45</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Overview -->
            <div class="col-xl-8 col-12">
                <div class="card mb-3 border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-bottom">
                        <h6 class="mb-0 fw-bold text-primary">
                            <i class="bi bi-graph-up me-2"></i>Status Divisi
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-between p-2 bg-light rounded">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="icon-circle bg-primary">
                                            <i class="bi bi-code-slash text-white small"></i>
                                        </div>
                                        <div>
                                            <div class="fw-medium">IT & Sistem Informasi</div>
                                            <small class="text-muted">7/15 Terisi</small>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="badge bg-success">8 Tersedia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-between p-2 bg-light rounded">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="icon-circle bg-warning">
                                            <i class="bi bi-calculator text-white small"></i>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Keuangan & Akuntansi</div>
                                            <small class="text-muted">8/10 Terisi</small>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="badge bg-warning text-dark">2 Tersedia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-between p-2 bg-light rounded">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="icon-circle bg-success">
                                            <i class="bi bi-people text-white small"></i>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Sumber Daya Manusia</div>
                                            <small class="text-muted">8/8 Terisi</small>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="badge bg-danger">Penuh</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-between p-2 bg-light rounded">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="icon-circle bg-info">
                                            <i class="bi bi-bar-chart text-white small"></i>
                                        </div>
                                        <div>
                                            <div class="fw-medium">Perencanaan & Evaluasi</div>
                                            <small class="text-muted">5/12 Terisi</small>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="badge bg-success">7 Tersedia</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="row gx-3">
            <div class="col-12">
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0 fw-bold text-primary">
                                <i class="bi bi-clock-history me-2"></i>Aktivitas Terbaru
                            </h6>
                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item d-flex gap-3 pb-3">
                                <div class="timeline-marker bg-success"></div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="mb-1">Pengajuan Magang Disetujui</h6>
                                            <p class="mb-1 text-muted small">Ahmad Rizki Pratama dari UI telah disetujui untuk magang di divisi IT</p>
                                            <small class="text-muted">2 jam yang lalu</small>
                                        </div>
                                        <span class="badge bg-success">Disetujui</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item d-flex gap-3 pb-3">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="mb-1">Pengguna Baru Terdaftar</h6>
                                            <p class="mb-1 text-muted small">Siti Nurhaliza dari SMKN 1 Jakarta mendaftar sebagai siswa</p>
                                            <small class="text-muted">5 jam yang lalu</small>
                                        </div>
                                        <span class="badge bg-warning text-dark">Menunggu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item d-flex gap-3 pb-3">
                                <div class="timeline-marker bg-info"></div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="mb-1">Laporan Magang Dikirim</h6>
                                            <p class="mb-1 text-muted small">Maya Sari Dewi mengirimkan laporan mingguan periode 1</p>
                                            <small class="text-muted">1 hari yang lalu</small>
                                        </div>
                                        <span class="badge bg-info">Laporan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item d-flex gap-3">
                                <div class="timeline-marker bg-secondary"></div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="mb-1">Divisi Baru Ditambahkan</h6>
                                            <p class="mb-1 text-muted small">Divisi "Media & Publikasi" berhasil ditambahkan dengan kapasitas 10 orang</p>
                                            <small class="text-muted">2 hari yang lalu</small>
                                        </div>
                                        <span class="badge bg-secondary">Sistem</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection