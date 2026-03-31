@extends('layouts.main')

@section('title')
@endsection

@section('content')


<section class="py-5 pb-5 mt-5" style="background:#f8f9fa;">
    <div class="container">

        <div class="row g-4 align-items-start">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">

                <h1 class="fw-bold">
                    Demo & Konsultasi <br>
                    <span class="text-primary">Gratis</span>
                </h1>

                <p class="text-muted mt-3">
                    Diskusikan kebutuhan HR perusahaan Anda bersama tim BIT HRMS.
                    Dapatkan solusi terbaik melalui sesi demo online secara langsung.
                </p>

                <!-- NOTE BOX -->
                <div class="p-4 mt-4 rounded" style="background:#f1f3f5;">
                    <h5 class="fw-bold">Catatan:</h5>
                    <ul class="mb-0 text-muted">
                        <li>Pastikan data yang Anda isi benar untuk memudahkan komunikasi.</li>
                        <li>Tim kami akan menghubungi Anda melalui WhatsApp atau email.</li>
                        <li>Pilih waktu yang sesuai agar sesi berjalan optimal.</li>
                        <li>Gunakan perangkat dengan koneksi internet stabil.</li>
                    </ul>
                </div>

            </div>

            <!-- RIGHT FORM -->
            <div class="col-lg-6">

                <div class="card shadow-sm border-0 p-4">
                    <h4 class="fw-bold mb-4">Hubungi Tim BIT HRMS</h4>

                    <form>

                        <!-- TANGGAL -->
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control">
                        </div>

                        <!-- JAM -->
                        <div class="mb-3">
                            <label class="form-label">Jam</label>
                            <input type="time" class="form-control">
                        </div>

                        <!-- NAMA -->
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label class="form-label">Alamat Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="email@domain.com">
                            </div>
                        </div>

                        <!-- HP -->
                        <div class="mb-3">
                            <label class="form-label">Nomor HP</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="text" class="form-control" placeholder="08xxxxxxx">
                            </div>
                        </div>

                        <!-- PERUSAHAAN -->
                        <div class="mb-3">
                            <label class="form-label">Nama Perusahaan</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Nama perusahaan">
                            </div>
                        </div>

                        <!-- JUMLAH KARYAWAN -->
                        <div class="mb-3">
                            <label class="form-label">Jumlah Karyawan</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-people"></i></span>
                                <input type="text" class="form-control" placeholder="Jumlah karyawan">
                            </div>
                        </div>

                        <!-- BUTTON -->
                        <button class="btn btn-primary w-100 py-2 fw-semibold">
                            Jadwalkan Demo
                        </button>

                    </form>
                </div>

            </div>

        </div>

    </div>
</section>


<!-- ════ CTA BANNER ════ -->
@endsection