@extends('layouts.master')

@section('content')
    <!-- Start Contact Us -->
    <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-us-left">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.485786830826!2d112.52906055518801!3d-7.750368845318848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e787948b41f82e5%3A0x61fb5ed73919ef03!2sSumber%20Brantas%2C%20Bumiaji%2C%20Batu%20City%2C%20East%20Java%2C%20Indonesia!5e0!3m2!1sen!2skh!4v1697549274168!5m2!1sen!2skh"
                                width="600" height="500" style="border:0; margin:10px 10px 3px 10px" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <h2>Hubungi Kami</h2>
                            <!-- Form -->
                            <form class="form" method="post" action="mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Your Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont icofont-ui-call"></i>
                            <div class="content">
                                <h3>0812-3456-7891</h3>
                                <p>desasumberbrantas@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont-google-map"></i>
                            <div class="content">
                                <h3>Desa Sumberbrantas</h3>
                                <p>Jawa Timur, Indonesia
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont icofont-wall-clock"></i>
                            <div class="content">
                                <h3>Monday - Saturday: 08.00 AM - 17.00 PM</h3>
                                <p>Sunday Closed</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                </div>
            </div>
        </div>
    </section>
@endsection
