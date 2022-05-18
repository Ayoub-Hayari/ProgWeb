@extends('layout.master')
@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Page Details Produit</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Accueil<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Boutique<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">produit-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ Voyager::image($product->image)}}" alt="">
						</div>
						@foreach(json_decode($product->images, true)  as $image)
						<div class="single-prd-item">
							<img class="img-fluid" src="{{ Voyager::image($image)}}" alt="">
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$product->name}}</h3>
						<h2>€ {{$product->price}}</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Catégorie</span>{{$product->category->name}}</a></li>
							<li><a href="#"><span>Disponibilité</span> : En stock</a></li>
						</ul>
						<p>{{$product->details}}</p>
						
						<div class="card_area d-flex align-items-center">
							<form action="{{route('cart.store')}}" method="POST">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$product->id}}">
                				<input type="hidden" name="name" value="{{$product->name}}">
                				<input type="hidden" name="price" value="{{$product->price}}">
								<button class="primary-btn" type="submit">Ajouter au panier</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Specification</a>
				</li>
				
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>{{$product->description}}</p>
					
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Largeur</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Taille</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Profondeur</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Poids</h5>
									</td>
									<td>
										<h5>52gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Contrôle de la qualité</h5>
									</td>
									<td>
										<h5>Oui</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Durée de fraîcheur</h5>
									</td>
									<td>
										<h5>3 JOours</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Sans contact a la main</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Chaque boîte contient</h5>
									</td>
									<td>
										<h5>60pcs</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	

@stop