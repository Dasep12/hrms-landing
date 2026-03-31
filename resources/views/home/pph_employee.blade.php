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
                        PPh 21 & Payroll
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3 h2">
                    Hitung <span class="hl">PPh 21 Otomatis</span> Lebih Akurat & Efisien
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Kelola perhitungan PPh 21 karyawan secara otomatis dan sesuai regulasi terbaru.
                    Mulai dari gaji tetap, tunjangan, hingga komponen variabel dapat dihitung secara real-time
                    dalam satu sistem HRMS. Proses payroll jadi lebih cepat, minim kesalahan, dan siap untuk pelaporan pajak.
                </p>

                <!-- CTA -->
                <div class="d-flex gap-3 flex-wrap justify-content-lg-start justify-content-center"> <button class="btn btn-hero-ghost"> Hubungi Sales</button> <button class="btn btn-hero-main"> Coba BIT Gratis</button> </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model/model-24.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image">
            </div>


        </div>

    </div>

</section>

<!-- ════ SECTIION 2 ════ -->
@include('home.pph_employee_partial.pph_section_2')

<!-- ════ SECTIION 3 ════ -->
@include('home.pph_employee_partial.pph_section_3')

@include('./home.home_partial.cta_banner')

@endsection