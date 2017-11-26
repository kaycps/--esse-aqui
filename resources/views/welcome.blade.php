<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Processos Seletivos - IFC 2017</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- =======================================================
    Theme Name: MyBiz
    Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="top" data-spy="scroll">
	<!--top header-->

	<header id="home">

		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-left">

							<img src="../img/logo.png">

						</div>
					</div>

					<div class="col-md-6">
						 @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Início</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Cadastrar</a>
                    @endauth
                </div>
@endif
					</div>

				</div>
			</div>
		</section>

		<!--main-nav-->

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ url('home') }}">Início</a></li>
							<li><a href="{{ url('select-process') }}">Editais</a></li>
							<li><a href="#">Sobre</a></li>
							<li><a href="#">Contato</a></li>
							
							
						</ul>

					</div>

					<div class="search-form">
						<form>
							<input type="text" id="s" size="40" placeholder="Search..." />
						</form>
					</div>

				</div>
			</nav>
		</div>

	</header>

	<!--slider-->
	<div id="slider" class="flexslider">

		<ul class="slides">
			<li>
				<img src="images/slider/slider1.jpg">

				<div class="caption">
					<h2><span>Processos Seletivos</span></h2>
					<h2><span>IFC - 2017</span></h2>
					<p>Faça já a sua inscrição.</p>
					<a href="{{ url('select-process') }}" class="btn">Saiba Mais</a>
				</div>

			</li>
			<li>
				<img src="images/slider/slider2.jpg">

				<div class="caption">
					<h2><span>Ótima Oportunidade</span></h2>					
					<p>Não perca essa chance.</p>
					<a href="{{ url('select-process') }}" class="btn">Saiba Mais</a>
				</div>

			</li>
			
		</ul>

	</div>

	<!--about-->
	

	

	<!--footer-->
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-heading">
						<h3><span>Sobre</span> nós</h3>
						<p>O Instituto Federal Catarinense (IFC) possui atualmente 15 campus, distribuídos nas cidades de Abelardo Luz, Araquari, Blumenau, Brusque, Camboriú, Concórdia, Fraiburgo, Ibirama, Luzerna, Rio do Sul, Santa Rosa do Sul, São Bento do Sul, São Francisco do Sul, Sombrio e Videira, além de uma Unidade Urbana em Rio do Sul e da Reitoria instalada na cidade de Blumenau.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="footer-heading">
						<h3><span>últimas</span> notícias</h3>
						<ul>
							<li><a href="#">Trends don't matter, but techniques do</a></li>
							<li><a href="#">Trends don't matter, but techniques do</a></li>
							<li><a href="#">Trends don't matter, but techniques do</a></li>
							<li><a href="#">Trends don't matter, but techniques do</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--bottom footer-->
	<div id="bottom-footer" class="hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-left">
						&copy; MyBix Theme. All rights reserved
						<div class="credits">
							<!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyBiz
              -->
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<div class="footer-right">
						<ul class="list-unstyled list-inline pull-right">
							<li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#service">Service</a></li>
							<li><a href="#portfolo">Portfolio</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.inview.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
	<script src="js/script.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>