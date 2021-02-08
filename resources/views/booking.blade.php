<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Neumología y Neumopediatría</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-color.css" id="colors">
<link rel="icon" type="image/png" href="images/neumo/logo.png">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="{{ url('/') }}"><img src="images/neumo/logo.png" alt=""></a>

					<!-- <a href="index.html"><img src="images/neumo/logo.png" alt=""> Especialistas en Enfermedades Respiratorias</a> -->
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="current" href="{{ url('/') }}">Inicio</a></li>

						<li><a href="{{ url('/blog') }}">Blog</a></li>

						<li><a href="{{ url('/listings') }}">Reservas</a></li>

						<li><a href="{{ url('/contact') }}">Contacto</a></li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Ingresar</a>
					<a href="#" class="button border with-icon">Reservar cita <i class="sl sl-icon-plus"></i></a>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Ingresar a la plataforma</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Iniciar sesión</a></li>
						<li><a href="#tab2">Registrarme</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Correo electrónico:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="" />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Contraseña:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password"/>
									</label>
									<span class="lost_password">
										<a href="#" >¿Olvidaste tu contraseña?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Iniciar sesión" />
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Nombre:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Correo electrónico:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Contraseña:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password1" id="password1"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">Repetir contraseña:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password2" id="password2"/>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Registrarme" />
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Reservar cita</h2>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">

		<!-- Content
		================================================== -->
		<div class="col-lg-8 col-md-8 padding-right-30">

			<h3 class="margin-top-0 margin-bottom-30">Datos personales</h3>

			<div class="row">

				<div class="col-md-6">
					<label>Nombres</label>
					<input type="text" value="">
				</div>

				<div class="col-md-6">
					<label>Apellidos</label>
					<input type="text" value="">
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>E-Mail</label>
						<input type="text" value="">
						<i class="im im-icon-Mail"></i>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>Teléfono</label>
						<input type="text" value="">
						<i class="im im-icon-Phone-2"></i>
					</div>
				</div>

			</div>


			<h3 class="margin-top-55 margin-bottom-30">Método de pago</h3>

			<!-- Payment Methods Accordion -->
			<div class="payment">

				<div class="payment-tab payment-tab-active">
					<div class="payment-tab-trigger">
						<input checked id="paypal" name="cardType" type="radio" value="paypal">
						<label for="paypal">PayPal</label>
						<img class="payment-logo paypal" src="https://i.imgur.com/ApBxkXU.png" alt="">
					</div>

					<div class="payment-tab-content">
						<p>Serás redirigido a PayPal para completar el pago.</p>
					</div>
				</div>


				<div class="payment-tab">
					<div class="payment-tab-trigger">
						<input type="radio" name="cardType" id="creditCart" value="creditCard">
						<label for="creditCart">Tarjeta de crédito / débito</label>
						<img class="payment-logo" src="https://i.imgur.com/IHEKLgm.png" alt="">
					</div>

					<div class="payment-tab-content">
						<div class="row">

							<div class="col-md-6">
								<div class="card-label">
									<label for="nameOnCard">Nombre de tarjeta</label>
									<input id="nameOnCard" name="nameOnCard" required type="text">
								</div>
							</div>

							<div class="col-md-6">
								<div class="card-label">
									<label for="cardNumber">Número de tarjeta</label>
									<input id="cardNumber" name="cardNumber" placeholder="1234  5678  9876  5432" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="expirynDate">Mes de expiración</label>
									<input id="expiryDate" placeholder="MM" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="expiryDate">Año de expiración</label>
									<input id="expirynDate" placeholder="YY" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="cvv">CVV</label>
									<input id="cvv" required type="text">
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<!-- Payment Methods Accordion / End -->
		
			<a href="pages-booking-confirmation.html" class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Confirmar y pagar</a>
		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-0 margin-bottom-60">

			<div class="boxed-widget opening-hours summary margin-top-0">
				<h3><i class="fa fa-calendar-check-o"></i> Resumen de reserva</h3>
				<ul>
					<li>Fecha <span>08/02/2021</span></li>
					<li>Hora <span>9:30 PM</span></li>
					<li>Pacientes <span>2 Adultos</span></li>
					<li class="total-costs">Total <span>S/ 50.00</span></li>
				</ul>

			</div>
			<!-- Booking Summary / End -->

		</div>

	</div>
</div>
<!-- Container / End -->


<!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/neumo/logo.png" alt="">
				<br><br>
				<p>Especialistas en Enfermedades Respiratorias</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contáctanos</h4>
				<div class="text-widget">
					<span>Jirón Guillermo Peratta 394 Of. 107
						Urb Liguria - Santiago de Surco</span> <br>
					<span>+51 964 074 943 </span><br>
					<span> <a href="#">vanessaloayzasalazar@gmail.com</a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2021 Niomads. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-migrate-3.3.1.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</body>
</html>