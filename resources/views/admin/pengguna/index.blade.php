@extends('layouts.app')

@section('content')
<div class="col-xxl-12">
    <div class="card mb-3 shadow-sm border-0">
        <!-- Enhanced Header -->
        <div class="card-header bg-white border-bottom py-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <h5 class="mb-1 fw-bold text-primary">
                        <i class="bi bi-people-fill me-2"></i>Manajemen Pengguna
                    </h5>
                    <small class="text-muted">Kelola data pengguna sistem</small>
                </div>

                <!-- Enhanced Filter Section -->
                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <div class="row g-3 align-items-end">
                        <div class="col-md-3">
                            <!-- Search Input -->
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-search text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" 
                                    placeholder="Cari nama atau email..." id="searchInput">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- Filter Role -->
                            <select class="form-select" id="roleFilter">
                                <option value="">Role</option>
                                <option value="guru">Guru Pendamping</option>
                                <option value="pj">Kepala Divisi (PJ)</option>
                                <option value="mentor">Mentor</option>
                                <option value="mahasiswa">Mahasiswa/i</option>
                                <option value="siswa">Siswa/i</option>
                                <option value="pegawai">Pegawai</option>
                                <option value="sekretaris">Sekretaris</option>
                                <option value="admin">Administrator</option>
                            </select>
                        </div>
                            <!-- Filter Status -->
                            <div class="col-md-3">
                            <select class="form-select" id="statusFilter">
                                <option value="">Status</option>
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>

                    <!-- Action Buttons -->
                    <div class="col-md-3">
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary" id="resetBtn">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                <i class="bi bi-plus-lg"></i> Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

        <div class="card-body p-0">
            <!-- Stats Cards -->
            <div class="row g-0 border-bottom">
                <div class="col-6 col-md-3 p-3 text-center border-end bg-primary bg-opacity-10">
                    <div class="text-primary fw-bold fs-4">24</div>
                    <small class="text-muted">Total Pengguna</small>
                </div>
                <div class="col-6 col-md-3 p-3 text-center border-end bg-success bg-opacity-10">
                    <div class="text-success fw-bold fs-4">20</div>
                    <small class="text-muted">Aktif</small>
                </div>
                <div class="col-6 col-md-3 p-3 text-center border-end bg-warning bg-opacity-10">
                    <div class="text-warning fw-bold fs-4">4</div>
                    <small class="text-muted">Nonaktif</small>
                </div>
                <div class="col-6 col-md-3 p-3 text-center bg-info bg-opacity-10">
                    <div class="text-info fw-bold fs-4">8</div>
                    <small class="text-muted">Role Unik</small>
                </div>
            </div>

            <!-- Enhanced Table -->
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="usersTable">
                    <thead class="table-light sticky-top">
                        <tr>
                            <th style="width: 50px;" class="text-center">
                                <input type="checkbox" class="form-check-input" id="selectAll">
                            </th>
                            <th class="sortable cursor-pointer" data-sort="nama">
                                <div class="d-flex align-items-center justify-content-between">
                                    Nama Pengguna
                                    <i class="bi bi-arrow-down-up text-muted ms-1"></i>
                                </div>
                            </th>
                            <th class="sortable cursor-pointer" data-sort="role">
                                <div class="d-flex align-items-center justify-content-between">
                                    Role
                                    <i class="bi bi-arrow-down-up text-muted ms-1"></i>
                                </div>
                            </th>
                            <th class="sortable cursor-pointer" data-sort="email">
                                <div class="d-flex align-items-center justify-content-between">
                                    Email
                                    <i class="bi bi-arrow-down-up text-muted ms-1"></i>
                                </div>
                            </th>
                            <th class="text-center">Status</th>
                            <th class="text-center" style="width: 250px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="user-row" data-role="guru" data-status="aktif">
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input user-checkbox" value="1">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold">Budi Santoso</div>
                                        <small class="text-muted">ID: USR001</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary-soft text-primary px-2 py-1 rounded-pill">
                                    <i class="bi bi-mortarboard-fill me-1"></i>Guru Pendamping
                                </span>
                            </td>
                            <td>
                                <div>
                                    <div>budi@example.com</div>
                                    <small class="text-muted">Terverifikasi</small>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success-soft text-success px-2 py-1 rounded-pill">
                                    <i class="bi bi-check-circle-fill me-1"></i>Aktif
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Detail" data-bs-toggle="modal" data-bs-target="#userDetailModal">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-x me-2"></i>Nonaktifkan</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Reset Password</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="user-row" data-role="mahasiswa" data-status="nonaktif">
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input user-checkbox" value="2">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold">Siti Aminah</div>
                                        <small class="text-muted">ID: USR002</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-warning-soft text-warning px-2 py-1 rounded-pill">
                                    <i class="bi bi-mortarboard me-1"></i>Mahasiswa/i
                                </span>
                            </td>
                            <td>
                                <div>
                                    <div>siti@example.com</div>
                                    <small class="text-muted">Belum verifikasi</small>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-secondary-soft text-secondary px-2 py-1 rounded-pill">
                                    <i class="bi bi-pause-circle-fill me-1"></i>Nonaktif
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-success" href="#"><i class="bi bi-person-check me-2"></i>Aktifkan</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Reset Password</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="user-row" data-role="mentor" data-status="aktif">
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input user-checkbox" value="3">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold">Andi Wijaya</div>
                                        <small class="text-muted">ID: USR003</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-info-soft text-info px-2 py-1 rounded-pill">
                                    <i class="bi bi-star-fill me-1"></i>Mentor
                                </span>
                            </td>
                            <td>
                                <div>
                                    <div>andi@example.com</div>
                                    <small class="text-muted">Terverifikasi</small>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success-soft text-success px-2 py-1 rounded-pill">
                                    <i class="bi bi-check-circle-fill me-1"></i>Aktif
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-x me-2"></i>Nonaktifkan</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Reset Password</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Enhanced Pagination with Info -->
            <div class="d-flex flex-wrap justify-content-between align-items-center p-3 bg-light">
                <div class="text-muted small">
                    Menampilkan <span class="fw-semibold">1-3</span> dari <span class="fw-semibold">24</span> pengguna
                </div>
                
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <span class="page-link">...</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">8</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Bulk Actions Toolbar -->
    <div class="position-fixed bottom-0 start-50 translate-middle-x mb-4 d-none" id="bulkActions">
        <div class="card shadow-lg border-0">
            <div class="card-body py-2 px-3">
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted small">
                        <span id="selectedCount">0</span> item dipilih
                    </span>
                    <div class="btn-group">
                        <button class="btn btn-sm btn-success">
                            <i class="bi bi-check-circle"></i> Aktifkan
                        </button>
                        <button class="btn btn-sm btn-warning">
                            <i class="bi bi-pause-circle"></i> Nonaktifkan
                        </button>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary" id="clearSelection">
                        <i class="bi bi-x"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection