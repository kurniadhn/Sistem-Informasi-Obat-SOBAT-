@extends('layouts.template')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Paket Obat</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ '/' }}">Beranda</a>
                            <span>Paket Obat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                    </div>
                </div>
                
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Paket Obat</h2>
                        </div>
                    <div class="filter_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <!-- <div class="filter__found">
                                    <h6><span>12</span> Products found</h6>
                                </div> -->
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <!-- <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($pakets as $paket)
                        <?php $image = str_replace(' ', '%20', $paket->image); ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('img/paket/' . $image) }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="{{ route('checkout_paket', $paket->id_paket) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{ $paket->paket }}</a></h6>
                                    <h5>Rp {{ $paket->price }}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="product__pagination">
                        <a href="javascript:void(0)"><i class="fa fa-long-arrow-left"></i></a>
                        @for ($i = 1; $i <=5; $i++)
                            <a href="{{ '/paket?page=' . $i }}">{{ $i }}</a>
                        @endfor
                        <!-- {{ $pakets->links() }} -->
                        <a href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection