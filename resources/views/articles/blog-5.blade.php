@extends('layouts.master')
@section('content')
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- News Head -->
                                <div class="news-head">
                                    <img src="https://sumberbrantas.id/wp-content/uploads/2022/09/3.jpg" alt="#">
                                </div>
                                <!-- News Title -->
                                <h1 class="news-title"><a href="">Luncurkan Sistem Informasi Desa, Wisata dan
                                        Komoditas Sayur Semakin Meningkat</a></h1>
                                <!-- Meta -->

                                <!-- News Text -->
                                <div class="news-text">
                                    <p>Harapan meningkatkan penghasilan warga desa untuk mencapai kesejahteraan semakin
                                        nampak kinerja yang dilakukan oleh pihak desa dengan menggandeng secara penuh
                                        bersama seluruh warga desa sumberbrantas. Langkah semakin pasti untuk mendatangkan
                                        wisatawan dan para penikmat sayur dari berbagai luar kota batu bahkan sampai dari
                                        luar provinsi.</p>
                                </div>
                                <div class="blog-bottom">
                                    <!-- Social Share -->
                                    <ul class="social-share">
                                        <li class="facebook"><a href="#"><i
                                                    class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                        <li class="twitter"><a href="#"><i
                                                    class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <!-- Next Prev -->
                                    <ul class="prev-next">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a>
                                        </li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                    <!--/ End Next Prev -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="comments-form">
                                <h2>Leave Comments</h2>
                                <!-- Contact Form -->
                                <form class="form" method="post" action="mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="first-name" placeholder="First name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="text" name="last-name" placeholder="Last name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" placeholder="Your Email"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <i class="fa fa-pencil"></i>
                                                <textarea name="message" rows="7" placeholder="Type Your Message Here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit
                                                    Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--/ End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <div class="single-widget category">
                            <h3 class="title">Kategory Artikel</h3>
                            <ul class="categor-list">
                                <li><a href="#">Berita</a></li>
                                <li><a href="#">Pemandangan</a></li>
                                <li><a href="#">Pakaian</a></li>
                                <li><a href="#">Perkebunan</a></li>
                                <li><a href="#">Produk</a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <img src="https://images.unsplash.com/photo-1696332331308-8a064129a487?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDExOHw2c01WalRMU2tlUXx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60"
                                        alt="#">
                                </div>
                                <div class="content">
                                    <h5>
                                        <p>We have annnocuced our new product.</p>
                                    </h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2020</li>
                                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <img src="https://images.unsplash.com/photo-1696332331308-8a064129a487?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDExOHw2c01WalRMU2tlUXx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60"
                                        alt="#">
                                </div>
                                <div class="content">
                                    <h5>
                                        <p>Top five way for solving teeth problems.</p>
                                    </h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2019</li>
                                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <img src="https://images.unsplash.com/photo-1696332331308-8a064129a487?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDExOHw2c01WalRMU2tlUXx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60"
                                        alt="#">
                                </div>
                                <div class="content">
                                    <h5>
                                        <p>We provide highly business soliutions.</p>
                                    </h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2019</li>
                                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget side-tags">
                            <h3 class="title">Tags</h3>
                            <ul class="tag">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Produk</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Pemandangan</a></li>
                                <li><a href="#">Pekerjaan</a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->
@endsection
