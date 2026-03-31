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
                        Sistem Payroll Karyawan
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3 h2">
                    Kelola <span class="hl">Payroll Karyawan</span> Lebih Akurat & Otomatis
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Proses penggajian karyawan menjadi lebih mudah dengan sistem payroll terintegrasi.
                    Hitung gaji, tunjangan, potongan, hingga pajak secara otomatis dengan hasil yang akurat,
                    serta akses laporan payroll secara real-time dalam satu platform.
                </p>

                <!-- CTA -->
                <div class="d-flex gap-3 flex-wrap justify-content-lg-start justify-content-center">
                    <button class="btn btn-hero-ghost"> Hubungi Sales</button>
                    <button class="btn btn-hero-main"> Coba BIT Gratis</button>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model/model-23.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image">
            </div>


        </div>

    </div>

</section>

<!-- ════ SECTIION 2 ════ -->
@include('home.payroll_employee_partial.payroll_section_2')

<!-- ════ SECTIION 3 ════ -->
@include('home.payroll_employee_partial.payroll_section_3')

@include('./home.home_partial.cta_banner')

@endsection