@extends('layouts.app')

@section('content')
<div class="col-xxl-12">
    <div class="card mb-3 shadow-sm border-0">
        <!-- Enhanced Header -->
        <div class="card-header bg-white border-bottom py-3">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div>
                    <h5 class="mb-1 fw-bold text-primary">
                        <i class="bi bi-person-check me-2"></i>Aktivasi Pengguna
                    </h5>
                    <small class="text-muted">Konfirmasi aktivasi akun pengguna baru</small>
                </div>

                <!-- Stats Cards -->
                <div class="d-flex gap-3">
                    <div class="text-center px-3 py-2 bg-warning bg-opacity-10 rounded">
                        <div class="fw-bold text-warning fs-5">8</div>
                        <small class="text-muted">Menunggu</small>
                    </div>
                    <div class="text-center px-3 py-2 bg-success bg-opacity-10 rounded">
                        <div class="fw-bold text-success fs-5">142</div>
                        <small class="text-muted">Aktif</small>
                    </div>
                    <div class="text-center px-3 py-2 bg-danger bg-opacity-10 rounded">
                        <div class="fw-bold text-danger fs-5">5</div>
                        <small class="text-muted">Ditolak</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="card-body border-bottom bg-light">
            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label small text-muted">Pencarian</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Cari nama pengguna...">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label small text-muted">Status</label>
                    <select class="form-select">
                        <option>Semua Status</option>
                        <option>Menunggu Aktivasi</option>
                        <option>Aktif</option>
                        <option>Ditolak</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label small text-muted">Role</label>
                    <select class="form-select">
                        <option>Semua Role</option>
                        <option>Mahasiswa</option>
                        <option>Siswa</option>
                        <option>Dosen</option>
                        <option>Guru</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-outline-secondary w-100">
                        <i class="bi bi-funnel me-1"></i>Filter
                    </button>
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
                                    Nama Pengguna
                                    <i class="bi bi-chevron-expand small text-muted"></i>
                                </div>
                            </th>
                            <th class="border-0 px-4 py-3">Role</th>
                            <th class="border-0 px-4 py-3">Instansi</th>
                            <th class="border-0 px-4 py-3">Jurusan</th>
                            <th class="border-0 px-4 py-3">No ID</th>
                            <th class="border-0 px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    Tanggal Daftar
                                    <i class="bi bi-chevron-expand small text-muted"></i>
                                </div>
                            </th>
                            <th class="border-0 px-4 py-3">Status</th>
                            <th class="border-0 px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 - Pending Mahasiswa -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-primary bg-opacity-10">
                                        <i class="bi bi-person-fill text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Andi Pratama</div>
                                        <small class="text-muted">andi.pratama@ui.ac.id</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-info bg-opacity-15 text-info">
                                    <i class="bi bi-mortarboard me-1"></i>Mahasiswa
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <div class="fw-medium">Universitas Indonesia</div>
                                    <small class="text-muted">Jakarta</small>
                                </div>
                            </td>
                            <td class="px-4 py-3">Teknik Informatika</td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-light text-dark">NIM</span>
                                    <span class="fw-mono">2301234567</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>20 Jan 2024</span>
                                </div>
                                <small class="text-muted">3 hari lalu</small>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-warning text-white">
                                    <i class="bi bi-clock me-1"></i>Menunggu
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModal" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#aktivasiModal" title="Aktivasi">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#tolakModal" title="Tolak">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 - Pending Siswa -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-secondary bg-opacity-10">
                                        <i class="bi bi-person-fill text-secondary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Siti Nurhaliza</div>
                                        <small class="text-muted">siti.nurhaliza@smkn1jkt.sch.id</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-secondary bg-opacity-15 text-secondary">
                                    <i class="bi bi-people me-1"></i>Siswa
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <div class="fw-medium">SMKN 1 Jakarta</div>
                                    <small class="text-muted">Jakarta Pusat</small>
                                </div>
                            </td>
                            <td class="px-4 py-3">Rekayasa Perangkat Lunak</td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-light text-dark">NIS</span>
                                    <span class="fw-mono">1234567890</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>18 Jan 2024</span>
                                </div>
                                <small class="text-muted">5 hari lalu</small>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-warning text-white">
                                    <i class="bi bi-clock me-1"></i>Menunggu
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success" title="Aktivasi">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Tolak">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 - Aktif Dosen -->
                        <tr class="table-success table-success-subtle">
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-success bg-opacity-10">
                                        <i class="bi bi-person-check-fill text-success"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Dr. Ahmad Fauzi, M.Kom</div>
                                        <small class="text-muted">ahmad.fauzi@itb.ac.id</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-purple bg-opacity-15 text-purple">
                                    <i class="bi bi-person-workspace me-1"></i>Dosen
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <div class="fw-medium">Institut Teknologi Bandung</div>
                                    <small class="text-muted">Bandung</small>
                                </div>
                            </td>
                            <td class="px-4 py-3">Teknik Informatika</td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-light text-dark">NIDN</span>
                                    <span class="fw-mono">0412345678</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>15 Jan 2024</span>
                                </div>
                                <small class="text-muted">8 hari lalu</small>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i>Aktif
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning" title="Nonaktifkan">
                                        <i class="bi bi-pause-circle"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 - Pending Guru -->
                        <tr>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-info bg-opacity-10">
                                        <i class="bi bi-person-fill text-info"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Budi Santoso, S.Pd</div>
                                        <small class="text-muted">budi.santoso@smkn2sby.sch.id</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-success bg-opacity-15 text-success">
                                    <i class="bi bi-person-lines-fill me-1"></i>Guru
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <div class="fw-medium">SMKN 2 Surabaya</div>
                                    <small class="text-muted">Surabaya</small>
                                </div>
                            </td>
                            <td class="px-4 py-3">Teknik Komputer Jaringan</td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-light text-dark">NIP</span>
                                    <span class="fw-mono">196505121990031001</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>22 Jan 2024</span>
                                </div>
                                <small class="text-muted">1 hari lalu</small>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-warning text-white">
                                    <i class="bi bi-clock me-1"></i>Menunggu
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success" title="Aktivasi">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Tolak">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 - Ditolak -->
                        <tr class="table-danger table-danger-subtle">
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-circle bg-danger bg-opacity-10">
                                        <i class="bi bi-person-x-fill text-danger"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium">Rini Wijayanti</div>
                                        <small class="text-muted">rini.wijayanti@example.com</small>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-info bg-opacity-15 text-info">
                                    <i class="bi bi-mortarboard me-1"></i>Mahasiswa
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <div class="fw-medium">Universitas Swasta XYZ</div>
                                    <small class="text-muted">Jakarta</small>
                                </div>
                            </td>
                            <td class="px-4 py-3">Manajemen</td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-light text-dark">NIM</span>
                                    <span class="fw-mono">2301987654</span>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-calendar3 text-muted small"></i>
                                    <span>10 Jan 2024</span>
                                </div>
                                <small class="text-muted">13 hari lalu</small>
                            </td>
                            <td class="px-4 py-3">
                                <span class="badge bg-danger">
                                    <i class="bi bi-x-circle me-1"></i>Ditolak
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info" title="Lihat Alasan">
                                        <i class="bi bi-info-circle"></i>
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
                <small class="text-muted">Menampilkan 1-5 dari 155 pengguna</small>
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

<!-- Modal Detail Pengguna -->
<div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-person-lines-fill me-2"></i>Detail Pengguna
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label text-muted small">Nama Lengkap</label>
                        <div class="fw-medium">Andi Pratama</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small">Email</label>
                        <div class="fw-medium">andi.pratama@ui.ac.id</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small">Role</label>
                        <div>
                            <span class="badge bg-info">Mahasiswa</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small">No Telepon</label>
                        <div class="fw-medium">081234567890</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small">Instansi</label>
                        <div class="fw-medium">Universitas Indonesia</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small">Jurusan/Program Studi</label>
                        <div class="fw-medium">Teknik Informatika</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small">NIM</label>
                        <div class="fw-medium font-monospace">2301234567</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted small">Tanggal Pendaftaran</label>
                        <div class="fw-medium">20 Januari 2024</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label text-muted small">Alamat</label>
                        <div class="fw-medium">Jl. Margonda Raya No. 100, Depok, Jawa Barat 16424</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-success">
                    <i class="bi bi-check-circle me-1"></i>Aktivasi Akun
                </button>
                <button type="button" class="btn btn-danger">
                    <i class="bi bi-x-circle me-1"></i>Tolak Aktivasi
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Aktivasi -->
<div class="modal fade" id="aktivasiModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success">
                    <i class="bi bi-check-circle me-2"></i>Aktivasi Akun
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    <i class="bi bi-info-circle me-2"></i>
                    Anda akan mengaktivasi akun <strong>Andi Pratama</strong> sebagai <strong>Mahasiswa</strong>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Catatan Aktivasi</label>
                    <textarea class="form-control" rows="3" placeholder="Tambahkan catatan untuk aktivasi akun..."></textarea>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sendNotification">
                    <label class="form-check-label" for="sendNotification">
                        Kirim notifikasi email aktivasi ke pengguna
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">
                    <i class="bi bi-check-circle me-1"></i>Aktivasi Sekarang
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tolak Aktivasi -->
<div class="modal fade" id="tolakModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">
                    <i class="bi bi-x-circle me-2"></i>Tolak Aktivasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Anda akan menolak aktivasi akun <strong>Andi Pratama</strong>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Alasan Penolakan <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="4" placeholder="Masukkan alasan penolakan aktivasi..." required></textarea>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="sendRejectionEmail">
                    <label class="form-check-label" for="sendRejectionEmail">
                        Kirim email penolakan beserta alasan ke pengguna
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">
                    <i class="bi bi-x-circle me-1"></i>Tolak Aktivasi
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

.table-hover tbody tr:hover {
    background-color: rgba(var(--bs-primary-rgb), 0.05);
}

.table-success-subtle {
    background-color: rgba(var(--bs-success-rgb), 0.05);
}

.table-danger-subtle {
    background-color: rgba(var(--bs-danger-rgb), 0.05);
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

.fw-mono {
    font-family: 'Courier New', monospace;
    font-size: 0.9rem;
}
</style>

@endsection