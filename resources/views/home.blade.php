-@extends('layout.master')
@section('content')
	<!-- Start Header Area -->
	
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						@foreach($news as $new)
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>{{$new->name}} !</h1>
									<p>{{$new->details}}</p>
									<div class="add-bag d-flex align-items-center">
										<button type="submit" class="primary-btn">
										<span class="add-text text-uppercase text-white"><a href="{{route('shop.index')}}" >Voir plus !</a> </span>
										</button>
										
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="w-50" src="{{Voyager::image($new->image)}}" alt="">
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Livraison gratuite</h6>
						<p>Livraison gratuite pour toute commande</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Politique de retour</h6>
						<p>Livraison gratuite pour toute commande</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Livraison gratuite pour toute commande</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Paiement sécurisé</h6>
						<p>Livraison gratuite pour toute commande</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Derniers produits</h1>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
                    @foreach($product  as $post)
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{ Voyager::image($post->image)}}" alt="">
							<div class="product-details">
								<h6 class="text-center">{{ $post->name}}</h6>
                                <p>{{ $post->details}}</p>
								<div class="price text-center">
									<h6>$ {{ $post->price}}</h6>
								</div>
								<p><small>{{ $post->description}}</small></p>
								<div class="prd-bottom d-flex justify-content-around">
									
									<a href="{{route('shop.index')}}" class="btn btn-outline-info">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Derniers produits</h1>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
                    @foreach($product  as $post)
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{ Voyager::image($post->image)}}" alt="">
							<div class="product-details">
								<h6 class="text-center">{{ $post->name}}</h6>
                                <p>{{ $post->details}}</p>
								<div class="price text-center">
									<h6>$ {{ $post->price}}</h6>
								</div>
								<p><small>{{ $post->description}}</small></p>
								<div class="prd-bottom d-flex justify-content-around">
								
									<a href="{{route('shop.index')}}" class="btn btn-outline-info">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	

	

	<!-- start footer Area -->
	
	<!-- End footer Area -->
    @stop