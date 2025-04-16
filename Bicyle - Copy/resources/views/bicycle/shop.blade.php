@extends('layouts.nav')
@section('content')

<div>
    <section id="banner" class="banner2" style="background-image: url('/image/banner/banner_shop.png')">


        <!-- <div class=" img-fluid d-block">
        <img src="/image/poster.png" alt="" style="height: 900px ;width: 100%;">
    </div> -->

        <div class="container">
            <div class="row nowrap justify-content-center ">

                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-left">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/box.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>FREE SHIPPING</b></h5>
                            <p>Rhoncus nec malesuada</p>
                        </div>
                    </div>
                </div>


                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-middle">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/car.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>FREE DELIVERY</b></h5>
                            <p>Rhoncus nec malesuada</p>
                        </div>
                    </div>
                </div>

                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-middle">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/coin.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>PRICE GUARANTEE</b></h5>
                            <p>Rhoncus nec malesuada</p>
                        </div>
                    </div>
                </div>


                <div class="col-5 col-lg-3 d-flex align-items-center justify-content-center box-right">
                    <div class="row nowrap align-items-center">
                        <div class="col-2 col-lg-2 mx-3">
                            <img src="/image/shop.png" alt="">
                        </div>
                        <div class="col-10 col-lg-10 text-left mr-3">
                            <h5><b>FREE STORE PICKUP</b></h5>
                            <p>Rhoncus nec malesuada</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">


                <div class="row justify-content-between align-items-center d-flex"
                    style="padding-top: 140px; padding-bottom: 180px;">
                    <div class="col-12 col-lg-4">
                        <h5 style="color: #FFB800; font-size: 16px;"><b>SERVICES</b></h5>
                        <h1 style="color: #fff; font-size: 56px;">Our Services</h1>
                    </div>

                    <div class="col-12 col-lg-6 d-flex justify-content-end">
                        <h5 style="color: #FFF;">
                            <i class="fa-solid fa-house" style="font-size: 15px;"></i>
                            <span class="pr-2"> Home </span>
                            <span class="pr-2"> > </span>
                            <span class="pr-5"> Our Services</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="next" class="next mnho pt-5">
        <div class="text-center ">
            <p class="text-primary-2"><b> Featured Bicycles </b></p>
            <h1>Find Your Next Bike</h1>
            <p style="font-weight: 400; font-size: 16px; color: #888897;">Lorem orci elementum dictum viverra sed
                lobortis vitae
                purus Vitae </br> eget cursus dictum ac tellus faucibus Porta aliquet
            </p>
        </div>
        <div class="product mt-5">
            <div class="box2 ">
                <div class="container py-5 align-content-center align-items-center justify-content-center ">

                    <div class="row  ">
                        @foreach ($products as $index => $product)
                        <div class="col-6 col-lg-3 align-items-center justify-content-center my-3">
                            <div class="box-left3 text-center">
                                <img src="{{ asset('storage/' . $product->image) }}" class="w-100 img-fluid d-block mx-auto" alt="">
                                <h5 class="text-center">{{ $product['name'] }}</h5>
                                <div class="d-flex justify-content-center mb-3" style="color: #FFB800;">
                                    <i class="fa-solid fa-star mr-0"></i>
                                    <i class="fa-solid fa-star mx-0"></i>
                                    <i class="fa-solid fa-star mx-0"></i>
                                    <i class="fa-solid fa-star mx-0"></i>
                                    <i class="fa-solid fa-star mx-0"></i>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="mr-2" style="font-weight: 700; font-size: 16px;color: #888897;">
                                        <b><del>$</del><del>{{ $product['price'] }}</del></b>
                                    </p>
                                    <p class="ml-2 "
                                        style="font-weight: 700; font-size: 16px;color: #006D77;text-decoration: underline;">
                                        <b>${{ $product['price_sale'] }}</b>
                                    </p>

                                </div>

                                <div class="justify-content-center align-items-center pb-3">
                                    <button class="btn-0 btn-warning-2 text-dark mx-4 " style="height: 50px;">
                                        <span class="mx-3 py-5 "><b>Add to cart</b></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="text-center my-4">
                        <button style="height: 50px;" class="btn-light text-dark border-dark radius">
                            <span class="mx-4 py-4"><b>View more</b></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="next pt-5 mt-5 ">
        <div class="text-center ">
            <p class="text-primary-2"><b> SHOP </b></p>
            <h1>Shop by Category</h1>
        </div>
        <div class="container">
            <div class="row my-5 justify-content-center">
                <div class="col-6 col-lg-4  my-3 text-center">
                    <img src="/image/index/IMAGE (2) 1.png" class="w-100 img-fluid d-block form" alt="">
                    <div class="form-img" style="height: 0; ">
                        <h3 style="color: #FFFFFB;">Apparel</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;"> <span
                                class="mx-4 py-2">
                                <b> Shop now </b> </span> </i>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4  my-3 text-center" style=>
                    <img src="/image/index/IMAGE (1) 1.png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">Accesories</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;"> <span
                                class="mx-4 py-2">
                                <b> Shop now </b> </span> </i>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4   my-3 text-center" style=>
                    <img src="/image/index/IMAGE (1) 1 (2).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">Component</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;"> <span
                                class="mx-4 py-2">
                                <b> Shop now </b> </span> </i>
                        </button>
                    </div>
                </div>

                <div class="col-6 col-lg-4 my-3 text-center" style=>
                    <img src="/image/index/IMAGE (1) 1 (3).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">Bicycle Bag</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;"> <span
                                class="mx-4 py-2">
                                <b> Shop now </b> </span> </i>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4  my-3 text-center" style=>
                    <img src="/image/index/IMAGE (1) 1 (4).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">Custom Cycling Kit</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;"> <span
                                class="mx-4 py-2">
                                <b> Shop now </b> </span> </i>
                        </button>
                    </div>
                </div>
                <div class="col-6 col-lg-4  my-3  text-center" style=>
                    <img src="/image/index/IMAGE (1) 1 (5).png" class="w-100 img-fluid form" alt="">
                    <div class="form-img">
                        <h3 style="color: #FFFFFB;">Shoes</h3>
                        <button class="btn-warning-2 text-dark radius my-2 " style="height: 40px;"> <span
                                class="mx-4 py-2">
                                <b> Shop now </b> </span> </i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection
