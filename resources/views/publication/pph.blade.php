@extends('layouts.main')

@section('title')
Panduan Detail PPh 21 Karyawan - Portal
@endsection

@section('content')

<style>
    p {
        color: var(--gray-500);
        font-size: 14px;
        margin: 0;
        line-height: 1.6;
    }
</style>
<div class="container py-5 mt-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="hero-title fw-bold ac">Pajak Penghasilan (PPh) Pasal 21</h1>
            <p class="lead text-muted hero-sub">
                Panduan komprehensif perhitungan pajak karyawan berdasarkan regulasi terbaru (PP No. 58 Tahun 2023 & PMK No. 168 Tahun 2023).
            </p>
        </div>
        <div class="col-md-4 text-end">
            <span class="badge bg-success p-2">Update Regulasi 2024</span>
        </div>
    </div>

    <hr>

    <div class="row my-5">
        <div class="col-12">
            <h3><i class="bi bi-bank me-2"></i>Dasar Hukum & Peraturan Terbaru</h3>
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body">
                    <ul class="mb-0 lead text-muted hero-sub">
                        <li><strong>Undang-Undang Nomor 7 Tahun 2021:</strong> Harmonisasi Peraturan Perpajakan (UU HPP).</li>
                        <li><strong>PP Nomor 58 Tahun 2023:</strong> Penggunaan Tarif Efektif Rata-Rata (TER) untuk pemotongan bulanan.</li>
                        <li><strong>PMK Nomor 168 Tahun 2023:</strong> Pedoman teknis pemotongan pajak atas penghasilan pekerjaan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card h-100 border-primary">
                <div class="card-header bg-primary text-white">1. Penghasilan Bruto (Objek Pajak)</div>
                <div class="card-body  text-muted">
                    <h6 class="fw-bold">Penghasilan Teratur:</h6>
                    <ul>
                        <li>Gaji Pokok & Tunjangan Rutin.</li>
                        <li>Premi Asuransi (JKK, JKM) yang dibayar pemberi kerja.</li>
                        <li>Natura tertentu (sesuai ambang batas PMK 66/2023).</li>
                    </ul>
                    <h6 class="fw-bold">Penghasilan Tidak Teratur:</h6>
                    <ul>
                        <li>THR & Bonus Tahunan.</li>
                        <li>Lembur (Overtime) & Insentif/Komisi.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-danger">
                <div class="card-header bg-danger text-white">2. Pengurang Pajak (Deductions)</div>
                <div class="card-body  text-muted">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item  text-muted">
                            <strong>Biaya Jabatan:</strong> 5% dari Bruto (Maks. Rp500.000/bulan).
                        </li>
                        <li class="list-group-item  text-muted">
                            <strong>Iuran Pensiun/JHT:</strong> Porsi yang dibayar oleh karyawan (bukan perusahaan).
                        </li>
                        <li class="list-group-item  text-muted">
                            <strong>Zakat/Sumbangan Keagamaan:</strong> Yang dibayarkan melalui pemberi kerja ke badan amil resmi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mb-3">Penghasilan Tidak Kena Pajak (PTKP) 2024</h3>
    <div class="table-responsive mb-5">
        <table class="table table-bordered table-hover  text-muted">
            <thead class="table-dark  text-muted">
                <tr>
                    <th>Kode PTKP</th>
                    <th>Status Keterangan</th>
                    <th>Besaran Per Tahun</th>
                    <th>Kategori TER</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <td>TK/0</td>
                    <td>Tidak Kawin, 0 Tanggungan</td>
                    <td>Rp 54.000.000</td>
                    <td>Kategori A</td>
                </tr>
                <tr>
                    <td>K/0</td>
                    <td>Kawin, 0 Tanggungan</td>
                    <td>Rp 58.500.000</td>
                    <td>Kategori A</td>
                </tr>
                <tr>
                    <td>K/1</td>
                    <td>Kawin, 1 Tanggungan</td>
                    <td>Rp 63.000.000</td>
                    <td>Kategori B</td>
                </tr>
                <tr>
                    <td>K/3</td>
                    <td>Kawin, 3 Tanggungan (Maksimal)</td>
                    <td>Rp 72.000.000</td>
                    <td>Kategori C</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="p-4 border rounded bg-white shadow-sm">
                <h3>Mekanisme Pemotongan (TER vs Pasal 17)</h3>
                <p>Dalam sistem , perhitungan dilakukan dalam dua tahap:</p>
                <div class="row text-center mt-4">
                    <div class="col-md-5">
                        <div class="p-3 bg-light border rounded">
                            <h5>Masa Jan - Nov</h5>
                            <p class="small text-muted">Menggunakan Tarif Efektif (TER)</p>
                            <code class="d-block">PPh 21 = Bruto x %TER</code>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-right fs-2 d-none d-md-block"></i>
                    </div>
                    <div class="col-md-5">
                        <div class="p-3 bg-light border rounded border-primary">
                            <h5>Masa Desember</h5>
                            <p class="small text-muted">Hitung Ulang Setahun (Pasal 17)</p>
                            <code class="d-block">PPh 21 = Total Pajak Setahun - PPh yg sdh dibayar (Jan-Nov)</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3>Metode Pemotongan di </h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Gross</h5>
                    <p class="card-text text-muted">Pajak sepenuhnya dipotong dari gaji karyawan. Take home pay berkurang senilai pajak.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm border-info">
                <div class="card-body text-center">
                    <h5 class="card-title text-info">Gross Up</h5>
                    <p class="card-text text-muted">Perusahaan memberikan tunjangan pajak. Gaji bersih karyawan tetap sesuai kesepakatan.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Net</h5>
                    <p class="card-text text-muted">Perusahaan menanggung pajak secara langsung tanpa menjadikannya tunjangan pajak (non-deductible bagi perusahaan).</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-warning">
                <div class="card-header bg-warning text-dark fw-bold">
                    <i class="bi bi-person-exclamation me-2"></i>Karyawan Tanpa NPWP/NIK Tervalidasi
                </div>
                <div class="card-body">
                    <p>Berdasarkan regulasi perpajakan, karyawan yang tidak memiliki NPWP (atau NIK yang belum tervalidasi sebagai NPWP) akan dikenakan tarif <strong>20% lebih tinggi</strong> dari tarif normal.</p>
                    <ul class="small text-muted">
                        <li>Contoh: Jika tarif normal 5%, maka menjadi 6%.</li>
                        <li>Pastikan NIK sudah tervalidasi di sistem DJP .</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-secondary">
                <div class="card-header bg-secondary text-white fw-bold">
                    <i class="bi bi-calendar-range me-2"></i>Karyawan Masuk/Keluar Tengah Tahun
                </div>
                <div class="card-body">
                    <p>Sistem akan melakukan <strong>Disetahunkan</strong> atau <strong>Tidak Disetahunkan</strong> tergantung kondisi:</p>
                    <ul class="small text-muted">
                        <li><strong>Masuk Tengah Tahun:</strong> Pajak dihitung berdasarkan proyeksi penghasilan hingga Desember.</li>
                        <li><strong>Resign:</strong> Dilakukan hitung ulang (final) di bulan terakhir bekerja. Jika ada kelebihan bayar, perusahaan wajib mengembalikannya ke karyawan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light p-4 rounded-4 mb-5 border">
        <h4 class="mb-4 text-center">Siklus Pelaporan Pajak di </h4>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="display-6 ac mb-2">01</div>
                <h6>Pemotongan</h6>
                <p class="small">Sistem memotong pajak otomatis setiap bulan saat <i>running payroll</i>.</p>
            </div>
            <div class="col-md-3">
                <div class="display-6 ac mb-2">02</div>
                <h6>Penyetoran</h6>
                <p class="small">Perusahaan menyetor total pajak ke kas negara paling lambat tanggal 10 bulan berikutnya.</p>
            </div>
            <div class="col-md-3">
                <div class="display-6 ac mb-2">03</div>
                <h6>E-Bupot</h6>
                <p class="small">HR menerbitkan Bukti Potong 1721-A1 di awal tahun (Januari/Februari).</p>
            </div>
            <div class="col-md-3">
                <div class="display-6 ac mb-2">04</div>
                <h6>Lapor SPT</h6>
                <p class="small">Karyawan wajib lapor SPT Tahunan pribadi secara mandiri paling lambat 31 Maret.</p>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <h3 class="mb-3">Pertanyaan Umum (FAQ)</h3>
        <div class="accordion" id="faqPajak">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Mengapa pajak saya di bulan Desember berbeda jauh dengan bulan lainnya?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqPajak">
                    <div class="accordion-body">
                        Bulan Januari-November menggunakan tarif rata-rata (TER) yang bersifat estimasi. Di bulan Desember, sistem menghitung total penghasilan setahun secara riil, lalu dikurangi PTKP dan dikalikan tarif progresif (Pasal 17). Selisihnya itulah yang menjadi potongan di bulan Desember.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Apakah bonus/THR dikenakan pajak yang sama?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqPajak">
                    <div class="accordion-body">
                        Ya. Bonus dan THR ditambahkan ke dalam penghasilan bruto di bulan penerimaan, sehingga otomatis akan meningkatkan tarif TER pada bulan tersebut atau menambah total pajak terutang dalam setahun.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-3 fs-4"></i>
        <div>
            <strong>Catatan untuk Karyawan:</strong> Pastikan status PTKP Anda sudah sesuai dengan Kartu Keluarga terbaru di profil untuk menghindari kesalahan pemotongan pajak.
        </div>
    </div>

</div>
@endsection