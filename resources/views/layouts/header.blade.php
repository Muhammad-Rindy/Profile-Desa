 <!-- Preloader -->
 {{-- <div class="preloader">
     <div class="loader">
         <div class="loader-outter"></div>
         <div class="loader-inner"></div>

         <div class="indicator">
             <svg width="16px" height="12px">
                 <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                 <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
             </svg>
         </div>
     </div>
 </div> --}}
 <!-- End Preloader -->

 <!-- Header Area -->
 <header class="header">
     <div class="header-inner">
         <div class="container">
             <div class="inner">
                 <div class="row">
                     <div class="col-lg-3 col-md-3 col-12">
                         <!-- Start Logo -->
                         <div class="logo">
                             <a href="{{ route('index') }}"><img style="width: 50px; height:50px" src="img/logo.jpg"
                                     alt="logo"></a>
                         </div>
                         <!-- End Logo -->
                         <!-- Mobile Nav -->
                         <div class="mobile-nav"></div>
                         <!-- End Mobile Nav -->
                     </div>
                     <div class="col-lg-7 col-md-9 col-12">
                         <!-- Main Menu -->
                         <div class="main-menu">
                             <nav class="navigation">
                                 <ul class="nav menu">
                                     <li><a href="{{ route('index') }}">Beranda</a></li>
                                     <li><a href="#">Profile Desa<i class="icofont-rounded-down"></i></a>
                                         <ul class="dropdown">
                                             <li><a href="{{ route('sejarah') }}">Sejarah Desa</a></li>
                                             <li><a href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                                             <li><a href="{{ route('aparatur') }}">Aparatur Desa</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">Informasi Publik<i class="icofont-rounded-down"></i></a>
                                         <ul class="dropdown">
                                             <li><a href="{{ route('article') }}">Artikel</a></li>
                                             <li><a href="{{ route('agenda') }}">Agenda</a></li>
                                             <li><a href="{{ route('pembangunan') }}">Pembangunan</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ route('infografis') }}">Infografis</a></li>
                                     <li><a href="{{ route('produk') }}">Produk</a></li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                     <div class="col-lg-2 col-12">
                         <div class="get-quote">
                             <a href="{{ route('contact') }}" class="btn">Layanan Warga</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
