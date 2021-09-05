@extends('front.layouts.frontend')

@section('hero1')
<div class="container-fluid">
            <div class="row">
                <div class="bg-hero position-relative mt-5">
                    <img src="{{asset('img/hero1.svg')}}" alt="hero1" class="position-absolute">
                </div>
                <!--  -->
                <div class="main-konten text-center top">
                    <img src="{{asset('img/logo-hero1.svg')}}" alt="logo-hero1">
                    <img src="{{asset('img/text-sampah-jadi-uang.svg')}}" alt="text" class="text">
                    <p class="mt-3">Ubah sampahmu menjadi uang dengan aplikasi Govio.id</p>
                    <button type="button" class="btn btn">Download Gavio</button>
                </div>
                <!--  -->
            </div>
        </div>
@endsection

@section('hero2')
<div class="container-fluid mt-5 hero2">
            <div class="row justify-content-center">
                <div class="bg-hero2 position-relative">
                    <img src="{{asset('img/bg-hero2.svg')}}" alt="bg-hero2" class="img-fluid position-absolute">
                </div>
                <!-- about  -->
                <div class="col-md-4">
                    <div class="box mt-5">
                        <h1 class="fw-bold">Tentang Kami</h1>
                        <p class="fw-bold">Govio adalah aplikasi untuk menyetorkan kemasan bekas pakai, untuk di daur ulang. </p>
                    </div>

                </div>
                <!--  -->
                <div class="col-md-4">
                    <div class="box ms">
                        <h1 class="text-end">Dimana</h1>
                        <p class="text-end">Untuk saat ini aplikasi Govio hanya mencakup kawasan kota Kalimantan, tepatnya di Balikpapan</p>
                    </div>
                </div>
            </div>
            <div class="button text-center"><button type="button" class="btn btn-light">Selengkapnya</button></div>
        </div>
@endsection

@section('hero3')
<div class="container hero3">
            <div class="row justify-content-center">
                <h1 class="text-center what">Apa Yang Kita Lakukan</h1>
                <div class="col-md-3 mt-2 ms-4 d-flex align-items-stretch">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/card1.svg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mendaur Ulang Sampah</h5>
                            <p class="card-text">Kami membantu mengelola sampah masyarakat untuk diolah </p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-3 mt-2 ms-4 d-flex align-items-stretch">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/card2.svg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mengelola Sampah</h5>
                            <p class="card-text">Kami membantu mengelola sampah masyarakat untuk diolah </p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-3 mt-2 ms-4 d-flex align-items-stretch">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/card3.svg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Melestarikan Lingkungan</h5>
                            <p class="card-text">Dengan adanya Govio.id membantu masyarakat melestarikan lingkungan dan juga terbebas dari sampah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('hero4')
<div class="container mt-5">
            <div class="row justify-content-center">
                <h1 class="text-center what">Layanan</h1>
                <!--  -->
                <div class="col-md-5">
                    <div class="card bg-dark text-white service mt-2 ">
                        <img src="{{asset('img/service1.svg')}}" class="card-img radius" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white text-service">Pick up</h5>
                        </div>
                    </div>
                    <!--  -->
                    <div class="card bg-dark text-white mt-5">
                        <img src="{{asset('img/service3.svg')}}" class="card-img radius" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white text-service">Company</h5>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-5">
                    <div class="card bg-dark text-white mt-2">
                        <img src="{{asset('img/service2.svg')}}" class="card-img radius" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white text-service">Drop Off</h5>
                        </div>
                    </div>
                    <!--  -->
                    <div class="card bg-dark text-white mt-5">
                        <img src="{{asset('img/service4.svg')}}" class="card-img radius" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-white text-service">GV point</h5>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('hero5')
<div class="container">
            <div class="row mt-5 justify-content-center">
                <h1 class="text-center what">Kenapa Govio?</h1>
                <div class="col-lg-3 mb-3 d-flex align-items-stretch mt-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('img/icon1.svg')}}" class="card-img-top icon ms-4 mt-4 " alt="Card Image ">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title title-icon">Praktis</h5>
                            <p class="card-text mb-4">Pengelolaan data dilakukan secara digital & dapat meningkatkan paperless activity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3 d-flex align-items-stretch mt-3">
                    <div class="card " style="width: 100%;">
                        <img src="{{asset('img/icon1.svg')}}" class="card-img-top icon ms-4 mt-4 " alt="Card Image ">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title title-icon">Fitur Lengkap</h5>
                            <p class="card-text mb-4">Fitur di aplikasi Govio yang lengkap dan juga simple memudahkan user untuk memakai aplikasinya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3 d-flex align-items-stretch mt-3">
                    <div class="card " style="width: 100%;">
                        <img src="{{asset('img/icon3.svg')}}" class="card-img-top icon ms-4 mt-4 " alt="Card Image ">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title title-icon">Aman</h5>
                            <p class="card-text mb-4">Untuk keamanan data Anda, Govio.id menggunakan SSL/TLS untuk transaksi data dan enkripsi untuk penyimpanan data</p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-3 mb-3 d-flex align-items-stretch mt-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('img/icon4.svg')}}" class="card-img-top icon ms-4 mt-4" alt="Card Image ">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title title-icon">Mobile App</h5>
                            <p class="card-text mb-4">Dengan menggunakan smartphone berbasis Android, Govio dapat melakukan transaksi dengan mudah dan nyaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection