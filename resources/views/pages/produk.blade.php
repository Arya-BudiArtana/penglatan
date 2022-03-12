@extends('layouts.app')
@section('title', 'Produk')
    
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg breadcrumb-style2" data-background="img/bg/produk.png">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Produk Kami</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                        <li class="breadcrumb-item " style="color: blanchedalmond" aria-current="page">Produk</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-area -->
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


                        <section class="shop-details-area shop-bg pb-120" data-background="{{ asset('img/bg/shop_details_bg.jpg')}}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="shop-details-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-lg-6">
                                                    <div class="shop-details-active">
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/rati/produk1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/rati/produk2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/rati/produk3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/rati/produk4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/rati/produk5.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="shop-details-nav">
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/rati/produk1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/rati/produk2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/rati/produk3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/rati/produk4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/rati/produk5.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="shop-details-content">
                                                        <h4>Dodol Penglatan Bu rati</h4>
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
                                                        <p>Dodol bali sukla terbuat dari bahan pilihan, tanpa pengawet dan menggunakan pewarna alami. Menggunakan buah asli yang fresh tanpa perasa tambahan. 1 kilogram berisi kurang lebih 27-30 biji. </p>
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
                                                            <a href="https://api.whatsapp.com/send?phone=6287762896848&text= Saya ingin memesan dodol" class="btn btn-success add-card-btn">WhatsApp</a>
                                                            <a href="https://www.instagram.com/dodolburatipenglatan/" class="btn  add-card-btn" style="background-color: rgb(255, 78, 107)">Instagram</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="shop-details-area shop-bg pb-120" data-background="{{ asset('img/bg/shop_details_bg.jpg')}}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="shop-details-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-lg-6">
                                                    <div class="shop-details-active">
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/mariasmi/produk1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/mariasmi/produk2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/mariasmi/produk3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/mariasmi/produk4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-img">
                                                            <img src="{{ asset('img/produk/mariasmi/produk2.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="shop-details-nav">
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/mariasmi/produk1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/mariasmi/produk2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/mariasmi/produk3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/mariasmi/produk4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="shop-details-nav-item">
                                                            <img src="{{ asset('img/produk/mariasmi/produk2.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="shop-details-content">
                                                        <h4>Dodol Penglatan Bu Mariasmi</h4>
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
                                                        <p>Dodol menek sari jika dijemur dibawah sinar matahari setiap hari isi kurang lebih 28-30 biji dalam 1 kilogram dan awet sampai 1 bulan. .</p>
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
                                                            <a href="https://api.whatsapp.com/send?phone=6285964235661&text= Saya ingin memesan dodol" class="btn btn-success add-card-btn">WhatsApp</a>
                                                            <a href="https://www.instagram.com/dodolbumariasmipenglatan/" class="btn  add-card-btn" style="background-color: rgb(255, 78, 107)">Instagram</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

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
            <!-- shop-area-end -->

                
            @endsection