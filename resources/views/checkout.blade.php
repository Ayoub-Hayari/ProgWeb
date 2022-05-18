@extends('layout.master')

@section('includes')
<script src="https://js.stripe.com/v3/"></script>
@stop
@section('content')
 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            
            
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Facture</h3>
                        <form class="row contact_form" action="{{route('checkout.store')}}" method="POST"  id="payment-form">
                            {{@csrf_field()}}
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="firstname" name="firstname">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="lastname" name="name">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            
                            <div class="col-md-6 form-group p_star">
                                <input type="number" class="form-control" id="number" name="phone">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="Addresse Email"></span>
                            </div>
                            
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="adress">
                                <span class="placeholder" data-placeholder="Addresse"></span>
                            </div>
                           
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Ville"></span>
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="postalcode" placeholder="Postcode/ZIP">
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <div class="form-group">    
                                        <label for="card-element">
                                            Carte de Credit ou Debit
                                        </label>
                                        
                                        <div id="card-element" >
                                                    <!-- Start Banner Area <p class="row-in-form">
                                                    <label for="card-element"> </label>
                                                    <input type="text" name="card-no" value="" placeholder="Numero de carte" wire:model="s_zipcode">
                                                    </p>-->
                                        </div>
                                        <div id="card-errors" role="alert">
                                              
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="complete-order" type="submit" class="primary-btn my-3">Proceder au payement</button>
                        </form>
                        
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Produit <span>Totale</span></a></li>
                                @foreach(Cart::content() as $product)
                                <li><a href="#">{{$product->name}} <span class="middle">x {{$product->qty}}</span> <span class="last">€ {{$product->price}}</span></a></li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>€ {{Cart::subtotal()}}</span></a></li>
                                <li><a href="#">TVA <span>€ {{Cart::tax()}}</span></a></li>
                                <li><a href="#">Totals <span>€ {{Cart::total()}}</span></a></li>
                            </ul>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
@stop

@section('js')
<script>
    var stripe=Stripe('pk_test_51KzVEkKiP54OWV79oMVPRFn6PbKfszEPPpabe61YYcbG1AbY9TTzYOX6r3oG2NuYvm40z3kWYT9bz3VlIqu6Ki2B00eWyuolnB');
    var elements=stripe.elements();
    var style=
    {
        base:{
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
                '::placeholder':{
                        color:"#aab7c4"
            }
        },
        invalid:{
            color:"#fa755a",
            iconColor:"#fa755a"
        }
    };
    var card = elements.create('card', {style: style});
    // Add an instance of the card Element into
    card.mount("#card-element");
    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event){
        var displayError=document.getElementById('card-errors');
        if (event.error)
        {
            displayError.textContent= event.error.message;
        }
        else
        {
            displayError.textContent='';
        }
    });
    var form = document.getElementById('payment-form');
    form.addEventListener('submit',function(event)
    {
        event.preventDefault();
        /*
        var options= {
            firstname: document.getElementById('firstname').value,
            lastname: document.getElementById('lastname').value,
            email: document.getElementById('email').value,
        }*/
       
        stripe.createToken(card).then(function(result){
            if (result.error) {
                //  Inform the user if there was an error.
                var errorElement = document.GetElementById('card-errors');
                errorElement.textContent = result.error.message;
            }
            else
            {
                // Send the token to your server .
                stripeTokenHandler(result.token);
            }
        });
    });
        




        // Submit the form with the token ID.
    function stripeTokenHandler (token) {
    // Insert the joken ID into the form soit Bets submitt
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input') ;
        hiddenInput.setAttribute('type','hidden');
        hiddenInput.setAttribute('name','stripeToken');
        hiddenInput.setAttribute('value',token.id);
        form.appendChild(hiddenInput);
        // Submit the form
        form.submit();
    }
</script>

@stop