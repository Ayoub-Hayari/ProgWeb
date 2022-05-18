<!-- Start Header Area -->
<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{route('home')}}"><b>4REALSHOP</b> <img src="" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav mr-auto ml-5">
							<li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">
                                    <i class='fas fa-home'></i> 
                                    Accueil 
                                </a>
                            </li>
							<li class="nav-item submenu dropdown">
								<a href="{{route('shop.index')}}" class="nav-link">
                                 <i class='fas fa-shopping-bag'></i> 
                                 Boutique
                                </a>	
							</li>
							<li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">
                                    <i class='fas fa-envelope'></i>
                                    Contact
                                </a>
                            </li>
                            </ul>
                        <ul class="nav navbar-nav menu_nav ml-auto ">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">
                                    <i class='fas fa-user-plus'></i> 
                                    Inscription 
                                </a>
                            </li>
							<li class="nav-item submenu dropdown">
								<a href="{{route('login')}}" class="nav-link">
                                 <i class='fas fa-sign-in-alt'></i> 
                                 Log In
                                </a>	
							</li>
                             @else
							<li class="nav-item">
                                <a class="nav-link" href="{{route('orders')}}">
                                    <i class='fas fa-truck'></i>
                                    Commandes
                                </a>
                            </li>
                            <li class="nav-item submenu dropdown">
								<a href="{{route('logout')}}" class="nav-link">
                                 <i class='fas fa-sign-out-alt'></i> 
                                    Log Out
                                </a>	
							</li>
                            @endguest
                            <li class="nav-item submenu dropdown">
								<a href="{{route('cart.index')}}" class="nav-link">
                                 <i class='fas fa-shopping-cart'></i> 
                                    Panier
                                    @if(Cart::instance('default')->count()>0)
                                    <span class=" badge badge-primary">{{Cart::instance('default')->count()}}</span>
                                    @endif
                                </a>	
							</li>
                            
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	<!-- End Header Area -->
