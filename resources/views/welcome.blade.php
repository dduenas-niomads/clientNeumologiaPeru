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
              <form method="POST" action="{{ route('login') }}">
              @csrf

								<div class="form-row form-row-wide">
									<label for="email">{{ __('E-Mail Address') }}
										<i class="im im-icon-Male"></i>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </label>
                </div>

								<div class="form-row form-row-wide">
									<label for="password">{{ __('Password') }}
										<i class="im im-icon-Lock-2"></i>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </label>
									<span class="lost_password">
										<a href="#" >¿Olvidaste tu contraseña?</a>
									</span>
                </div>

								<div class="form-row">
                <button type="submit" name="login" class="button border margin-top-5">
                    {{ __('Login') }}
                </button>  
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

            <form method="POST" action="{{ route('register') }}">
                @csrf
								
							<div class="form-row form-row-wide">
								<label for="name1">{{ __('Name') }}
									<i class="im im-icon-Male"></i>
									<input id="name1" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </label>
              </div>
								
							<div class="form-row form-row-wide">
								<label for="email1">{{ __('E-Mail Address') }}
									<i class="im im-icon-Mail"></i>
									<input id="email1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </label>
              </div>

							<div class="form-row form-row-wide">
								<label for="password1">{{ __('Password') }}
									<i class="im im-icon-Lock-2"></i>
                  <input id="password1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
								</label>
              </div>

							<div class="form-row form-row-wide">
								<label for="password-confirm">{{ __('Confirm Password') }}
									<i class="im im-icon-Lock-2"></i>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</label>
							</div>
              <button type="submit" class="button border fw margin-top-10" name="register">
                  {{ __('Register') }}
              </button>
	
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

<!-- Revolution Slider -->
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

    <!-- 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
    
                <!-- Slide  -->
                <li data-index="rs-1" data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">
    
                    <!-- Background -->
                    <img src="images/neumo/slider1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">
    
                    <!-- Caption-->
                    <div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                        id="slide-1-layer-2" 
                        data-x="['left','left','left','left']"
                        data-hoffset="['0','40','40','40']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0']" 
                        data-width="['640','640', 640','420','320']"
                        data-height="auto"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"	
                        data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
                        data-transform_out="" 
                        data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-responsive_offset="on">
    
                        <!-- Caption Content -->
                        <div class="R_title margin-bottom-15"
                        id="slide-2-layer-1"
                        data-x="['left','center','center','center']"
                        data-hoffset="['0','0','40','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-40','-40','-20','-80']"
                        data-fontsize="['42','36', '32','36','22']"
                        data-lineheight="['70','60','60','45','35']"
                        data-width="['640','640', 640','420','320']"
                        data-height="none" data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
                        data-transform_out="opacity:0;s:300;"
                        data-start="600"
                        data-splitin="none"
                        data-splitout="none"
                        data-basealign="slide"
                        data-responsive_offset="off"
                        data-responsive="off"
                        style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Neumología y Neumopediatría</div>
    
                        <div class="caption-text">Somos una sociedad de médicos especialistas en Neumología comprometidos con nuestros pacientes. Brindamos la mejor atención privada y personalizada</div>
                    </div>
    
                </li>
    
                <!-- Slide  -->
                <li data-index="rs-2" data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">
    
                    <!-- Background -->
                    <img src="images/neumo/slider3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"> 
    
                    <!-- Caption-->
                    <div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                        id="slide-2-layer-2" 
                        data-x="['center','center','center','center']" data-hoffset="['0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0']" 
                        data-width="['640','640', 640','420','320']"
                        data-height="auto"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"	
                        data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
                        data-transform_out="" 
                        data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-responsive_offset="on">
    
                        <!-- Caption Content -->
                        <div class="R_title margin-bottom-15"
                        id="slide-2-layer-3"
                        data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-40','-40','-20','-80']"
                        data-fontsize="['42','36', '32','36','22']"
                        data-lineheight="['70','60','60','45','35']"
                        data-width="['640','640', 640','420','320']"
                        data-height="none" data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
                        data-transform_out="opacity:0;s:300;"
                        data-start="600"
                        data-splitin="none"
                        data-splitout="none"
                        data-basealign="slide"
                        data-responsive_offset="off"
                        data-responsive="off"
                        style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Cualquier edad</div>
    
                        <div class="caption-text">Atenciones a niños desde etapa de lactancia hasta etapa de adultos mayores (etapa geriátrica).</div>
                        <a href="#" class="button medium">Más información</a>
                    </div>
    
                </li>
    
            </ul>
            <div class="tp-static-layers"></div>
    
        </div>
    </div>
    <!-- Revolution Slider / End -->
    

<!-- Content
================================================== -->
<section class="fullwidth margin-top-0 padding-top-0 padding-bottom-40" data-background-color="#fcfcfc">
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline margin-top-75">
				<strong class="headline-with-separator">Sobre nuestros servicios</strong>
			</h3>
		</div>

		<div class="col-md-12">
			<div class="categories-boxes-container-alt margin-top-5 margin-bottom-30">
				
				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box-alt">
					<h4>Diagnóstico y tratamiento de enfermedades respiratorias</h4>
					<img src="images/category-box-01.jpg">
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box-alt">
					<h4>Atención a pacientes lactantes hasta adultos mayores</h4>
					<img src="images/category-box-02.jpg">
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box-alt">
					<h4>Actualmente estamos manejando las secuelas que ha dejado la COVID-19</h4>
					<img src="images/category-box-03.jpg">
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box-alt">
					<h4>Se han reiniciado las pruebas de función pulmonar (espirometrías)</h4>
					<img src="images/category-box-04.jpg">
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box-alt">
					<h4>Reservas de citas en línea desde nuestra plataforma 100% segura</h4>
					<img src="images/category-box-04.jpg">
				</a>

			</div>
		</div>
	</div>
</div>
</section>
<!-- Category Boxes / End -->


<!-- Listings -->
<div class="container margin-top-70">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">Nuestro Staff médico</strong>
				<span>Conoce a nuestros profesionales de la salud</span>
			</h3>
		</div>

		<div class="col-md-12">
			<div class="simple-slick-carousel dots-nav">

			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="{{ url('/listings') }}" class="listing-item-container">
					<div class="listing-item">
						<img src="images/neumo/dravanessa.jpg" alt="">

						<div class="listing-badge now-open">Disponible</div>
						
						<div class="listing-item-content">
							<h3>Dra. Vanessa Lissette Loayza Salazar</h3>
							<span>CMP:56053 RNE 32419</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="5">
						<div class="rating-counter">(12 comentarios)</div>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->
			</div>
			
		</div>

	</div>
</div>
<!-- Listings / End -->


<section class="fullwidth margin-top-70 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
	<!-- Info Section -->
	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="headline centered">
					La opinión de nuestros clientes
					<span class="margin-top-25">Recopilamos opiniones de nuestros usuarios para que pueda obtener una opinión honesta de cómo es realmente una experiencia con nuestro consultorio.</span>
				</h3>
			</div>
		</div>

	</div>
	<!-- Info Section / End -->

	<!-- Categories Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Muchas gracias doctor !!.excelente la atencion a mi hijo. Gran profesional.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-01.jpg" alt="">
				</div>
			</div>
			
			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Excelente atención de los profesionales, nos reciben con mucho cariño...</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-02.jpg" alt="">
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Felicitaciones por la iniciativa! Excelente servicio para estos tiempos.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-03.jpg" alt="">
				</div>
			</div>

		</div>
	</div>
	<!-- Categories Carousel / End -->

</section>


<!-- Parallax -->
<div class="parallax"
	data-background="images/neumo/slider2.jpg"
	data-color="#36383e"
	data-color-opacity="0.6"
	data-img-width="800"
	data-img-height="505">

	<!-- Infobox -->
	<div class="text-content white-font">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-sm-8">
					<h2>Reserva tu cita ahora</h2>
					<p>Te invitamos a registrarte en nuestra plataforma 24/7 y puedas realizar tu reserva online para nuestros servicios de Neumología, Neumología pediátrica, Cirugía cardiovascular y cirugía de tórax. </p>
					<a href="#" class="button margin-top-25">Reservar una cita</a>
				</div>
			</div>

		</div>
	</div>

	<!-- Infobox / End -->

</div>
<!-- Parallax / End -->


<!-- Recent Blog Posts -->
<section class="fullwidth margin-top-0 padding-top-75 padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-55">
					<strong class="headline-with-separator">Temas de nuestro blog</strong>
				</h3>
			</div>
		</div>

		<div class="row">
			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="#" class="blog-compact-item-container">
					<div style="padding: 20px;" >
						<div >
							<ul >
								<li>22 Agosto 2020</li>
							</ul>
							<h3>LA DIFTERIA</h3>
							<p>Es una enfermedad producida por la toxina de una bacteria denominada corybacterium diphtheriae ( bacilos curvos grampositivos)
								Afecta de forma predominante a la población pediátrica, niños menores de 10 años (80 % de casos es en niños de 2 a 6 años ) sin embargo puede afectar tambien a adultos no inmunizados.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="#" class="blog-compact-item-container">
					<div style="padding: 20px;" >
						<div >
							<ul >
								<li>18 Octubre 2020</li>
							</ul>
							<h3>ASMA Y COVID-19 DURANTE LA GESTACION</h3>
							<p>El Asma es probablemente la enfermedad respiratoria mas prevalente durante la gestacion.
								El Asma es una Enfermedad crónica que afecta a la via area, produciendo inflamacion bronquial y respuesta exagerada a estimulos variados externos e internos.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="#" class="blog-compact-item-container">
					<div style="padding: 20px;" >
						<div >
							<ul >
								<li>10 Diciembre 2020</li>
							</ul>
							<h3>ENFERMEDAD DE KAWASAKI</h3>
							<p>Es una enfermedad multisistemica, de causa desconocida que afecta a niños hasta los 5 años de edad y que parece producirse en personas genéticamente predispuestas a desarrollar una respuesta inmunologica por superantigenos...</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<div class="col-md-12 centered-content">
				<a href="#" class="button border margin-top-10">Ver Blog</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->


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




<!-- REVOLUTION SLIDER SCRIPT -->
<script type="text/javascript" src="scripts/themepunch.tools.min.js"></script>
<script type="text/javascript" src="scripts/themepunch.revolution.min.js"></script>

<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_4_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_4_1");
		}else{
			revapi4 = tpj("#rev_slider_4_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"scripts/",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"on",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"zeus",
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'<div class="tp-title-wrap"></div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:40,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:40,
							v_offset:0
						}
					}
					,
					bullets: {
				enable:false,
				hide_onmobile:true,
				hide_under:600,
				style:"hermes",
				hide_onleave:true,
				hide_delay:200,
				hide_delay_mobile:1200,
				direction:"horizontal",
				h_align:"center",
				v_align:"bottom",
				h_offset:0,
				v_offset:32,
				space:5,
				tmp:''
					}
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%"
			},
			responsiveLevels:[1200,992,768,480],
			visibilityLevels:[1200,992,768,480],
			gridwidth:[1180,1024,778,480],
			gridheight:[640,500,400,300],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
		}
	});	/*ready*/
</script>	


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="scripts/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.video.min.js"></script>




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