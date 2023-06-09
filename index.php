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
	<link rel="icon" type="image/x-icon" href="./images/iconos/favicon.png">

	<!-- <link rel="stylesheet" href="./css/animate.min.css"> -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/templatemo-style.css">
	<!-- GOOGLE FONTS -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300' rel='stylesheet' type='text/css'> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- CSS ADICIONAL -->
	<link rel="stylesheet" href="./css/adicionalesDemo.css">

	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.singlePageNav.min.js"></script>
	<script src="./js/typed.js"></script>
	<script src="./js/wow.min.js"></script>
	<script src="./js/scroll-fade.js"></script>
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

	<!-- start navigation -->
	<nav class="navbar navbar-default templatemo-nav" role="navigation" style="background: url('./images/iconos/isologo-bg-navbarW10_3@2x-8.png') repeat 9px 70px;">

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
				<h3> 11 6784 0949</h3>
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
							<li><a href="#sectoresDeAtencion">Sectores de atención</a></li>
							<li><a href="#certificaciones">Certificaciones de telas</a></li>
							<li><a href="#service">Catálogo de prendas</a></li>
							<li><a href="#carga_proyecto">Por qué elegirnos</a></li>
							<li><a href="#partners">Empresas que nos eligen</a></li>
						</ul>
					</li>

					<li><a href="#contact">CONTACTO</a></li>
				</ul>
			</div>



		</div>
	</nav>
	<!-- end navigation -->

	<!-- start home -->
	<section id="home" style="background:none; overflow:hidden; position:relative;">

		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 blur" style="z-index:1;">

					<div class="crossfade titles">
						<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">THE POWER OF <br /><span>IMAGE</span></h1>
						<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">EL PODER DE LA <br /><span>IMAGEN</span></h1>
					</div>

					<div class="element">
						<div class="sub-element">Diseñamos y Producimos prendas de trabajo <br>
							100% personalizadas para cada cliente, <br>
							Generando Sentido de Pertenencia Corporativa
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="crossfade">
			<figure></figure>
			<figure></figure>
			<figure></figure>
		</div>

	</section>
	<!-- end home -->

	<style>
		.crossfade>figure {
			animation: imageAnimation 18s linear infinite 0s;
			backface-visibility: hidden;
			background-size: cover;
			background-position: center top;
			color: transparent;
			height: 100%;
			left: 0px;
			opacity: 0;
			position: absolute;
			top: 0px;
			width: 100%;
			z-index: 0;
		}


		.crossfade>figure:nth-child(1) {
			/* background-image: url('./images/home/home2low.jpg'); */
			background-image: url('./images/home/homeB1.jpg');
		}

		.crossfade>figure:nth-child(2) {
			animation-delay: 6s;
			/* background-image: url('./images/home/home1.jpg'); */
			background-image: url('./images/home/homeB2.jpg');
		}

		.crossfade>figure:nth-child(3) {
			animation-delay: 12s;
			/* background-image: url('./images/home/home3low.jpg'); */
			background-image: url('./images/home/homeB4.jpg');
		}


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

			65% {
				opacity: 0
			}

			100% {
				opacity: 0
			}
		}
	</style>

	<!-- start about -->
	<section id="about" class="scroll-content fadeTop">
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
							<p>
								<!-- Brindar excelencia en servicio, lo que nos permite adaptarnos a las necesidades de nuestros clientes para brindarles soluciones efectivas con un servicio eficiente y con los más altos estándares de calidad.<br> -->
								Nuestro principal objetivo es proveer a nuestros clientes del mejor servicio y asesoramiento para proveer un equipamiento adecuado, seguro y cómodo de usar acorde a las necesidades específicas que se plantean, siempre cumpliendo en tiempo y forma y con los más altos estándares de calidad.
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
	<section id="mision" class="scroll-content fadeTop">
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

					</div>

					<div class="servicios">
						<div class="txt-serv">
							<h2 class="misionh2">Nuestra <span>Visión</span></h2>
							<p>Ser reconocidos como el referente de empresas fabricantes argentinas de indumentaria de trabajo, calzado de seguridad y merchandising, tanto por la calidad, diseño y confort de nuestros productos, como por la eficiencia y seriedad tanto en atención como en rentabilidad. A través del involucramiento y desarrollo de nuestro personal, la innovación permanente, el cuidado ambiental y el orgullo de ser una empresa socialmente responsable.</p>
						</div>

					</div>

					<div class="servicios valores">
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


					</div>

					<!-- img 1 -->
					<!-- <img style="position: absolute;right: 0;" src="./images/mision/mision2@2x-8.png" class="img-responsive horizontal" alt="deposito"> -->

					<img style="position: absolute;right: 0;" src="./images/mision/misionHori.png" class="img-responsive horizontal" alt="deposito">
					<img style="position: absolute;right: 0;" src="./images/mision/misionVerti4.png" class="img-responsive vertical" alt="deposito">

				</div>
			</div>
	</section>
	<!-- end mision -->

	<!-- NUESTROS SECTORES DE ATENCION START -->
	<section id="sectoresDeAtencion" class="scroll-content fadeTop">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">NUESTROS <span>SECTORES DE ATENCIÓN</span></h2>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/automotorWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/automotorW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Automotor</h4>
							<p>Millones de autos fabricados en México que recorren los caminos de todo el mundo y un futuro prometedor son solo algunas de las razones para sentirse orgulloso y celebrar la industria automotriz mexicana. </p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/financieroWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/financieroW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Financiero: Corporativo y Bancos</h4>
							<p>Permítenos representar la imagen de tu empresa.
								Blusas, Camisas, pantalones, chamarras, chalecos y Trajes para sector Corporativo, Bancos, sector público y privado.
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/saludWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/saludW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Salud: Hospitales (Públicos y Privados) y Obras Sociales</h4>
							<p> El sector salud o la sanidad es el conjunto de bienes y servicios encaminados a preservar y proteger la salud de las personas.
								Contamos con Filipinas, pantalones, gorros, batas, sabanas entre otros productos.
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/savedForWebW1000/aeroportuarioW1000.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/aeroportuario2High.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Aeroportuario</h4>
							<p>La importancia de este sector en nuestro país nos permite brindar los siguientes productos: Blusas, Camisas, chalecos, chamarras, trajes sastre, corbatas overoles y más!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/oilWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/oilingW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Construcción, Oil & Gas y Mining</h4>
							<p>Reconocemos la importancia de mantener a su personal protegido y cómodo; te ofrecemos Overoles, Pantalones, Chalecos de Alta visibilidad y Calzado, envía tus requerimientos!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/seguridadWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/seguridadW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Seguridad Pública y Privada</h4>
							<p>La seguridad publica o privada es primordial para mantener el orden ; ofrecemos los siguientes productos: Pantalones, Camisolas, chamarras, chalecos, Calzado y más!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/hoteleriaWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/hoteleriaW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Hotelería</h4>
							<p>Sabemos la importancia de tu servicio. Permítenos acompañar a tu personal en su imagen, brindamos Blusas, Camisas, pantalones, faldas, bermudas, sabanas, toallas personalizadas y más!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/gastronomiaWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/gastronomiaW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Gastronomía</h4>
							<p>Todo lo que necesitas para el personal de tu establecimiento, Mandiles, Pantalones, blusas, camisas, Playeras, servilletas, manteles y más!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/beautyWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/beautyW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Beauty & Spa</h4>
							<p>La imagen de tu negocio es lo más importante para nosotros, agenda una cita!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/transporteWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/transporteW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Transporte y warehouse</h4>
							<p>La imagen de tu negocio es lo más importante para nosotros, agenda una cita!
							</p>
						</div>
					</div>
				</div>

				<!-- CARD SECTOR -->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.6s">
					<div class="team-wrapper">
						<!-- <img src="./images/sectores/fabricasWeb2.jpg" class="img-responsive" alt="portfolio img 1"> -->
						<img src="./images/sectores/savedForWebW1000/fabricasW1000.jpg" class="img-responsive" alt="portfolio img 1">
						<div class="team-des">
							<h4>Fábricas</h4>
							<p>La imagen de tu negocio es lo más importante para nosotros, agenda una cita!
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- NUESTROS SECTORES DE ATENCION END -->

	<!-- CERTIFICACIONES DE TELAS START -->
	<section id="certificaciones" class="scroll-content fadeTop">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>CERTIFICACIONES</span> DE TELAS</h2>
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-retardante.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-repelente.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-quimicos.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-confort.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-encogimiento.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-ecopet.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antiolor.png" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- CARD CERTIFICACIONES -->
				<div class="col-md-3 col-sm-4 col-xs-6 wow fadeIn cert-item" data-wow-offset="50" data-wow-delay="1.6s">
					<img src="./images/iconos/cert-antibacteriano.png" class="img-responsive" alt="portfolio img 1">
				</div>

			</div>
		</div>
	</section>
	<!-- CERTIFICACIONES DE TELAS END -->


	<!-- CATALOGO -->
	<!-- start servicios -->
	<section id="service" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s" style="padding-bottom: 10px;">CATÁLOGO DE <span>PRENDAS</span></h2>
					<!-- <h2>Modal Example</h2> -->

					<!-- Trigger/Open The Modal -->
					<!-- <a id="myBtn">Open Modal</a> -->

					<!-- The Modal -->
					<div id="myModal" class="modal">

						<!-- Modal content -->
						<div class="modal-content">
							<!-- ITEM -->
							<div class="team-wrapper">
								<div class="team-des">
									<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
									<p>
										<strong>MARCA</strong><br> FAR WEST <br>
										<strong>TELA</strong><br> GABARDINA PESADA <br>
										Construcción Sarga 3/1 S <br>
										<strong>COMPOSICIÓN</strong><br>
										100% Algodón<br>
									</p>

								</div>
							</div>
							<span class="close">&times;</span>
							<p>Some text in the Modal.</p>

						</div>

					</div>


				</div>
			</div>
	</section>
	<!-- end servicios -->


	<!-- start team -->
	<section id="team" class="">
		<div class="container">
			<div class="row">

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/pantalon-cargo.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo1">
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
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo1">Ver más</a></p>


						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/camisa.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo2">
							<h4>Camisa de trabajo , manga larga con dos bolsillos en los delanteros con tapa y botón.</h4>
							<p>Cartera con botones <br>
								<strong>TELA</strong><br> SARGA MEDIANA <br>
								ART 1640 <br>
								Construcción Sarga 2/1 <br>
								<strong>PESO</strong><br>190 gr/m2<br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
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

							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo2">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/mameluco.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo3">
							<h4>Mameluco clasico</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								Confeccionadas bajo normas de de calidad total grafa, en tela algodón 100% <br>
								<strong>TELA:</strong><br> SARGA PESADA <br>
								ART 1650 <br>
								Construcción Sarga 3/1 S. <br>
								<strong>PESO</strong><br>264 gr/m2 – <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
								<strong>Colores</strong> <br>
								BEIGE (112) <br>
								AZUL MARINO (507) <br>
								NARANJA (191) <br>
								BLANCO (000) <br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo3">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/campera.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo4">
							<h4>Campera Estándar Trucker</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								Campera de Trucker matelaseada<br>
								Bolsillos invertidos con capucha de montaña regulable.<br>
								Guata 150 grs.
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo4">Ver más</a></p>
						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/pantalon-clasico.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo5">


							<h4>Pantalón de corte clásico</h4>
							<p>Posee 5 bolsillos:<br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno tipo relojero.<br>
								Los bolsillos son confeccionados con la misma tela que el resto de la prenda. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
								<strong>PESO</strong><br>
								265 g/m2.
								Sarga 3/1, <br>
								<strong>COLORES</strong><br>
								Sólidos aptos para trabajo: Azul Marino, Azulino, Beige, Verde Oliva,Blanco. <br>
								<strong>TALLES</strong><br>
								36 a 60 <br>
								<strong>TELA</strong><br>Sarga pesada <br>
								<strong>COMPOSICIÓN</strong> 100% Algodón <br>

							</p>

							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo5">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/camisa-trabajo.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo6">
							<h4>Camisa de trabajo</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								manga larga con dos bolsillos en los delanteros con tapa y botón. <br>
								Cartera con botones <br>
								<strong>TELA:</strong><br> GABARDINA MEDIANA <br>
								ART 5140 <br>
								Construcción Sarga 2/1 <br>
								<strong>PESO</strong><br>190 gr/m2<br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
								<strong>Colores</strong> <br>
								BEIGE (210) <br>
								PETREO (455) <br>
								NARANJA (191) <br>
								BLANCO (000) <br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo6">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/mameluco-azul.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo7">
							<h4>Mameluco clasico</h4>
							<p>Cintura elastizada 7 bolsillos reforzados <br>
								Confeccionadas bajo normas de de calidad total grafa, en tela algodón 100% <br>
								<strong>TELA:</strong><br> GABARDINA PESADA <br>
								ART 5270 <br>
								<strong>PESO</strong><br> 265 gr/m2<br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
								<strong>Categorías</strong> <br>
								grafa70, Ropa de trabajo

							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo7">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/pantalon-clasico-azul.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo8">

							<h4>Pantalón de corte clásico</h4>
							<p>
								Posee 5 bolsillos: 2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno tipo relojero. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>

								Cintura elastizada 7 bolsillos reforzados <br>
								Confeccionadas bajo normas de de calidad total grafa, en tela algodón 100% <br>
								<strong>TELA:</strong><br> GABARDINA PESADA <br>
								ART 5270 <br>
								Construcción Sarga 3/1 S.<br>
								<strong>PESO</strong> 264 gr/m2<br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
								<strong>TALLES</strong><br>
								Del 36 al 60<br>
								<strong>COLORES</strong> <br>
								Naranja <br>
								Azulino <br>
								Beige <br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo8">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/pantalon-cargo-reforzado.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo9">

							<h4>Pantalon de trabajo tipo cargo Reforzado</h4>
							<p>Bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta telefono, mas dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>

								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
								Construcción Sarga 3/1 S.
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo9">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/pantalon-jean.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo10">
							<h4>Pantalon de Jean -INDIGO CLASICO</h4>
							<p>Bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno tipo relojero. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								12 Onzas Prelavado <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
								<strong>TALLES</strong><br>
								Del 36 al 60<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo10">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/bermuda-cargo.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo11">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo11">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/camisa-DirecTv.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo12">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo12">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/campera-DirecTvBGWhite2.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo13">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo13">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/camisa-Monsanto.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo14">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo14">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/campera-Ferrari.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo15">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo15">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/chaleco-Brigadistas.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo16">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo16">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/chaleco-Prevencion.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo17">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo17">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/chomba-Dhl.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo11">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo11">Ver más</a></p>

						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn catalogo-item scroll-content fadeTop" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
					<div class="team-wrapper">
						<div class="cat-img-container">
							<img src="./images/catalogoNormalizadas/delantal-LaPaulina.jpg" class="img-responsive" alt="Despacho Aduana">
						</div>
						<div class="team-des" id="aereo11">
							<h4>BERMUDA CARGO CON BOLSILLOS C FUELLE</h4>
							<p>7 bolsillos: <br>
								2 en la parte posterior con trabas a botón, 2 en la parte delantera y uno Frontal porta teléfono, más dos laterales con fuelle. <br>
								En la cintura cuenta con pasacintos, su cierre es a cremallera y posee botón con ojal. <br>
								Triple costura cadena en unión de lado exterior e interior de la pierna. <br>
								<strong>MARCA</strong><br> FAR WEST <br>
								<strong>TELA</strong><br> GABARDINA PESADA <br>
								Construcción Sarga 3/1 S <br>
								<strong>COMPOSICIÓN</strong><br>
								100% Algodón<br>
							</p>
							<p class="boton"><a href="javascript:void(0);" class="ver_modal" data-div="aereo11">Ver más</a></p>

						</div>
					</div>
				</div>


			</div>


		</div>
		<!-- container end -->
	</section>
	<!-- end team -->

	<!-- CATALOGO FIN-->

	<!-- start about -->
	<section id="carga_proyecto" class="scroll-content fadeTop">
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
									DURABILIDAD que necesitan para los uniformes de su equipo de trabajo,
									utilizando los materiales que mejor se adapten a sus necesidades y a su presupuesto.</li><br>

								<li><i class="fa fa-check"></i><strong>Atención personalizada</strong><br>
									Nos esforzamos por brindar a cada cliente servicio, diseño y atención
									personalizada en cada uniforme. Somos conscientes de que cada Empresa
									es única, e intentamos plasmar la esencia y sentido de pertenencia Corporativa
									de forma Exclusiva.</li><br>

								<li><i class="fa fa-check"></i><strong>Calidad Controlada Puntada a Puntada</strong><br>
									Nuestros productos participan tanto en el cuidado del medio
									ambiente como en la protección y seguridad de nuestros
									empleados.</li><br>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s" style="width: 40%;">
					<div class="media">

						<div class="media-body">
							<img src="./images/por-que-elegirnos/porQueElegirnosVertical.jpg" class="img-responsive elegirnos vertical" alt="Carga proyecto">
							<img src="./images/por-que-elegirnos/elegirnosHorizontal.jpg" class="img-responsive elegirnos horizontal" alt="Carga proyecto">
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- end about -->

	<!-- start empresas -->
	<section id="partners" class="scroll-content fadeTop">


		<!-- PARTNERS START -->
		<div class="container">
			<div class="row justify-content-between">

				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">EMPRESAS QUE <span>NOS ELIGEN</span></h2>
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/LOGO-MASS.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/AF-Logos_LB_-Ver.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/FlybondiLogoSm.png" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/Agronomia-DOM-logo-bandera.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/monsanto-horizontal3@2x-8.png" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/agroquimicosdelnorte.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/bonafide-logoW350.png" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/cloudgaia.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/AF-Logos_LB_-Ver.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/delsur.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/Agronomia-DOM-logo-bandera.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/directv.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3347.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/expel.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3349.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/iturriaga.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3350.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/laparolaccia.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3351.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/lapaulinaNegativo.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3352.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/loreal.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3399.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/mass.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3400.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/monsanto.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/IMG_3401.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/novozymes.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/LA-PAULINA-negativo-simpificado.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/rivadavia.jpg" class="img-responsive" alt="portfolio img 1">
				</div>

				<!-- LOGO EMPRESA -->
				<div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn cert-item logo-container" data-wow-offset="50" data-wow-delay="1.6s">
					<!-- <img src="./images/empresas/LOGO-AGROQUIMICOS-DEL-NORTE.jpg" class="img-responsive" alt="portfolio img 1"> -->
					<img src="./images/empresasEdit/wallasBlack.png" class="img-responsive" alt="portfolio img 1">
				</div>


			</div>
		</div>
		<!-- PARTNERS END -->
	</section>
	<!-- end empresas -->

	<!-- start contact -->
	<section id="contact" style="background:#ECECEC;" class="scroll-content fadeTop">
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


						<p><i class="fa fa-facebook"></i><a href="https://www.facebook.com/" target="_blank"><strong>OUTLINE FACTORY S.R.L.</strong></a></p>
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