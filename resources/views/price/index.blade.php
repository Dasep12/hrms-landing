@extends('layouts.main')

@section('title')
@endsection

@section('content')

<style>
    body {
        background: #f8f9fa;
    }

    .pricing-card {
        border-radius: 12px;
        transition: 0.3s;
        height: 100%;
    }

    .pricing-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .highlight {
        border: 2px solid #1455cc;
        background: #fff;
    }

    .feature-box {
        background: #f5f8ff;
        border-radius: 8px;
        padding: 15px;
    }

    .badge-popular {
        position: absolute;
        top: -10px;
        right: 15px;
    }

    .btn-dark {
        background-color: #1455cc;
        border: none;
        border-radius: 8px;
    }

    .btn-dark:hover {
        background-color: #0d3a99;
        border: none;   
        border-radius: 8px;
    }
</style>
<section class="pb-5">
    <div class="container py-5 mt-5">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Solusi HR terpadu untuk mendukung operasional <br>
                dan pertumbuhan bisnis Anda
            </h2>
            <p class="text-muted">
                Temukan solusi yang dirancang sesuai kebutuhan perusahaan Anda
            </p>
        </div>

        <div class="row g-4">

            <!-- ESSENTIAL -->
            <div class="col-md-6">
                <div class="card pricing-card p-4">
                    <h4 class="fw-bold">Basic</h4>
                    <p class="text-muted">
                        Sistem HR basic dengan berbagai fitur esensial untuk peningkatan efisiensi.
                    </p>

                    <div class="feature-box mb-4">
                        <strong>Fitur unggulan</strong>
                        <ul class="mt-2 mb-0">
                            <li>Absensi via Web Based</li>
                            <li>Kalkulasi pajak otomatis</li>
                            <li>Absensi langsung karyawan</li>
                        </ul>
                    </div>

                    <p class="fw-semibold">Konsultasikan harga dengan kami</p>

                    <button class="btn btn-dark w-100">
                        WhatsApp sales
                    </button>
                </div>
            </div>

            <!-- PLUS -->
            <div class="col-md-6">
                <div class="card pricing-card highlight p-4 position-relative">

                    <span class="badge badge-popular" style="background-color: #1455cc;">Most popular</span>

                    <h3 style="font-weight: 700; color: #1455cc">Plus</h3>
                    <p class="text-muted">
                        Teknologi HR tingkat lanjut untuk produktivitas & fleksibilitas.
                    </p>

                    <div class="feature-box mb-4">
                        <strong>Fitur unggulan</strong>
                        <ul class="mt-2 mb-0">
                            <li>Sistem payroll multi company</li>
                            <li>Management kerja shift</li>
                            <li>Kelola multi cabang</li>
                        </ul>
                    </div>

                    <p class="fw-semibold">Konsultasikan harga dengan kami</p>

                    <button class="btn btn-dark w-100 mb-2">
                        WhatsApp sales
                    </button>
                    <!-- 
                <button class="btn btn-outline-secondary w-100">
                    Lihat perbandingan fitur ↓
                </button> -->
                </div>
            </div>


        </div>

    </div>
</section>


<!-- ════ CTA BANNER ════ -->
@include('home.home_partial.cta_banner')
@endsection