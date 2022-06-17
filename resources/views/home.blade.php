@extends('layouts.template')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Paket Obat</span>
                        </div>
                        <ul>
                            <li><a href="#">Antibiotik</a></li>
                            <li><a href="#">Flu & Batuk</a></li>
                            <li><a href="#">Mata</a></li>
                            <li><a href="#">Minyak Angin & Balsam</a></li>
                            <li><a href="#">P3K</a></li>
                            <li><a href="#">Saluran Pencernaan</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner3.jpg') }}">
                        <div class="hero__text">
                            <span>SOBAT</span>
                            <h2>Pesan Obat <br />Lebih Mudah</h2>
                            <p>Belanja Kebutuhan Obat di Sobat</p>
                            <a href="{{ '/obat' }}" class="primary-btn">BELANJA SEKARANG</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Paket Obat</h2>
                </div>
                <div class="row">
                    <div class="categories__slider owl-carousel">

                        @foreach ($alat_kesehatans as $alat_kesehatan)
                        <?php $image = str_replace(' ', '%20', $alat_kesehatan->image); ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/paket/' . $image) }}">
                                <h5><a href="{{ route('paket') }}">Alat Kesehatan</a></h5>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($p3ks as $p3k)
                        <?php $image = str_replace(' ', '%20', $p3k->image); ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/paket/' . $image) }}">
                                <h5><a href="{{ route('paket') }}">P3K</a></h5>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($batuks as $batuk)
                        <?php $image = str_replace(' ', '%20', $batuk->image); ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/paket/' . $image) }}">
                                <h5><a href="{{ route('paket') }}">Batuk</a></h5>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($pileks as $pilek)
                        <?php $image = str_replace(' ', '%20', $pilek->image); ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/paket/' . $image) }}">
                                <h5><a href="{{ route('paket') }}">Pilek</a></h5>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($pencernaans as $pencernaan)
                        <?php $image = str_replace(' ', '%20', $pencernaan->image); ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/paket/' . $image) }}">
                                <h5><a href="{{ route('paket') }}">Pencernaan</a></h5>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Daftar Obat</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
			    @foreach ($obats as $obat)
                <?php $image = str_replace(' ', '%20', $obat->image); ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/obat/' . $image) }}">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                <li><a href="{{ route('checkout_obat', $obat->id_obat) }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{ $obat->obat }}</a></h6>
                            <h5>Rp {{ $obat->price }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Artikel</h2>
                    </div>
                </div>
            </div>
            <div class="row">
			    @foreach ($artikels as $artikel)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('img/artikel/' . $artikel->image) }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{ $artikel->date }}</li>
                                <!-- <li><i class="fa fa-comment-o"></i> 5</li> -->
                            </ul>
                            <h5><a href="{{ $artikel->url }}"  target="__blank">{{ $artikel->title }}</a></h5>
                            <p>{{ $artikel->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection