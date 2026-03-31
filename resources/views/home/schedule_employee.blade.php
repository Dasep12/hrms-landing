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
                        Shift Scheduling
                    </div>
                </div>

                <!-- Headline -->
                <h5 class="hero-title mb-3">
                    Atur <span class="hl">Shift Kerja Karyawan</span> dengan Lebih Fleksibel
                </h5>

                <!-- Sub -->
                <p class="hero-sub mb-4">
                    Kelola jadwal dan pembagian shift karyawan secara fleksibel dalam satu platform.
                    Atur rotasi, ubah jadwal real-time, dan minimalkan konflik dengan lebih efisien.
                </p>


                <!-- CTA -->
                @include('home.home_partial.button_cta')

            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <img src="{{ asset('assets/images/model/model-21.png') }}"
                    alt="Software Payroll BIT"
                    class="img-fluid hero-image">
            </div>


        </div>

    </div>

</section>

<!-- ════ SECTIION 2 ════ -->
@include('home.schedule_employee_partial.schedule_section_2')

<!-- ════ SECTIION 3 ════ -->
@include('home.schedule_employee_partial.schedule_section_3')

@include('./home.home_partial.cta_banner')

@endsection