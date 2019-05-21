
<?php
	require_once("action/ProjetIncubateurAutochtonesAction.php");
	$action = new ProjetIncubateurAutochtonesAction();
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
								<img src="images/projets/projet_incubateur_autochtones.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
						</div>

						<div class="col-sm-8">
							<p>Les inégalités salariales et d’accès à l’emploi persistent entre les Autochtones et le reste de la population canadienne. Par ailleurs, les membres des Premières Nations qui se retrouvent en situation de handicap (troubles de santé mentale, handicap physique, sensoriel ou moteur, trouble ou difficulté d’apprentissage, etc.) peuvent facilement être sujets à une double discrimination sur le marché de l’emploi, de par leur appartenance culturelle et leurs besoins particuliers. Ces facteurs freinent leur épanouissement professionnel et empêchent le marché du travail de bénéficier de travailleurs qualifiés qui pourraient contribuer au maintien d’une économie locale prospère.</p>
							<p>L'entrepreneuriat représente une voie qui peut faciliter l'inclusion sociale et économique de personnes marginalisées en misant sur leurs intérêts et leurs compétences. Cette avenue est flexible, facilement adaptable aux besoins particuliers des individus qui s'y engagent et respectueuse des conceptions sociales et culturelles spécifiques de l'économie locale. Toutefois, du soutien et de l'accompagnement sont essentiels afin de rendre cette voie possible et durable. En ce sens, l'incubateur d'entreprises est une structure d'accompagnement adaptée qui offre différents services afin de faciliter le passage de l'idée à la mise en place d'un projet d'entreprise.</p>
							<p>Ce projet permettra de développer un modèle d’incubateur d’entreprises inclusif qui répondrait aux besoins et aux aspirations des membres des Premières Nations du Québec. Celui-ci sera inclusif puisqu’il sera adapté d’emblée pour les personnes en situation de handicap.</p>
							<p>Pour ce faire, quatre étapes seront nécessaires :</p>
							<ul>
								<li>Répertorier les modèles d’incubateurs d’entreprises et la littérature sur leurs succès et leurs échecs</li>
								<li>Documenter les perspectives spécifiques des populations autochtones en matière d’entrepreneuriat et de développement économique et social</li>
								<li>Concevoir un modèle d’incubateur d’entreprises inclusif prêt à être mis en fonction</li>
								<li>Développer les outils nécessaires à l’opérationnalisation de l’incubateur</li>
							</ul>
							<div class="col-sm-12">
								<hr>
								<h6>Directrice de projet</h6>
								<p>Marise Lachapelle</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Coordonnatrice de projet et Assistante de recherche</h6>
								<p>Léa Lefevre-Radelli</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheur</h6>
								<p>Paul Turcotte</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheuse</h6>
								<p>Rola Helou</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Organismes partenaires</h6>
								<p>Conseil scolaire des Premières Nations en éducation aux adultes (CSPNEA)</p>
								<p>Commission de développement des ressources humaines des Premières Nations du Québec (CDRHPNQ)</p>
								<p>Commission de développement économique des Premières Nations du Québec et du Labrador (CDEPNQL)</p>
								<p>Tewatonhnhi’saktha</p>
								<p>Fondation Martin</p>
								<p>Cégep du Vieux Montréal</p>
								<p>Collège Dawson</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Organisme subventionnaire</h6>
								<p>Conseil de recherches en sciences humaines du Canada (CRSH)</p>
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
