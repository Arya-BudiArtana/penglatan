@extends('layouts.app')
@section('title', 'Bu Wardi')
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('img/produk/wardi/banner.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Dodol <span>Bu wardi</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                        <li class="breadcrumb-item" style="color: blanchedalmond" aria-current="page">Mitra</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape"><img src="{{ asset('img/images/breadcrumb_shape01.png')}}" alt=""></div>
                <div class="breadcrumb-shape"><img src="{{ asset('img/images/breadcrumb_shape02.png')}}" alt=""></div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- features-area -->
                    <div class="contact-info-wrap pt-90 pb-60">
                        <div class="container">
                            <div class="row justify-content-center justify-content-lg-around">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="contact-info-box mb-30">
                                        <div class="contact-info-icon">
                                            <img src="{{ asset('img/icon/contact_icon01.png')}}" alt="">
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Nomor Telepon</h5>
                                            <a href="https://api.whatsapp.com/send?phone=6281936545569&text= Saya ingin memesan nama produk"><span style="color: black">081936545569</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="contact-info-box mb-30">
                                        <div class="contact-info-icon">
                                            <img src="{{ asset('img/icon/contact_icon02.png')}}" alt="" height="30px" width="30px">
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Alamat</h5>
                                            <span>Banjar Dinas Kajanan, Desa Penglatan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="contact-info-box mb-30">
                                        <div class="contact-info-icon">
                                            <img src="{{ asset('img/icon/insta.png')}}" alt="" height="30px" width="30px">
                                        </div>
                                        <div class="contact-info-content">
                                            <h5>Instagram</h5>
                                            <span><a href="https://www.instagram.com/dodolbuwardipenglatan/" style="color: black">dodolbuwardipenglatan</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- features-area-end -->

            <section class="faq-area faq-bg pt-120 pb-120" data-background="{{ asset('img/bg/faq_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="faq-image">
                                <img src="{{ asset('img/produk/wardi/banner.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-wrap">
                                <div class="section-title mb-50">
                                    <h6 class="sub-title">Profil</h6>
                                    <h2 class="title"><span> Tentang</span> Kami</h2>
                                </div>
                                <div class="">
                                    <p>Dodol Bu Wardi merupakan unit usaha dodol milik Ibu Ketut Wardi yang berlokasi di Banjar Dinas Kajanan, Desa Penglatan. Unit usaha ini terbentuk pada awal tahun 2000-an. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- plant-area -->
            <section class="plant-area plant-bg" data-background="{{ asset('img/bg/plant_bg.jpg')}}">
                <div class="container-fluid">
                    <div class="plant-active owl-carousel">
                        <div class="plant-inner-wrap">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="section-title text-center mb-40">
                                        <h6 class="sub-title">visi misi</h6>
                                        <h2 class="title"><span>Visi Misi</span> Kami</h2>
                                    </div>
                                    <h6 class="text-center text-secondary mb-55">Mewujudkan usaha yang berkelanjutan serta menciptkan keuntungan pada unit usaha dengan pelayanan dan kredibilitas yang optimal. </h6>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 order-1 col-md-6 col-sm-8">
                                    <div class="about-info-list">
                                        <ul>
                                            <li>
                                                <div class="about-info-icon">
                                                    <i class="flaticon-null-1"></i>
                                                </div>
                                                <div class="about-info-content">
                                                    <h6>Memberikan pelayanan yang optimal kepada pelanggan.
                                                    </h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="about-info-icon">
                                                    <i class="flaticon-butterfly"></i>
                                                </div>
                                                <div class="about-info-content">
                                                    <h6>Melakukan Kerjasama yang baik kepada mitra usaha.</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-0 order-lg-2">
                                    <div class="about-img plant-img">
                                        <img src="{{ asset('img/logo/wardi.png')}}" alt="" style="border-radius: 100%" height="280px" width="280px">
                                    </div>
                                </div>
                                <div class="col-lg-4 order-3 col-md-6 col-sm-8">
                                    <div class="about-info-list">
                                        <ul>
                                            <li>
                                                <div class="about-info-icon">
                                                    <i class="flaticon-grain"></i>
                                                </div>
                                                <div class="about-info-content">
                                                    <h6>Mampu menciptakan profit pada usaha.</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="about-info-icon">
                                                    <i class="flaticon-farmer"></i>
                                                </div>
                                                <div class="about-info-content">
                                                    <h6>Menciptakan unit usaha yang berkelanjutan.</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- plant-area-end -->

            
            <!-- shop-details-area -->
            <section class="shop-details-area shop-bg pb-120" data-background="{{ asset('img/bg/shop_details_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-details-wrap">
                                <div class="row align-items-xl-center">
                                    <div class="col-lg-6">
                                        <div class="shop-details-active">
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/wardi/produk1.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/wardi/produk2.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/wardi/produk4.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/wardi/produk3.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/wardi/produk2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="shop-details-nav">
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/wardi/produk1.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/wardi/produk2.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/wardi/produk4.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/wardi/produk3.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/wardi/produk2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="shop-details-content">
                                            <h4>Dodol Penglatan Bu wardi</h4>
                                            <div class="shop-details-price">
                                                <h4>Rp.35.000/KG</h4>
                                                <div class="warding">
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                </div>
                                            </div>
                                            <p>Dodol Penglatan terbuat dari bahan pilihan, tanpa pengawet dan menggunakan pewarna alami. Menggunakan buah asli yang berkualiy=tas baik tanpa perasa tambahan. 1 kilogram berisi kurang lebih 28-30 biji. </p>
                                            <div class="shop-details-info">
                                                <h5>Komposisi</h5>
                                                <ul>
                                                    <li><i class="fas fa-caret-right"></i>Tepung Ketan</li>
                                                    <li><i class="fas fa-caret-right"></i>Gula Merah</li>
                                                    <li><i class="fas fa-caret-right"></i>Gula Pasir</li>
                                                    <li><i class="fas fa-caret-right"></i>Kelapa</li>
                                                    <li><i class="fas fa-caret-right"></i>Daun Pandan</li>
                                                    <li><i class="fas fa-caret-right"></i>Garam</li>
                                                    <li><i class="fas fa-caret-right"></i>Buah Asli/Bahan Alami: Ketan Hitam, Kacang, Kayu Sugih (Daun Suji), Nangka, Strawberry.</li>
                                                </ul>
                                            </div>
                                            <div class="shop-details-info">
                                                <h5>Varian Rasa</h5>
                                                <ul>
                                                    <li><i class="fas fa-caret-right"></i>Injin/Ketan Hitam</li>
                                                    <li><i class="fas fa-caret-right"></i>Kacang</li>
                                                    <li><i class="fas fa-caret-right"></i>Kayu Sugih (Daun Suji)</li>
                                                    <li><i class="fas fa-caret-right"></i>Nangka</li>
                                                    <li><i class="fas fa-caret-right"></i>Strawberry</li>
                                                </ul>
                                            </div>
                                            <h5>Hubungi Kami</h5>
                                            <div class="perched-info">
                                                <a href="https://api.whatsapp.com/send?phone=6281936545569&text= Saya ingin memesan dodol" class="btn btn-success add-card-btn">WhatsApp</a>
                                                <a href="https://www.instagram.com/dodolbuwardipenglatan/" class="btn  add-card-btn" style="background-color: rgb(255, 78, 107)">Instagram</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-details-area-end -->

@endsection