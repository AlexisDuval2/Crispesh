
<?php
	require_once("action/ProjetIntegrerEtudiantsAction.php");
	$action = new ProjetIntegrerEtudiantsAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<script src="ckeditor/ckeditor.js"></script>
			<script src="js/boutons_modifier.js"></script>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">

							<div class="col-sm-12 titre-projet">
								<?php
									if ($action->isLoggedIn() && $action->enModeEcriture()) {
										echo $action->optionsTitreProjet();
									} else {
										echo ContentDao::lire_titreProjet();
									}
								?>
							</div><!-- col -->

						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget widget-categories">

								<div class="cadre-image-projet">
									<img src="images/projets/projet_integrer_etudiants.jpg">
								</div>
								<?php
									if ($action->isLoggedIn() && $action->enModeEcriture()) {
										echo $action->optionImage();
										$action->televerserImage();
									}
								?>
								<ul>
									<li class="">
										<a href="outils_generaux">Outils généraux</a>
									</li>
									<li class="">
										<a href="outils_etudiants">Outils pour les étudiants</a>
									</li>
									<li class="">
										<a href="outils_intervenants">Outils pour les intervenants</a>
									</li>
									<li class="">
										<a href="outils_enseignants">Outils pour les enseignants</a>
									</li>
									<li class="">
										<a href="outils_etablissements">Outils pour les établissements</a>
									</li>
								</ul>

							</div><!-- widget-categories -->
						</div>

						<div class="col-sm-8 texte-projet">
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionsTexteProjet();
								} else {
									echo ContentDao::lire_texteProjet();
								}
							?>
							<!-- <p>Ce projet a permis l’élaboration d’un modèle d’intégration pour les populations dites émergentes que nous convenons d’appeler dorénavant les nouvelles populations en situation de handicap. Par le développement d’outils généraux pour les étudiants, les intervenants, les enseignants et les établissements, ce projet a réuni les efforts de quatre établissements d’études postsecondaires: l’Université de Montréal, l’Université du Québec à Montréal (UQAM), le Collège Montmorency et le Cégep du Vieux Montréal.</p>
							<p>Ainsi, dans le cadre du réinvestissement en enseignement supérieur par le Ministère de l’Éducation, du Loisir et du Sport (MELS, maintenant MEES), une équipe a travaillé à la mise en œuvre d’un projet intitulé : Intégrer les populations dites émergentes aux études supérieures: mission possible!</p>
							<p>Les populations visées par ce projet sont les étudiants ayant des troubles d’apprentissage (TA), des troubles envahissants du développement (TED), des troubles déficitaires de l’attention (TDA/H) et des troubles graves de santé mentale (TGSM). Ce projet comportait trois volets auxquels étaient associés un ou deux groupes de travail composés de personnes travaillant dans les établissements participants, d’experts et de partenaires de l’externe pour mener à bien les huit activités sur une période de trois ans.</p>
							<p>Ce projet s’est décliné en trois volets, qui vont comme suit:</p>
							<ul>
								<li>Volet 1 : Favoriser la transition interordres (collèges-universités)</li>
								<li>Volet 2 : Identifier, harmoniser et consolider les meilleures pratiques en appui à leurs études</li>
								<li>Volet 3 : Développer le soutien pédagogique aux enseignants</li>
							</ul>
							<p>Lors de la mise en œuvre des trois volets, des outils ont été réalisés et sont disponibles pour tous.</p>
							<hr> -->
							<a href="nos_projets" class="btn btn-blue btn_retour_projet">Retour à la liste des projets</a>
						</div><!-- col -->

					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
