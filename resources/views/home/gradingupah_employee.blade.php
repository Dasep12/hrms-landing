@extends('layouts.main')

@section('title')
@endsection
@section('content')
<section class="hero-section">
    <div class="container-xl px-3 px-lg-5 py-5 position-relative" style="z-index:1">

        <div class="row align-items-center">

            <!-- LEFT COLUMN -->
            <div class="col-lg-6 text-lg-start text-center">

                <!-- Badge -->
                <div class="mb-3">
                    <div class="hero-badge d-inline-flex">
                        <span class="badge-dot"></span>
                        Grading Upah & Struktur Benefit
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3">
                    Kelola HR <span class="hl">Multi Company</span> dalam Satu Platform
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Kelola data karyawan, struktur organisasi, dan administrasi HR dari berbagai perusahaan
                    atau cabang dalam satu sistem terintegrasi. Dengan BIT , manajemen group perusahaan
                    menjadi lebih terpusat, efisien, dan mudah dipantau melalui satu dashboard.
                </p>


                <!-- CTA -->
                <div class="d-flex gap-3 flex-wrap justify-content-lg-start justify-content-center">
                    <button class="btn btn-hero-ghost"> Hubungi Sales</button>
                    <button class="btn btn-hero-main"> Coba BIT Gratis</button>
                </div>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model/model-17.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image">
            </div>


        </div>

    </div>

</section>

<!-- ════ SECTIION 2 ════ -->
@include('home.gradingupah_employee_partial.gradingupah_section_2')

<!-- ════ SECTIION 3 ════ -->
@include('home.gradingupah_employee_partial.gradingupah_section_3')

@include('./home.home_partial.cta_banner')

@endsection