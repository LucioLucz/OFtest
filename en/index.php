<?php session_start(); $_SESSION['lang']='en'; ?><!DOCTYPE html>
<html lang="es">
<head>

		<meta charset="utf-8">

		<title>LYON LOGISTICS SERVICES S.R.L.</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/templatemo-style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.singlePageNav.min.js"></script>
		<script src="../js/typed.js"></script>
		<script src="../js/wow.min.js"></script>
		<script src="../js/custom_en.js"></script>
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
		<nav class="navbar navbar-default templatemo-nav" role="navigation" style="background: url('../images/bandera_argentina.jpg') repeat 9px 70px;">
			<div class="container" >
				<div class="navbar-header" >
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#home" class="navbar-brand"><img src="../images/logo.png" alt="LYON LOGISTICS SERVICES S.R.L." /></a>
				</div>
                
                <div class="telefono">
<p><i class="fa fa-phone"></i> Contact Us </p>
<p style="color:#fff; padding: 0px;">(+54 9)</p>
<h3> 11 6784 0949</h3>
				</div>
                
                
				<div class="collapse navbar-collapse" style="position: relative;float: right;width: auto;margin-right: 0px;min-width: 280px;padding-left: 0;">
					<ul class="nav navbar-nav navbar-right ">
                    	<li><a href="#home">HOME</a></li>
                    	 <li class="dropdown"><a href="javascript:void(0)">INSTITUTIONAL</a>
                           <ul class="dropdown-content">
                                <li><a href="#about">OUR COMPANY</a></li>
                                <li><a href="#mision">MISION</a></li>
                                <li><a href="#cobertura">OFFICES</a></li>
                            </ul>
                        </li>
                        
						
						<li class="dropdown"><a href="javascript:void(0)">OUR SERVICES</a>
                            <ul class="dropdown-content">
                                <li><a href="#service">GROUND TRANSPORTATION, WAREHOUSE AND LOGISTIC CONSULTING</a></li>
                                <li><a href="#service_aduanera">Our customs services</a></li>
                                <li><a href="#service_ff">Freight forwarder</a></li>
                                <li><a href="#carga_proyecto">Proyect cargo</a></li>
                            </ul>
                        </li>
							<!--<li><a href="#equipos">EQUIPMENT</a></li>-->
                       	
						<li><a href="#contact">CONTACT</a></li>
                       
                        <!--<li><a class="external" href="http://www.lyon-logistics.com.ar/es/" style="padding-top: 40px !important;"><img src="../images/esp.jpg" alt="" /></a></li>-->
                        <li class="dropdown">
                        	<a href="javascript:void(0)"><img src="../images/eng.jpg" alt="" style="margin-top: -5px;" /></a>
                            <ul class="dropdown-content" style="max-width: 63px;min-width: 10px; padding: 11px 11px 3px 11px;">
                                <li style="list-style: none;"><a class="external" href="http://www.lyon-logistics.com.ar/"><img src="../images/esp.jpg" alt="" /></a></li>
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
                        <span style="float: left;"><img src="../images/logo.es.png" alt="" /></span><span style="float: left; padding-top: 22px;">Our strategic ally:<br><a style="color:#fff;" href="http://www.lyoniberica.es/en/">lyoniberica.es</a></span></h3>
                        
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">The solvency<br />of the best <span>Ally...</span></h1>
    					<div class="element">
                            <div class="sub-element">To transport your products to the main markets / destinations, no matter where they are...</div>
                            <div class="sub-element">We have the necessary capacity to serve high complexity services...</div>
                            <div class="sub-element">Solutions according to the needs of your Company...</div>
                        </div>
    					
    				</div>
    			</div>
    		</div>
             <div class="crossfade">
              <figure></figure>
              <figure></figure>
              <figure></figure>
              <figure></figure>
            </div>
    	</section>
        
        <style>
		
		.crossfade > figure {
		  animation: imageAnimation 16s linear infinite 0s;
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
		

		.crossfade > figure:nth-child(1) {
		 background-image: url('../images/bg_1.jpg'); }
		
		.crossfade > figure:nth-child(2) {
		  animation-delay: 4s;
		  background-image: url('../images/bg_2.jpg');
		}
		
		.crossfade > figure:nth-child(3) {
		  animation-delay: 8s;
		  background-image: url('../images/bg_3.jpg');
		}
		
		.crossfade > figure:nth-child(4) {
		  animation-delay: 12s;
		  background-image: url('../images/bg_4.jpg');
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
			 25% {
			 opacity: 0
			}
			 100% {
			 opacity: 0
			}
		}
		</style>
    	<!-- end home -->

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s" style="height: 290px;" >
						<div class="media">
							<div class="media-heading-wrapper" style="padding-bottom:20px;">
								
								<h3 class="media-heading" style="color:#fff;">WELCOME</h3>
							</div>
							<div class="media-body"  >
								<p style="color:#fff;"><strong>LYON LOGISTICS SERVICES S.R.L.</strong> is a comprehensive company that provides customers with highly complex services and customized solutions. We offer: Logistics Consultancy, vehicle fleet and first class equipment, providing short, medium and long- distance transportation services and value-added services. We aim to satisfy the increasing demands in the market, which is becoming more exacting in terms of personalized support, corporate integration and operational professionalism.<br />
								
								
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s" style="width: 50%;">
						<div class="media">
							<div class="media-heading-wrapper" style="padding-bottom:20px;">
							
								<h3 class="media-heading" >ABOUT OUR COMPANY</h3>
							</div>
							<div class="media-body">
								<p>We have a qualified work team for the handling and transport of general, perishable, dangerous and project cargo. Our philosophy is based on flexibility and customer- focused selling, developing long-term trade relations as well as speeding up service - management processes. Our primary goal is to provide effective service in all our shipments.<br><br>
Together with our agents‘ net, present in the five continents, we offer a wide variety of logistic plans for the different kinds of companies/structures. Our objective is to generate competitive advantages, both in costs and in delivery time.</p>
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
	<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">MISIoN – VISION – VALUES</h2>
    <h3></blockquote>“The solvency of the best ally for transporting your products to major markets/destinations, no matter where they are“.</blockquote></h3>
    
	<div class="servicios">
	<div class="txt-serv" style="border-top: 0px solid #ECECEC;">
	<h2 class="misionh2">OUR <span>Mision</span></h2>
	<p>We aim to offer our customers high-quality service and global solutions in international logistics in order to let them achieve peak productivity in their operations as well as to
make commercial expansion easier.</p>
	</div>	
   
    </div>	
    
    <div class="servicios">
	<div class="txt-serv">
    <h2 class="misionh2">OUR <span>Vision</span></h2>
	<p>To be a significant and recobnized logistics reference for our customers, ensuring them the highest quality in our services.</p>

	</div>	
   
    </div>	
    
    <div class="servicios">
	<div class="txt-serv">
    <h2 class="misionh2">Our <span>Values</span></h2>
	<p>To be a significant and recobnized logistics reference for our customers, ensuring them the highest quality in our services.<br>Reliability, Responsibility and Honesty are our core values, which distinguish our brand and function as fundamental basis in our company: “Commitment”.</p>
	</div>	
   
    </div>	
    
    
    
	<img style="position: absolute;right: 0;" src="../images/mision_en.jpg" class="img-responsive" alt="deposito">

	
	
	
	            </div>
	</div>
	</section>
	<!-- end mision -->	
    
    
    
    

		
	<!-- start servicios -->	
	<section id="service">
	<div class="container">
				<div class="row">
	         <div class="col-md-12 text-center">
	<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s" style="padding-bottom: 10px;">OUR <span>SERVICES</span></h2>
    
	<div class="servicios">
    
      <div class="media-heading-wrapper" style="padding-bottom:10px;">							
								<h3 class="media-heading">GROUND TRANSPORTATION, WAREHOUSE AND LOGISTIC CONSULTING</h3> 
							</div>
                            
    
        <div class="txt-serv">
        
          <img src="../images/terrestre.jpg" alt="transporte terrestre" />
        	
        </div>	
        
        <div class="txt-serv">
        
        	<ul style="padding:0 15px;">
                 
              <li><i class="fa fa-check"></i> General freight trucking, special cargo, large and oversized load, refrigerated cargo and hazardous substances (imo), both nationally and internationally.</li>
<li><i class="fa fa-check"></i> Transfer and withdrawal of cargo to remote sites.</li>
<li><i class="fa fa-check"></i> Pick up service from port.</li>
<li><i class="fa fa-check"></i> Crane services, transfer and trailers throughout the argentine territory.</li>
<li><i class="fa fa-check"></i> Loading and unloading of the goods transported, ensuring a comprehensive solution.</li>
<li><i class="fa fa-check"></i> Home delivery service.</li>
<li><i class="fa fa-check"></i> Brunch delivery service.</li>
<li><i class="fa fa-check"></i> Express/delivery service by semi trailer truck throughout the argentine territory.</li>
<li><i class="fa fa-check"></i> Storage service.</li>
<li><i class="fa fa-check"></i> Stuffing and unstuffing of containers with temporary storage of goods.</li>
<li><i class="fa fa-check"></i> Inventory management, receipt and dispatch.</li>
<li><i class="fa fa-check"></i> Cross docking.</li>
<li><i class="fa fa-check"></i> Logistics consultancy:
<ul>
<li><i class="fa fa-check"></i> Comprehensive logistic planning.</li>
<li><i class="fa fa-check"></i> Reingeneering processes of supply chain.</li>
<li><i class="fa fa-check"></i> Valuation and load analysis (management and compliance).</li>
</ul>
</li>
            </ul>
        </div>	
  
    </div>	
	
	
    <div class="servicios" id="service_aduanera">
    
      <div class="media-heading-wrapper" style="padding-bottom:10px;">							
								<h3 class="media-heading">our customs services</h3> 
							</div>
                            
    
        <div class="txt-serv">
        
          <img src="../images/aduana.jpg" alt="Servicios de Aduana" />
        	
        </div>	
        
        <div class="txt-serv">
        <p><strong>LYON LOGISTICS SERVICES S.R.L.</strong> has a group of qualified and experienced professionals, who are in charge of customs management, both in Imports and in Exports. This makes door- to-door service easy. Besides, it reinforces necessary consistency in regulatory objectives to be completed.</p>
        
        <h4 style="text-decoration:underline;">Our Services:</h4>
        
        	<ul style="padding:0 15px;">
                 
                 
<li><i class="fa fa-check"></i> Imports-exports clearance, forwarding, temporal, tax warehouses.</li>
<li><i class="fa fa-check"></i> Filep rocessing,MultinotaForms.</li>
<li><i class="fa fa-check"></i> Freight classification.</li>
<li><i class="fa fa-check"></i> Certificates under intervener organization.</li>
<li><i class="fa fa-check"></i> Samples–Transferring–Fairs and Congresses.</li>
<li><i class="fa fa-check"></i> Refunds monitoring.</li>

            </ul>
        </div>	
  
    </div>	
    
    
     <div class="servicios"  id="service_ff">
    
      <div class="media-heading-wrapper" style="padding-bottom:10px;">							
        <h3 class="media-heading">OUR FREIGHT FORWARDING SERVICES</h3> 
    </div>
                            
    
      
        
        <div class="txt-serv" style="width:100%; text-align:center">
        <p style="font-size: 16px; text-align:center;"><strong>LYON LOGISTICS SERVICES S.R.L.</strong> has a business unit which deals with the expedition of goods overseas across the world. We deliver your goods through multimodal solutions (sea, air, highway or train), provide you with added value services and effective customs services in order to guarantee fast delivery to your destination.</p>
        </div>	
  
    </div>	
	<h4 style="font-weight:bold; text-transform:uppercase;">Crucial Freight Forwarding Services:</h4>
	</div>
	</div>
	</section>
	<!-- end servicios -->	
		
    	<!-- start team -->
    	<section id="team" >
    		<div class="container"> 
    			<div class="row">
    				
    				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
    					<div class="team-wrapper">
    						<img src="../images/t-aereo.jpg" class="img-responsive" alt="Despacho Aduana">
    							<div class="team-des" id="aereo">
    								<h4>AIR TRANSPORT</h4>
    								<p>Regarding air transport, there are occasions in which different solutions might be required. Sometimes, your goods need to arrive at its destination as fast as possible. In other occasions, the speed might not be a priority. You might be simply interested in cost savings. <strong>LYON LOGISTICS SERVICES</strong> is proud to present two new services, which aim to satisfy your needs: AirFlex and AirFast.</p>
<p><strong>Which service is more convenient for you?</strong></p> 
<ul>
<li><strong style="text-decoration:underline;">AIRFAST:</strong> Goods are delivered to the main air companies around the world within a stablished time.</li> 
<li><strong style="text-decoration:underline;">AIRFLEX:</strong> The fastest airport to airport connection.</li>
</ul> 

<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="aereo">See more</a></p>
    							
								</div>
    					</div>
    				</div>
    				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s" style="border-right:1px solid #fff;">
    					<div class="team-wrapper">
    						<img src="../images/t-mar.jpg" class="img-responsive" alt="Distribución y Cross Docking">
    							<div class="team-des" id="mar">
    								<h4>MARITIME TRANSPORT</h4>
    								<p>With a global network and vast experience in the industry, <strong>LYON LOGISTICS SERVICES</strong> offers maritime transport solutions, which enable customers to achieve an incredible balance between costs and time. The company is joined with the best maritime companies and suppliers in the field in order to guarantee high quality dispatch.</p>
                                    
                                    <p><i class="fa fa-chevron-circle-right"></i> <strong style="text-decoration:underline;">FCL (Full Container Load):</strong> FCL is a cargo solution that implies dispatching a complete container as a unique unit. For customers, this is the most efficient way of mobilizing a considerable volume of products throughout the world. We work with experts in maritime transport and in the handling of loads in order to guarantee successful results. We organize the maritime transport traffic within the multitransport Principle so as to optimize costs and transport process time.</p>
<p><strong style="text-decoration:underline;">Our offer also Includes:</strong></p> 
<ul>
    <li>Door-to-door shipment in all the continents.</li>
    <li>Specialized FCL operative personnel.</li>
    <li>Optimized transport costs and competitive rates.</li>
    <li>Use of all kind of shipping containers aligned with customers’ needs and demands.</li>
    <li>For a considerable shipment by marine transport, FCL is the most convenient option for your freight transport.</li>
</ul>  

<p><i class="fa fa-chevron-circle-right"></i> <strong style="text-decoration:underline;">LCL (Less Container Load), Buyer’s Regrouping of goods and Supplier Management:</strong> Less Container Load is the most convenient option for You when the amounts of cargo are not large enough to fill a full container. Goods are regrouped according to destination in order to maximize the cargo factors of containers. In this way, our company boosts the transport economies of scale.<br>We make use of a variety of resources to develop and maintain a highly effective regrouping of goods solution for the LCL market. We provide both traditional LCL services and also regrouping for buyers’ shipments with different distributors from one or many countries, both in origin and in destination.</p>



                                    
    							
                                <p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="mar">See more</a></p>
								</div>
    					</div>
    				</div>
    				<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s" style="border-right:1px solid #fff;">
    					<div class="team-wrapper">
    						<img src="../images/t-combinado.jpg" class="img-responsive" alt="deposito">
    							<div class="team-des" id="combinado">
    								<h4>COMBINED SEA / AIR TRANSPORT</h4>
    								
    								<p><strong>LYON LOGISTICS SERVICES</strong> offers a combined transport service under the Sea and Air concept, which is 30-50% faster than sea transport and 30-50% cheaper than air transport. This service is available from 14 Asian countries to Europe, North America and Latin America. We ship cargo to our terminals in Dubai (United Arabic Emirates), Los Angeles (U.S.A.) or Incheon (South Corea) and, finally, the load is fleted by air to its final destination.</p>
                                    <p><i class="fa fa-chevron-circle-right"></i> <strong  style="text-decoration:underline; text-transform:uppercase;">SEA / AIR TRANSPORT:</strong> Sea and Air cargo is the last one to load and the first one to unload. This reduces times and risks between shipments and guarantees priority handling.</p>
                                    
                                    <p><i class="fa fa-chevron-circle-right"></i> <strong  style="text-decoration:underline; text-transform:uppercase;">AIR / SEA TRANSPORT (LCL):</strong> These are the advantages of Air and Sea (LCL) solutions:</p>
<ul>
    <li>Direct door-to-door delivery.</li>
    <li>Reliable delivery programs, which allow inventory, production and planning improvement.</li>
    <li>Cost-saving compared to fully air freight.</li>
    <li>Eco-friendly. It contributes to reducing CO2 emissions.</li>
    <li>Faster transit times compared to fully sea freight.</li>
</ul>


									<p class="boton"><a href="javascript:void(0);" class="ver_mas" data-div="combinado">See more</a></p>
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
    					<h2 class="wow bounceIn"><span>PROYECT</span> CARGO</h2>
    				</div>
                    </div>
				<div class="row">
                
                    
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s" >
						<div class="media">
							<div class="media-heading-wrapper" style="padding-bottom:20px;">
								
							</div>
							<div class="media-body"  >
								<p style="color:#fff;">To <strong>LYON LOGISTICS SERVICES S.R.L.</strong>, project cargoes require excellent and peculiar customer service. Throughout the years, we have acquired vast experience, which has allowed us to successfully deal with a number of project cargo shipments in the Petrol and Mine field.<br><br>
                                <strong>LYON LOGISTICS SERVICES S.R.L.</strong> outstands for its focus on details which make the difference and the ability to keep costs and agile forwarding that guarantees the highest safety level in all our shipments. We provide varied project cargo services, from RO-RO, oversized cargo, break bulk to chartering services. We have a highly skilled team and an extensive range of transport for each kind of load and destination.							
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s" style="width: 60%;">
						<div class="media">
							<div class="media-heading-wrapper" style="padding-bottom:20px;">							
								<h3 class="media-heading" >Our Main Characteristics</h3>
							</div>
							<div class="media-body">
								<ul>
                                    <li><i class="fa fa-check"></i> Circulation of information about new projects.</li>
                                    <li><i class="fa fa-check"></i> Personalized supportand management.</li>
                                    <li><i class="fa fa-check"></i> Coordination at everypointof embarkation.</li>
                                    <li><i class="fa fa-check"></i> Efficient and professional management.</li>
                                    <li><i class="fa fa-check"></i> Updated status.</li>
                        		</ul>
							</div>
						</div>
					</div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s" style="width: 40%;">
						<div class="media">
							
							<div class="media-body">
								<img src="../images/carga_proyecto.jpg" class="img-responsive" alt="Carga proyecto">
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- end about -->
        
        

    	<!-- start cobertura -->
		<section id="cobertura">
			<div class="container" style="background: url('../images/mapa-cobertura_2.jpg') no-repeat top right;">
				<div class="row">
					<div class="col-md-12 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s" >
						<div class="media">
							<div class="media-heading-wrapper" style="padding-bottom:20px;" >
								
								<h3 class="media-heading" style="padding-left:0px; padding-top:60px;">OFFICES AND STRATEGIC ALLIES IN ARGENTINA:</h3>
								<h2>SALTA, SAN JUAN, MENDOZA, SANTA CRUZ, CÓRDOBA,<br>NEUQUÉN Y TUCUMÁN</h2>
							</div>
							<div class="media-body"  >
								<p style="text-transform:uppercase; font-size:16px; color:#333; padding-left:0px; font-weight:500; float:left;">
								<span style="font-weight:600;">AGENTS IN NEIGHBOURING COUNTRIES</span><br /><br />
								<span style="font-weight:600;">STRATEGIC ALLIES AND AGENTS IN EUROPE, ASIA AND OCEANIA</span><br />
								</p>
								
							</div>
						</div>
					</div>
                </div>
		    </div>
		</section>
		<!-- end cobertura -->
        
        
      
        
        
		
    	<!-- start portfolio -->
    	<section id="equipos">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>OUR</span> TRANSPORT EQUIPMENT</h2>
                       
    				</div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s" >
    					<div class="team-wrapper">
    						 <img src="../images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
    							<div class="team-des">
    								<h4>LONG DISTANCE TRUCKS SUCH AS:</h4>
                                    <!--<p> Tipo: Iveco Cursor 330, Stralis, Mercedes Benz, Ford Cargo 320 hp, Scania, etc...</p>-->
                                    <p>IVECO CURSOR 330, STRALIS, MERCEDEZ BENZ, FORD CARGO 320 HP, SCANIA, OTHERS.</p>
								</div>
    					</div>
    				</div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s" >
    					<div class="team-wrapper">
    						 <img src="../images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
    							<div class="team-des">
    								<h4>SHORT AND MEDIUM DISTANCE TRANSPORT:</h4>
                                    <!--<p>Balancin, siders, chasis, tectors, camionetas paqueteras de 15 a 45 m3, con y sin pala, furgones de 90 a 100 m3 cerrados, etc. </p>-->
                                    <p>BALANCIN, SIDERS, CHASIS, TECTORS, CLOSED VANS OF 15 UP TO 45 M3, WITH OR WITHOUT LOADER, CLOSED BOXCARS OF 90 UP TO 100 M3 ; OTHERS.</p>
								</div>
    					</div>
    				</div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s" >
    					<div class="team-wrapper">
    						  <img src="../images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
    							<div class="team-des">
    								<h4>TRANSPORT EQUIPMENT SUCH AS:</h4>
                                    <!--<p>Semis de 12 a 14,5 mts con barandas volcables y/o playos con pinos porta contenedores ( de 40' y de 20'́) y arco + lona; arañas; carretones mecanicos de cuello desmontable, carretones con rampas; carretones hidráulicos; semiremolques extensibles (al pecho o cola); tandems (semiremolque extensible espelcial tanto al pecho y cola hasta 26 mts.); tolvas, furgones de 90 a 100 m3 cerrados etc. </p>-->
                                    <p>SEMIS DE 12 A 14,5 MTS WITH VOLCABLE RAILINGS AND/OR PLAYOS WITH CONTAINERS LEADS PINES ( DE 40 ́Y DE 20 ́) Y ARCS + CANVAS; MECHANICS CARTS/ BOGIE / TRUCKS WITH REMOVABLE NECK, CARTS/ BOGIE / TRUCKS WITH RAMPS; HYDRAULIC TRAILERS; SEMITRAILERS EXTENSIBLE (TO THE CHEST OR TAIL); TANDEMS (SEMITRAILER EXTENSIBLE ESPELCIAL BOTH THE CHEST AND TAIL UP TO 26 MTS.); HOPPERS, CLOSED BOXCARS OF 90 TO 100 M3; OTHERS.</p>
								</div>
    					</div>
    				</div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s" >
    					<div class="team-wrapper">
    						  <img src="../images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
    							<div class="team-des">
    								 <h4>OTHERS</h4>
                                    <p>DUMP TRUCKS, REFRIGERATED TRUCKS, HIDRO-CRANES TRUCKS, TOW TRUCKS AND TRAILERS, OTHERS.</p>
								</div>
    					</div>
    				</div>
                    
    				
                                    
                   
                    
    			</div>
    		</div>
    	</section>
    	<!-- end portfolio -->
        
        
        
        

    	<!-- start contact -->
    	<section id="contact" style="background:#ECECEC;">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">REQUEST <span>INFORMATION</span></h2>
                        <h3>You can contact us, communicating to our phones, by mail or completing the form.<BR>We will respond to you shortly!</h3>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                    <address style="border-bottom: 0px solid #505050;">
                    <p class="address-title">Contact form:</p>
                    
                    </address>
                    <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
					<script>
                    function onSubmit(token) {
                       
                         if($('#nombre').val()!='' && $('#email').val()!='' && $('#mensaje').val()!='' && $('#g-recaptcha-response').val()!=''){		 
                        	$('#submit').val('Please wait');
                            $.ajax({
                              type: "POST",
                              url: "../contacto.php",
                              data: $("#contact-form").serialize(),
                              success: function(data) {
                                var obj = jQuery.parseJSON(data);
								
                                if(obj.respuesta=='OK'){
                                   	alert('Message Sent. Thank you very much.');
									window.location.reload();
								}else{
									alert('Shipping failed. Please try again');
									window.location.reload();
									
									}
									
                                }
                            });
                            
                        
                         }else{
                            alert('Please complete the required fields and indicate that you are not a robot');
                            
                             }
                    }
                    </script>


    					<form id="contact-form" action="#" method="post">
    						<label>FULL NAME</label>
    						<input name="nombre" type="text" class="form-control" id="nombre" required>
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email" required>
   						  	
                            <label>MESSAGE</label>
    						<textarea name="mensaje" rows="4" class="form-control" id="mensaje" style="height: 164px;" required></textarea>
    						<div class="g-recaptcha" data-sitekey="6LdQpRoUAAAAANiBXpHog7mN0JPEcXeG9Gxxut_N"></div>
							<input id="submit" type="button" onClick="onSubmit()" name="submit" value="SEND MESSAGE" class="form-control"/>
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p style="padding-bottom: 27px;" class="address-title">Management and Operations Office:</p>
    						
    						<p><i class="fa fa-phone"></i><b style="color:#1697a5; font-size:16px;"><a href="tel:54911678409540">(+54 9) 11 6784 0954</a></b></p>
                            <p><i class="fa fa-phone"></i><b style="color:#1697a5; font-size:16px;"><a href="tel:5491167478815">(+54 9) 11 6747 8815</a></b></p>
                            <p><i class="fa fa-phone"></i><b style="color:#1697a5; font-size:16px;"><a href="tel:5491153681130" >Ofic: (+54 9) 11 5368 1130</a></b></p>
                           
                                                        
    						<p><i class="fa fa-envelope-o"></i><a href="mailto:gerenciagral@lyon-logistics.com.ar" >gerenciagral@lyon-logistics.com.ar</a></p>
                            <p><i class="fa fa-envelope-o"></i><a href="mailto:operaciones@lyon-logistics.com.ar">operaciones@lyon-logistics.com.ar</a></p>
                            <p><i class="fa fa-envelope-o"></i><a href="mailto:administracion@lyon-logistics.com.ar">administracion@lyon-logistics.com.ar</a></p>
                            <p><i class="fa fa-envelope-o"></i><a href="mailto:tesoreria@lyon-logistics.com.ar" >tesoreria@lyon-logistics.com.ar</a></p>
                            
    						<p><i class="fa fa-map-marker"></i>Mendoza N° 4834 – Piso N° 4 “B”- C.P.: 1431 – CABA – Buenos Aires - Argentina.</p>
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
                       	Copyright &copy; 1<?php echo date('Y'); ?> <strong>LYON LOGISTICS SERVICES S.R.L.</strong> - Powered by <a href="http://www.mink.com.ar" target="_blank">Mink</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

	</body>
</html>