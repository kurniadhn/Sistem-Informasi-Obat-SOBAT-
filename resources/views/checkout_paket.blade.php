@extends('layouts.template')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ '/' }}">Beranda</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6> -->
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form method="POST" action="{{ route('user.transaksi.store') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id_paket" value="{{ $paket->id_paket }}">
                    <input type="hidden" name="total" value="{{ $paket->price }}">

                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Nama Lengkap<span>*</span></p>
                                <input type="text" placeholder="{{ Auth()->user()->name }}" disabled>
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="{{ Auth()->user()->address }}" disabled>
                            </div>
                            <div class="checkout__input">
                                <p>Nomor HP<span>*</span></p>
                                <input type="text" placeholder="{{ Auth()->user()->phone }}" disabled>
                            </div>
                            <div class="checkout__input">
                                <p>Metode Pembayaran<span>*</span></p>
                                <!-- <input type="text"> -->
                                <select name="method">
                                    <option value="Bank Jatim">Bank Jatim</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BSI">BSI</option>
                                    <option value="Dana">Dana</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <li>{{ $paket->paket }} <span>Rp. {{ $paket->price }}</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Total <span>Rp. {{ $paket->price }}</span></div>
                                <!-- <div class="checkout__order__total">Total <span>$750.99</span></div> -->
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection