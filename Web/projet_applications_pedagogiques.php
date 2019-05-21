
<?php
	require_once("action/ProjetApplicationsPedagogiquesAction.php");
	$action = new ProjetApplicationsPedagogiquesAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<script src="ckeditor/ckeditor.js"></script>
			<script src="js/boutons_modifier.js"></script>

			<!-- CONTENT -->
			<div id="content">
				<div class="container">
					<div class="row">

						<div class="col-sm-12 titre-projet">
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionsTitreProjet();
								} else {
							?>
							<div id="index-texte">
								<?php echo ContentDao::lire_titreProjet(); ?>
							</div>
							<?php } ?>
						</div>

					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="cadre-image-projet">
								<img src="images/projets/projet_applications_pedagogiques.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
						</div>

						<div class="col-sm-8">
							<p>Ce projet a conduit à l’élaboration de stratégies pédagogiques conçues selon les principes de la conception universelle de l’apprentissage (CUA). L’objectif était de soutenir les enseignants dans la planification de cours qui répondent à la fois aux besoins des étudiants en situation de handicap et à ceux de l’ensemble des étudiants de la classe. Ce projet s’inscrivait dans une perspective proactive en proposant des solutions pédagogiques axées sur la planification plutôt que sur des réponses rétroactives à des besoins individuels.</p>
							<p>Grâce à ce projet interordres, cinq établissements postsecondaires ont travaillé de concert: l’Université de Montréal, l’Université du Québec à Montréal (UQAM), le Collège Montmorency, le Cégep Marie-Victorin et le Cégep du Vieux Montréal.</p>
							<p>Pour plus d’information :
								<a href="http://www.pcua.ca" target="_blank">www.pcua.ca</a>
							</p>
							<div class="col-sm-12">
								<hr>
								<h6>Coordination</h6>
								<p>Stéphanie Tremblay</p>
								<p>Chargée de projet, d’octobre 2013 à novembre 2014</p>
								<p>Paul Turcotte</p>
								<p>Chargé de projet, de novembre 2014 jusqu’à la fin du projet</p>
								<p>Florence Lebeau</p>
								<p>Chargée de projet, de novembre 2014 à juin 2015</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Comité de direction</h6>
								<p>Marie Blain</p>
								<p>Directrice adjointe aux études, Cégep Marie-Victorin</p>
								<p>Yves Carignan</p>
								<p>Directeur des affaires étudiantes et relations avec la communauté, Collège Montmorency, 2013-2014</p>
								<p>Nathalie Giguère</p>
								<p>Directrice des études, Cégep du Vieux Montréal, 2014-2015</p>
								<p>Thomas Henderson</p>
								<p>Directeur du Centre de recherche pour l’inclusion scolaire et professionnelle des étudiants en situation de handicap (CRISPESH), 2013-2014</p>
								<p>Carole Lavallée</p>
								<p>Directrice adjointe des études, Cégep du Vieux Montréal, 2013</p>
								<p>Catherine Loiselle</p>
								<p>Directrice générale du Centre de recherche pour l’inclusion scolaire et professionnelle des étudiants en situation de handicap (CRISPESH), 2014-2015</p>
								<p>Dolores Otero</p>
								<p>Directrice, Services à la vie étudiante – Centre des services d’accueil et de soutien socioéconomique, Université du Québec à Montréal</p>
								<p>Hélène Trifiro</p>
								<p>Directrice du Centre étudiant du soutien à la réussite, Université de Montréal</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Comité de travail</h6>
								<p>Brigitte Auclair</p>
								<p>Enseignante  de français, Collège Montmorency </p>
								<p>Véronique Besançon</p>
								<p>Conseillère  pédagogique, Université de Montréal </p>
								<p>Jean-René Corbeil</p>
								<p>Enseignant en Technologies de l’architecture, Collège Montmorency</p>
								<p>Antoine Coulombe</p>
								<p>Enseignant en Techniques de travail social, Cégep Marie-Victorin</p>
								<p>Johanne Morin</p>
								<p>Enseignante en Techniques de travail social, Cégep Marie-Victorin </p>
								<p>Cédric Lamathe</p>
								<p>Enseignant de mathématiques, Cégep du Vieux Montréal</p>
								<p>Florence Lebeau</p>
								<p>Chargée  de cours à la Faculté de l’Aménagement, Université de Montréal </p>
								<p>Paul Turcotte</p>
								<p>Enseignant de philosophie, Cégep du Vieux Montréal</p>
								<p>Steve Vezeau</p>
								<p>Enseignant à l’École de design, Université du Québec à Montréal</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<a href="nos_projets" class="btn btn-blue btn_retour_projet">Retour à la liste des projets</a>
							</div>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
