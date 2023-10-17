@extends('layouts.master')
@section('content')
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider"
                style="background-image:url('https://images.pexels.com/photos/1480807/pexels-photo-1480807.jpeg?auto=compress&cs=tinysrgb&w=1600')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <div
                                    style="background: linear-gradient(45deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%); padding:20px 30px; border-radius:20px">
                                    <h1 style="color: white">Selamat Datang <br> <span>Desa Sumber brantas</span></h1>
                                    <p style="color: white">Desa di Kaki Langit</p>
                                </div>
                                <div class="button">
                                    <a href="{{ route('sejarah') }}" class="btn">Sejarah Desa</a>
                                    <a href="{{ route('infografis') }}" class="btn primary">Infografis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider"
                style="background-image:url('https://images.pexels.com/photos/842711/pexels-photo-842711.jpeg?auto=compress&cs=tinysrgb&w=1600')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <div
                                    style="background: linear-gradient(45deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%); padding:20px 30px; border-radius:20px">
                                    <h1 style="color: white">Selamat Datang <br> <span>Desa Sumber brantas</span></h1>
                                    <p style="color: white">Desa di Kaki Langit</p>
                                </div>
                                <div class="button">
                                    <a href="{{ route('sejarah') }}" class="btn">Sejarah Desa</a>
                                    <a href="{{ route('infografis') }}" class="btn primary">Infografis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider"
                style="background-image:url('https://images.pexels.com/photos/2171277/pexels-photo-2171277.jpeg?auto=compress&cs=tinysrgb&w=1600')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <div
                                    style="background: linear-gradient(45deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%); padding:20px 30px; border-radius:20px">
                                    <h1 style="color: white">Selamat Datang <br> <span>Desa Sumber brantas</span></h1>
                                    <p style="color: white">Desa di Kaki Langit</p>
                                </div>
                                <div class="button">
                                    <a href="{{ route('sejarah') }}" class="btn">Sejarah Desa</a>
                                    <a href="{{ route('infografis') }}" class="btn primary">Infografis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 ">
                        <!-- single-schedule -->
                        <div class="single-schedule first">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <div class="single-content">
                                    <span>Agenda</span>

                                    <h4>Pelantikan Kepada Desa</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                                        <li class="day">Saturday <span>9.00-18.30</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule middle">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icofont-prescription"></i>
                                </div>
                                <div class="single-content">
                                    <span>Agenda</span>
                                    <h4>Reog Singo Yudho</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                                        <li class="day">Saturday <span>9.00-18.30</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule last">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fa fa-ambulance "></i>
                                </div>
                                <div class="single-content">
                                    <span>Agenda</span>
                                    <h4>Imunisasi Bayi Sehat</h4>
                                    <ul class="time-sidual">
                                        <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                                        <li class="day">Saturday <span>9.00-18.30</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    <section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Pejabat Pengelola Informasi dan Dokumentasi</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>Desa Sumber Berantas, Jawa timur, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="ambulance-cross">
                                <span style="font-size: 35px" class="material-symbols-outlined">
                                    done_all
                                </span>
                            </i>
                        </div>
                        <h3>Informasi Secara Berkala</h3>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="ambulance-cross">
                                <span style="font-size: 35px" class="material-symbols-outlined">
                                    list_alt_add
                                </span>
                            </i>
                        </div>
                        <h3>Informasi Serta Merta</h3>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last">
                        <div class="signle-icon">
                            <i class="ambulance-cross">
                                <span style="font-size: 35px" class="material-symbols-outlined">
                                    description
                                </span>
                            </i>
                        </div>
                        <h3>Informasi Setiap saat</h3>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes -->

    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">256</span>
                            <p>Pelajar/Mahasiswa</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">250</span>
                            <p>Mengurus Rumah Tangga</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">95</span>
                            <p>Karyawan Swasta</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">43</span>
                            <p>Nelayan/Perikanan</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>

    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Pengumuman</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>Pengumuman Desa Sumberbrantas</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="https://sumberbrantas.id/wp-content/uploads/2022/09/aula.jpg" style="height: 230px"
                                alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">05 October, 2023</div>
                                <h2>
                                    <p>Pengumaman Kerja Bakti</p>
                                </h2>
                                <ul>
                                    <li>📅 Tanggal Posting: 05/10/2023</li>
                                    <li>🗣️ Oleh : Mister Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="https://sumberbrantas.id/wp-content/uploads/2022/10/WhatsApp-Image-2022-09-28-at-12.28.01.jpeg"
                                style="height: 230px" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">12 September, 2023</div>
                                <h2>
                                    <p>Kondisi Musim Wisata Brakseng</p>
                                </h2>
                                <ul>
                                    <li>📅 Tanggal Posting: 12/09/2023</li>
                                    <li>🗣️ Oleh : Mister Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="https://sumberbrantas.id/wp-content/uploads/2022/09/3.jpg" style="height: 230px"
                                alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">17 Agustust, 2023</div>
                                <h2>
                                    <p>Launching Aplikasi Sumberbrantas</p>
                                </h2>
                                <ul>
                                    <li>📅 Tanggal Posting: 17/08/2023</li>
                                    <li>🗣️ Oleh : Mister Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- Slider Area -->
