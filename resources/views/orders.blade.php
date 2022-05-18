@extends('layout.master')
@section('content')
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Ordres</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Accueil<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Commandes</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
    <div class= "container my-5">
        <div class="orders">
            <h2 class="text-center">Details de la Commande</h2>
            @foreach($orders as $order)

            <div class="table-responsive order_details_table">
                <div class="d-flex justify-content-between  my-5 px-5">
                    <h4>
                        <i class="fas fa-receipt"></i>
                            Commande #{{$order->id}}
                    </h4>
                    <h4>Date : {{$order->created_at}}</h4>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <td class="col">Produit</td>
                            <td class="col">Quantité</td>
                            <td class="col">Totale</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($order->products as $product)

                        <tr>
                            <td>{{$product->name}}</td>
                            <td>x {{$product->pivot->quantity}}</td>
                            <td>€ {{round($product->price * $product->pivot->quantity, 2)}}</td>
                        </tr>
                    @endforeach
                            
                        <tr>
                            <td><b>Totale</b></td>
                            <td></td>
                            <td>€ {{round($order->paiement_total)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endforeach
        </div>
    </div>

@stop