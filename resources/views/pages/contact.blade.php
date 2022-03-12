@extends('layouts.app')
@section('title', 'Kontak Kami')
@section('content')
           <!-- breadcrumb-area -->
           <section class="breadcrumb-area breadcrumb-bg" data-background="img/slide/contact.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>HUBUNGI KAMI</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                                    <li class="breadcrumb-item " style="color: blanchedalmond" aria-current="page">Kontak Kami</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape"><img src="img/images/breadcrumb_shape01.png" alt=""></div>
            <div class="breadcrumb-shape"><img src="img/images/breadcrumb_shape02.png" alt=""></div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area">
            <div class="contact-info-wrap pt-90 pb-60">
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-around">
                        <div class="col-xl-4 col-lg-6 col-sm-6">
                            <div class="contact-info-box mb-30">
                                <div class="contact-info-icon">
                                    <img src="img/icon/contact_icon03.png" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email</h5>
                                    <a href="mailto:wiradesapenglatan579@gmail.com"><span style="color: black">wiradesapenglatan579@gmail.com</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="contact-info-box mb-30">
                                <div class="contact-info-icon">
                                    <img src="img/icon/insta.png" alt="" height="30px" width="30px">
                                </div>
                                <div class="contact-info-content">
                                    <h5>Instagram</h5>
                                    <a href="https://www.instagram.com/wiradesa.penglatan/" style="color: black"><span>wiradesa.penglatan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wrap pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <h6 class="sub-title">Hubungi Kami</h6>
                                <h2 class="title"><span>Bagaimana</span> Kami Bisa Membantu Anda?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12">
                            <div class="contact-form">
                                @if (Session::has('message_sent'))

                                    <div class="alert alert-succes" role="alert">
                                        {{Session::get('message_sent')}}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('contact.send')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="name" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="phone" class="form-control" placeholder="No.HP">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" class="form-control" placeholder="Email Anda">
                                        </div>
                                    </div>
                                    <textarea name="msg" id="message" placeholder="Pesan"></textarea>
                                    <button class="btn gradient-btn">Kirimkan Pesan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15799.292049668362!2d115.11223521993095!3d-8.119495663783749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd190503e6d5aa5%3A0x274c9692074bcf04!2sPenglatan%2C%20Kec.%20Buleleng%2C%20Kabupaten%20Buleleng%2C%20Bali!5e0!3m2!1sid!2sid!4v1637240124143!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>         
            </div>
        </section>
        <!-- contact-area-end -->
    
@endsection