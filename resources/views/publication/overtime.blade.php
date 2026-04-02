@extends('layouts.main')

@section('title')
Perbandingan Metode Lembur: Reguler vs Fixed
@endsection

@section('content')
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Payroll</a></li>
                    <li class="breadcrumb-item active">Metode Lembur</li>
                </ol>
            </nav>
            <h1 class="fw-bold ac">Metode Perhitungan Lembur (Overtime)</h1>
            <p class="text-muted">Memahami perbedaan, dasar hukum, dan implementasi sistem antara lembur variabel dan lembur tetap.</p>
        </div>
        <div class="col-lg-4 text-lg-end d-flex align-items-center justify-content-lg-end">
            <div class="p-3 bg-light rounded-pill border">
                <i class="bi bi-info-circle-fill ac me-2"></i>
                Standar PP No. 35 Tahun 2021
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm overflow-hidden">
                <div class="card-header bg-success py-3 text-white">
                    <h5 class="card-title mb-0"><i class="bi bi-clock-history me-2"></i>Overtime Reguler (Berjalan)</h5>
                </div>
                <div class="card-body p-4">
                    <p class="card-text">Sering disebut sebagai <strong>Actual Overtime</strong>. Perhitungan didasarkan pada setiap menit/jam ekstra yang dilakukan karyawan setelah jam kerja normal berakhir.</p>

                    <h6 class="fw-bold mt-4">Karakteristik Utama:</h6>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex align-items-start px-0">
                            <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                            <div><strong>Berbasis Absensi:</strong> Data ditarik otomatis dari log fingerprint/mobile attendance.</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start px-0">
                            <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                            <div><strong>Skala Indeks:</strong> Mengikuti aturan pemerintah (Jam ke-1: 1.5x, Jam ke-2+: 2x).</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start px-0">
                            <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                            <div><strong>Variabel:</strong> Jumlah yang diterima karyawan berbeda-beda setiap bulan.</div>
                        </li>
                    </ul>

                    <div class="p-3 bg-light rounded border">
                        <small class="text-muted d-block mb-1">Rumus Sistem:</small>
                        <code class="text-dark fw-bold">(Σ Jam Indeks x Upah Sejam)</code>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm overflow-hidden">
                <div class="card-header bg-primary py-3 text-white">
                    <h5 class="card-title mb-0"><i class="bi bi-layers-fill me-2"></i>Overtime Fixed (Paket)</h5>
                </div>
                <div class="card-body p-4">
                    <p class="card-text">Disebut juga sebagai <strong>Lembur Flat</strong>. Perusahaan memberikan tunjangan lembur dalam jumlah tetap setiap bulan yang sudah disepakati dalam kontrak kerja.</p>

                    <h6 class="fw-bold mt-4">Karakteristik Utama:</h6>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex align-items-start px-0">
                            <i class="bi bi-check-circle-fill ac me-2 mt-1"></i>
                            <div><strong>Tunjangan Tetap:</strong> Nilai tidak dipengaruhi oleh fluktuasi jumlah jam lembur.</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start px-0">
                            <i class="bi bi-check-circle-fill ac me-2 mt-1"></i>
                            <div><strong>Posisi Tertentu:</strong> Biasanya untuk level Supervisor, Manager, atau pekerjaan lapangan (Sales/Field Tech).</div>
                        </li>
                        <li class="list-group-item d-flex align-items-start px-0">
                            <i class="bi bi-check-circle-fill ac me-2 mt-1"></i>
                            <div><strong>Efisiensi:</strong> Mempermudah budget forecasting bagi departemen Finance.</div>
                        </li>
                    </ul>

                    <div class="p-3 bg-light rounded border">
                        <small class="text-muted d-block mb-1">Rumus Sistem:</small>
                        <code class="text-dark fw-bold">Fixed Amount (Locked in Contract)</code>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-5">
        <div class="card-header bg-dark text-white py-3">
            <h5 class="mb-0"><i class="bi bi-calculator me-2"></i>Algoritma Perhitungan Lembur Reguler</h5>
        </div>
        <div class="card-body p-4">

            <div class="mb-5">
                <h6 class="fw-bold ac text-uppercase small">Langkah 1: Menentukan Upah Per Jam</h6>
                <p>Dasar penghitungan upah lembur didasarkan pada upah bulanan. Upah bulanan adalah **Gaji Pokok + Tunjangan Tetap**.</p>
                <div class="bg-light p-3 rounded-3 text-center border">
                    <span class="fs-5 fw-bold">Upah Per Jam = 1 / 173 &times; Upah Sebulan</span>
                </div>
            </div>

            <div class="mb-5">
                <h6 class="fw-bold ac text-uppercase small">Langkah 2: Menghitung Jam Lembur (Indeks)</h6>
                <p>Waktu kerja lembur dikalikan dengan indeks pengali sesuai urutan jamnya:</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 h-100">
                            <span class="badge bg-secondary mb-2">Hari Kerja Biasa</span>
                            <table class="table table-sm table-borderless mb-0">
                                <tr>
                                    <td>Jam ke-1</td>
                                    <td class="text-end fw-bold">1.5x</td>
                                </tr>
                                <tr>
                                    <td>Jam ke-2 & seterusnya</td>
                                    <td class="text-end fw-bold">2.0x</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 h-100 bg-light">
                            <span class="badge bg-danger mb-2">Hari Libur (6 Hari Kerja)</span>
                            <table class="table table-sm table-borderless mb-0 small">
                                <tr>
                                    <td>Jam ke-1 s/d ke-7</td>
                                    <td class="text-end fw-bold">2.0x</td>
                                </tr>
                                <tr>
                                    <td>Jam ke-8</td>
                                    <td class="text-end fw-bold">3.0x</td>
                                </tr>
                                <tr>
                                    <td>Jam ke-9 s/d ke-11</td>
                                    <td class="text-end fw-bold">4.0x</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary bg-opacity-10 p-4 rounded-4 border border-primary border-opacity-25">
                <h6 class="fw-bold ac"><i class="bi bi-info-circle-fill me-2"></i>Contoh Simulasi Perhitungan</h6>
                <p class="small mb-3">Seorang karyawan memiliki Gaji Pokok Rp 5.000.000 dan Tunjangan Tetap Rp 190.000. Ia melakukan lembur selama <strong>3 jam</strong> pada hari kerja biasa.</p>

                <div class="row small">
                    <div class="col-md-6">
                        <ol>
                            <li><strong>Upah Sejam:</strong><br>Rp 5.190.000 / 173 = <strong>Rp 30.000</strong></li>
                            <li><strong>Indeks Lembur:</strong><br>Jam ke-1 (1.5) + Jam ke-2 (2.0) + Jam ke-3 (2.0) = <strong>5.5 Jam Indeks</strong></li>
                        </ol>
                    </div>
                    <div class="col-md-6 border-start">
                        <p class="mb-1"><strong>Total Upah Lembur:</strong></p>
                        <h4 class="ac fw-bold">Rp 165.000</h4>
                        <span class="text-muted">(5.5 Jam Indeks &times; Rp 30.000)</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card border-0 shadow-sm mb-5">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-4">Parameter Perbandingan</th>
                            <th>Overtime Reguler</th>
                            <th>Overtime Fixed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-bold">Dasar Hukum</td>
                            <td>PP 35/2021 & UU Ciptaker</td>
                            <td>Kesepakatan Perjanjian Kerja (PK/PP/PKB)</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Objek PPh 21</td>
                            <td>Penghasilan Tidak Teratur</td>
                            <td>Penghasilan Teratur (Tunjangan Tetap)</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Validasi HR</td>
                            <td>Membutuhkan Surat Perintah Lembur (SPL) harian</td>
                            <td>Validasi berdasarkan target/output kerja</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Keuntungan Karyawan</td>
                            <td>Bayaran sesuai tenaga yang dikeluarkan</td>
                            <td>Kepastian penghasilan (Income Security)</td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-bold">Kelemahan</td>
                            <td>Administrasi lebih rumit (audit absensi)</td>
                            <td>Bisa memicu sengketa jika jam kerja riil sangat tinggi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row align-items-center bg-light rounded-4 p-4 mx-0">
        <div class="col-md-2 text-center">
            <i class="bi bi-shield-check ac display-4"></i>
        </div>
        <div class="col-md-10">
            <h5 class="fw-bold">Penting: Prinsip "No Less Than" (Tidak Boleh Kurang)</h5>
            <p class="small text-muted mb-0">
                Secara hukum di Indonesia, penggunaan <strong>Overtime Fixed</strong> diperbolehkan selama nilai paket tersebut <strong>tidak lebih rendah</strong> daripada nilai lembur aktual jika dihitung menggunakan rumus pemerintah. HRMS kami secara cerdas memantau selisih antara nilai paket dan jam riil untuk meminimalisir risiko kepatuhan (Compliance Risk).
            </p>
        </div>
    </div>

    <div class="mt-5">
        <h4 class="mb-4">Pertanyaan Seputar Implementasi</h4>
        <div class="accordion" id="overtimeFAQ">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne">
                        Apakah karyawan Overtime Fixed masih bisa dapat lembur hari libur?
                    </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#overtimeFAQ">
                    <div class="accordion-body">
                        Tergantung kebijakan perusahaan. Namun, standar praktik terbaik adalah memberikan insentif tambahan jika lembur dilakukan pada Hari Libur Nasional, karena paket lembur biasanya hanya mencakup jam kerja ekstra di hari kerja biasa.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">
                        Bagaimana jika karyawan resign di tengah bulan?
                    </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#overtimeFAQ">
                    <div class="accordion-body">
                        Untuk <strong>Reguler</strong>, dibayar sesuai jam kerja terakhir. Untuk <strong>Fixed</strong>, biasanya dilakukan perhitungan <i>pro-rate</i> berdasarkan jumlah hari kerja efektif yang dijalani pada bulan tersebut.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection