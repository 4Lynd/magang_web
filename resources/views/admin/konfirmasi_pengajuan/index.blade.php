@extends('layouts.app')

@section('content')
<div class="col-xxl-12">
    <div class="card mb-3 shadow-sm border-0">
        <!-- Enhanced Header -->
        <div class="card-header bg-white border-bottom py-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <h5 class="mb-1 fw-bold text-primary">
                        <i class="bi bi-clipboard-check me-2"></i>Konfirmasi Pengajuan
                    </h5>
                    <small class="text-muted">Konfirmasi pengajuan magang dari mahasiswa, siswa dan pendamping</small>
                </div>

                <!-- Filter Section -->
                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <div class="row g-3 align-items-end">
                        <div class="col-md-4">
                            <label class="form-label small text-muted">Pencarian</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-search text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" placeholder="Cari nama pengajuan...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small text-muted">Status</label>
                            <select class="form-select">
                                <option>Semua Status</option>
                                <option>Menunggu Konfirmasi</option>
                                <option>Disetujui</option>
                                <option>Ditolak</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small text-muted">Role</label>
                            <select class="form-select">
                                <option>Semua Role</option>
                                <option>Mahasiswa</option>
                                <option>Siswa</option>
                                <option>Dosen Pendamping</option>
                                <option>Guru Pendamping</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-outline-secondary w-100">
                                <i class="bi bi-funnel me-1"></i>Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="card-body p-0">
            <div class="row g-0 border-bottom">
                <div class="d-flex gap-1">
                    <div class="col-6 col-md-4 p-3 text-center border-end bg-warning bg-opacity-10">
                        <div class="fw-bold text-warning fs-4">12</div>
                        <small class="text-muted">Menunggu</small>
                    </div>
                    <div class="col-6 col-md-4 p-3 text-center border-end bg-success bg-opacity-10">
                        <div class="fw-bold text-success fs-4">35</div>
                        <small class="text-muted">Disetujui</small>
                    </div>
                    <div class="col-6 col-md-4 p-3 text-center border-end bg-danger bg-opacity-10">
                        <div class="fw-bold text-danger fs-4">3</div>
                        <small class="text-muted">Ditolak</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Content -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light sticky-top">
                        <tr>
                            <th class="border-0 px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    Nama Pengajuan
                                    <i class="bi bi-chevron-expand small text-muted"></i>
                                </div>
                            </th>
                            <th class="border-0 px-4 py-3">Role</th>
                            <th class="border-0 px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    Tanggal Pengajuan
                                    <i class="bi bi-chevron-expand small text-muted"></i>
                                </div>
                            </th>
                            <th class="border-0 px-4 py-3">Divisi</th>
                            <th class="border-0 px-4 py-3">Status</th>
                            <th class="border-0 px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 - Pending -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-primary bg-opacity-10">
                                        <i class="bi bi-person-fill text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Ahmad Rizki Pratama</div>
                                        <small class="text-muted">Universitas Indonesia</small>
                                        <br><small class="text-muted">Teknik Informatika</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-info bg-opacity-15 text-white">Mahasiswa</span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>15 Jan 2024</span>
                                </div>
                                <small class="text-muted">3 bulan</small>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="icon-circle bg-primary">
                                        <i class="bi bi-code-slash text-white small"></i>
                                    </div>
                                    <span>IT & Sistem Informasi</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-warning text-white">
                                    <i class="bi bi-clock me-1"></i>Menunggu
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#dokumenModal" title="Lihat Dokumen">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#konfirmasiModal" title="Setujui">
                                        <i class="bi bi-check-lg"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tolakModal" title="Tolak">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 - Approved -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-success bg-opacity-10">
                                        <i class="bi bi-person-fill text-success"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Sari Indah Lestari</div>
                                        <small class="text-muted">SMKN 1 Jakarta</small>
                                        <br><small class="text-muted">Rekayasa Perangkat Lunak</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-secondary bg-opacity-15 text-white">Siswa</span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>10 Jan 2024</span>
                                </div>
                                <small class="text-muted">2 bulan</small>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="icon-circle bg-warning">
                                        <i class="bi bi-calculator text-white small"></i>
                                    </div>
                                    <span>Keuangan & Akuntansi</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i>Disetujui
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Dokumen">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-success" title="Download Surat Persetujuan">
                                        <i class="bi bi-download"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 - Rejected -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-danger bg-opacity-10">
                                        <i class="bi bi-person-fill text-danger"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Dr. Bambang Wijaya, M.T</div>
                                        <small class="text-muted">Institut Teknologi Bandung</small>
                                        <br><small class="text-muted">Dosen Pendamping</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-purple bg-opacity-15 text-wwhite">Dosen</span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>12 Jan 2024</span>
                                </div>
                                <small class="text-muted">Koordinasi</small>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="icon-circle bg-info">
                                        <i class="bi bi-mortarboard text-white small"></i>
                                    </div>
                                    <span>Academic Partnership</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-danger">
                                    <i class="bi bi-x-circle me-1"></i>Ditolak
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Dokumen">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary" title="Lihat Alasan">
                                        <i class="bi bi-info-circle"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 - Pending -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-primary bg-opacity-10">
                                        <i class="bi bi-person-fill text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Maya Sari Dewi</div>
                                        <small class="text-muted">Universitas Gadjah Mada</small>
                                        <br><small class="text-muted">Sistem Informasi</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-info bg-opacity-15 text-white">Mahasiswa</span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>18 Jan 2024</span>
                                </div>
                                <small class="text-muted">4 bulan</small>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="icon-circle bg-dark">
                                        <i class="bi bi-bar-chart text-white small"></i>
                                    </div>
                                    <span>Business Analysis</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-warning text-white">
                                    <i class="bi bi-clock me-1"></i>Menunggu
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Dokumen">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success" title="Setujui">
                                        <i class="bi bi-check-lg"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Tolak">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination Footer -->
        <div class="card-footer bg-white border-top">
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Menampilkan 1-4 dari 50 pengajuan</small>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <span class="page-link"><i class="bi bi-chevron-left"></i></span>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Dokumen -->
<div class="modal fade" id="dokumenModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-file-earmark-text me-2"></i>Dokumen Pengajuan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card border">
                            <div class="card-body text-center">
                                <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 3rem;"></i>
                                <h6 class="mt-2">CV.pdf</h6>
                                <small class="text-muted">2.5 MB</small>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-download me-1"></i>Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border">
                            <div class="card-body text-center">
                                <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 3rem;"></i>
                                <h6 class="mt-2">Surat_Pengantar.pdf</h6>
                                <small class="text-muted">1.8 MB</small>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-download me-1"></i>Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border">
                            <div class="card-body text-center">
                                <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 3rem;"></i>
                                <h6 class="mt-2">Transkrip_Nilai.pdf</h6>
                                <small class="text-muted">3.2 MB</small>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-download me-1"></i>Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Persetujuan -->
<div class="modal fade" id="konfirmasiModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success">
                    <i class="bi bi-check-circle me-2"></i>Konfirmasi Persetujuan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    <i class="bi bi-info-circle me-2"></i>
                    Anda akan menyetujui pengajuan magang dari <strong>Ahmad Rizki Pratama</strong>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Catatan Persetujuan</label>
                    <textarea class="form-control" rows="3" placeholder="Tambahkan catatan untuk pengajuan ini..."></textarea>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Upload Surat Persetujuan</label>
                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                    <small class="text-muted">Format: PDF, DOC, DOCX (Max 5MB)</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">
                    <i class="bi bi-check-lg me-1"></i>Setujui Pengajuan
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tolak Pengajuan -->
<div class="modal fade" id="tolakModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">
                    <i class="bi bi-x-circle me-2"></i>Tolak Pengajuan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Anda akan menolak pengajuan magang dari <strong>Ahmad Rizki Pratama</strong>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Alasan Penolakan <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="4" placeholder="Masukkan alasan penolakan pengajuan..." required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">
                    <i class="bi bi-x-lg me-1"></i>Tolak Pengajuan
                </button>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.icon-circle {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
}

.table-hover tbody tr:hover {
    background-color: rgba(var(--bs-primary-rgb), 0.05);
}

.badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.775rem;
}

.text-purple {
    color: #6f42c1 !important;
}

.bg-purple {
    background-color: #6f42c1 !important;
}
</style>

@endsection