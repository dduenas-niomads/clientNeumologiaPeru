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

						<li><a href="{{ url('/blog') }}">Blog</a></li>

						<li><a class="current" href="{{ url('/listings') }}">Reservas</a></li>

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


<!-- Slider
================================================== -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
	<a href="images/neumo/dravanessa.jpg" data-background-image="images/neumo/dravanessa.jpg" class="item mfp-gallery" title="Title 1"></a>
	<a href="images/neumo/dravanessa.jpg" data-background-image="images/neumo/dravanessa.jpg" class="item mfp-gallery" title="Title 3"></a>
	<a href="images/neumo/dravanessa.jpg" data-background-image="images/neumo/dravanessa.jpg" class="item mfp-gallery" title="Title 2"></a>
	<a href="images/neumo/dravanessa.jpg" data-background-image="images/neumo/dravanessa.jpg" class="item mfp-gallery" title="Title 4"></a>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">

			<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar">
				<div class="listing-titlebar-title">
					<h2>Dra. Vanessa Lissette Loayza Salazar <span class="listing-tag">Neumología</span></h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							CMP: 56053 RNE: 32419
						</a>
					</span>
					<div class="star-rating" data-rating="5">
						<div class="rating-counter"><a href="#listing-reviews">(12 comentarios)</a></div>
					</div>
				</div>
			</div>

			
			<!-- Overview -->
			<div id="listing-overview" class="listing-section">

				<!-- Description -->

				<p>
					Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.
				</p>

				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
				</p>
				
				
				<!-- Listing Contacts -->
				<div class="listing-links-container">

					<ul class="listing-links contact-links">
						<li><a href="tel:51964074943" class="listing-links"><i class="fa fa-phone"></i> +51 964 074 943</a></li>
						<li><a href="mailto:vanessaloayzasalazar@gmail.com" class="listing-links"><i class="fa fa-envelope-o"></i> vanessaloayzasalazar@gmail.com</a></li>
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>


				<!-- Amenities -->
				<h3 class="listing-desc-headline">Especialidades</h3>
				<ul class="listing-features checkboxes margin-top-0">
					<li>Espirometrías en niños y Adultos</li>
					<li>Evaluación Ocupacional</li>
					<li>Evaluación Prequirúrgica</li>
					<li>Biopsia Pleural</li>
					<li>Toracocentesis Diagnostica y Terapéutica</li>
					<li>Drenaje Pleural</li>
				</ul>
			</div>

			<!-- Location -->
			<div id="listing-location" class="listing-section">
				<h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Ubicación</h3>
				<h2>Jirón Guillermo Peratta</h2>
				<h2>394 ficina 107</h2>
				<h2>Santiago de Surco</h2>
			</div>
				
			<!-- Reviews -->
			<div id="listing-reviews" class="listing-section">
				<h3 class="listing-desc-headline margin-top-75 margin-bottom-20">Comentarios <span>(4)</span></h3>

				<!-- Rating Overview -->
				<div class="rating-overview">
					<div class="rating-overview-box">
						<span class="rating-overview-box-total">5.0</span>
						<span class="rating-overview-box-percent">de 5.0</span>
						<div class="star-rating" data-rating="5"></div>
					</div>

					<div class="rating-bars">
							<div class="rating-bars-item">
								<span class="rating-bars-name">Servicio <i class="tip" data-tip-content="Calidad de servicio al cliente y actitud para trabajar contigo"></i></span>
								<span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="5.0">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>5.0</strong>
								</span>
							</div>
							<div class="rating-bars-item">
								<span class="rating-bars-name">Costo <i class="tip" data-tip-content="Experiencia general recibida por la cantidad gastada"></i></span>
								<span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="5.0">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>5.0</strong>
								</span>
							</div>
							<div class="rating-bars-item">
								<span class="rating-bars-name">Ubicación <i class="tip" data-tip-content="Visibilidad, llegada y estacionamiento"></i></span>
								<span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="5.0">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>5.0</strong>
								</span>
							</div>
							<div class="rating-bars-item">
								<span class="rating-bars-name">Consultorio <i class="tip" data-tip-content="La condición física del negocio"></i></span>
								<span class="rating-bars-inner">
									<span class="rating-bars-rating" data-rating="5.0">
										<span class="rating-bars-rating-inner"></span>
									</span>
									<strong>5.0</strong>
								</span>
							</div>
					</div>
				</div>
				<!-- Rating Overview / End -->


				<div class="clearfix"></div>

				<!-- Reviews -->
				<section class="comments listing-reviews">
					<ul>
						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Kathy Brown <i class="tip" data-tip-content="Person who left this review actually was a customer"></i> <span class="date">Enero 2021</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Me gusta este comentario <span>12</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">John Doe<span class="date">Enero 2021</span>
									<div class="star-rating" data-rating="4"></div>
								</div>
								<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Me gusta este comentario <span>2</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Kathy Brown<span class="date">Enero 2021</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Me gusta este comentario <span>4</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">John Doe<span class="date">Enero 2021</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Me gusta este comentario</a>
							</div>

						</li>
					 </ul>
				</section>
			</div>

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-75 sticky">

				
			<!-- Verified Badge -->
			<div class="verified-badge with-tip" data-tip-content="La Dra Vanessa se encuentra disponible para atenderte">
				<i class="sl sl-icon-check"></i> Disponible
			</div>

			<!-- Book Now -->
			<div id="booking-widget-anchor" class="boxed-widget booking-widget margin-top-35">
				<h3><i class="fa fa-calendar-check-o "></i> Reservar</h3>
				<div class="row with-forms  margin-top-0">

					<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
					<div class="col-lg-12">
						<input type="text" id="date-picker" placeholder="Date" readonly="readonly">
					</div>

					<!-- Panel Dropdown -->
					<div class="col-lg-12">
						<div class="panel-dropdown time-slots-dropdown">
							<a href="#">Horario</a>
							<div class="panel-dropdown-content padding-reset">
								<div class="panel-dropdown-scrollable">
									
									<!-- Time Slot -->
									<div class="time-slot">
										<input type="radio" name="time-slot" id="time-slot-1">
										<label for="time-slot-1">
											<strong>8:30 am - 9:00 am</strong>
											<span>1 cita disponible</span>
										</label>
									</div>

									<!-- Time Slot -->
									<div class="time-slot">
										<input type="radio" name="time-slot" id="time-slot-2">
										<label for="time-slot-2">
											<strong>9:00 am - 9:30 am</strong>
											<span>2 citas disponibles</span>
										</label>
									</div>

									<!-- Time Slot -->
									<div class="time-slot">
										<input type="radio" name="time-slot" id="time-slot-3">
										<label for="time-slot-3">
											<strong>9:30 am - 10:00 am</strong>
											<span>1 citas disponibles</span>
										</label>
									</div>

									<!-- Time Slot -->
									<div class="time-slot">
										<input type="radio" name="time-slot" id="time-slot-4">
										<label for="time-slot-4">
											<strong>10:00 am - 10:30 am</strong>
											<span>3 citas disponibles</span>
										</label>
									</div>

									<!-- Time Slot -->
									<div class="time-slot">
										<input type="radio" name="time-slot" id="time-slot-5">
										<label for="time-slot-5">
											<strong>13:00 pm - 13:30 pm</strong>
											<span>2 citas disponibles</span>
										</label>
									</div>

									<!-- Time Slot -->
									<div class="time-slot">
										<input type="radio" name="time-slot" id="time-slot-6">
										<label for="time-slot-6">
											<strong>13:30 pm - 14:00 pm</strong>
											<span>1 citas disponibles</span>
										</label>
									</div>

									<!-- Time Slot -->
									<div class="time-slot">
										<input type="radio" name="time-slot" id="time-slot-7">
										<label for="time-slot-7">
											<strong>14:00 pm - 14:30 pm</strong>
											<span>1 citas disponibles</span>
										</label>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- Panel Dropdown / End -->

					<!-- Panel Dropdown -->
					<div class="col-lg-12">
						<div class="panel-dropdown">
							<a href="#">Pacientes <span class="qtyTotal" name="qtyTotal">1</span></a>
							<div class="panel-dropdown-content">

								<!-- Quantity Buttons -->
								<div class="qtyButtons">
									<div class="qtyTitle">Adultos</div>
									<input type="text" name="qtyInput" value="1">
								</div>

								<div class="qtyButtons">
									<div class="qtyTitle">Niños</div>
									<input type="text" name="qtyInput" value="0">
								</div>

							</div>
						</div>
					</div>
					<!-- Panel Dropdown / End -->

				</div>
				
				<!-- Book Now -->
				<a href="pages-booking.html" class="button book-now fullwidth margin-top-5">Reservar cita</a>
			</div>
			<!-- Book Now / End -->
		
			<!-- Opening Hours -->
			<div class="boxed-widget opening-hours margin-top-35">
				<h3><i class="sl sl-icon-clock"></i> Próximos horarios</h3>
				<ul>
					<li>Lunes <span>9 AM - 5 PM</span></li>
					<li>Martes <span>9 AM - 5 PM</span></li>
					<li>Miércoles <span>9 AM - 5 PM</span></li>
					<li>Jueves <span>9 AM - 5 PM</span></li>
					<li>Viernes <span>9 AM - 5 PM</span></li>
					<li>Sábado <span>9 AM - 3 PM</span></li>
					<li>Domingo <span>Cerrado</span></li>
				</ul>
			</div>
			<!-- Opening Hours / End -->


			<!-- Share / Like -->
			<div class="listing-share margin-top-40 margin-bottom-40 no-border">
				<button class="like-button"><span class="like-icon"></span> Agregar a favoritos</button> 
				<span>12 personas agregaron a favoritos</span>

					<!-- Share Buttons -->
					<ul class="share-buttons margin-top-40 margin-bottom-0">
						<li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Publicar</a></li>
						<li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Twittear</a></li>
						<li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Compartir</a></li>
						<!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
					</ul>
					<div class="clearfix"></div>
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

<!-- Booking Widget - Quantity Buttons -->
<script src="scripts/quantityButtons.js"></script>

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>
<script>
// Calendar Init
$(function() {
	$('#date-picker').daterangepicker({
		"opens": "left",
		singleDatePicker: true,

		// Disabling Date Ranges
		isInvalidDate: function(date) {
		// Disabling Date Range
		var disabled_start = moment('09/02/2018', 'MM/DD/YYYY');
		var disabled_end = moment('09/06/2018', 'MM/DD/YYYY');
		return date.isAfter(disabled_start) && date.isBefore(disabled_end);

		// Disabling Single Day
		// if (date.format('MM/DD/YYYY') == '08/08/2018') {
		//     return true; 
		// }
		}
	});
});

// Calendar animation
$('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-animated');
});
$('#date-picker').on('show.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-visible');
	$('.daterangepicker').removeClass('calendar-hidden');
});
$('#date-picker').on('hide.daterangepicker', function(ev, picker) {
	$('.daterangepicker').removeClass('calendar-visible');
	$('.daterangepicker').addClass('calendar-hidden');
});
</script>


<!-- Replacing dropdown placeholder with selected time slot -->
<script>
$(".time-slot").each(function() {
	var timeSlot = $(this);
	$(this).find('input').on('change',function() {
		var timeSlotVal = timeSlot.find('strong').text();

		$('.panel-dropdown.time-slots-dropdown a').html(timeSlotVal);
		$('.panel-dropdown').removeClass('active');
	});
});
</script>


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