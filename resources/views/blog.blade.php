<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Neumología y Neumopediatría</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
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

						<li><a href="{{ url('/') }}">Inicio</a></li>

						<li><a class="current" href="{{ url('/blog') }}">Blog</a></li>

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
					@if (Route::has('login'))
						@auth
							<a href="{{ url('/home') }}" class="sign-in"><i class="sl sl-icon-login"></i> Dashboard</a>
						@else
						<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Ingresar</a>
						@endauth
					@endif
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
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Nuestro blog</h2><span>Últimas publicaciones</span>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="blog-page">
	<div class="row">
		<div class="col-lg-9 col-md-8 padding-right-30">

			<!-- Blog Post -->
			<div class="blog-post">
				
				<!-- Img -->
				<a href="#" class="post-img">
					<img src="images/neumo/blog1.jpg" alt="">
				</a>
				
				<!-- Content -->
				<div class="post-content">
					<h3><a href="#">LA DIFTERIA </a></h3>

					<ul class="post-meta">
						<li>22 Agosto 2020</li>
						<li><a href="#">5 Comentarios</a></li>
					</ul>

					<p>Es una enfermedad producida por la toxina de una bacteria denominada corybacterium diphtheriae ( bacilos curvos grampositivos)
						Afecta de forma predominante a la población pediátrica, niños menores de 10 años (80 % de casos es en niños de 2 a 6 años ) sin embargo puede afectar tambien a adultos no inmunizados.</p>

					<a href="#" class="read-more">Ver más <i class="fa fa-angle-right"></i></a>
				</div>

			</div>
			<!-- Blog Post / End -->


			<!-- Blog Post -->
			<div class="blog-post">
				
				<!-- Img -->
				<a href="#" class="post-img">
					<img src="images/neumo/blog2.jpg" alt="">
				</a>
				
				<!-- Content -->
				<div class="post-content">
					<h3><a href="#">ASMA Y COVID-19 DURANTE LA GESTACION</a></h3>

					<ul class="post-meta">
						<li>18 Octubre 2020</li>
						<li><a href="#">7 Comentarios</a></li>
					</ul>

					<p>El Asma es probablemente la enfermedad respiratoria mas prevalente durante la gestacion.
						El Asma es una Enfermedad crónica que afecta a la via area, produciendo inflamacion bronquial y respuesta exagerada a estimulos variados externos e internos.</p>

					<a href="#" class="read-more">Ver más <i class="fa fa-angle-right"></i></a>
				</div>

			</div>
			<!-- Blog Post / End -->


			<!-- Blog Post -->
			<div class="blog-post">
				
				<!-- Img -->
				<a href="pages-#" class="post-img">
					<img src="images/neumo/blog3.jpg" alt="">
				</a>
				
				<!-- Content -->
				<div class="post-content">
					<h3><a href="pages-#">ENFERMEDAD DE KAWASAKI</a></h3>

					<ul class="post-meta">
						<li>10 Diciembre 2020</li>
						<li><a href="#">12 Comentarios</a></li>
					</ul>

					<p>Es una enfermedad multisistemica, de causa desconocida que afecta a niños hasta los 5 años de edad y que parece producirse en personas genéticamente predispuestas a desarrollar una respuesta inmunologica por superantigenos...</p>

					<a href="#" class="read-more">Ver más <i class="fa fa-angle-right"></i></a>
				</div>

			</div>
			<!-- Blog Post / End -->


			<!-- Pagination -->
			<!-- <div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="pagination-container margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div> -->
			<!-- Pagination / End -->

		</div>

	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="col-lg-3 col-md-4">
		<div class="sidebar right">

			<!-- Widget -->
			<div class="widget margin-top-40">
				<h3>¿Tienes alguna pregunta?</h3>
				<div class="info-box margin-bottom-10">
					<p>¿Tiene alguna pregunta? ¡Siéntete libre de preguntar!</p>
					<a href="pages-contact.html" class="button fullwidth margin-top-20"><i class="fa fa-envelope-o"></i> Escríbenos</a>
				</div>
			</div>
			<!-- Widget / End -->


			<div class="clearfix"></div>
			<div class="margin-bottom-40"></div>
		</div>
	</div>
	</div>
	<!-- Sidebar / End -->

</div>
</div>


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

</body>
</html>