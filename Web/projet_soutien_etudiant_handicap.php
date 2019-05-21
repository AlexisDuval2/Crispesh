
<?php
	require_once("action/ProjetSoutienEtudiantHandicapAction.php");
	$action = new ProjetSoutienEtudiantHandicapAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div class="container">
					<div class="row">

						<div class="col-sm-12">
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionsTitreProjet();
								} else {
							?>
							<div id="index-texte">
								<?php echo ContentDao::lire_titreProjet(); ?>
							</div>
							<?php } ?>
							<!-- <br>
							<center><h1>Soutien à l’intégration des étudiants en situation de handicap: développement d’un instrument d’évaluation des besoins de l’apprenant (2015-2017)</h1></center> -->
						</div>

					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="cadre-image-projet">
								<img src="images/projets/projet_soutien_etudiant_handicap.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
						</div>

						<div class="col-sm-8">
							<p>L’objectif de ce projet est de développer un instrument d’évaluation à l’intention des intervenants des services adaptés pour soutenir les étudiants en situation de handicap dans leur réussite éducative. Le nombre d’étudiants en situation de handicap (ESH) au collégial s’est accru de manière remarquable au cours de la dernière décennie et leur profil s’est largement transformé. Les collèges disposent de services adaptés (SA) qui ont pour mandat l’accompagnement des ESH vers la réussite éducative. Ces SA ont démontré, depuis leur implantation, qu’ils favorisent la réussite des ESH qui les utilisent. Or, l’accompagnement des ESH se complexifie. Le constat actuel sur les pratiques d’accompagnement basées sur le modèle médical qui prévaut au sein des SA des collèges permet de conclure que ces pratiques ne sont pas à la hauteur des défis d’aujourd’hui. Le manque d’outils d’évaluation et de suivi des ESH est établi et met en évidence la limite actuelle des pratiques en accompagnement vers la réussite des ESH. Ce projet permettra, à terme, de dépasser cette limite.</p>
							<p>Au  terme de ce projet, nous développerons un instrument d’évaluation du profil d’apprenant des ESH en milieu collégial qui, en plus de générer un profil personnalisé, proposera diverses ressources (humaines et matérielles) encourageant la réussite éducative des ESH. De plus, cet outil de travail permettra le développement de comportements d’autodétermination chez les ESH, ce qui favorisa également leur réussite éducative. En plus d’offrir des réponses aux besoins des ESH de manière plus pointue et systématique, cet outil servira aux conseillers en services adaptés de tous les établissements de niveau collégial (privés et publics) de la province et favorisera une harmonisation des pratiques en la matière.</p>
							<p>La réussite éducative des étudiants est au cœur de la mission et des préoccupations de tous les établissements de niveau collégial de la province. Ce projet revêt une importance capitale pour le partenaire (CCSI), les collèges du Québec et leurs différents acteurs (personnel de direction, conseillers en services adaptés, aides pédagogiques individuels, enseignants, ESH), mais aussi la société dans son ensemble. En effet, une plus grande réussite éducative des ESH est un facteur déterminant d’une meilleure intégration future au marché de l’emploi et, ainsi, à la pleine valorisation et participation des ESH au sein de la société.</p>
							<div class="col-sm-12">
								<hr>
								<h6>Chargée de projet et chercheuse</h6>
								<p>Marise Lachapelle</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Professionnelle de recherche</h6>
								<p>Danièle Paquet</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheur</h6>
								<p>Paul Turcotte</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheuse associée</h6>
								<p>Josianne Robert</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheuse (2015-2016)</h6>
								<p>Christine Morin</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Assistantes de recherche</h6>
								<p>Mélissa Miller</p>
								<p>Étudiante en Histoire et civilisation au Cégep du Vieux Montréal</p>
								<p>Odile Trudeau-Richard</p>
								<p>Étudiante en Histoire et civilisation au Cégep du Vieux Montréal</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Organisme partenaire</h6>
								<p>Centre collégial de soutien à l’intégration (CCSI)</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Organisme subventionnaire</h6>
								<p>Ministère de l’éducation et de l’enseignement supérieur</p>
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
