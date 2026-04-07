@extends('layouts.main')

@section('title')
Panduan THR & Kompensasi PKWT - HRMS Portal
@endsection

@section('content')
<div class="container py-5 mt-5">

    <div class="mb-5">
        <h1 class="display-6 fw-bold ac">Tunjangan & Kompensasi Akhir Kontrak</h1>
        <p class="text-muted text-uppercase tracking-wider small">Informasi Hak Karyawan Sesuai Regulasi Ketenagakerjaan Terbaru</p>
        <hr class="w-25 mx-auto">
    </div>


    <div class="row g-4">

        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm overflow-hidden">
                <div class="card-header bg-success py-3 text-white d-flex align-items-center">
                    <i class="bi bi-gift-fill fs-4 me-2"></i>
                    <h5 class="mb-0">Tunjangan Hari Raya (THR)</h5>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-4">Wajib diberikan 1 kali dalam setahun menjelang Hari Raya Keagamaan.</p>

                    <h6 class="fw-bold"><i class="bi bi-calculator me-2"></i>Rumus Perhitungan:</h6>
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <p class="mb-1 small">Masa Kerja &ge; 12 Bulan:</p>
                        <div class="fw-bold text-dark mb-3">1 &times; Upah Sebulan (Gaji Pokok + Tunj. Tetap)</div>

                        <p class="mb-1 small">Masa Kerja &lt; 12 Bulan (Prorsional):</p>
                        <code class="d-block fw-bold text-success">(Masa Kerja / 12) &times; 1 Bulan Upah</code>
                    </div>

                    <h6 class="fw-bold">Ketentuan Penting:</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="bi bi-clock me-2 text-success"></i>Wajib dibayar paling lambat <strong>H-7 Hari Raya</strong>.</li>
                        <li class="mb-2"><i class="bi bi-cash-stack me-2 text-success"></i>Harus dibayar tunai (tidak boleh diganti barang/parsel).</li>
                        <li class="mb-2"><i class="bi bi-person-check me-2 text-success"></i>Karyawan Resign &lt; 30 hari sebelum hari raya (Tetap) berhak atas THR.</li>
                    </ul>
                </div>
                <div class="card-footer bg-white border-0 p-4 pt-0">
                    <div class="alert alert-success py-2 px-3 small mb-0">
                        <strong>Catatan Pajak:</strong> THR adalah objek PPh 21 dan akan dihitung sebagai penghasilan tidak teratur.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm overflow-hidden border-start border-4 border-warning">
                <div class="card-header bg-dark py-3 text-white d-flex align-items-center">
                    <i class="bi bi-file-earmark-check-fill fs-4 me-2 text-warning"></i>
                    <h5 class="mb-0">Uang Kompensasi PKWT</h5>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted small mb-4">Hanya untuk karyawan Kontrak (PKWT) saat masa kontrak berakhir atau selesai.</p>

                    <h6 class="fw-bold"><i class="bi bi-calculator me-2"></i>Rumus Perhitungan:</h6>
                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <p class="mb-1 small">Sesuai PP No. 35 Tahun 2021:</p>
                        <div class="fw-bold text-dark mb-3">(Masa Kerja / 12) &times; 1 Bulan Upah</div>
                        <small class="text-muted">*Berhak didapatkan minimal telah bekerja 1 bulan secara terus-menerus.</small>
                    </div>

                    <h6 class="fw-bold">Ketentuan Penting:</h6>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2"><i class="bi bi-exclamation-circle me-2 text-warning"></i>Diberikan saat kontrak berakhir atau selesai masa kontraknya.</li>
                        <li class="mb-2"><i class="bi bi-exclamation-circle me-2 text-warning"></i>Jika kontrak diperpanjang, kompensasi periode pertama wajib dibayar sebelum perpanjangan.</li>
                        <li class="mb-2"><i class="bi bi-exclamation-circle me-2 text-warning"></i>Karyawan Tetap (PKWTT) <strong>tidak berhak</strong> atas uang kompensasi ini.</li>
                    </ul>
                </div>
                <div class="card-footer bg-white border-0 p-4 pt-0">
                    <div class="alert alert-warning py-2 px-3 small mb-0">
                        <strong>Logika HRMS:</strong> Sistem akan otomatis menghitung estimasi kompensasi berdasarkan tanggal berakhir kontrak.
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="p-4 bg-white border rounded-4 shadow-sm">
                <h5 class="fw-bold mb-4"><i class="bi bi-question-diamond-fill me-2 ac"></i>Pertanyaan yang Sering Diajukan</h5>

                <div class="row g-4">
                    <div class="col-md-6">
                        <p class="fw-bold small mb-1 ac">Apakah Karyawan Percobaan (Probation) dapat THR?</p>
                        <p class="small text-muted">Ya, jika masa kerja sudah minimal 1 bulan, berhak mendapatkan THR secara proporsional sesuai rumus masa kerja/12.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="fw-bold small mb-1 ac">Apa beda Kompensasi PKWT dengan Pesangon?</p>
                        <p class="small text-muted">Kompensasi hanya untuk PKWT (Kontrak). Pesangon diberikan untuk PKWTT (Tetap) yang mengalami PHK sesuai ketentuan yang berlaku.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-3 p-3 text-center">
                <p class="mb-0 small">
                    <i class="bi bi-info-circle me-2"></i>
                    Semua perhitungan di atas dilakukan secara otomatis oleh sistem <strong>BIT HRMS</strong> berdasarkan data kontrak dan riwayat absensi Anda.
                </p>
            </div>
        </div>
    </div>

</div>
@endsection