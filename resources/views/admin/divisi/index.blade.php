@extends('layouts.app')

@section('content')
<div class="col-xxl-12">
    <div class="card mb-3 shadow-sm border-0">
        <!-- Enhanced Header -->
        <div class="card-header bg-white border-bottom py-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <h5 class="mb-1 fw-bold text-primary">
                        <i class="bi bi-diagram-3-fill me-2"></i>Manajemen Divisi
                    </h5>
                    <small class="text-muted">Kelola divisi dan kapasitas magang</small>
                </div>

                <!-- Enhanced Filter Section -->
                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <div class="row g-3 align-items-end">
                    <!-- Search Input -->
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0">
                                <i class="bi bi-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-0" 
                                placeholder="Cari divisi..." id="searchInput">
                        </div>
                    </div>

                    <!-- Filter Ketersediaan -->
                    <div class="col-md-4">
                        <select class="form-select" id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="tersedia">Tersedia</option>
                            <option value="penuh">Kuota Penuh</option>
                            <option value="hampir_penuh">Hampir Penuh</option>
                        </select>
                    </div>

                        <!-- Action Buttons -->
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button class="btn btn-outline-secondary" id="resetBtn">
                                    <i class="bi bi-arrow-repeat"></i>
                                </button>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDivisiModal">
                                    <i class="bi bi-plus-lg"></i> Tambah
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
            <div class="card-body p-0">
                <div class="row g-0 border-bottom">
                    <div class="d-flex gap-1">
                        <div class="col-6 col-md-3 p-3 text-center border-end bg-primary bg-opacity-10">
                            <div class="text-primary fw-bold fs-4">12</div>
                            <small class="text-muted">Total Divisi</small>
                        </div>
                        <div class="col-6 col-md-3 p-3 text-center border-end bg-success bg-opacity-10">
                            <div class="text-success fw-bold fs-4">8</div>
                            <small class="text-muted">Tersedia</small>
                        </div>
                        <div class="col-6 col-md-3 p-3 text-center border-end bg-danger bg-opacity-10">
                            <div class="text-danger fw-bold fs-4">3</div>
                            <small class="text-muted">Kuota Penuh</small>
                        </div>
                        <div class="col-6 col-md-3 p-3 text-center bg-info bg-opacity-10">
                            <div class="text-info fw-bold fs-4">145</div>
                            <small class="text-muted">Total Kapasitas</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Table -->
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="divisiTable">
                    <thead class="table-light sticky-top">
                        <tr>
                            <th style="width: 50px;" class="text-center">
                                <input type="checkbox" class="form-check-input" id="selectAll">
                            </th>
                            <th class="sortable cursor-pointer" data-sort="nama">
                                <div class="d-flex align-items-center justify-content-between">
                                    Nama Divisi
                                    <i class="bi bi-arrow-down-up text-muted ms-1"></i>
                                </div>
                            </th>
                            <th class="sortable cursor-pointer" data-sort="keterangan">
                                <div class="d-flex align-items-center justify-content-between">
                                    Keterangan
                                    <i class="bi bi-arrow-down-up text-muted ms-1"></i>
                                </div>
                            </th>
                            <th class="text-center sortable cursor-pointer" data-sort="kapasitas">
                                <div class="d-flex align-items-center justify-content-center">
                                    Kapasitas
                                    <i class="bi bi-arrow-down-up text-muted ms-1"></i>
                                </div>
                            </th>
                            <th class="text-center">Ketersediaan</th>
                            <th class="text-center" style="width: 200px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Divisi dengan kuota tersedia -->
                        <tr class="divisi-row" data-status="tersedia">
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input divisi-checkbox" value="1">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold">IT & Sistem Informasi</div>
                                        <small class="text-muted">Kode: IT01</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-wrap">
                                    Mengelola sistem informasi, pengembangan aplikasi, dan infrastruktur teknologi informasi
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info-soft text-info px-2 py-1 rounded-pill">
                                    <i class="bi bi-people-fill me-1"></i>15 Orang
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="mb-1">
                                    <span class="badge bg-success-soft text-success px-2 py-1 rounded-pill">
                                        <i class="bi bi-check-circle-fill me-1"></i>8 Tersedia
                                    </span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted">7/15 Terisi</small>
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
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>Lihat Mahasiswa</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-graph-up me-2"></i>Update Kapasitas</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Divisi hampir penuh -->
                        <tr class="divisi-row" data-status="hampir_penuh">
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input divisi-checkbox" value="2">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold">Keuangan & Akuntansi</div>
                                        <small class="text-muted">Kode: FIN01</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-wrap">
                                    Mengelola keuangan daerah, pelaporan keuangan, dan sistem akuntansi pemerintah
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info-soft text-info px-2 py-1 rounded-pill">
                                    <i class="bi bi-people-fill me-1"></i>10 Orang
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="mb-1">
                                    <span class="badge bg-warning-soft text-warning px-2 py-1 rounded-pill">
                                        <i class="bi bi-exclamation-triangle-fill me-1"></i>2 Tersisa
                                    </span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted">8/10 Terisi</small>
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
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>Lihat Mahasiswa</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-graph-up me-2"></i>Update Kapasitas</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Divisi kuota penuh -->
                        <tr class="divisi-row" data-status="penuh">
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input divisi-checkbox" value="3">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold">Sumber Daya Manusia</div>
                                        <small class="text-muted">Kode: HRD01</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-wrap">
                                    Mengelola kepegawaian, pengembangan SDM, dan administrasi kepersonalan
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info-soft text-info px-2 py-1 rounded-pill">
                                    <i class="bi bi-people-fill me-1"></i>8 Orang
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="mb-1">
                                    <span class="badge bg-danger text-white px-3 py-2 rounded-pill fw-bold">
                                        <i class="bi bi-x-circle-fill me-1"></i>KUOTA PENUH
                                    </span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted">8/8 Terisi</small>
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
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>Lihat Mahasiswa</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-graph-up me-2"></i>Tambah Kapasitas</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- Divisi lainnya -->
                        <tr class="divisi-row" data-status="tersedia">
                            <td class="text-center">
                                <input type="checkbox" class="form-check-input divisi-checkbox" value="4">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-2">
                                        <i class="bi bi-graph-up"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold">Perencanaan & Evaluasi</div>
                                        <small class="text-muted">Kode: PLAN01</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-wrap">
                                    Perencanaan pembangunan daerah, monitoring, dan evaluasi program kerja
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info-soft text-info px-2 py-1 rounded-pill">
                                    <i class="bi bi-people-fill me-1"></i>12 Orang
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="mb-1">
                                    <span class="badge bg-success-soft text-success px-2 py-1 rounded-pill">
                                        <i class="bi bi-check-circle-fill me-1"></i>7 Tersedia
                                    </span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted">5/12 Terisi</small>
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
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>Lihat Mahasiswa</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-graph-up me-2"></i>Update Kapasitas</a></li>
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
                    Menampilkan <span class="fw-semibold">1-4</span> dari <span class="fw-semibold">12</span> divisi
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
                        <span id="selectedCount">0</span> divisi dipilih
                    </span>
                    <div class="btn-group">
                        <button class="btn btn-sm btn-primary">
                            <i class="bi bi-graph-up"></i> Update Kapasitas
                        </button>
                        <button class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Hapus
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

<!-- Custom CSS -->
<style>
    .avatar-sm {
        width: 32px;
        height: 32px;
        font-size: 14px;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .sortable:hover {
        background-color: rgba(0,0,0,0.05);
    }

    .bg-primary-soft {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }

    .bg-warning-soft {
        background-color: rgba(255, 193, 7, 0.1) !important;
    }

    .bg-info-soft {
        background-color: rgba(13, 202, 240, 0.1) !important;
    }

    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1) !important;
    }

    .bg-secondary-soft {
        background-color: rgba(108, 117, 125, 0.1) !important;
    }

    .bg-danger-soft {
        background-color: rgba(220, 53, 69, 0.1) !important;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.04);
    }

    .card {
        border-radius: 12px;
    }

    .input-group .form-control:focus {
        box-shadow: none;
        border-color: #dee2e6;
    }

    .sticky-top {
        top: 0;
        z-index: 10;
    }

    .text-wrap {
        max-width: 300px;
        word-wrap: break-word;
        line-height: 1.4;
    }

    .progress {
        background-color: #f8f9fa;
        border-radius: 10px;
    }

    .progress-bar {
        border-radius: 10px;
    }

    /* Special styling for full quota */
    .badge.bg-danger {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(220, 53, 69, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(220, 53, 69, 0);
        }
    }
</style>

<!-- Enhanced JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const resetBtn = document.getElementById('resetBtn');
    const divisiRows = document.querySelectorAll('.divisi-row');

    // Filter function
    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value;

        divisiRows.forEach(row => {
            const namaDivisi = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            const keterangan = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const status = row.dataset.status;

            const matchesSearch = namaDivisi.includes(searchTerm) || keterangan.includes(searchTerm);
            const matchesStatus = !statusValue || status === statusValue;

            row.style.display = matchesSearch && matchesStatus ? '' : 'none';
        });
    }

    // Event listeners for filters
    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);

    // Reset filters
    resetBtn.addEventListener('click', function() {
        searchInput.value = '';
        statusFilter.value = '';
        filterTable();
    });

    // Sorting functionality
    document.querySelectorAll(".sortable").forEach(header => {
        header.addEventListener("click", function() {
            const sortBy = this.dataset.sort;
            const icon = this.querySelector('i');
            
            // Reset all other icons
            document.querySelectorAll('.sortable i').forEach(i => {
                if (i !== icon) {
                    i.className = 'bi bi-arrow-down-up text-muted ms-1';
                }
            });

            // Toggle current icon
            if (icon.classList.contains('bi-arrow-down-up')) {
                icon.className = 'bi bi-sort-down text-primary ms-1';
            } else if (icon.classList.contains('bi-sort-down')) {
                icon.className = 'bi bi-sort-up text-primary ms-1';
            } else {
                icon.className = 'bi bi-sort-down text-primary ms-1';
            }

            console.log('Sorting by:', sortBy);
        });
    });

    // Checkbox functionality
    const selectAll = document.getElementById('selectAll');
    const divisiCheckboxes = document.querySelectorAll('.divisi-checkbox');
    const bulkActions = document.getElementById('bulkActions');
    const selectedCount = document.getElementById('selectedCount');
    const clearSelection = document.getElementById('clearSelection');

    // Select all functionality
    selectAll.addEventListener('change', function() {
        divisiCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateBulkActions();
    });

    // Individual checkbox functionality
    divisiCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateBulkActions);
    });

    // Update bulk actions toolbar
    function updateBulkActions() {
        const checkedBoxes = document.querySelectorAll('.divisi-checkbox:checked');
        const count = checkedBoxes.length;
        
        selectedCount.textContent = count;
        
        if (count > 0) {
            bulkActions.classList.remove('d-none');
        } else {
            bulkActions.classList.add('d-none');
        }

        // Update select all checkbox
        selectAll.checked = count === divisiCheckboxes.length;
        selectAll.indeterminate = count > 0 && count < divisiCheckboxes.length;
    }

    // Clear selection
    clearSelection.addEventListener('click', function() {
        selectAll.checked = false;
        divisiCheckboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        updateBulkActions();
    });
});
</script>
@endsection