<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Home</title>
</head>

<body>
	<header class="header">
		<center>
			<a href="index"><img class="header__image" src="../images/denhollander.png" /></a>
		</center>
		<nav class="nav">
			<ul class="active navigation">
				<li class="navigation__list"><a href="index" class="navigation__link">Home</a></li>
				<li class="navigation__list"><a href="diensten" class="navigation__link">Diensten</a></li>
				<li class="navigation__list"><a href="klanten" class="navigation__link">Klanten</a></li>
				<li class="navigation__list"><a href="projecten" class="navigation__link">Projecten</a></li>
				<li class="navigation__list"><a href="offerte" class="navigation__link">Offerte</a></li>
				<li class="navigation__list"><a href="contact" class="navigation__link">Contact</a></li>
			</ul>
			<center>
				<a class="toggle-nav"><span class="span__icon"><i class="fas fa-bars toggle-password"></i></span></a>
			</center>
		</nav>
	</header>

	<script>
		jQuery(document).ready(function () {
			$(".toggle-password").click(function () {
				$(this).toggleClass("fas fa-bars fas fa-times");
				$(".slider, .information, .different, .section__image").toggle();
			})

			jQuery('.toggle-nav').click(function () {
				jQuery('.nav ul').toggleClass('active');;
			});
		});
	</script>
	<script>
		$("a").each(function () {
			if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
				$(this).addClass('activeMenuItem');
			}
		});
	</script>