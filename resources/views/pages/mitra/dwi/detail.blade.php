@extends('layouts.app')
@section('title', 'Dwi Surya')
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('img/produk/dwi/banner.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Dodol <span>Dwi Surya</span></h2>
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
                                            <a href="https://api.whatsapp.com/send?phone=6281337800491&text= Saya ingin memesan nama produk"><span style="color: black">081337800491</span></a>
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
                                            <span>Banjar Dinas Sanih, Desa Penglatan</span>
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
                                            <span><a href="https://www.instagram.com/dodoldwisuryapenglatan/" style="color: black">dodoldwisuryapenglatan</a></span>
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
                                <img src="{{ asset('img/produk/dwi/banner.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-wrap">
                                <div class="section-title mb-50">
                                    <h6 class="sub-title">Profil</h6>
                                    <h2 class="title"><span> Tentang</span> Kami</h2>
                                </div>
                                <div class="">
                                    <p>Dodol Dwi Surya merupakan salah satu unit usaha di Desa Penglatan yang memproduksi dodol khas penglatan. Pemilik unit usaha ini adalah Ibu Luh Suryani yang berlokasi di Banjar Dinas Sanih, Desa Penglatan. Dodol Dwi Surya secara resmi terbentuk pada tahun 2002. Usaha ini terbentuk untuk memenuhi kebutuhan dodol di pasaran yang diharapkan dapat mendatangkan keuntungan pada unit usaha dodol dwi surya secara berkelanjutan. </p>
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
                                    <h6 class="text-center text-secondary mb-55">Mampu mewujudkan usaha yang berlandasan Falsafah Tri Hita Karana melalui optimalisasi potensi yang tersedia</h6>
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
                                                    <h6>Memberikan pelayanan dan kualitas yang maksimal kepada pelanggan</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="about-info-icon">
                                                    <i class="flaticon-butterfly"></i>
                                                </div>
                                                <div class="about-info-content">
                                                    <h6>Menciptakan keuntungan pada usaha</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-0 order-lg-2">
                                    <div class="about-img plant-img">
                                        <img src="{{ asset('img/logo/surya.jpg')}}" alt="" style="border-radius: 100%" height="280px" width="280px">
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
                                                    <h6>Menciptakan unit usaha yang ramah lingkungan</h6>
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
                                                <img src="{{ asset('img/produk/dwi/produk1.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/dwi/produk2.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/dwi/produk3.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/dwi/produk4.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-img">
                                                <img src="{{ asset('img/produk/dwi/produk3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="shop-details-nav">
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/dwi/produk1.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/dwi/produk2.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/dwi/produk3.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/dwi/produk4.jpg')}}" alt="">
                                            </div>
                                            <div class="shop-details-nav-item">
                                                <img src="{{ asset('img/produk/dwi/produk3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="shop-details-content">
                                            <h4>Dodol Penglatan Dwi Surya</h4>
                                            <div class="shop-details-price">
                                                <h4>Rp.35.000/KG</h4>
                                                <div class="rating">
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                    <i class="fas fa-star" style="color: rgb(255, 166, 0)"></i>
                                                </div>
                                            </div>
                                            <p>Dodol khas bali asli dengan ketan pilihan, gula merah asli dan tanpa 
                                                pengawet buatan dari resep turun-temurun. 1 kilogram berisi kurang lebih 29-31 biji. </p>
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
                                                <a href="https://api.whatsapp.com/send?phone=6281337800491&text= Saya ingin memesan dodol" class="btn btn-success add-card-btn">WhatsApp</a>
                                                <a href="https://www.instagram.com/dodoldwisuryapenglatan/" class="btn  add-card-btn" style="background-color: rgb(255, 78, 107)">Instagram</a>
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