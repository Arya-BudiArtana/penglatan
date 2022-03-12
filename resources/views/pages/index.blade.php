@extends('layouts.app')
@section('title', 'Beranda')
    
@section('content')


    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-bg fix" data-background="{{ asset('img/slide/slider5.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content text-center">
                                <h2 data-animation="fadeInUp" data-delay=".3s">dodol penglatan</h2>
                                <h6 data-animation="fadeInUp" data-delay=".6s">Kuliner Asli Bali Utara</h6>
                                <div class="slider-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-shape"><img src="{{ asset('img/slider/slider_shape01.png')}}" data-animation="fadeInLeft" data-delay="1.1s" alt=""></div>
                <div class="slider-shape shape-2"><img src="{{ asset('img/slider/slider_shape02.png')}}" data-animation="fadeInRight" data-delay="1.1s" alt=""></div>
            </div>
            <div class="single-slider slider-bg fix" data-background="{{ asset('img/slide/slider4.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content text-center">
                                <h2 data-animation="fadeInUp" data-delay=".3s">dodol penglatan</h2>
                                <h6 data-animation="fadeInUp" data-delay=".6s">Kuliner Asli Bali Utara</h6>
                                <div class="slider-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-shape"><img src="{{ asset('img/slider/slider_shape01.png')}}" data-animation="fadeInLeft" data-delay="1.1s" alt=""></div>
                <div class="slider-shape shape-2"><img src="{{ asset('img/slider/slider_shape02.png')}}" data-animation="fadeInRight" data-delay="1.1s" alt=""></div>
            </div>
            <div class="single-slider slider-bg fix" data-background="{{ asset('img/slide/slide1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content text-center">
                                <h2 data-animation="fadeInUp" data-delay=".3s">dodol penglatan</h2>
                                <h6 data-animation="fadeInUp" data-delay=".6s">Kuliner Asli Bali Utara</h6>
                                <div class="slider-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-shape"><img src="{{ asset('img/slider/slider_shape01.png')}}" data-animation="fadeInLeft" data-delay="1.1s" alt=""></div>
                <div class="slider-shape shape-2"><img src="{{ asset('img/slider/slider_shape02.png')}}" data-animation="fadeInRight" data-delay="1.1s" alt=""></div>
            </div>
        </div>
        <div class="slider-bottom-bg" data-background="{{ asset('img/slider/slider_bottom.png')}}"></div>
    </section>
    <!-- slider-area-end -->

    <!-- features-area -->
    <section class="features-area gray-bg pt-80 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-70">
                        <h6 class="sub-title">Mitra Kami</h6>
                        <h2 class="title"><span>Dodol</span> Penglatan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="features-item text-center mb-30">
                        <div class="features-thumb">
                            <a href=" {{ route('mariasmi') }}"> <img src="{{ asset('img/logo/mariasmi.png')}}" alt="logo mitra" height="193px" width="193px"></a>
                        </div>
                        <div class="features-content">
                            <h4><a href="{{ route('mariasmi') }}">Dodol Bu Mariasmi</a></h4>
                            <p>Usaha dodol asli Desa Penglatan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="features-item text-center mb-30">
                        <div class="features-thumb">
                            <a href=" {{ route('rati') }}"> <img src="{{ asset('img/logo/rati.png')}}" alt="logo mitra" height="193px" width="193px"></a>
                        </div>
                        <div class="features-content">
                            <h4><a href="{{ route('rati') }}">Dodol Bu Rati</a></h4>
                            <p>Usaha dodol asli Desa Penglatan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="features-item text-center mb-30">
                        <div class="features-thumb">
                            <a href=" {{ route('wardi') }}"> <img src="{{ asset('img/logo/wardi.png')}}" alt="logo mitra" height="193px" width="193px"></a>
                        </div>
                        <div class="features-content">
                            <h4><a href="{{ route('wardi') }}">Dodol Bu Wardi</a></h4>
                            <p>Usaha dodol asli Desa Penglatan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="features-item text-center mb-30">
                        <div class="features-thumb">
                            <a href=" {{ route('dwisurya') }}"> <img src="{{ asset('img/logo/surya.jpg')}}" alt="logo mitra" height="193px" width="193px"></a>
                        </div>
                        <div class="features-content">
                            <h4><a href="{{ route('dwisurya') }}">Dodol Dwi Surya</a></h4>
                            <p>Usaha dodol asli Desa Penglatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- faq-area -->
    <section class="faq-area faq-bg pt-120 pb-120" data-background="{{ asset('img/bg/faq_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-image">
                        <img src="{{ asset('img/images/faq.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-wrap">
                        <div class="section-title mb-50">
                            <h6 class="sub-title">pertanyaan populer</h6>
                            <h2 class="title">Pertanyaan<span> & </span> Jawaban</h2>
                        </div>
                        <div id="accordion">
                            <h3>Apa Itu Dodol Penglatan?</h3>
                            <div class="accordion-content">
                                <p>Dodol penglatan adalah salah satu makanan manis yang populer dan menjadi oleh-oleh khas Desa Penglatan, Buleleng, Bali </p>
                            </div>
                            <h3>Apa Perbedaan Dodol Penglatan dengan Dodol Lainnya?</h3>
                            <div class="accordion-content">
                                <p>Masyarakat Penglatan melakukan dengan metode tradisional yaitu dengan cara dijemur.
                                     Dodol ini memang sangat unik, semakin sering dijemur rasa yang dihasilkan akan semakin enak dan gurih</p>
                            </div>
                            <h3>Apakah Dodol Penglatan Bisa Bertahan Lama?</h3>
                            <div class="accordion-content">
                                <p>Dodol Penglatan tanpa menggunakan bahan pengawet namun dapat bertahan hingga 1 bulan.
                                    Dodol Penglatan juga tanpa menggunakan pemanis buatan, sehingga aman untuk dikonsumsi</p>
                            </div>
                            <h3>Dimana Bisa Membeli Produk Ini?</h3>
                            <div class="accordion-content">
                                <p>Dodol Penglatan dapat dijumpai di Desa Penglatan, Buleleng, Bali. Atau dapat melalui website ini dengan mengakses halaman Produk :). mari bangun UMKM bersama Kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- farming-area -->
    <section class="farming-area farming-bg pt-120 pb-140" data-background="{{ asset('img/bg/farming_bg.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h6 class="sub-title">Keunggulan</h6>
                        <h2 class="title"><span>Keunggulan</span> Dodol Penglatan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="organic-farm-item">
                        <div class="org-frm-icon">
                            <i><img src="{{ asset('img/images/uang.png')}}" alt="" height="75px" width="75px"></i>
                        </div>
                        <div class="org-frm-content">
                            <h4><a href="#">MURAH</a></h4>
                            <p>Dodol Penglatan dijual dengan harga yang miring dan bersahabat, sehingga tidak menguras kantong Anda.</p>
                            <a href="#" class="btn green-btn">1</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="organic-farm-item">
                        <div class="org-frm-icon">
                            <i><img src="{{ asset('img/images/enak.png')}}" alt="" height="75px" width="75px"></i>
                        </div>
                        <div class="org-frm-content">
                            <h4><a href="#">ENAK</a></h4>
                            <p>Dodol Penglatan memiliki citarasa yang manis dan enak, manisnya pas dan cocok untuk disukai semua orang.</p>
                            <a href="#" class="btn green-btn">2</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="organic-farm-item">
                        <div class="org-frm-icon">
                            <i><img src="{{ asset('img/images/sehat.png')}}" alt="" height="85px" width="85px"></i>
                        </div>
                        <div class="org-frm-content">
                            <h4><a href="#">Sehat</a></h4>
                            <p>Dodol Penglatan sehat dan aman dikonsumsi karena tidak mengandung bahan pengawet dan terbuat dari bahan alami.</p>
                            <a href="#" class="btn green-btn">3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- farming-area-end -->


<!-- main-area-end -->
@endsection