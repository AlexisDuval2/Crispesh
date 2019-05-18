
<?php
	require_once("action/NousJoindreAction.php");
	$action = new NousJoindreAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">

								<h4>Nous joindre</h4>

							</div><!-- col -->
							<div class="col-sm-9">
								<ol class="breadcrumb">
									<li>
										<a href="index">Accueil</a>
									</li>
									<li class="active">Nous joindre</li>
								</ol>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="headline">

								<h1>Nous joindre</h1>

							</div><!-- headline -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<form id="formulaire-nous-joindre" method="post">
								<input class="ligne-nous-joindre" name="nom" type="text" placeholder="Nom" value="<?php echo $action->afficher("nom") ?>">
								<input class="ligne-nous-joindre" name="courriel" type="email" placeholder="Courriel" value="<?php echo $action->afficher("courriel") ?>">
								<input class="ligne-nous-joindre" name="sujet" type="text" placeholder="Sujet" value="<?php echo $action->afficher("sujet") ?>">
								<textarea class="ligne-nous-joindre" name="msg" placeholder="Message" value="<?php echo $action->afficher("msg") ?>"></textarea>
								<input id="bouton-nous-joindre" type="submit" value="Soumettre">
							</form>
						</div><!-- col -->
						<div class="col-sm-5">
							<div class="widget widget-contact" style="margin-bottom:50px;">
								<h4 class="widget-title">CRISPESH</h4>
								<ul>
									<li>
										<p>255, rue Ontario Est</p>
										<p>Montréal (QC) H2X 1X6</p>
									</li>
									<li>
										<span class="hidden-xs">514-982-3437 #2836</span>
										<a class="visible-xs-inline" href="tel:5149823437">514-982-3437 #2836</a>
									</li>
									<li>
										<a href="mailto:crispesh@cvm.qc.ca">crispesh@cvm.qc.ca</a>
									</li>
								</ul>
								<br>
								<div class="social-media">
									<a href="https://www.facebook.com/Crispesh">
										<img src="images/logos/facebook-icon.png">
									</a>
								</div>
								<div id="linkedin-container">
									<a href="https://www.linkedin.com/company/crispesh">
										<img id="linkedin-icon" src="images/logos/linkedin-icon.png">
									</a>
								</div>
							</div><!-- widget-contact -->
							<div class="widget widget-social">
								<div class="rond_background bleu droite grosseur_2" id="cercle_14"></div>
								<div class="rond_background rouge droite grosseur_1" id="cercle_15"></div>
							</div><!-- widget-social -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="headline">
								<h3>Adresse</h3>
								<br>
								<address class="text-center">
										255, rue Ontario Est <br>
										Montréal (QC) H2X 1X6
								</address>
							</div><!-- headline -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
