
<?php
	require_once("action/ProjetAmeliorerSommeilAction.php");
	$action = new ProjetAmeliorerSommeilAction();
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
						</div>

					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="cadre-image-projet">
								<img src="images/projets/projet_ameliorer_sommeil.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
						</div>

						<div class="col-sm-8">
							<p>La Fédération québécoise de l’autisme estime la prévalence du trouble du spectre de l’autisme (TSA) à près de 1% de la population canadienne, mais des recherches démontrent que cette donnée sous-évalue le nombre réel d’individus touchés par ce trouble. Les problèmes de sommeil sont fréquents chez les enfants qui ont un TSA. Les raisons de ces problèmes de sommeil sont variées et peuvent être, par exemple, d’ordre physiologique, cognitif, sensoriel ou une combinaison de facteurs. Quelles qu’en soient les causes, le manque de sommeil aura inévitablement des conséquences sur la qualité de vie de l’enfant et de sa famille. Bien que l’aménagement de la chambre figure au premier rang des solutions que les parents peuvent apporter, la chambre des enfants ayant un TSA demeure un lieu bien peu étudié en design d’intérieur. De plus, il est démontré que le TSA se manifeste par des réactions inhabituelles à des expériences sensorielles. En effet, les personnes touchées par le TSA ont souvent de la difficulté à traiter et à répondre aux différents stimuli sensoriels, tels que l’ouïe, la vue et le toucher. Elles peuvent être hypo ou hypersensibles. Plusieurs chercheurs suggèrent que l’hypersensibilité peut provoquer des réactions sensorielles à l’origine des difficultés de sommeil. Pourtant, bien que le risque que le sommeil soit perturbé pour des raisons sensorielles chez les enfants ayant un TSA soit particulièrement élevé, cette composante est peu documentée. Ce projet propose de s’intéresser à l’aménagement de la chambre de l’enfant de 2 à 12 ans ayant un TSA en se basant sur les perceptions sensorielles de celui-ci. Pour ce faire, le projet fera le pont entre les études sur l’aménagement d’environnements conviviaux pour les personnes ayant un TSA et transférera ces connaissances vers l’aménagement de la chambre.</p>
							<p>L’objectif général de ce projet est de développer un cadre général, adaptable aux besoins individuels, d’aménagement de chambre pour enfants  de 2 à 12 ans vivant avec un TSA, qui se base sur les perceptions sensorielles. Les objectifs particuliers sont : 1) consolider et répertorier les connaissances sur les besoins sensoriels des enfants vivant avec un TSA (ex : toucher, sentir, goûter, voir, entendre, mouvement); 2) établir les paramètres à prendre en considération pour un design réfléchi et personnalisé; 3) proposer un ensemble flexible de directives qui puisse guider vers une réponse personnalisée et basée sur les profils de perception sensorielle (hypo/hypersensibilité).</p>
							<p>Grâce à la réalisation de ce projet, le CRISPESH pourra consolider ses connaissances et développer un créneau d’expertise peu étudié. Les programmes de Techniques de design d’intérieur du Cégep du Vieux Montréal et du Collège Dawson pourront bénéficier de nouveaux apprentissages visant à concevoir des aménagements réfléchis et personnalisés. Cela permettra au CRISPESH et à ses deux collèges affiliés de développer davantage leur capacité de recherche. L’originalité et la pertinence de ce projet résident dans une consolidation de connaissances qui n’ont jamais été regroupées à cette fin, mais aussi dans la prise en compte de l’expérience des personnes et des milieux concernés. Aucun effort n’a été déployé auparavant pour réunir toutes ces connaissances en vue d’apporter du soutien dans ce grand défi qui peut paraître banal pour toute personne qui n’est pas familière avec le sujet. Les ergothérapeutes peuvent certes aider dans cette entreprise et les informations obtenues grâce à l’évaluation sensorielle des enfants sont également utiles, mais aucun cadre de référence d’aménagement de la chambre de l’enfant ayant un trouble du spectre de l’autisme n’existe à l’heure actuelle. De façon générale, ce projet pourra améliorer la qualité de vie de plusieurs enfants et de leurs familles en contribuant à satisfaire ce besoin vital qu’est le sommeil.</p>
							<div class="col-sm-12">
								<hr>
								<h6>Chargée de projet et chercheuse</h6>
								<p>Marise Lachapelle</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Professionnelle de recherche et coordonnatrice des activités </h6>
								<p>Audrey Bigras</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheuse</h6>
								<p>Suzanne Pitre</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chercheur</h6>
								<p>Joseph Darrous</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Assistantes de recherche</h6>
								<p>Charlotte Leroux</p>
								<p>Étudiante en Techniques de design d’intérieur au Cégep du Vieux Montréal</p>
								<p>Tess Perron-Laurin</p>
								<p>Étudiante en Techniques de design d’intérieur au Cégep du Vieux Montréal</p>
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
