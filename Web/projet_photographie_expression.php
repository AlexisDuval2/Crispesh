
<?php
	require_once("action/ProjetPhotoGraphieExpressionAction.php");
	$action = new ProjetPhotoGraphieExpressionAction();
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
									echo ContentDao::lire_titreProjet(); }
							?>
						</div>

					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="cadre-image-projet">
								<img src="images/projets/projet_photographie_expression.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
						</div>

						<div class="col-sm-8 texte-projet">
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionsTexteProjet();
								} else {
									echo ContentDao::lire_texteProjet();
								}
							?>
							<!-- <p>Grâce à une subvention de l’Office des personnes handicapées du Québec (OPHQ) le CRISPESH favorise la participation sociale des étudiants en situation de handicap du collégial. En utilisant la photographie comme moyen d’expression, les étudiants qui participent au projet ont l’occasion de partager leurs perspectives sur leur expérience au sein de la communauté collégiale.</p>
							<p>Les cadres autour desquels s’articule ce projet sont l’autodétermination et la photographie participative. En favorisant le développement de l’autodétermination, ce projet permet à chacun des participants d’être le principal agent d’amélioration de sa qualité de vie et d’avoir un impact positif sur son milieu d’études. La photographie participative génère quant à elle un pouvoir d’expression par l’image qui se fonde sur l’idée que toute personne est la mieux placée pour communiquer son point de vue à une communauté.</p>
							<p>Divisé en deux volets distincts (Création et Sensibilisation), ce projet se déroule tout au long de l’année 2016. Le volet Création, qui a eu lieu durant la session d’hiver 2016, vise à ce que les étudiants développent une perspective critique de leur propre expérience et qu’ils soient en mesure d’extérioriser un point de vue personnel en utilisant une démarche de création. Le volet Sensibilisation, qui a lieu au cours de la session d’automne 2016, a pour objectif le partage du point de vue développé, afin de sensibiliser la communauté collégiale à la diversité des expériences et des perspectives sur le handicap.</p>
							<p>Tout au long de ce projet, les étudiants sont accompagnés par un photographe professionnel qui les soutient dans la démarche de création et la réalisation des aspects techniques de la production des images.  L’offre du support technique nécessaire à la réalisation de l’œuvre constitue une force de cette approche. Ce soutien technique réduit considérablement le risque que le créateur échoue suite à un trop grand écart séparant l’idée initiale du résultat final. De cette façon, les étudiants pourront s’exprimer librement tout en bénéficiant du large potentiel créatif de la photographie.</p>
							<hr>
							<h6>Chargée de projet</h6>
							<p>Marise Lachapelle</p>
							<hr>
							<h6>Coordonnatrice des activités</h6>
							<p>Jian Wang</p>
							<hr>
							<h6>Coordonnateur des activités photographiques</h6>
							<p>Gopesa Paquette</p>
							<hr>
							<h6>Partenaires</h6>
							<p>Centre collégial de soutien à l’intégration (CCSI) de l’Ouest</p>
							<p>L’association québécoise des étudiants ayant des incapacités au postsecondaire (AQEIPS)</p>
							<hr>
							<h6>Partenaire financier</h6>
							<p>Office des personnes handicapées du Québec</p>
							<hr> -->
							<a href="nos_projets" class="btn btn-blue btn_retour_projet">Retour à la liste des projets</a>
						</div>

						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
