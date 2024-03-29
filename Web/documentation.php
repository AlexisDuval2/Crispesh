﻿
<?php
	require_once("action/DocumentationAction.php");
	$action = new DocumentationAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
	        <div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">

								<h4>Documentation</h4>

							</div><!-- col -->
							<div class="col-sm-9">
								<ol class="breadcrumb">
									<li>
										<a href="index">Accueil</a>
									</li>
									<li class="active">Documentation</li>
								</ol>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="blog-article">
								<p>Le CRISPESH s’assure de diffuser les connaissances issues de ses recherches, au moyen de publications scientifiques, d’articles de vulgarisation, de présentations dans des colloques et dans des événements pertinents en lien avec sa mission. La section Documentation propose divers documents et outils  produits par le Centre et relatifs à ses domaines d’expertise.</p>
								<h1>Références documentaires :</h1>
								<p>
									Centre de liaison sur l’intervention et la prévention psychosociales (CLIPP), ACFAS 2016 - <br>Colloque sur le transfert et la mobilisation des connaissances: enjeux et défis pour l’innovation sociale <br>
									<a href="https://vimeo.com/180743389">vimeo.com/180743389</a>
								</p>
								<p>
									Les applications pédagogiques de la conception universelle de l’apprentissage :
									<a href="http://pcua.ca/">pcua.ca/</a>
								</p>
								<p>
									Tremblay, Marc et Jean Chouinard (2013), Modèle des fonctions d’aide : un pont entre la théorie et la pratique <br>
									<a href="http://www.reptic.qc.ca/wp-content/uploads/2013/09/2013-06_Article_Modele-des-fonctions-aide-un-pont-entre-theorie-pratique.pdf">www.reptic.qc.ca/wp-content/uploads/2013/09/2013-06_Article_Modele-des-fonctions-aide-un-pont-entre-theorie-pratique.pdf</a>
								</p>
								<p>
									Tremblay, Stéphanie et Catherine Loiselle (2016), « Handicap, éducation et inclusion : perspective sociologique », Éducation et francophonie, 44-1, 9-23. <br>
									<a href="http://www.erudit.org/revue/ef/2016/v44/n1/1036170ar.pdf">www.erudit.org/revue/ef/2016/v44/n1/1036170ar.pdf</a>
								</p>
								<p>
									Turcotte, Paul (2015), Conférence sur la conception universelle de l’apprentissage <br>
									<a href="https://www.youtube.com/watch?v=G13m-ie5pd8">www.youtube.com/watch?v=G13m-ie5pd8</a>
								</p>
							</div><!-- blog-article -->
						</div><!-- col -->
					</div><!-- row -->
					<div class="rond_background rouge droite grosseur_5" id="cercle_2"></div>
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
