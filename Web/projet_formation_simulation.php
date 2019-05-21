
<?php
	require_once("action/ProjetFormationSimulationAction.php");
	$action = new ProjetFormationSimulationAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<br>
							<center><h1>Formation par simulation en santé mentale (2015-2016)</h1></center>
						</div>
					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="cadre-image-projet">
								<img src="images/projets/projet_formation_simulation.jpg">
							</div>
							<?php
								if ($action->isLoggedIn() && $action->enModeEcriture()) {
									echo $action->optionImage();
									$action->televerserImage();
								}
							?>
						</div>

						<div class="col-sm-8">
							<p>Grâce à une subvention du Ministère de l’Économie et des Importations du Québec, le CRISPESH a développé un modèle de formation par simulation en santé mentale offert sur support multimédia pour les intervenants d’une ressource communautaire œuvrant en région éloignée au sein d’une communauté inuit.</p>
							<div class="col-sm-12">
								<hr>
								<h6>Chargées de projet</h6>
								<p>Marise Lachapelle et Jian Wang</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Chargée de projet et Chercheuse</h6>
								<p>Christine Morin</p>
							</div>
							<div class="col-sm-12">
								<hr>
								<h6>Stagiaires</h6>
								<p>Frédérique Lemay</p>
								<p>Étudiante au Cégep du Vieux Montréal</p>
								<p>Arts, lettres et communication, profil Médias</p>
								<p>Xavier Bossé</p>
								<p>Étudiant au Cégep du Vieux Montréal</p>
								<p>Arts, lettres et communication, profil Médias</p>
								<p>Camille Archambault</p>
								<p>Étudiante au Cégep du Vieux Montréal</p>
								<p>Arts, lettres et communication, profil Médias</p>
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
