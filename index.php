<!DOCTYPE HTML>
<html lang="en" style="scroll-behavior: smooth;">
<head>
	<title>CorreaGorondona</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!-- Remove this For Non-responsive -->
	
	<!-- favicon -->
	<link rel="shortcut icon" href="img/favicon.png">
	
	<link href="css/candy.css" rel="stylesheet" type="text/css" />
	<link href="css/candy-plugins.css" rel="stylesheet" type="text/css" />
	<link href="css/ionicons.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />	
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	
	<!--<link href="css/custom-css/custom-css.css" rel="stylesheet" type="text/css" />-->
	
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
	
</head>
<body >
	<div id="back-to-top" class="back-to-top"><a href="#back-to-top"><i class="icon ion-ios-arrow-up"></i></a></div> <!-- Copy & Paste this for back-to-top -->
	
	<div class="header-navigation-menu header-sticky dynamic-nav-menu change-style transparent-nav-menu clearfix">
		<div class="container">
			<div class="header-icon">
				<a href="#" class="logo-icon logo-icon logo-dark"><img src="./img/logo.png" alt=""></a>
				<a href="#" class="logo-icon logo-icon logo-lite"><img src="./img/logo.png" alt=""></a>
			</div>
			<div class="toggle-nav-menu toggle-menu primary-typo strong"><div>MENU</div><div><a href="#"><div class="burg"></div></a></div></div> 
			<div class="header-menu">
				<nav class="nav-menu page-scroll" >
					<ul class="nav-menu-content">
						<li><a href="#about">Inicio</a></li>
						<li><a href="#team">Equipo</a></li>
						<li><a href="#services">Servicios</a></li>
						<!-- <li class="menu-item-has-children"><a href="#blog">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog.html">Blog Page</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
								<li><a href="shortcode.html">Shortcodes</a></li>
							</ul>
						</li> -->
						<li><a href="#contact">Contacto</a></li>
					</ul>
				</nav>		
			</div>
		</div>
		<nav class="tab-nav-menu page-scroll" >
			<ul class="tab-nav-menu-content container">
				<li><a href="#about">Inicio</a></li>
				<li><a href="#team">Equipo</a></li>
				<li><a href="#services">Servicios</a></li>
				<!-- <li class="menu-item-has-children"><a href="#blog">Blog</a>
					<ul class="sub-menu">
						<li><a href="blog.html">Blog Page</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
						<li><a href="shortcode.html">Shortcodes</a></li>
					</ul>
				</li> -->
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>	
	</div>
	<!--<div class="spacer"></div>	-->
	
	<div class="content">

		<!-- Fullscreen Slider -->
		<div id="agni-video" class="agni-video white">
			<div id="video-container" class="video-container">
				<img class="img--header" src="data:image/jpeg;base64,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" alt="">
				<div class="overlay"></div>
			</div>
			<ul class="slides-container"><!--  data-top="transform:translateY(0px);" data-top-bottom="transform:translateY(400px);" -->
				<li>
					<div class="slide-container container text-center">
						<div class="slide-content">
							<p class="big-heading slide-title primary-typo strong">Certificamos, revisamos y evaluamos compliance</p>	
							<p class="additional-heading">Con el más alto estándar de la industria y el mejor equipo</p>
													
						</div>
					</div>
				</li>
				<li>
					<div class="slide-container container text-center">
						<div class="slide-content">
							<p class="big-heading slide-title primary-typo strong">Certificamos, revisamos y evaluamos compliance</p>	
							<p class="additional-heading">Con el más alto estándar de la industria y el mejor equipo</p>
													
						</div>
					</div>
				</li>
				<li>
					<div class="slide-container container text-center">
						<div class="slide-content">
							<p class="big-heading slide-title primary-typo strong">Certificamos, revisamos y evaluamos compliance</p>	
							<p class="additional-heading">Con el más alto estándar de la industria y el mejor equipo</p>
													
						</div>
					</div>
				</li>
			</ul>
		</div>	
				
		
		<!-- Section starts here -->			
		<!-- About us -->
		<section id="about" class="about-2 section-bg-color">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-offset-2 col-md-4 margin-140 padding-top-20 padding-bottom-20">
						<h5 class="heading margin-bottom-30">¿Quienes somos?</h5>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, doloremque et officia corporis deserunt quos optio excepturi doloribus? Eaque mollitia quis quas corrupti ipsa!</p>
					</div>
					<div class="col-sm-6 col-md-4 margin-140">
						<img src="https://odacreative.com/wp-content/uploads/brainstorm-a-logo-500x500.jpeg" alt="mockup_1" />
					</div>
				</div>
			</div>
		</section>
		<section id="about-3" class="about-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-offset-2 col-md-4 margin-140">
						<img src="https://odacreative.com/wp-content/uploads/brainstorm-a-logo-500x500.jpeg" alt="mockup_2" />
					</div>
					<div class="col-sm-6 col-md-4 margin-140 padding-top-20 padding-bottom-20">
						<h5 class="heading margin-bottom-30">Cómo trabajamos?</h5>
						<p>Creamos valores a nuestros clientes certificándolos y asesorándolos en la solidez de sus
							sistemas de información contables y administrativos y sus políticas de compliance.</p>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Work -->
		<!-- <section id="works" class="work section-bg-color">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4 text-center margin-top-140">
						<div class="section-heading">
							<h1 class="heading heading-strike">Nuestra visión</h1>
							<p class="additional-heading">Nos convertiremos en un aliado próximo y confiable, para que nuestros clientes puedan
								desarrollar su actividad de manera  segura y transparente.</p>
						</div>
					</div>
					<div class="col-xs-12 ">
						<div class="portfolio-filter text-center">
								<ul id="filters" class="filter small list-inline">
									<li><a class="active" href="#all" data-filter=".all" title="">All</a></li>
									<li><a class="" href="#branding" data-filter=".branding" title="">Branding</a></li>
									<li><a class="" href="#advertise" data-filter=".advertise" title="">Advertise</a></li>
									<li><a class="" href="#print" data-filter=".print" title="">Print</a></li>
								</ul>
						</div>
						<div id="portfolio-page" class="row portfolio-page portfolio-full">
							<div id="portfolio-11" class="white portfolio-post all branding print col-xs-12 col-sm-6 col-md-3 portfolio-thumbnail no-padding" >
								<figure class="portfolio-thumbnail-container">
									<div class="thumbnail-image">
										<img src="img/thumbnail_1.jpg" alt="thumbnail" />
									</div>
									<figcaption class="portfolio-thumbnail-caption portfolio-thumbnail-attachments text-right">
										<h5 class="heading heading-underlined portfolio-thumbnail-heading"><a class="portfolio-single-link" href="portfolio-single-1.html">BRAND IDENTS</a></h5>
										<ul class="portfolio-category list-inline">
											<li>Branding</li><li>Print</li>
										</ul>
									</figcaption>
								</figure>                           
							</div>
							<div id="portfolio-12" class="white portfolio-post all advertise col-xs-12 col-sm-6 col-md-3 portfolio-thumbnail no-padding" >
								<figure class="portfolio-thumbnail-container">
									<div class="thumbnail-image ">
										<img src="img/thumbnail_2.jpg" alt="thumbnail" />
									</div>
									<figcaption class="portfolio-thumbnail-caption portfolio-thumbnail-attachments text-right">
										<h5 class="heading heading-underlined portfolio-thumbnail-heading"><a class="portfolio-single-link" href="portfolio-single-2.html">BRAND IDENTS</a></h5>
										<ul class="portfolio-category list-inline">
											<li>Advertise</li>
										</ul>
									</figcaption>
								</figure>                           
							</div>			
							<div id="portfolio-18" class="white portfolio-post all branding col-xs-12 col-sm-12 col-md-6 portfolio-thumbnail no-padding" >
								<figure class="portfolio-thumbnail-container">
									<div class="thumbnail-image">
										<img src="img/thumbnail_8.jpg" alt="thumbnail" />
									</div>
									<figcaption class="portfolio-thumbnail-caption portfolio-thumbnail-attachments text-right">
										<h5 class="heading heading-underlined portfolio-thumbnail-heading"><a class="portfolio-single-link" href="portfolio-single-3.html">BRAND IDENTS</a></h5>
										<ul class="portfolio-category list-inline">
											<li>Branding</li>
										</ul>
									</figcaption>
								</figure>                           
							</div>		
							<div id="portfolio-13" class="white portfolio-post all advertise print col-xs-12 col-sm-6 col-md-3 portfolio-thumbnail no-padding" >
								<figure class="portfolio-thumbnail-container">
									<div class="thumbnail-image">
										<img src="img/thumbnail_3.jpg" alt="thumbnail" />
									</div>
									<figcaption class="portfolio-thumbnail-caption portfolio-thumbnail-attachments text-right">
										<h5 class="heading heading-underlined portfolio-thumbnail-heading"><a class="portfolio-single-link" href="portfolio-single-4.html">BRAND IDENTS</a></h5>
										<ul class="portfolio-category list-inline">
											<li>Advertise</li><li>Print</li>
										</ul>
									</figcaption>
								</figure>                           
							</div>
							<div id="portfolio-15" class="white portfolio-post all print col-xs-12 col-sm-6 col-md-3 portfolio-thumbnail no-padding" >
								<figure class="portfolio-thumbnail-container">
									<div class="thumbnail-image">
										<img src="img/thumbnail_5.jpg" alt="thumbnail" />
									</div>
									<figcaption class="portfolio-thumbnail-caption portfolio-thumbnail-attachments text-right">
										<h5 class="heading heading-underlined portfolio-thumbnail-heading"><a class="portfolio-single-link" href="portfolio-single-5.html">BRAND IDENTS</a></h5>
										<ul class="portfolio-category list-inline">
											<li>Print</li>
										</ul>
									</figcaption>
								</figure>                           
							</div>
							<div id="portfolio-16" class="white portfolio-post all branding print col-xs-12 col-sm-6 col-md-3 portfolio-thumbnail no-padding" >
								<figure class="portfolio-thumbnail-container">
									<div class="thumbnail-image">
										<img src="img/thumbnail_6.jpg" alt="thumbnail" />
									</div>
									<figcaption class="portfolio-thumbnail-caption portfolio-thumbnail-attachments text-right">
										<h5 class="heading heading-underlined portfolio-thumbnail-heading"><a class="portfolio-single-link" href="portfolio-single-2.html">BRAND IDENTS</a></h5>
										<ul class="portfolio-category list-inline">
											<li>Branding</li><li>Print</li>
										</ul>
									</figcaption>
								</figure>                           
							</div>							
							<div id="portfolio-19" class="white portfolio-post all branding col-xs-12 col-sm-6 col-md-3 portfolio-thumbnail no-padding">	
								<figure class="portfolio-thumbnail-container">
									<div class="thumbnail-image">
										<img src="img/thumbnail_9.jpg" alt="thumbnail" />
									</div>
									<figcaption class="portfolio-thumbnail-caption portfolio-thumbnail-attachments text-right">
										<h5 class="heading heading-underlined portfolio-thumbnail-heading"><a class="portfolio-single-link" href="portfolio-single-4.html">BRAND IDENTS</a></h5>
										<ul class="portfolio-category list-inline">
											<li>Branding</li>
										</ul>
									</figcaption>
								</figure>                           
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</section> -->
		
		<!-- Call to action -->
		<section id="call-to-action" class="call-to-action section-bg-color">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-offset-2 col-md-8 margin-120 text-center">
						<p class="additional-heading heading-underlined black">Gorondona Contadores</p>
						<h4 class="margin-bottom-40">Integridad, Respeto, Compromiso</h4>
						<a class="btn btn-default primary-typo" href="#contact">Contactanos</a>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Services -->
		<section id="services" class="service">
			<div class="container">
				<div class="row margin-bottom-120">
					<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 text-center margin-top-140">
						<div class="section-heading">
							<h1 class="heading heading-strike">Servicios</h1>
							<p class="additional-heading">Estos son algunos de los servicios que prestamos...</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 margin-top-50 text-center">
						<img style="width:34.81px; height: 34px; margin-bottom: 25px; margin-top: 25px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAAXNSR0IArs4c6QAABTpJREFUeF7tm4+xDzEQx/dVgAp4FaACVMCrABWgAlSACngVoAJUgApQASpgPjOXmXMvm938vTtzmfnNezOXyyWf7H53k8udyFGSBE4OPmkCByDDQg5AB6A6ETksaCcWdFlEnorIvam/b0Tked3ct7l7CxYEnA8icmMxpI8iciYiv9oMtayVtQFpcMJovojInTUhrQnomoi8jVjOcqpXhbQWINwJt8KCPAVIuNt3T+WWddYA9EBEXmTACeNFi3A3YA0rowERqZ5Vju6xiLyqbMN9+yhAXr05n3p+3xjBOxF5OEK8ewNCYx45rYYBk/9Q+GtBwuWwxq7WlALE4NAKNCN0ms54NCCAwR0sIf4tItQLcILx8NzXDl9AuAEVrM+65faUlPKX8lJEnmg3pQBpswggrvH309QwEK5PIZsHh4zY6uyPqa4GnbZwp0tWQ1OEI7mk/tdFxLs19Q3oy4SUpsnao9qYAvTH0amaKu8n67QyZfSLQTMBvQpWeBprfA1AuBSzhWnnFOqjZ71KlMVoQFgNelOa8OEeuHcPa1oVEFqF1aARLQpaQntXWzQ2tTEcEK6EduAanshXMlZAERDulty8uKcZIBQfU0c856YeIhpWEn4N+u1qgr4Q8fjxP1FrXpgs+sREkc279bhEg3only4iFZW06NzMgv5HQFh/SBz/YZ8aLCa5NFVu3jMgILDNsixNAbHl0CoaVXhK0a1NAWlLjT0D0tZ3RUsN8oyY4rOwy82Ci6a7w03amIoAZdPuMKDWTWZ7RUpws/219Wg6tKcFnptaMmtFpFjOwOr7SofOj2gyKwfyhGwyz9jCkK2B0gXnCBCxZ5D9f84J8R5ArKVi6xxewXBtT0XTVHZJ2WHwrz9mNbmRbddlSTa6UWqaQM/3wi903dIgzSzVHbiNwqFbP5X98aRcWIBoGFGO7QnvSYe0iWZPnNW/WjyANNPcU8KobdeaUuEBpIkbEY78YQ/lm2IpZrDxAOKVDv4bK3twM8292ESz3tm5ty60cG+a6AbMS5MIXjSGl6JVGsTN7PtylmdZtp5Vp6zfdC8G63GxAEWLZsk8YmUL0lbvZvQK/c4BpD2MnAixtt6QjmaF9SDOMZ1xR+AcQClzVfdTRlOZPU+bUMSZ3Mc1oTmAeLYmeDyMiOZ66ABoAGBhGrOerMCSC4gHY7axQqRD+LZQ2JiPvaXAegj77p2IXEAMPnWIwBUZOhNMnSvKloISQJgtMxBbn+FiCLZ7hhrDSp2eJXJxPUsGSgAxptQsrbUEsQ6lF1l3KSAgabuNQczJj0YWjutpmbH6YtDqYA0gBBtI2vE4It4oSCk4WWF9CawGEG1pS5DwnBGQUnDoR9WLzlpAVlTr6W5oDnBSB0azo1ZrCwrtpfQo6FXLr3Y8B9Ndq/WeGjRvm9nkpVzq7CDhFU2qfRsSDqan9nKawGGALVwsgPJAoi6AWCzm5kpYDS4VPcczm61mcFoDoj0vJOqGzwisxA0wHKIwN7emA+Sxg+KWJ6nXW1rQ/CGeby2oDxzqsoBcWhQD5XsNwJhbo1Mb6gvAUkK9AIVsm3Wb5zMC6qNh4XsNBuq1BPIcINZqW5RhT0A8sOfBb9rnmwzCfK6euQ2qN6CgS1gEP681WQMo/ZzBavfC9RGA5lEOl7O+A7MGQfJHO5a4W+24ro8EFDpEVGKAuafjCd9Evm7uFCO2BqC5RSGuuJ72zQUag3DzG2IxS0hrApr3BTEHVEgCiUjhoz2XK/SqtBVAvcZX3e4ByEB4ADoA1XnZYUGHBdVZ0F8OuARYR18c2gAAAABJRU5ErkJggg=="/>
						<h5 class="heading heading-underlined">Prevención de Fraudes</h5>
						<p>Ayudamos a nuestros clientes de forma confidencial con rigor y profesionalismo, avalados por la experiencia de años nuestros socios y consultores, a certificar sus procesos de prevención en temas de cumplimiento y reforzar a través de nuestras sugerencias las oportunidades de mejora que las prácticas más aceptadas puedan sugerir para enriquecer más la eficacia de sus procesos. </p>
					</div>
					<div class="col-sm-6 col-md-4 margin-top-50 text-center">
						<i class="ion-ios-eye-outline medium-icon"></i>
						<h5 class="heading heading-underlined">Seguridad Proactiva</h5>
						<p>Contamos con personal altamente calificado para la implementación de un gestor de riesgos de cumplimiento y tareas o rol de Oficial de Cumplimiento. 
							Nuestro servicio puede ser permanente, o estar enfocado en acompañar a los responsables internos de la tarea, de manera de enriquecer la misma y darle oportunidad a diseñar un proceso de mejora continua de la organización, generando los aprendizajes y difundiendo con capacitación permanente las políticas diseñadas.</p>
					</div>
					<div class="col-sm-6 col-md-4 margin-top-50 text-center">
						<i class="ion-ios-glasses-outline medium-icon"></i>
						<h5 class="heading heading-underlined">Canal de Denuncias</h5>
						<p>Nos ofrecemos como canal de Denuncias con el propósito de establecer de manera independiente opciones a los colaboradores internos que faciliten la denuncia anónima y protejan a la organización ante situaciones contrarias a los códigos de conducta, normas, reglamentos o, directamente ante de fraudes contra la organización. </p>
					</div>
				</div>
			</div>
		</section>	

		<!-- Section Video -->
		<!-- <section id="section-video" class="section-video">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 no-padding">					
						<div class="section-video-container">
							<a id="bgndVideo-2" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=WSCzFQo4JgE',containment:'.section-video-container', showControls:false, autoPlay:true, loop:true, vol:50, mute:true, startAt:10, opacity:1, addRaster:false, quality:'default'}">My video</a>
							<div class="overlay"></div>
						</div>	
						<div class="section-video-controls">
							<a class="command command-play large-icon" href="#"></a>
							<a class="command command-pause large-icon" href="#"></a>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<!-- Team -->
		<section id="team" class="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 margin-top-140 margin-bottom-30 text-center">
						<div class="section-heading">
							<h2 class="heading heading-underlined black">Nuestro equipo</h2>
							<p class="additional-heading">Profesionales que forman parte de nuestra empresa...</p>
						</div>
					</div>
					<div class="col-md-12 margin-bottom-140">
						<div id="carousel-team" class="carousel-team-2">	
							<figure class="member-content">
								<div class="member-image-2"><img class="img--persons" src="img/luis-eduardo-correa.jpg" alt="member" /></div>									
								<figcaption  class="member-caption-2 text-right white">
										<h5 class="member-title-text heading heading-underlined">LUIS EDUARDO CORREA</h5>
										<strong class="member-designation-text">Creative Director</strong>
									<div class="member-social-link">
										<!-- <ul class="list-inline">
											<li><a href="#"><i class="ion-social-facebook"></i></a></li><li><a href="#"><i class="ion-social-twitter"></i></a></li><li><a href="#"><i class="ion-social-googleplus"></i></a></li><li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
										</ul> -->
									</div>
									<p class="member-description">Contador Público (UDELAR), auditor certificado CIA (Certified Internal Auditor), CCSA (Certified Control Self Assessment) y CRMA (Certified Risk Managment Assurance) con treinta años de experiencia en Auditoria.</p>
								</figcaption>
							</figure>	
							<figure class="member-content">
								<div class="member-image-2"><img class="img--person" src="img/gabriel-gorondona.jpg.jpg" alt="member" /></div>									
								<figcaption  class="member-caption-2 text-right white">
										<h5 class="member-title-text heading heading-underlined">Gabriel Gorondona</h5>
										<strong class="member-designation-text">Creative Director</strong>
									<div class="member-social-link">
										<!-- <ul class="list-inline">
											<li><a href="#"><i class="ion-social-facebook"></i></a></li><li><a href="#"><i class="ion-social-twitter"></i></a></li><li><a href="#"><i class="ion-social-googleplus"></i></a></li><li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
										</ul> -->
									</div>
									<p class="member-description">Contador Público (UDELAR), Master en Administración de Empresas (Universidad ORT), Certificado en Prevención del Lavado de Dinero y Financiamiento del Terrorismo (ISEDE).</p>
								</figcaption>
							</figure>	
							<figure class="member-content">
								<div class="member-image-2"><img class="img--persons" src="img/mariela-umpierrez.jpg" alt="member" /></div>									
								<figcaption  class="member-caption-2 text-right white">
										<h5 class="member-title-text heading heading-underlined">MARIELA UMPIERREZ</h5>
										<strong class="member-designation-text">Creative Director</strong>
									<div class="member-social-link">
										<!-- <ul class="list-inline">
											<li><a href="#"><i class="ion-social-facebook"></i></a></li><li><a href="#"><i class="ion-social-twitter"></i></a></li><li><a href="#"><i class="ion-social-googleplus"></i></a></li><li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
										</ul> -->
									</div>
									<p class="member-description">Técnica en gestión de Calidad ISO 9000 y Auditor en gestión de Calidad ISO 9000. Cursando certificación en gestión de Lavado y financiamiento del terrorismo (ISEDE).</p>
								</figcaption>
							</figure>		
						</div>							
					</div>
				</div>
			</div>
		</section>
		
		<!-- Blog
		<section id="blog" class="blog section-bg-color">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4 text-center margin-top-140">
						<div class="section-heading">
							<h1 class="heading heading-strike">Our Blog</h1>
							<p class="additional-heading">Donec a lacinia mauris. Aliquam sodales auctor tempor vestibulum.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 margin-bottom-140 text-center no-padding">
						<div class="blog-minimal">
							<article id="post-11" class="post-11 post-gallery">
								<div class="post-thumbnail">
									<img src="img/blog_thumbnail.jpg" alt="thumbnail"/>
									<div class="overlay"></div>
								</div>
								<div class="post-details">
									<div class="container">
										<div class="row">
											<div class="col-sm-12 col-md-offset-2 col-md-8 post-content">
												<h6 class="small heading heading-underlined"><a href="#">24 Feb 2015</a></h6>
												<h5 class="heading post-title"><a href="#">MORBI DAPIBUS EROS A SOLLICITUDIN FACILISIS</a></h5>
												<ul class="small post-category list-inline"><li><a href="#">Gallery</a></li><li><a href="#">Standard</a></li></ul>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article id="post-12" class="post-12 post-gallery">
								<div class="post-thumbnail">
									<img src="img/blog_thumbnail.jpg" alt="thumbnail"/>
									<div class="overlay"></div>
								</div>
								<div class="post-details">
									<div class="container">
										<div class="row">
											<div class="col-sm-12 col-md-offset-2 col-md-8 post-content">
												<h6 class="small heading heading-underlined"><a href="#">24 Feb 2015</a></h6>
												<h5 class="heading post-title"><a href="#">SED UT MAXIMUS LACUS. DUIS TEMPUS INTERDUM NISI, A VENENATIS NEQUE SOLLICITUDIN.</a></h5>
												<ul class="small post-category list-inline"><li><a href="#">Gallery</a></li><li><a href="#">Standard</a></li></ul>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article id="post-13" class="post-13 post-gallery">
								<div class="post-thumbnail">
									<img src="img/blog_thumbnail.jpg" alt="thumbnail"/>
									<div class="overlay"></div>
								</div>
								<div class="post-details">
									<div class="container">
										<div class="row">
											<div class="col-sm-12 col-md-offset-2 col-md-8 post-content">
												<h6 class="small heading heading-underlined"><a href="#">24 Feb 2015</a></h6>
												<h5 class="heading post-title"><a href="#">MAURIS QUIS VELIT LOREM. NAM A NEQUE JUSTO. SUSPENDISSE CONSECTETUR COMMODO</a></h5>
												<ul class="small post-category list-inline"><li><a href="#">Gallery</a></li><li><a href="#">Standard</a></li></ul>
											</div>
										</div>
									</div>
								</div>
							</article>
							<article id="post-14" class="post-14 post-gallery">
								<div class="post-thumbnail">
									<img src="img/blog_thumbnail.jpg" alt="thumbnail"/>
									<div class="overlay"></div>
								</div>
								<div class="post-details">
									<div class="container">
										<div class="row">
											<div class="col-sm-12 col-md-offset-2 col-md-8 post-content">
												<h6 class="small heading heading-underlined"><a href="#">24 Feb 2015</a></h6>
												<h5 class="heading post-title"><a href="#">ALIQUAM BLANDIT NEC IPSUM SIT AMET BIBENDUM</a></h5>
												<ul class="small post-category list-inline"><li><a href="#">Gallery</a></li><li><a href="#">Standard</a></li></ul>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>		
		</section> -->
		<!-- Contact Form -->
		<section id="contact" class="contact">
			<div class="container">				
				<div class="row">
					<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 text-center margin-top-140">
						<div class="section-heading">
							<h1 class="heading heading-strike">Contacto</h1>
							<p class="additional-heading">Consultanos sobre tus necesidades</p>
						</div>
					</div>				
					<div class="col-md-offset-1 col-md-10 margin-bottom-140">
						<div class="row">
							<!-- To configure the contact form email address, go to contact/contact.php and update the email address in the PHP file on line 18. -->
							<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
							<form name="sentMessage" id="contactForm" class="contact-form" method="post">
								<div class="col-md-6 text-left">
									<div class="row">
										<div class="control-group">
											<div class="form-group col-xs-12 floating-label-form-group controls">
												<input type="text" class="form-control" placeholder="Nombre *" id="name" name="name" required data-validation-required-message="Please enter your name.">
												<p class="help-block text-danger required-alert"></p>
											</div>
										</div>
										<div class="control-group">
											<div class="form-group col-xs-12 floating-label-form-group controls">
												<input type="email" class="form-control" placeholder="Dirección e-mail *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
												<p class="help-block text-danger required-alert"></p>
											</div>
										</div>
										<div class="control-group">
											<div class="form-group col-xs-12 floating-label-form-group controls margin-bottom-30">
												<input type="text" class="form-control" placeholder="Motivo del contacto" name="motivo" id="website">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-left">
									<div class="row">
										<div class="control-group">
											<div class="form-group col-xs-12 floating-label-form-group controls">
												<textarea rows="4" class="form-control" placeholder="Mensaje *" id="message" name="msg" required data-validation-required-message="Please enter a message."></textarea>
												<p class="help-block text-danger required-alert"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group col-xs-12 text-center margin-20">
									<button type="submit" name="enviar" class="btn btn-default primary-typo">Enviar</button>
								</div>
								<div class="clearfix"></div>
								<div class="col-md-12 text-left clearfix">
									<div id="success"></div>
								</div>
								<div class=""></div>
							</form>
							<?php
							include("./contact/contact.php");
							?>
						</div>
					</div>
				</div>				
			</div>
		</section>	
		
		<!-- Footer menu -->
		<div id="footer-area" class="footer">
			<div class="container">
				<div class="footer-social text-center">
					<ul class="social-icons small list-inline">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Behance</a></li>
					</ul>
				</div>
				<div class="separator separator_center footer-sep">
					<span class="sep_holder sep_holder_r"><span class="sep_line"></span></span>
				</div>	
				<div id="colophon" class="footer-colophon text-center">
					<p class="site-info small">Correa Gorondona Contadores Asociados @2021</p>
				</div>
			</div>
		</div>
		
	</div><!-- /content -->
	
	<div class="throbbers_loader">
		<div class="throbber">El sitio está cargando...</divobre tus necesidades
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/candy-plugins.js"></script>
	<script src="js/jqBootstrapValidation-1.3.7.min.js"></script>
	<script src="js/script.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
		
</body>
</html>