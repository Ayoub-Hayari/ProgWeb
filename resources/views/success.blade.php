@extends('layout.master')
@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
		@if($message=Session::get('success'))
            <div class="alert alert-success alert-block">
                
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{$message}}
            </div>
            @endif
			<h3 class="title_confirmation">Nous vous remercions. Votre commande a été reçue.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>Numéro de commande</span> : {{$order->id}}</a></li>
							<li><a href="#"><span>Date</span> : {{$order->created_at}}</a></li>
							<li><a href="#"><span>Totale</span> : EUR {{round($order->paiement_total)}}</a></li>
							<li><a href="#"><span>Mode de paiement</span> : Stripe</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Facture</h4>
						<ul class="list">
							<li><a href="#"><span>Rue</span> : {{$order->paiement_adress}}</a></li>
							<li><a href="#"><span>Ville</span> : {{$order->paiement_city}}</a></li>
							<li><a href="#"><span>Telephone</span> : {{$order->paiement_phone}}</a></li>
							<li><a href="#"><span>Code Postale </span> : {{$order->paiement_postalcode}}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Facture</h4>
						<ul class="list">
							<li><a href="#"><span>Rue</span> : {{$order->paiement_adress}}</a></li>
							<li><a href="#"><span>Ville</span> : {{$order->paiement_city}}</a></li>
							<li><a href="#"><span>Telephone</span> : {{$order->paiement_phone}}</a></li>
							<li><a href="#"><span>Code Postale </span> : {{$order->paiement_postalcode}}</a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="order_details_table">
				<h2>Détails de la commande</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Produit</th>
								<th scope="col">Quantité</th>
								<th scope="col">Totale</th>
							</tr>
						</thead>
						<tbody>
							@foreach($order->products as $product)
 
							<tr>
								<td>
									<p>{{$order->product->name}}</p>
								</td>
								<td>
									<h5>x {{$product->pivot->quantity}}</h5>
								</td>
								<td>
									<p>€ {{round($product->price *  $product->pivot->quantity, 2)}} Hors Tax</p>
								</td>
							</tr>
							@endforeach
							
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>€{{$order->paiement_total}}</p>
								</td>
							</tr>
							
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->

@stop