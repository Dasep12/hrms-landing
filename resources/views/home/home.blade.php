@extends('layouts.main')

@section('title')
@endsection

@section('content')
<!-- ════════════════════════════════
     HERO — Gadjian-style centered
    ════════════════════════════════ -->
<section class="hero-section">
    <div class="container-xl px-3 px-lg-5 py-5 position-relative" style="z-index:1">

        <div class="row align-items-center" style="display: flex; justify-content: center;">

            <!-- LEFT COLUMN -->
            <div class="col-lg-5 text-lg-start text-center">

                <!-- Badge -->
                <div class="mb-3">
                    <div class="hero-badge d-inline-flex">
                        {{--  --}}
                        Software HR terbaik di Indonesia
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3 h1">
                    <span class="hl">Payroll Software</span> untuk Mengelola
                    Keuangan &amp; <span class="hl">Karyawan Perusahaan</span>
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Platform Indonesia terbaik untuk menghitung gaji, cuti, lembur,
                    dan Bonus & THR secara otomatis sesuai dengan UU Ketenagakerjaan.
                    Sistem berbasis online, bisa diakses di mana saja.
                </p>

                <!-- CTA -->
                @include('home.home_partial.button_cta')

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0" style="display: flex; justify-content: center;">

                <img src="{{ asset('assets/images/model/model-15.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image" style="display: flex; justify-content: center;">
            </div>


        </div>

    </div>

</section>


<!-- ════ TRUST BAR ════ -->
@include('home.home_partial.trusted_bar')


<!-- ════ FEATURES ════ -->
@include('home.home_partial.features')

<!-- ════ SOLUTIONS ════ -->
@include('home.home_partial.solutions')


<!-- ════ APP PREVIEW ════ -->
@include('home.home_partial.app_preview')


<!-- ════ TESTIMONIALS ════ -->
@include('home.home_partial.testimonial')

<!-- FAQ -->
@include('home.home_partial.faq')

<!-- ════ CTA BANNER ════ -->
@include('home.home_partial.cta_banner')
@endsection