@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading about-page-heading" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="abt">
                        <div class="inner-content">
                            <h4>Tentang Toko Kami</h4>
                            <span>Murah, Serba ada, Nyaman, Enak, dijamin Nostalgia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- ***** Main Banner Area End ***** -->

        <!-- ***** About Area Starts ***** -->
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-image">
                            <img src="{{ asset('/img/2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-content">
                            <h4>Tentang Toko Kami</h4>
                            <span>Kami menjual barang-barang dengan harga murah untuk memuaskan pelanggan kami.</span>
                            <div class="quote">
                                <p>Pelanggan Senang Kami Biasa Saja.</p>
                            </div>
                            <p>Kami tidak menyediakan platform pelayanan lain selain website ini, tetapi jika berkenan tolong ikuti platform pelayanan kami yang lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** About Area Ends ***** -->

        <!-- ***** Services Area Starts ***** -->
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Pelayanan Dari Kami</h2>
                            <span>Kami Tidak Bisa Melayani Anda Sepenuhnya, Karena Saya Manusia Biasa .</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <h4>Produk Unggulan</h4>
                            <p>Produk Unggulan Kami Biasanya Lebih Cepat Laku Karena Produk Yang Kami Tawarkan Bukan Sembarang Produk Melainkan Dari Produk Yang Sangat Terpercaya.</p>
                            <img src="{{ asset('/img/tmy.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <h4>Metode Pengantaran</h4>
                            <p>Metode Pengantaran Kami Sangatlah Cepat Secepat Kilat Bahkan The Flash Pernah Ikut Magang Disini.</p>
                            <img src="{{ asset('/img/tayo.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <h4>Penawaran Khusus Dan Terbaru</h4>
                            <p>Penawaran Dari Barang-Barang Kami Sangatlah Menggiurkan Bahkan Terkadang Pemerintah Memesan Stok Barang di Toko Kami.</p>
                            <img src="{{ asset('/img/sml.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Services Area Ends ***** 00-->

        @endsection