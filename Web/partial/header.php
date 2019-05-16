
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<title>CRISPESH - Centre de recherche pour l’inclusion scolaire et professionnelle des étudiants en situation de handicap</title>

		<!-- FAVICON AND APPLE TOUCH -->
		<link rel="shortcut icon" href="favicon.png">
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-180x180.png">

		<!-- FONTS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,300">

		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

		<!-- MT ICONS -->
		<link rel="stylesheet" href="assets/fonts/mt-icons/mt-icons.css">

		<!-- FANCYBOX -->
		<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.css">

		<!-- REVOLUTION SLIDER -->
		<link rel="stylesheet" href="assets/plugins/revolutionslider/css/settings.css">

		<!-- OWL Carousel -->
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.transitions.css">

		<!-- MAGNIFY -->
		<link rel="stylesheet" href="assets/plugins/magnify/magnify.css">

		<!-- YOUTUBE PLAYER -->
		<link rel="stylesheet" href="assets/plugins/ytplayer/css/YTPlayer.css">

		<!-- TEXT ROTATOR -->
		<link rel="stylesheet" href="assets/plugins/text-rotator/morphext.css">

		<!-- ANIMATIONS -->
		<link rel="stylesheet" href="assets/plugins/animations/animate.min.css">

		<!-- CUSTOM & PAGES STYLE -->
		<link rel="stylesheet" href="assets/css/custom.css">
		<link rel="stylesheet" href="assets/css/pages-style.css">
	</head>

	<body>

		<?php if ($action->aUnFondSpecial()) {echo $action->fondSpecial(); ?>
		<?php } else {echo $action->fondNormal();} ?>

			<!-- HEADER -->
			<header>

				<div id="header-accessibilite">
					<a href="javascript:;" id="btn_contraste_eleve">Passer en contraste élevé</a>
					<a href="javascript:;" id="btn_niveau_gris">Basculer en niveau de gris</a>
					<a href="javascript:;" id="btn_taille_police">Changer la taille de la police</a>
				</div>

				<div id="header-top">
					<div class="container">
						<div class="row">
							<div class="col-sm-5">
								<div class="widget widget-pages">
									<ul>
										<li>
											<a href="https://www.facebook.com/Crispesh" target="_blank">
												<img src="images/logo_facebook.png" alt="Facebook - Crispesh">
											</a>
										</li>
										<li>
											<a href="https://www.linkedin.com/company/crispesh">
												<img src="images/logo_linkedin.png" alt="Linkedin - Crispesh">
											</a>
										</li>
										<li>
											<a href="javascript:;" id="btn_accessibilite">
												<img src="images/universal-access.png">Accessibilité
											</a>
										</li>
										<li>
											<div class="widget">
												<a id="english" href="javascript:;">English</a>
											</div><!-- widget-language -->
										</li>
									</ul>
								</div><!-- widget-pages -->
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- header-top -->

				<?php if ($action->isLoggedIn()) {echo $action->montrerOptions();} ?>

				<html>
				<form action="" method="post">
					<input type="hidden" name="action" value="submit" />
					<select name="name">
						<option>John</option>
						<option>Henry</option>
					<select>
					<input id="tea-submit" type="submit" name="submit" value="Tea">
					<input id="coffee-submit" type="submit" name="submit" value="Coffee">
				</form>
				</html>

				<?php
				if (isset($_POST['action'])) {
					echo '<br />The ' . $_POST['submit'] . ' submit button was pressed<br />';
				}
				?>

				<div id="header">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">

								<!-- LOGO -->
								<a id="logo" href="index">
									<img id="header-logo" src="assets/images/logo.png" alt="">
								</a>

							</div><!-- col -->

							<div class="col-sm-9">

								<!-- MENU -->
								<nav>
									<a id="mobile-menu-button" href="javascript:;">
									</a>
									<ul class="menu clearfix" id="menu">
										<li>
											<a href="index">Accueil</a>
										</li>
										<li>
											<a href="qui_sommes_nous">À propos</a>
											<ul class="header-sous-menus">
												<li>
													<a href="inclusion_sociale">L'inclusion sociale</a>
												</li>
												<li>
													<a href="innovation_sociale">L'innovation sociale</a>
												</li>
												<li>
													<a href="conception_handicap">Notre conception du handicap</a>
												</li>
												<li>
													<a href="situation_handicap">Qui sont les personnes en situation d'handicap</a>
												</li>
												<li>
													<a href="champs_expertise">Champs d'expertise</a>
												</li>
												<li>
													<a href="partenaires">Nos partenaires</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="equipe">Équipe</a>
										</li>
										<li>
											<a href="nos_projets">Nos Projets</a>
										</li>
										<li>
											<a href="services">Nos Services</a>
											<ul class="header-sous-menus">
												<li class="active">
													<a href="recherche_appliquee">La recherche appliquée</a>
												</li>
												<li>
													<a href="services_accompagnement">Services d'accompagnement en innovation sociale</a>
												</li>
												<li>
													<a href="laboratoire_technologies_adaptatives">Laboratoire en technologies adaptatives</a>
												</li>
												<li>
													<a href="formation_transfert">La formation et transfert</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="documentation">Documentation</a>
										</li>
										<li>
											<a href="nous_joindre">Nous Joindre</a>
										</li>
									</ul>
								</nav>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- header -->
			</header><!-- HEADER -->