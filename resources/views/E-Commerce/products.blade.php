@extends('E-Commerce.layout.master')

@section('title')
    {{ __('E-Commerce') }}
@endsection

@section('css')
@endsection


@section('content')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
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
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				@foreach ($products as $product )
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="min-height: 250px; max-height: 250px;">
						</div>
						<h3>{{ $product->name }}</h3>
						<p class="product-price"><span>{{ $product->category->name }}</span> {{ $product->price }}</p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endforeach
		
			</div>

			{{-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> --}}
			{{-- <div class="col-lg-6 text-center">

				{!! $products->withQueryString()->links('pagination::bootstrap-5') !!}

			</div> --}}

		</div>
	</div>
	<!-- end products -->
@endsection

@section('scripts')
@endsection
