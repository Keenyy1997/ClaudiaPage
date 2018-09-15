<?php
session_name("CLAUDIA_CHACON");
session_start();

$box = isset($_GET["box"]) ? $_GET["box"] : "home";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Claudia Chacon</title>
	<!-- ESTILOS PRINCIPAL -->
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/header.css">
	<link rel="stylesheet" href="style/nav.css">

	<!-- SCRIPT PRINCIPAL -->
	<script src="library/siema.min.js"></script>
	<script src="script/main.js"></script>
	
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

	<script>
		LoadPage("<?php echo $box; ?>")
	</script>
</head>
<body>
	<header class="container" style='padding:1em;box-sizing: border-box;'>
		<div class="row">
				<div class="s6">
					<img src="image/logo.png" style="width:50%;"/>
				</div>
				<div class="s2">
					<span class="WhiteColor Text">Barranquilla, Colombia</span>
					<a class="PrimaryColor Text ListDecoration Bold" href="#">Nuestras Sucursales</a>
				</div>	
				<div class="s4">
					<p class="PrimaryColor Text Bold">385 4955 / (313) 573 0944 <i class="fa fa-phone PrimaryColor"></i></p>
					<div class="row" style='margin-top:5px;'>
						<div class="s1 offset-s2 social_media">
							<i class="fab fa-facebook PrimaryBackground BlackAltColor"></i>
						</div>
						<div class="s1 social_media">
							<i class="fab fa-twitter PrimaryBackground BlackAltColor"></i>
						</div>
						<div class="s1 social_media">
							<i class="fab fa-instagram PrimaryBackground BlackAltColor"></i>
						</div>
						<div class="s1 social_media">
							<i class="fab fa-google PrimaryBackground BlackAltColor"></i>
						</div>
					</div>
				</div>
		</div>
	</header>
	<nav class="container-fluid BlackAltBackground">
		<ul class="container Menu row">
			<li class="s2"><a href="home" title="Inicio">Inicio</a></li>
			<li class="s2"><a href="us" title="Quienes Somos">Quienes somos</a></li>
			<li class="s2"><a href="#" title="">Servicios</a></li>
			<li class="s2"><a href="#" title="">Sucursales</a></li>
			<li class="s2"><a href="#" title="">Citas</a></li>
			<li class="s2"><a href="#" title="">Contacto</a></li>
		</ul>
	</nav>
	<div class="MainPhoto">
		<img src=""/>
	</div>
	<section class="container" id='MainContent'>
	</section>
	<footer class="container BlackBackground">
		<div class="row" style="padding:1em;box-sizing: border-box;width:90%;">
			<div class="s4" style='border-right:2px solid var(--primary);'>
				<b class="PrimaryColor Bold Upper Text">CLAUDIA CHACON</b>
				<p class="WhiteColor Text Justify SmallSize" style='max-width:200px;'>
					Somos una cadena de Salas de Belleza
					especializadas en la belleza y la estética
					de una manera integral, empleando
					técnicas de vanguardia y personal
					altamente calificado.</p>
			</div>
			<div class="s2" style="padding-left:1em;box-sizing: border-box;">
				<b class="PrimaryColor Bold Upper Text">OFICINA PRINCIPAL</b>
				<p class="WhiteColor Text Justify SmallSize">
					Tel. 385 4955<br/>
					Cel. 313 573 0944<br/>
					Cra 45b # 94-45<br/>
					Barranquilla, Atlántico<br/>
					Colombia</p>
			</div>
			<div class="s5 Align-Right valign">
				<b class="PrimaryColor Bold Text">© 2018 Claudia Chacón</b>
			</div>
		</div>
	</footer>
</body>
</html>