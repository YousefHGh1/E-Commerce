@extends('E-Commerce.layout.master')

@section('title')
    {{ __('Category of Product') }}
@endsection

@section('css')
    <style>
        .page-link,
        .page-item ul li span {
            color: #6f6f6f;
            font-size: 15px;
            background-color: #f3f3f3 !important;
            display: inline-block;
            padding: 8px 14px;
            border: 1px solid white;
            margin: 3px;
            font-weight: 600;
            border-radius: 50px;
        }

        .page-link:hover,
        .page-item ul li span:hover {
            background-color: #F28123 !important;
            border: 1px solid white !important;
            color: #6f6f6f !important;
        }

        .page-item.active .page-link {
            color: #6f6f6f;
            background-color: #F28123 !important;
            border-color: #F28123 !important;
        }
    </style>
@endsection


@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Category of Product</p>
                        <h1>Products</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            @foreach ($categories as $cat)
                                {{-- class="{{ $cat->id == $cat_products->id ? 'active' : '' }}" --}}
                                <li><a style="color: #6f6f6f"
                                        href="{{ route('ECommerce.cat_product', $cat->id) }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                    @foreach ($cat_products as $cat_product)
                        <div class="col-lg-4 col-md-6 text-center strawberry">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <img src="{{ asset('storage/' . $cat_product->image) }}" alt="Product Image"
                                        style="min-height: 250px; max-height: 250px;">
                                </div>
                                <h3>{{ $cat_product->name }}</h3>
                                <p class="product-price"><span>{{ $cat_product->category->name }}</span>
                                    {{ $cat_product->price }}</p>
                                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="paginate col-md-12 text-center">
                        {!! $cat_products->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
            </div>
        </div>
    </div>
    <!-- end products -->
@endsection

@section('scripts')
@endsection
