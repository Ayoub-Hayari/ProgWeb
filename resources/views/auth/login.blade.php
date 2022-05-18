@extends('layout.master')

@section('content')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Log In</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Accueil<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Log In</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>Vous etes nouveau?</h4>
							<p> </p>
							<a class="primary-btn" href="{{ route('login') }}">Inscrivez vous</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Login</h3>
						<form class="row login_form" id="contactForm" novalidate="novalidate" class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Votre adresse Email" value="{{ old('email') }}" >
                                @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                            </div>
                            
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Votre Mot de Passe" value="{{ old('password') }}" >
                                @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>
	
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="{{ route('password.request') }}">Mot de passe oublié?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

@endsection
