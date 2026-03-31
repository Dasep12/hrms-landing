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
                        Grading Upah & Struktur Allowance
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3 h2">
                    Atur <span class="hl">Grading Upah & Allowance</span> Lebih Fleksibel
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Atur tunjangan karyawan berdasarkan class grading, pendidikan, jabatan,
                    atau struktur organisasi perusahaan. Sistem memungkinkan perusahaan
                    mengelola allowance secara konsisten dan fleksibel untuk setiap divisi
                    maupun perusahaan dalam group.
                </p>


                <!-- CTA -->
                <div class="d-flex gap-3 flex-wrap justify-content-lg-start justify-content-center">
                    <button class="btn btn-hero-ghost"> Hubungi Sales</button>
                    <button class="btn btn-hero-main"> Coba BIT Gratis</button>
                </div>

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model/model-18.png') }}"
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