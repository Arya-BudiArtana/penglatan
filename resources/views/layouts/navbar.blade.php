        <!-- header-area -->
        <header>
            <div id="sticky-header" class="main-header menu-area transparent-header">
                <div class="container-fluid container-full">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <div class="header-bg" data-background="{{ asset('img/bg/header_bg.jpg')}}"></div>
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('img/dodol.png')}}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex" style="padding-right: 15rem">
                                        <ul class="navigation">
                                            <li class="{{ $page == 1 ? "active" : "" }}"><a href="{{ route('home') }}">Beranda</a>
                                            </li>
                                            <li class="{{ $page == 2 ? "active" : "" }}"><a href="{{ route('tentang') }}">Tentang</a></li>
                                            <li class="{{ $page == 3 ? "active" : "" }}"><a href="{{ route('produk') }}">Produk</a></li>
                                            <li class="{{ $page == 4 ? "active" : "" }}"><a href="{{ route('kontak') }}">Kontak Kami</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                <div class=""><a href="index.html"><img src="{{ asset('img/favicon.png')}}" height="66px" width="66px"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="https://api.whatsapp.com/send?phone=6281339363709&text= Hallo"><span class="fab fa-whatsapp"></span></a></li>
                                            <li><a href="https://www.instagram.com/wiradesa.penglatan/"><span class="fab fa-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->