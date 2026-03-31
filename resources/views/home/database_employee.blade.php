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
                        Database Karyawan
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3">
                    Manajemen Data Karyawan Lebih Mudah & <span class="hl">Terintegrasi</span>
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Kelola seluruh data karyawan, dokumen, dan administrasi HR dalam satu platform digital.
                    Dengan BIT , proses administrasi menjadi otomatis, lebih cepat, dan minim kesalahan sehingga tim HR dapat menghemat waktu dan fokus pada strategi pengembangan SDM.
                </p>

                <!-- CTA -->
                @include('home.home_partial.button_cta')

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model/model-166.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image">
            </div>


        </div>

    </div>

</section>

<!-- ════ SECTIION 2 ════ -->
@include('home.database_employee_partial.database_section_2')

<!-- ════ SECTIION 3 ════ -->
@include('home.database_employee_partial.database_section_3')

@include('./home.home_partial.cta_banner')

@endsection