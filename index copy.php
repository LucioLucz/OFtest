<!-- abrir php session_start(); $_SESSION['lang']='es'; ?> -->
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">

	<title>OUTLINE FACTORY</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="./css/animate.min.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/templatemo-style.css">
	<!-- CSS ADICIONAL -->
	<link rel="stylesheet" href="./css/adicionalesDemo.css">

	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.singlePageNav.min.js"></script>
	<script src="./js/typed.js"></script>
	<script src="./js/wow.min.js"></script>
	<script src="./js/custom.js"></script>
</head>

<body id="top">

	<!-- start preloader -->
	<div class="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div>
	<!-- end preloader -->

	<!-- start header -->

	<!-- end header -->

	<!-- start navigation -->
	<nav class="navbar navbar-default templatemo-nav" role="navigation" style="background: url('./images/bandera_argentina.jpg') repeat 9px 70px;">

		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand"><img src="./images/logos/ofLogo.jpg" alt="OUTLINE FACTORY S.R.L" /></a>
			</div>

			<div class="telefono">
				<p><i class="fa fa-phone"></i> Contáctenos </p>
				<p style="color:#fff; padding: 0px;">(+54 9)</p>
				<h3> 11 1111 1111</h3>
			</div>


			<div class="collapse navbar-collapse" style="position: relative;float: right;width: auto;margin-right: 0px;min-width: 280px;padding-left: 0;">
				<ul class="nav navbar-nav navbar-right ">
					<li><a href="#home">HOME</a></li>

					<li class="dropdown"><a href="javascript:void(0)">INSTITUCIONAL</a>
						<ul class="dropdown-content">
							<li><a href="#about">EMPRESA</a></li>
							<li><a href="#mision">MISIÓN</a></li>
						</ul>
					</li>




					<li class="dropdown"><a href="javascript:void(0)">SERVICIOS</a><!--javascript:void(0);-->
						<ul class="dropdown-content">
							<li><a href="#service">Transporte terrestre, warehouse y consultoría logística</a></li>
							<li><a href="#service_aduanera">Gestión aduanera</a></li>
							<li><a href="#service_ff">Freight forwarder</a></li>
							<li><a href="#carga_proyecto">Carga proyecto</a></li>
						</ul>
					</li>
					<!--<li><a href="#equipos">EQUIPOS</a></li>-->

					<li><a href="#contact">CONTACTO</a></li>
					<!-- <li><a class="external" href="http://www.lyon-logistics.com.ar/en/" style="padding-top: 40px !important;"><img src="../images/eng.jpg" alt="" /></a></li>-->
					<li class="dropdown">
						<a href="javascript:void(0)"><img src="../images/esp.jpg" alt="" style="margin-top: -5px;" /></a>
						<ul class="dropdown-content" style="max-width: 63px;min-width: 10px; padding: 11px 11px 3px 11px;">
							<li style="list-style: none;"><a class="external" href="http://www.lyon-logistics.com.ar/en/"><img src="../images/eng.jpg" alt="" /></a></li>
						</ul>
					</li>
				</ul>
			</div>



		</div>
	</nav>
	<!-- end navigation -->



	<!-- start home -->
	<section id="home" style="background:none; overflow:hidden; position:relative;">

		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8" style="z-index:1;">

					<h3 class="wow fadeIn col-12" style="display:inline-block; text-shadow: 1px 1px 2px rgba(0,0,0,.7); font-weight: 500;">
						<!-- “THE POWER OF IMAGE”: Diseñamos y Producimos prendas de trabajo,
100% personalizadas para cada cliente Generando Sentido de Pertenencia

Corporativa -->
						<span style="float: left;"><img src="../images/logo.es.png" alt="" /></span>
						<!-- <span style="float: left; padding-top: 22px;">“THE POWER OF IMAGE”:<br><a style="color:#fff;" href="">lyoniberica.es</a></span> -->
					</h3>

					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">THE POWER OF <br /><span>IMAGE</span></h1>
					<div class="element">
						<div class="sub-element">Diseñamos y Producimos prendas de trabajo <br>
							100% personalizadas para cada cliente, <br>
							Generando Sentido de Pertenencia Corporativa </div>
						<!-- <div class="sub-element">100% personalizadas para cada cliente </div> -->
						<!-- <div class="sub-element">Generando Sentido de Pertenencia ∂∫Corporativa</div> -->
					</div>

				</div>
			</div>
		</div>

		<div class="crossfade">
			<figure></figure>
			<figure></figure>
		</div>

	</section>
	<!-- end home -->
	<style>
		.crossfade>figure {
			/* animation: imageAnimation 16s linear infinite 0s; */
			backface-visibility: hidden;
			background-size: cover;
			background-position: center top;
			color: transparent;
			height: 100%;
			left: 0px;
			/* opacity: 0; */
			opacity: 1;
			position: absolute;
			top: 0px;
			width: 100%;
			z-index: 0;
		}


		.crossfade>figure:nth-child(1) {
			background-image: url('../images/bg_1.jpg');
		}

		/* .crossfade>figure:nth-child(2) {
			animation-delay: 4s;
			background-image: url('../images/bg_2.jpg');
		}

		.crossfade>figure:nth-child(3) {
			animation-delay: 8s;
			background-image: url('../images/bg_3.jpg');
		}

		.crossfade>figure:nth-child(4) {
			animation-delay: 12s;
			background-image: url('../images/bg_4.jpg');
		} */


		@keyframes imageAnimation {

			0% {
				animation-timing-function: ease-in;
				opacity: 0;
			}

			8% {
				animation-timing-function: ease-out;
				opacity: 1;
			}

			17% {
				opacity: 1
			}

			25% {
				opacity: 0
			}

			100% {
				opacity: 0
			}
		}
	</style>


	<!-- start about -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s" style="height: 290px;">
					<div class="media">



						<div class="media-heading-wrapper" style="padding-bottom:20px;">
							<h3 class="media-heading" style="color:#fff;">ACERCA DE NOSOTROS</h3>
						</div>
						<div class="media-body">
							<p style="color:#fff;"><strong>OUTLINE FACTORY SRL</strong> se dedica a comprender que necesidades se plantean tanto en el comercio como en la industria en lo que refiere a materia de indumentaria, calzado y merchandising. <br>
								Nuestra propia marca O-F se dedica al diseño y confección de indumentaria de trabajo, de vestir, uniformes, prendas para bajas temperaturas; entre otras, con telas certificadas y homologadas y siempre orientados a soluciones específicas para cada usuario.
								<br />


							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s" style="width: 50%;">
					<div class="media">
						<div class="media-heading-wrapper" style="padding-bottom:20px;">

							<h3 class="media-heading">NUESTRA FILOSOFÍA</h3>
						</div>
						<div class="media-body">
							<p>Brindar excelencia en servicio, lo que nos permite adaptarnos a las necesidades de nuestros clientes para brindarles soluciones efectivas con un servicio eficiente y con los más altos estándares de calidad.<br>
								Nuestro principal objetivo es proveer a nuestros clientes del mejor servicio y asesoramiento para un equipamiento adecuado, seguro y cómodo de usar acorde a las necesidades específicas que plantean, siempre cumpliendo en tiempo y forma y con los más altos estándares de calidad.
								<br>
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- end about -->


	<!-- start mision -->
	<section id="mision">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">MISIÓN - VISIÓN - VALORES</h2>
					<h3>
						</blockquote>Diseñamos y Producimos prendas de trabajo 100% personalizadas para cada cliente,<br>generando Sentido de Pertenencia

						Corporativa</blockquote>
					</h3>

					<div class="servicios">
						<div class="txt-serv" style="border-top: 0px solid #ECECEC;">
							<h2 class="misionh2">Nuestra <span>Misión</span></h2>
							<p>Somos una Empresa fabricante de indumentaria, calzado y
								merchandising, que innova permanentemente para cumplir con las
								necesidades del cliente y el confort del usuario, haciendo del
								uniforme la vestimenta para la vida.

								Brindando: <br>
								<u>A nuestros Clientes:</u> Diseño y calidad con costos y
								servicios competitivos, <br>
								<u>A nuestro Personal:</u> motivación, desarrollo profesional y
								orgullo por trabajar en la empresa, <br>
								<u>A la Sociedad:</u> compromiso ambiental y responsabilidad
								social, <br>
								<u>A nuestros Proveedores:</u> alianzas competitivas
							</p>

						</div>

						<div class="ico-serv">
							<img src="./images/iconos/mision-ico@2x-8.png" alt="">
						</div>
					</div>

					<div class="servicios">
						<div class="txt-serv">
							<h2 class="misionh2">Nuestra <span>Visión</span></h2>
							<p>Ser reconocidos como el referente de empresas fabricantes argentinas de indumentaria de trabajo, calzado de seguridad y merchandising, tanto por la calidad, diseño y confort de nuestros productos, como por la eficiencia y seriedad tanto en atención como en rentabilidad. A través del involucramiento y desarrollo de nuestro personal, la innovación permanente, el cuidado ambiental y el orgullo de ser una empresa socialmente responsable.</p>
						</div>

						<div class="ico-serv">
							<img src="./images/iconos/vision-ico@2x-8.png" alt="">
						</div>
					</div>

					<div class="servicios">
						<div class="txt-serv">
							<h2 class="misionh2">Nuestros <span>Valores</span></h2>
							<p>Con nuestras múltiples tecnologías vas a encontrar el tejido
								adecuado para cada actividad. <br>
								<strong>FABRICACIÓN</strong><br>Para la elaboración de nuestras prendas apostamos por una
								fabricación responsable. <br>
								<strong>MATERIA PRIMA</strong><br>Contamos con materia prima de primera calidad para todos
								nuestros productos.<br>
								<strong>MEDIO AMBIENTE</strong><br>Somos respetuosos con el medio ambiente y los residuos que
								generamos.<br>
								<strong>SOCIALMENTE RESPONSABLES</strong><br>Los residuos que generamos son tratados por empresas certificadas
								en el rubro.<br>
							</p>
						</div>

						<div class="ico-serv">
							<img src="./images/iconos/valores-ico@2x-8.png" alt="">
						</div>

					</div>



					<!-- <img style="position: absolute;right: 0;" src="./images/mision/mision1@2x-8.png" class="img-responsive" alt="deposito"> -->

					<!-- <img style="position: absolute;right: 0;" src="./images/mision.jpg" class="img-responsive" alt="deposito"> -->




				</div>
			</div>
	</section>
	<!-- end mision -->


	<section id="sectoresDeAtencion">
		<!-- NUESTROS SECTORES DE ATENCION START -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">NUESTROS <span>SECTORES DE ATENCIÓN</span></h2>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/automotriz.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Automotor</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>Millones de autos fabricados en México que recorren los caminos de todo el mundo y un futuro prometedor son solo algunas de las razones para sentirse orgulloso y celebrar la industria automotriz mexicana. </p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/corporativos.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Financiero: Corporativo y Bancos</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>Permítenos representar la imagen de tu empresa.
								Blusas, Camisas, pantalones, chamarras, chalecos y Trajes para sector Corporativo, Bancos, sector público y privado.
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/salud.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Salud: Hospitales (Públicos y Privados) y Obras Sociales</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p> El sector salud o la sanidad es el conjunto de bienes y servicios encaminados a preservar y proteger la salud de las personas.
								Contamos con Filipinas, pantalones, gorros, batas, sabanas entre otros productos.
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/aeronautico.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Aeroportuario</h4>
							<p>La importancia de este sector en nuestro país nos permite brindar los siguientes productos: Blusas, Camisas, chalecos, chamarras, trajes sastre, corbatas overoles y más!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/construccion.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Construcción, Oil & Gas y Mining</h4>
							<p>Reconocemos la importancia de mantener a su personal protegido y cómodo; te ofrecemos Overoles, Pantalones, Chalecos de Alta visibilidad y Calzado, envía tus requerimientos!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/seguridad.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Seguridad Pública y Privada</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>La seguridad publica o privada es primordial para mantener el orden ; ofrecemos los siguientes productos: Pantalones, Camisolas, chamarras, chalecos, Calzado y más!

							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/hoteleria.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Hotelería</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>Sabemos la importancia de tu servicio. Permítenos acompañar a tu personal en su imagen, brindamos Blusas, Camisas, pantalones, faldas, bermudas, sabanas, toallas personalizadas y más!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/gastronomia.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Gastronomía</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>Todo lo que necesitas para el personal de tu establecimiento, Mandiles, Pantalones, blusas, camisas, Playeras, servilletas, manteles y más!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/beauty.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Beauty & Spa</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>La imagen de tu negocio es lo más importante para nosotros, agenda una cita!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/construccion.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Transporte y warehouse</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>La imagen de tu negocio es lo más importante para nosotros, agenda una cita!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<img src="./images/sectores/construccion.jpeg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Fábricas</h4>
							<!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
							<p>La imagen de tu negocio es lo más importante para nosotros, agenda una cita!
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- NUESTROS SECTORES DE ATENCION END -->



		<!-- CERTIFICACIONES DE TELAS START -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>CERTIFICACIONES</span> DE TELAS</h2>
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
					<!-- <div class="team-wrapper">
					</div> -->
				</div>




			</div>
		</div>
		<!-- CERTIFICACIONES DE TELAS END -->

	</section>



	<!-- start servicios -->
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s" style="padding-bottom: 10px;">CATÁLOGO DE <span>PRENDAS</span></h2>







					<div class="servicios" id="service_ff">

						<!-- <div class="media-heading-wrapper" style="padding-bottom:10px;">
							<h3 class="media-heading">CATALOGO DE PRENDAS</h3>
						</div> -->


						<!-- <div class="txt-serv" style="width:100%; text-align:center">
							<p style="font-size: 16px; text-align:center;"><strong>LYON LOGISTICS SERVICES S.R.L.</strong> posee una unidad de negocio dedicada a la de expedición de mercancías overseas a lo largo y ancho del mundo.<br>Suministramos sus mercancías a través de soluciones multimodales (mar, aire, carretera o tren), servicios con valor añadido y servicios efectivos de corretaje aduanero para garantizar la entrega más rápida a su destino. </p>
						</div> -->

					</div>
					<!-- <h4 style="font-weight:bold; text-transform:uppercase;">Servicios clave de freight forwarding:</h4> -->
				</div>
			</div>
	</section>
	<!-- end servicios -->







	<!-- start team -->
	<section id="team">
		<div class="container">
			<div class="row">
				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<img src="./images/catalogo/pantalon-cargo.jpeg" class="img-responsive" alt="Despacho Aduana">
						<div class="team-des" id="aereo">
							<h4>Pantalón cargo s/ pinzas y con recortes.</h4>
							<p>Bolsillos con fuelle y chanfle.<br>
								Confeccionados bajo normas de calidad ISO 9000, en tela de algodón 100%<br>
								Sarga 3/1<br>
								<strong>Peso</strong><br>
								265 G/M2<br>
								<strong>Talles</strong><br>
								38 al 60<br>
								<strong>Colores</strong><br>
								Azul marino, Beige, Verde, Negro.
							</p>
							<!-- <ul>
								<li><strong style="text-decoration:underline;">AIRFAST:</strong> Entrega dentro de un horario definido en las principales líneas aéreas de todo el mundo.</li>
								<li><strong style="text-decoration:underline;">AIRFLEX:</strong> La conexión más rápida aeropuerto-aeropuerto.</li>
							</ul> -->

							<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="aereo">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<img src="./images/catalogo/camisa.png" class="img-responsive" alt="Despacho Aduana">
						<div class="team-des" id="aereo">
							<h4>Camisa de trabajo , manga larga con dos bolsillos en los delanteros con tapa y botón.</h4>
							<p>Cartera con botones <br>
								<strong>TELA</strong><br> SARGA MEDIANA <br>
								ART 1640 <br>
								Construcción Sarga 2/1 <br>
								<strong>Peso </strong>190 gr/m2 – <br>
								Composición 100% Algodón. <br>
								BAJO NORMAS ISO 9001-14001-18001 <br>
								<strong>Talles:</strong> 36 al 60 <br>
								<strong>Colores:</strong> <br>
								BEIGE (112) <br>
								PETREO (113) <br>
								VERDE (657) <br>
								AZUL MARINO (507) <br>
								NARANJA (191) <br>
								BLANCO (000) <br>
							</p>
							<!-- <ul>
								<li><strong style="text-decoration:underline;">AIRFAST:</strong> Entrega dentro de un horario definido en las principales líneas aéreas de todo el mundo.</li>
								<li><strong style="text-decoration:underline;">AIRFLEX:</strong> La conexión más rápida aeropuerto-aeropuerto.</li>
							</ul> -->

							<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="aereo">Ver más</a></p>

						</div>
					</div>
				</div>


				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<img src="./images/catalogo/mameluco.jpeg" class="img-responsive" alt="Despacho Aduana">
						<div class="team-des" id="aereo">
							<h4>Mameluco clasico</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								Confeccionadas bajo normas de de calidad total grafa, en tela algodón 100% <br>
								<strong>TELA:</strong><br> SARGA PESADA <br>
								ART 1650 <br>
								Construcción Sarga 3/1 S. <br>
								<strong>Peso</strong> 264 gr/m2 – <br>
								Composición 100% Algodón. <br>
								<strong>Colores</strong> <br>
								BEIGE (112) <br>
								AZUL MARINO (507) <br>
								NARANJA (191) <br>
								BLANCO (000) <br>
							</p>
							<!-- <ul>
								<li><strong style="text-decoration:underline;">AIRFAST:</strong> Entrega dentro de un horario definido en las principales líneas aéreas de todo el mundo.</li>
								<li><strong style="text-decoration:underline;">AIRFLEX:</strong> La conexión más rápida aeropuerto-aeropuerto.</li>
							</ul> -->

							<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="aereo">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<img src="./images/catalogo/mameluco.jpeg" class="img-responsive" alt="Despacho Aduana">
						<div class="team-des" id="aereo">
							<h4>Mameluco clasico</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								Confeccionadas bajo normas de de calidad total grafa, en tela algodón 100% <br>
								<strong>TELA:</strong><br> SARGA PESADA <br>
								ART 1650 <br>
								Construcción Sarga 3/1 S. <br>
								<strong>Peso</strong> 264 gr/m2 – <br>
								Composición 100% Algodón. <br>
								<strong>Colores</strong> <br>
								BEIGE (112) <br>
								AZUL MARINO (507) <br>
								NARANJA (191) <br>
								BLANCO (000) <br>
							</p>
							<!-- <ul>
								<li><strong style="text-decoration:underline;">AIRFAST:</strong> Entrega dentro de un horario definido en las principales líneas aéreas de todo el mundo.</li>
								<li><strong style="text-decoration:underline;">AIRFLEX:</strong> La conexión más rápida aeropuerto-aeropuerto.</li>
							</ul> -->

							<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="aereo">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<img src="./images/catalogo/mameluco.jpeg" class="img-responsive" alt="Despacho Aduana">
						<div class="team-des" id="aereo">
							<h4>Mameluco clasico</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								Confeccionadas bajo normas de de calidad total grafa, en tela algodón 100% <br>
								<strong>TELA:</strong><br> SARGA PESADA <br>
								ART 1650 <br>
								Construcción Sarga 3/1 S. <br>
								<strong>Peso</strong> 264 gr/m2 – <br>
								Composición 100% Algodón. <br>
								<strong>Colores</strong> <br>
								BEIGE (112) <br>
								AZUL MARINO (507) <br>
								NARANJA (191) <br>
								BLANCO (000) <br>
							</p>
							<!-- <ul>
								<li><strong style="text-decoration:underline;">AIRFAST:</strong> Entrega dentro de un horario definido en las principales líneas aéreas de todo el mundo.</li>
								<li><strong style="text-decoration:underline;">AIRFLEX:</strong> La conexión más rápida aeropuerto-aeropuerto.</li>
							</ul> -->

							<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="aereo">Ver más</a></p>

						</div>
					</div>
				</div>


				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<img src="./images/catalogo/mameluco.jpeg" class="img-responsive" alt="Despacho Aduana">
						<div class="team-des" id="aereo">
							<h4>Mameluco clasico</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								Confeccionadas bajo normas de de calidad total grafa, en tela algodón 100% <br>
								<strong>TELA:</strong><br> SARGA PESADA <br>
								ART 1650 <br>
								Construcción Sarga 3/1 S. <br>
								<strong>Peso</strong> 264 gr/m2 – <br>
								Composición 100% Algodón. <br>
								<strong>Colores</strong> <br>
								BEIGE (112) <br>
								AZUL MARINO (507) <br>
								NARANJA (191) <br>
								BLANCO (000) <br>
							</p>
							<!-- <ul>
								<li><strong style="text-decoration:underline;">AIRFAST:</strong> Entrega dentro de un horario definido en las principales líneas aéreas de todo el mundo.</li>
								<li><strong style="text-decoration:underline;">AIRFLEX:</strong> La conexión más rápida aeropuerto-aeropuerto.</li>
							</ul> -->

							<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="aereo">Ver más</a></p>

						</div>
					</div>
				</div>

			</div>



		</div><!-- container end -->
	</section>
	<!-- end team -->



	<!-- start about -->
	<section id="carga_proyecto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-122">
					<h2 class="wow bounceIn">¿Por qué somos <span>tu mejor opción</span>?</h2>
				</div>
			</div>
			<div class="row">


				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="media">
						<div class="media-heading-wrapper" style="padding-bottom:20px;">

						</div>
						<div class="media-body">
							<p style="color:#fff;">Apostamos a la excelencia en servicio, y ésto nos permite adaptarnos a las necesidades de nuestros
								clientes para brindarles soluciones efectivas con un servicio eficiente.

							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s" style="width: 60%;">
					<div class="media">
						<div class="media-heading-wrapper" style="padding-bottom:20px;">
							<h3 class="media-heading">Nuestras Principales Características</h3>
						</div>
						<div class="media-body">
							<ul>
								<li><i class="fa fa-check"></i> <strong>Compromiso</strong> <br>

									Brindamos a cada uno de nuestros clientes la CALIDAD, COMODIDAD y
									DURABILIDAD que necesitan para los uniformes de su equipo de trabajo.
									Utilizando los materiales que mejor se adapten a sus necesidades y a su presupuesto.</li><br>

								<li><i class="fa fa-check"></i><strong>Atención personalizada</strong><br>
									Nos esforzamos por brindar a cada cliente servicio, diseño y atención
									personalizada en cada uniforme. Estamos conscientes de que cada Empresa
									es única, intentamos plasmar la esencia y sentido de pertenencia Corporativa
									de forma Exclusiva.</li><br>

								<li><i class="fa fa-check"></i><strong>Calidad Controlada Puntada a Puntada</strong><br>
									Nuestros productos participan, tanto en el cuidado del medio
									ambiente, como en la protección y seguridad de nuestros
									empleados.</li><br>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s" style="width: 40%;">
					<div class="media">

						<div class="media-body">
							<!-- <img src="./images/carga_proyecto.jpg" class="img-responsive" alt="Carga proyecto"> -->
							<img src="./images/por-que-elegirnos/porQueElegirnosW450.jpg" class="img-responsive elegirnos" alt="Carga proyecto">
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- end about -->




	<section id="partners">


		<!-- PARTNERS START -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">NUESTROS <span>PARTNERS</span></h2>
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/logos/la-paulina-logo.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/logos/la-paulina-logo.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/logos/la-paulina-logo.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/logos/la-paulina-logo.png" class="img-responsive" alt="portfolio img 1">
				</div>

				




			</div>
		</div>
		<!-- PARTNERS END -->
	</section>







	<!-- start contact -->
	<section id="contact" style="background:#ECECEC;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">SOLICITE <span>INFORMACIÓN</span></h2>
					<h3>Puede contactarse con nosotros, comunicándose a nuestros teléfonos, por mail ó completando el formulario. Le responderemos a la brevedad!</h3>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
					<address style="border-bottom: 0px solid #505050;">
						<p class="address-title">Envíe su consulta</p>

					</address>
					<script src='https://www.google.com/recaptcha/api.js'></script>
					<script>
						function onSubmit(token) {

							if ($('#nombre').val() != '' && $('#email').val() != '' && $('#mensaje').val() != '' && $('#g-recaptcha-response').val() != '') {
								$('#submit').val('Aguarde por favor');
								$.ajax({
									type: "POST",
									url: "../contacto.php",
									data: $("#contact-form").serialize(),
									success: function(data) {
										var obj = jQuery.parseJSON(data);

										if (obj.respuesta == 'OK') {
											alert('Mensaje enviado, muchas gracias.');
											window.location.reload();
										} else {
											alert('Falla Envio. Por favor intente nuevamente');
											window.location.reload();

										}

									}
								});


							} else {
								alert('Por favor complete los campos requeridos e idique que no es un robot');

							}
						}
					</script>


					<form id="contact-form" action="#" method="post">
						<label>NOMBRE Y APELLIDO</label>
						<input name="nombre" type="text" class="form-control" id="nombre" required>

						<label>EMAIL</label>
						<input name="email" type="email" class="form-control" id="email" required>

						<label>MENSAJE</label>
						<textarea name="mensaje" rows="4" class="form-control" id="mensaje" required></textarea>
						<div class="g-recaptcha" data-sitekey="6LdQpRoUAAAAANiBXpHog7mN0JPEcXeG9Gxxut_N"></div>
						<input id="submit" type="button" onClick="onSubmit()" name="submit" value="Enviar Consulta" class="form-control" />
					</form>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
					<address>
						<p style="padding-bottom: 27px;" class="address-title">Contáctenos</p>

						<p><i class="fa fa-phone"></i><b style="color:#1697a5; font-size:16px;"><a href="tel:5491167840949">+54 (9) 11 67840949</a></b></p>
						<p><i class="fa fa-phone"></i><b style="color:#1697a5; font-size:16px;"><a href="tel:5491134766986">+54 (9) 11 34766986</a></b></p>


						<p><i class="fa fa-envelope-o"></i><a href="mailto:ventas@o-f.com.ar">ventas@o-f.com.ar</a></p>

						<p><i class="fa fa-map-marker"></i>Oficina Martinez:  Gral. Alvear 57 – Martinez – Bs. As. – Arg. (Cod. Post.: B1640EVA)</p>
						<p><i class="fa fa-map-marker"></i>Oficina CABA: Bauness 2047 Piso 4 “A” – CABA – Arg. (Cod. Post.: C1431CIH)</p>


						<p><i class="fa fa-facebook"></i><a href="https://www.facebook.com/Lyon-Logistics-Services-867205750002354/" target="_blank"><strong>LYON LOGISTICS SERVICES S.R.L.</strong></a></p>
					</address>

				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->

	<!-- start copyright -->
	<footer id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
						Copyright &copy; <?php echo date('Y'); ?> <strong>OUTLINE FACTORY</strong> - Powered by <a href="http://www.mink.com.ar" target="_blank">Mink</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- end copyright -->

</body>

</html>