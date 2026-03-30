@extends('layouts.main')

@section('title')
@endsection

@section('content')


<section class="pb-5">
    <div class="container py-5 mt-5">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tentang Kami</h2>
            <p class="text-muted">
                Mengenal lebih dekat BIT dan solusi HRMS yang kami hadirkan
            </p>
        </div>

        <div class="row align-items-center">

            <!-- TEXT -->
            <div class="col-lg-6 mb-4">
                <h3 class="fw-bold mb-3">
                    Solusi HR Modern untuk Bisnis yang Lebih Efisien
                </h3>

                <p class="text-muted">
                    <strong>BIT</strong> adalah penyedia solusi teknologi yang berfokus pada pengembangan
                    sistem <strong>Human Resource Management System (HRMS)</strong> untuk membantu
                    perusahaan mengelola sumber daya manusia secara lebih efektif dan terintegrasi.
                </p>

                <p class="text-muted">
                    Kami memahami bahwa pengelolaan karyawan, penggajian, absensi, hingga analisis data HR
                    membutuhkan sistem yang tidak hanya cepat, tetapi juga akurat dan mudah digunakan.
                    Oleh karena itu, BIT menghadirkan platform HRMS yang dirancang untuk menjawab kebutuhan
                    operasional sekaligus mendukung strategi bisnis Anda.
                </p>

                <p class="text-muted">
                    Dengan teknologi yang terus berkembang, kami berkomitmen untuk membantu bisnis dari
                    berbagai skala — mulai dari UMKM hingga perusahaan besar — dalam meningkatkan
                    produktivitas dan efisiensi kerja.
                </p>
            </div>

            <!-- IMAGE -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/model/model-20.png') }}"
                    class="img-fluid"
                    style="max-width: 350px;"
                    alt="HR System">
            </div>

        </div>

        <!-- VISI MISI -->
        <div class="row mt-5 g-4">

            <div class="col-md-6 ">
                <div class="p-4 bg-white shadow-sm rounded h-100 feat-card">
                    <h5 class="fw-bold">Visi</h5>
                    <p class="text-muted mb-0">
                        Menjadi solusi HRMS terpercaya yang membantu perusahaan berkembang
                        melalui digitalisasi dan otomatisasi sistem SDM.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 bg-white shadow-sm rounded h-100 feat-card">
                    <h5 class="fw-bold">Misi</h5>
                    <ul class="text-muted mb-0">
                        <li>Menyediakan sistem HR yang mudah digunakan dan terintegrasi</li>
                        <li>Meningkatkan efisiensi operasional perusahaan</li>
                        <li>Mendukung pengambilan keputusan berbasis data</li>
                        <li>Memberikan layanan terbaik kepada setiap klien</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ════ CTA BANNER ════ -->
@include('home.home_partial.cta_banner')
@endsection