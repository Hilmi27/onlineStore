@extends('layouts.app')
@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>Hilmot SKUY - Cuma Toko Biasa</h4>
                            <span>Murah, Serba ada, Nyaman, Enak, dijamin Nostalgia</span>
                            <div class="main-border-button">
                                <a href="{{ route('product.index') }}">Beli Sekarang!</a>
                            </div>
                        </div>
                        <img src="{{ asset('/img/2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Tea Jus</h4>
                                        <span>Minuman Segar, Murah, Aman dikonsumsi</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Tea Jus</h4>
                                            <p></p>
                                            <div class="main-border-button">
                                                <a href="#">Minuman Tea Jus, dulu sering dibeli karena harganya murah.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/1.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>GTA</h4>
                                        <span>Game Populer</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>GTA</h4>
                                            <p>Game ini sering dimainkan pada waktu kecil dan awal mula bibit cheater.</p>
                                            <div class="main-border-button">
                                                <a href="#">Temukan Lebih</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/gta.jpeg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Kiko</h4>
                                        <span>Jajanan Es Terbaik </span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Kiko</h4>
                                            <p>Jajanan Es Anak Kecil, biasanya dibeli ketika sudah pulang sekolah.</p>
                                            <div class="main-border-button">
                                                <a href="#">Temukan Lebih</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/kk.jpeg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Downhill</h4>
                                        <span>Game Konsol Sepeda Terbaik Pada Masanya</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Downhill</h4>
                                            <p>Downhill merupakan salah satu game terbaik PS2 pada masa kecil.</p>
                                            <div class="main-border-button">
                                                <a href="#">Temukan Lebih</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/dh.jpeg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Explore Area Starts ***** -->

<!-- ***** Explore Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>
                        Get an exclusive discount of 30% off by subscribing to our newsletter.</h2>
                    <span>Join our community and be the first to know about our latest promotions, new arrivals, and special offers.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Store Location:<br><span>Semarang, Indonesia</span></li>
                            <li>Phone:<br><span>081-1278-8823</span></li>
                            <li>Office Location:<br><span>Temabalang-Semarang</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                            <li>Email:<br><span>HilmotSKUY@chupys.com</span></li>
                            <li>Social Media:<br><span><a href="https://id-id.facebook.com/">Facebook</a>, <a href="https://www.instagram.com/">Instagram</a>, <a href="https://www.youtube.com/">Youtube</a> </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
  </div>
<!-- ***** Subscribe Area Ends ***** -->
@endsection