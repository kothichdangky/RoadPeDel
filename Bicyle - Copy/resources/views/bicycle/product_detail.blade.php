@extends('layouts.nav')
@section('content')

    <body>

        <!-- Product Detail Section -->
        <div class="container mt-5">
            <div class="row">
                <!-- Product Image -->
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $products->image) }}" class="product-image w-100 img-fluid" alt="Xe Đạp">
                </div>
                <!-- Product Information -->
                <div class="col-md-6">
                    <h1 class="product-title">{{ $products->name }}</h1>
                    <p class="text-muted">Mã sản phẩm: MTB-2024</p>
                    <p class="text-primary h4">
                        @if ($products->price_sale)
                            <span style="text-decoration: line-through; color: gray;">
                                ${{ number_format($products->price, 0, ',', '.') }}
                            </span>
                            <span style="color: #006D77;" class="px-2">
                                ${{ number_format($products->price_sale, 0, ',', '.') }}
                            </span>
                        @else
                            <span>
                                ${{ number_format($products->price, 0, ',', '.') }}
                            </span>
                        @endif
                    </p>
                    <p class="product-description">
                        {{ $products->intro }}
                    </p>
                    <button class="btn btn-warning btn-lg mt-3">Mua Ngay</button>
                </div>
            </div>
        </div>

        <livewire:comments :model="$products"/>

    </body>
@endsection
