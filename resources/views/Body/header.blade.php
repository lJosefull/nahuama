<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">Ayuda</a></li>|
					<li><a href="contact.html">Contactenos</a></li>|
					<li><a href="#">Informacion de envio</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> llameno : +(57) 321-742-514-7</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="index.html"><img src="images/nahuama3.png" class="img-responsive" alt="logo"  /> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">

					<div class="login" >

						<div id="loginContainer">
                            @if (Auth::guest())
                            <a href="#" id="loginButton"><span>Iniciar sesion</span></a>
						    <div id="loginBox">
								 <form id="loginForm" method="POST" action="{{ route('login') }}">
									@csrf
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
												  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						                    </fieldset>
						                    <fieldset>
												@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
						                            <label for="password">Password</label>
													<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						                     </fieldset>

											<button type="submit" id="login">
												{{ __('Login') }}
											</button>
						                	<label for="checkbox"><input  type="checkbox" name="remember" id="checkbox" {{ old('remember') ? 'checked' : '' }}>
												<i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
                                </form>

                            </div>
                            @else
                            <a href="#" id="loginButton"><span>Cuenta</span></a>
						    <div id="loginBox">
                                <div id="loginForm">
                                    <li class="list-group-item">Mi Cuenta</li>
                                    <li class="list-group-item">Mis Pedidos</li>
                                    <li class="list-group-item">Mis Favoritos</li>
                                    <li class="list-group-item">Mi Informacion</li>
                                    <li class="list-group-item"> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         salir
                                     </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                            </div>
                            </div>
                            @endif
                        </div>

					</div>
                </div>
                @if (Auth::guest())
				<div class="reg">
					<a href="register.html">REGISTER</a>
                </div>
                @endif
				<livewire:cards />
			<div class="create_btn">
				<a href="checkout.html">CHECKOUT</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
        <livewire:categories />
     <!-- End header menu -->
	</div>
</div>
</div>
