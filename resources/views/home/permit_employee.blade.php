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
                        Sistem Cuti & Perizinan Karyawan
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3 h2">
                    Kelola <span class="hl">Cuti & Izin Karyawan</span> Lebih Mudah dan Terpusat
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Permudah pengajuan cuti, izin, dan absensi karyawan dalam satu sistem terintegrasi.
                    Proses persetujuan menjadi lebih cepat dengan alur approval otomatis, serta monitoring
                    data cuti dan izin dapat dilakukan secara real-time untuk memastikan operasional tetap berjalan lancar.
                </p>


                <!-- CTA -->
                @include('home.home_partial.button_cta')

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model/model-22.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image">
            </div>


        </div>

    </div>

</section>

<!-- ════ SECTIION 2 ════ -->
@include('home.permit_employee_partial.permit_section_2')

<!-- ════ SECTIION 3 ════ -->
@include('home.permit_employee_partial.permit_section_3')

@include('./home.home_partial.cta_banner')

@endsection