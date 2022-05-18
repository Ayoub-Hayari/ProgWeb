@extends('layout.master')

@section('content')
<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{asset('img/login.jpg')}}" alt="">
						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
                        @if(session('status'))
                        <div class="alert alert-succes">
                            {{session('status')}}
                        </div>
                        @endif
						<h3>Reset Mot de Passe</h3>
						<form class="row login_form" id="contactForm" novalidate="novalidate" class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{$token}}">
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Votre adresse Email" value="{{ old('email') }}" >
                                @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Votre Nouveau Mot de Passe" >
                                @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Verifier le Mot de passe" >
                                @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                @endif
                            </div>
                            
                       
	
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Reset Mot de Passe</button>
							
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

@endsection
