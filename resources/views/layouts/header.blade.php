<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIT HRMS – Business Intelligent for Talent</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/regular.min.css" integrity="sha512-d2x1oQUT6HACW9UlXxWI6XrIBDrEE5z2tit/+kWEdXdVYuift7sm+Q6ucfGWQr1F0+GD9/6eYoYDegw2nm05Vw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- ════════════════════════════════
     NAVBAR (Bootstrap 5)
════════════════════════════════ -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-xl px-3 px-lg-4">

            <!-- Brand + Lang -->
            <a class="navbar-brand me-3 bit-logo" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo-bit.png') }}" alt="Logo Bit HRMS" class="logo-light" height="70" width="70">
            </a>

            <!-- Lang (desktop only) -->
            <div class="nav-lang d-none d-lg-flex align-items-center me-2">
                <a href="#" class="active">EN</a><span class="sep">|</span><a href="#">ID</a>
            </div>

            <!-- Toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="mainNav">

                <!-- Lang (mobile) -->
                <div class="nav-lang-wrap d-flex d-lg-none align-items-center gap-2 mt-2">
                    <div class="nav-lang">
                        <a href="#" class="active">EN</a><span class="sep">|</span><a href="#">ID</a>
                    </div>
                </div>

                <!-- Nav links centered -->
                <ul class="navbar-nav mx-auto gap-1">

                    <!-- Solusi & Fitur – MEGA -->
                    <li class="nav-item dropdown mega-menu-wrapper">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            Solusi &amp; Fitur
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <!-- Mega header -->
                            <div class="mega-header">
                                <span class="mega-header-title">Halaman Solusi</span>
                                <div class="mega-divider"></div>
                                <span class="mega-header-sub">Solusi BIT HRMS untuk Bisnis Anda</span>
                                <a href="#" class="mega-header-arrow">→</a>
                            </div>
                            <!-- Mega cols -->
                            <div class="row g-4">
                                <div class="col-12 col-lg-4 mega-col">
                                    <div class="mega-col-title">Manajemen Karyawan</div>
                                    <a class="dropdown-item" href="{{ route('database.employee') }}">Database Karyawan</a>
                                    <a class="dropdown-item" href="{{ route('struktur.employee') }}">Persetujuan Multilevel &amp; Struktur Organisasi</a>
                                    <a class="dropdown-item" href="{{ route('gradingupah.employee') }}">Struktur Allowance</a>
                                    <!-- <a class="dropdown-item" href="#">Dasbor Rekrutmen &amp; Jobsite</a> -->
                                    <!-- <div class="mega-col-title mt-4">Analisis Kinerja Karyawan</div> -->
                                    <!-- <a class="dropdown-item" href="#">Evaluasi Kinerja Karyawan</a> -->
                                    <a class="dropdown-item" href="{{ route('dashboard.employee') }}">Dasbor HR Analytics</a>
                                    <a class="dropdown-item" href="{{ route('apps.employee') }}">Aplikasi Mobile Karyawan</a>
                                </div>
                                <div class="col-12 col-lg-4 mega-col">
                                    <div class="mega-col-title">Manajemen Operasional HR</div>
                                    <a class="dropdown-item" href="{{ route('schedule.employee') }}">Shift &amp; Pola Kerja</a>
                                    <a class="dropdown-item" href="{{ route('permit.employee') }}">Cuti, Absensi &amp; Sakit</a>
                                    <!-- <a class="dropdown-item" href="#">Aplikasi Mobile Admin</a> -->
                                    <!-- <a class="dropdown-item" href="#">Manajemen Aset Kantor</a>
                                    <a class="dropdown-item" href="#">Integrasi dengan Platform Lain</a> -->
                                    <!-- <div class="mega-col-title mt-4">Solusi Lainnya</div>
                                    <a class="dropdown-item" href="#">Outsourcing</a>
                                    <a class="dropdown-item" href="#">Pelatihan HR dan Bisnis</a> -->
                                </div>
                                <div class="col-12 col-lg-4 mega-col">
                                    <div class="mega-col-title">Manajemen Kompensasi &amp; Tunjangan</div>
                                    <a class="dropdown-item" href="{{ route('payroll.employee') }}">Manajemen Payroll &amp; Pembayaran Gaji</a>
                                    <a class="dropdown-item" href="{{ route('pph.employee') }}">PPh 21 / 26 Karyawan</a>
                                    <!-- <a class="dropdown-item" href="#">Jaminan Sosial Karyawan (BPJS)</a> -->
                                    <a class="dropdown-item" href="{{ route('benefit.employee') }}">Benefit Karyawan</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Biaya -->
                    <li class="nav-item dropdown small-drop">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Biaya <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Paket Starter</a></li>
                            <li><a class="dropdown-item" href="#">Paket Professional</a></li>
                            <li><a class="dropdown-item" href="#">Paket Enterprise</a></li>
                        </ul>
                    </li>

                    <!-- Publikasi -->
                    <li class="nav-item dropdown small-drop">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Publikasi <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Kamus HR</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                            <li><a class="dropdown-item" href="#">Bit Academy</a></li>
                        </ul>
                    </li>

                    <!-- Kemitraan -->
                    <li class="nav-item dropdown small-drop">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Kemitraan <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mitra Bisnis</a></li>
                            <li><a class="dropdown-item" href="#">Program Referral</a></li>
                        </ul>
                    </li>

                    <!-- Tentang Kami -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>

                <!-- CTA -->
                <div class="nav-cta-wrap d-flex align-items-center gap-2 flex-wrap flex-lg-nowrap">
                    <button class="btn btn-masuk">MASUK</button>
                    <button class="btn btn-daftar">DAFTAR</button>
                    <button class="btn btn-coba">Coba BIT GRATIS!</button>
                </div>

            </div>
        </div>
    </nav>