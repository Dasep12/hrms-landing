@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
<!-- ════════════════════════════════
     HERO — Gadjian-style centered
    ════════════════════════════════ -->
<section class="hero-section">
    <div class="container-xl px-3 px-lg-5 py-5 position-relative" style="z-index:1">

        <div class="row align-items-center">

            <!-- LEFT COLUMN -->
            <div class="col-lg-6 text-lg-start text-center">

                <!-- Badge -->
                <div class="mb-3">
                    <div class="hero-badge d-inline-flex">
                        <span class="badge-dot"></span>
                        Software HR terbaik di Indonesia
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3">
                    Payroll Software untuk Mengelola
                    Keuangan &amp; Karyawan <span class="hl">Perusahaan</span>
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Platform Indonesia terbaik untuk menghitung gaji, cuti, lembur,
                    dan Bonus & THR secara otomatis sesuai dengan UU Ketenagakerjaan.
                    Sistem berbasis online, bisa diakses di mana saja.
                </p>

                <!-- CTA -->
                <div class="d-flex gap-3 flex-wrap justify-content-lg-start justify-content-center">
                    <button class="btn btn-hero-ghost"> Hubungi Sales</button>
                    <button class="btn btn-hero-main"> Coba BIT Gratis</button>
                </div>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model-5.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image">
            </div>


        </div>

    </div>

</section>


<!-- ════ TRUST BAR ════ -->
<div class="trust-bar">
    <div class="container-xl px-3 px-lg-4">
        <p class="text-center mb-3" style="color:var(--gray-500);font-size:17.5px;font-weight:500">
            Customer Kami :
        </p>

        <div class="trust-logos">

            <div class="trust-logo">
                <img src="{{ asset('assets/images/logo/bti_logo_hires.png') }}">
            </div>

            <div class="trust-logo">
                <img src="{{ asset('assets/images/logo/btp - Copy.png') }}">
            </div>

            <!-- <div class="trust-logo">
                <img src="{{ asset('assets/images/logo/MIRAI LOGO.png') }}">
            </div> -->

            <div class="trust-logo">
                <img src="{{ asset('assets/images/logo/logo-rim.png') }}">
            </div>

        </div>
    </div>
</div>


<!-- ════ FEATURES ════ -->
<section class="py-5 py-lg-6" style="padding-top:80px!important;padding-bottom:80px!important">

    <div class="container-xl px-3 px-lg-4">

        <!-- Header -->
        <div class="text-center mb-5">
            <span class="section-tag">Kenapa Memilih BIT HRMS ? </span>

            <h2 class="section-title mt-2" style="font-size:clamp(26px,3.5vw,40px)">
                Platform HR Modern untuk Mengelola <span class="ac">Karyawan & Payroll</span> Lebih Efisien
            </h2>

            <p style="color:var(--gray-500);font-size:16px;max-width:640px;margin:0 auto">
                Satu platform terintegrasi untuk mengelola data karyawan, absensi, payroll,
                dan laporan HR perusahaan secara otomatis, aman, dan real-time.
            </p>
        </div>

        <!-- Features -->
        <div class="row g-4">

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="feat-icon mb-3" style="background:var(--bit-blue-pale)">🗂️</div>
                    <h5 class="mb-2">Manajemen Data Terpusat</h5>
                    <p>Seluruh data karyawan tersimpan dalam satu sistem terstruktur sehingga mudah dikelola, dicari, dan digunakan untuk laporan HR.</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="feat-icon mb-3" style="background:#E8F5E9">🔒</div>
                    <h5 class="mb-2">Keamanan Tingkat Enterprise</h5>
                    <p>Data perusahaan terlindungi dengan enkripsi modern, sistem kontrol akses, dan backup otomatis setiap hari.</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="feat-icon mb-3" style="background:#E0F7FA">☁️</div>
                    <h5 class="mb-2">Cloud & Real-Time</h5>
                    <p>Akses sistem HR dari mana saja melalui browser maupun smartphone dengan data yang selalu tersinkronisasi.</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="feat-icon mb-3" style="background:#FFF3E0">⚡</div>
                    <h5 class="mb-2">Implementasi Cepat</h5>
                    <p>Sistem siap digunakan tanpa instalasi rumit sehingga perusahaan dapat langsung mulai mengelola HR secara digital.</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="feat-icon mb-3" style="background:#F3E5F5">📊</div>
                    <h5 class="mb-2">Dashboard & Insight HR</h5>
                    <p>Pantau kehadiran, performa tim, dan aktivitas HR melalui dashboard visual yang informatif.</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="feat-icon mb-3" style="background:#E3F2FD">🧩</div>
                    <h5 class="mb-2">Ekosistem Terintegrasi</h5>
                    <p>Seluruh modul HR seperti absensi, payroll, cuti, dan BPJS terhubung dalam satu platform tanpa input ganda.</p>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- ════ SOLUTIONS ════ -->
<section class="bg-gray-50 py-5" style="padding-top:80px!important;">

    <div class="container-xl px-3 px-lg-4">

        <span class="section-tag">Fitur Utama</span>

        <h2 class="section-title mt-2 mb-2" style="font-size:clamp(26px,3.5vw,40px)">
            Semua Kebutuhan <span class="ac">Manajemen HR</span> dalam Satu Platform
        </h2>

        <p style="color:var(--gray-500);font-size:16px;max-width:600px;margin-bottom:48px">
            Dari pengelolaan data karyawan hingga administrasi HR sehari-hari —
            semua terintegrasi untuk membantu tim HR bekerja lebih cepat dan efisien.
        </p>

        <div class="row g-4 align-items-start">

            <!-- Feature list -->
            <div class="col-12 col-lg-6 d-flex flex-column gap-3">

                <div class="sol-item">
                    <div class="sol-ic" style="background:var(--bit-blue-pale)">📋</div>
                    <div>
                        <h6>Import & Migrasi Data Mudah</h6>
                        <p>Pindahkan data karyawan dari Excel ke sistem hanya dalam beberapa langkah tanpa proses yang rumit.</p>
                    </div>
                </div>

                <div class="sol-item">
                    <div class="sol-ic" style="background:#FCE4EC">👤</div>
                    <div>
                        <h6>Portal Karyawan</h6>
                        <p>Karyawan dapat memperbarui data pribadi, melihat slip gaji, dan mengajukan cuti langsung dari aplikasi.</p>
                    </div>
                </div>

                <div class="sol-item">
                    <div class="sol-ic" style="background:#E8F5E9">⚙️</div>
                    <div>
                        <h6>Custom Data Karyawan</h6>
                        <p>Tambahkan dan sesuaikan field data karyawan sesuai kebutuhan struktur organisasi perusahaan.</p>
                    </div>
                </div>

                <div class="sol-item">
                    <div class="sol-ic" style="background:#E0F7FA">🔗</div>
                    <div>
                        <h6>Modul HR Terhubung</h6>
                        <p>Data karyawan otomatis terhubung dengan modul absensi, payroll, cuti, dan laporan HR.</p>
                    </div>
                </div>

                <div class="sol-item">
                    <div class="sol-ic" style="background:#F3E5F5">🌿</div>
                    <div>
                        <h6>Administrasi HR Digital</h6>
                        <p>Kelola dokumen karyawan, kontrak kerja, dan administrasi HR secara digital tanpa kertas.</p>
                    </div>
                </div>

            </div>

            <!-- Dashboard panel -->
            <div class="col-12 col-lg-6 d-flex">
                <div class="app-panel">
                    <img class="app-image" style="border-radius: 10px;" src="{{ asset('assets/images/model-13.png') }}" alt="BIT HRMS Dashboard">
                </div>
            </div>

        </div>

    </div>

</section>


<!-- ════ APP PREVIEW ════ -->
<section class="bg-gray-50 " style="padding-bottom:80px!important">
    <div class="container-xl px-3 px-lg-4">
        <div class="row align-items-center g-5">
            <!-- App screens -->
            <div class="col-12 col-lg-5">
                <div class="d-flex gap-3 justify-content-center align-items-end">
                    <img src="{{ asset('assets/images/hero-7.png') }}" alt="App Preview 1" class="" style="animation-delay:.4s;border-radius:16px;box-shadow:0 20px 40px rgba(0,0,0,0.15);height:100%;width:100%">
                </div>
            </div>

            <!-- Feature points -->
            <div class="col-12 col-lg-7">
                <span class="section-tag">Aplikasi Mobile</span>
                <h2 class="section-title mt-2 mb-2" style="font-size:clamp(26px,3.5vw,40px)">HR di <span class="ac">Genggaman</span> Anda</h2>
                <p class="mb-4" style="color:var(--gray-500);font-size:16px;max-width:520px">BIT hadir sebagai aplikasi mobile yang powerful — karyawan dan HR bisa akses semua fitur kapan saja, dari mana saja.</p>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="prev-pt-ic">📍</div>
                        <div>
                            <h6 style="font-weight:700;margin-bottom:4px">Absensi GPS Real-Time</h6>
                            <p style="color:var(--gray-500);font-size:14px;margin:0;line-height:1.6">Clock-in dan clock-out dengan verifikasi lokasi GPS, selfie, dan QR Code secara akurat dan anti-fraud.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div class="prev-pt-ic">🔔</div>
                        <div>
                            <h6 style="font-weight:700;margin-bottom:4px">Notifikasi & Reminder Otomatis</h6>
                            <p style="color:var(--gray-500);font-size:14px;margin:0;line-height:1.6">Sistem akan mengirim notifikasi otomatis untuk approval, pengajuan cuti, jadwal shift, dan slip gaji.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div class="prev-pt-ic">📝</div>
                        <div>
                            <h6 style="font-weight:700;margin-bottom:4px">Pengajuan &amp; Approval Digital</h6>
                            <p style="color:var(--gray-500);font-size:14px;margin:0;line-height:1.6">Ajukan cuti, lembur, dan izin langsung dari hp. Atasan approve dalam satu klik dari mana saja.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div class="prev-pt-ic">📢</div>
                        <div>
                            <h6 style="font-weight:700;margin-bottom:4px">Pengumuman &amp; Informasi Perusahaan</h6>
                            <p style="color:var(--gray-500);font-size:14px;margin:0;line-height:1.6">Sampaikan pengumuman penting, informasi kebijakan, atau berita perusahaan langsung ke seluruh karyawan secara instan melalui sistem.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div class="prev-pt-ic">💰</div>
                        <div>
                            <h6 style="font-weight:700;margin-bottom:4px">E-Slip Gaji Instan</h6>
                            <p style="color:var(--gray-500);font-size:14px;margin:0;line-height:1.6">Karyawan terima notifikasi dan bisa lihat slip gaji setiap bulan tanpa perlu datang ke HRD.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div class="prev-pt-ic">📊</div>
                        <div>
                            <h6 style="font-weight:700;margin-bottom:4px">Dashboard HR Real-Time</h6>
                            <p style="color:var(--gray-500);font-size:14px;margin:0;line-height:1.6">Monitor kehadiran, cuti, dan performa tim secara langsung melalui dashboard yang informatif.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- ════ TESTIMONIALS ════ -->
<section class="py-5" style="padding-top:80px!important;padding-bottom:80px!important">
    <div class="container-xl px-3 px-lg-4">
        <div class="text-center mb-5">
            <span class="section-tag">Testimoni</span>
            <h2 class="section-title mt-2" style="font-size:clamp(26px,3.5vw,40px)">Yang Mereka <span class="ac">Katakan</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="testi-card">
                    <div class="stars mb-3">★★★★★</div>
                    <p style="color:var(--gray-700);font-size:14.5px;line-height:1.72;margin-bottom:20px">Bit benar-benar mengubah cara kami mengelola HR. Proses payroll yang dulu memakan waktu 3 hari sekarang selesai dalam hitungan jam.</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="t-av">A</div>
                        <div>
                            <div style="font-weight:700;font-size:14px;color:var(--gray-900)">Yayan Nuryana</div>
                            <div style="font-size:12px;color:var(--gray-500)">HR Manager · PT Bonecom Tricom</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="testi-card">
                    <div class="stars mb-3">★★★★★</div>
                    <p style="color:var(--gray-700);font-size:14.5px;line-height:1.72;margin-bottom:20px">Fitur self-service karyawan sangat membantu. Tim HR kami tidak lagi dibanjiri pertanyaan soal slip gaji dan sisa cuti setiap bulan.</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="t-av">S</div>
                        <div>
                            <div style="font-weight:700;font-size:14px;color:var(--gray-900)">Intan Puspita Sari</div>
                            <div style="font-size:12px;color:var(--gray-500)">HR Supervisor . PT Ravalia Inti Mandiri</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="testi-card">
                    <div class="stars mb-3">★★★★★</div>
                    <p style="color:var(--gray-700);font-size:14.5px;line-height:1.72;margin-bottom:20px">Integrasi dengan sistem akuntansi berjalan mulus. Data BPJS dan PPh 21 otomatis terkalkulasi tanpa error sama sekali.</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="t-av">W</div>
                        <div>
                            <div style="font-weight:700;font-size:14px;color:var(--gray-900)">Wawan Sujatmiko</div>
                            <div style="font-size:12px;color:var(--gray-500)">Directur · PT Bonecom Tricom Group</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="faq-section py-5" style="padding-top:80px;padding-bottom:80px">

    <div class="container-xl">

        <div class="text-center mb-5">

            <span class="section-tag">FAQ</span>

            <h2 class="section-title mt-2">
                Pertanyaan yang <span class="ac">Sering Ditanyakan</span>
            </h2>

            <p style="color:var(--gray-500);max-width:600px;margin:auto">
                Temukan jawaban untuk pertanyaan umum mengenai penggunaan
                BIT HRMS dan bagaimana sistem ini membantu perusahaan
                mengelola SDM dengan lebih efisien.
            </p>

        </div>


        <div class="faq-wrapper">

            <div class="faq-item">
                <button class="faq-question">
                    Apakah BIT HRMS dapat digunakan untuk perusahaan dengan banyak cabang?
                    <span class="faq-icon">+</span>
                </button>

                <div class="faq-answer">
                    Ya. Sistem mendukung pengelolaan karyawan dari berbagai cabang dalam satu dashboard terpusat sehingga HR dapat memonitor seluruh operasional dengan mudah.
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Apakah sistem absensi mendukung GPS dan selfie?
                    <span class="faq-icon">+</span>
                </button>

                <div class="faq-answer">
                    Ya. Absensi dapat menggunakan verifikasi lokasi GPS, selfie, maupun QR Code untuk memastikan kehadiran karyawan lebih akurat dan transparan.
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Apakah payroll dihitung secara otomatis?
                    <span class="faq-icon">+</span>
                </button>

                <div class="faq-answer">
                    Sistem payroll menghitung gaji secara otomatis berdasarkan absensi, lembur, tunjangan, potongan, serta komponen gaji lainnya.
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Apakah data karyawan aman?
                    <span class="faq-icon">+</span>
                </button>

                <div class="faq-answer">
                    Data karyawan disimpan dengan sistem keamanan modern, enkripsi data, serta backup otomatis sehingga informasi perusahaan tetap aman.
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Apakah BIT dapat diakses melalui smartphone?
                    <span class="faq-icon">+</span>
                </button>

                <div class="faq-answer">
                    Ya. Sistem dapat diakses melalui browser maupun aplikasi mobile sehingga HR dan karyawan dapat menggunakan fitur kapan saja dan dari mana saja.
                </div>
            </div>

        </div>

    </div>
</section>



<!-- ════ CTA BANNER ════ -->
<section class="pb-5" style="padding-bottom:80px!important">
    <div class="container-xl px-3 px-lg-4">
        <div class="cta-banner p-4 p-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-12 col-lg-7">
                    <h2 style="font-family:'Sora',sans-serif;font-size:clamp(22px,3vw,34px);font-weight:800;color:var(--bit-navy);margin-bottom:8px">Solusi Mudah Kelola Data Karyawan.<br>Akurat, Real-Time, dan Aman.</h2>
                    <p style="color:var(--bit-blue-mid);font-size:15px;margin:0">Mulai gratis sekarang — tidak perlu kartu kredit.</p>
                </div>
                <div class="col-12 col-lg-5 d-flex gap-3 flex-wrap justify-content-lg-end">
                    <button class="btn btn-cta-m">🚀 Coba BIT Gratis</button>
                    <button class="btn btn-cta-s">Jadwalkan Demo</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection