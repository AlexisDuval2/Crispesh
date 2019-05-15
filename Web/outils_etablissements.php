
<?php
	require_once("action/OutilsEtablissementsAction.php");
	$action = new OutilsEtablissementsAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">

								<h4>Intégrer les nouvelles populations étudiantes en situation de handicap aux études supérieures : mission possible (2011-2013)</h4>

							</div><!-- col -->
							<div class="col-sm-6">
								<ol class="breadcrumb">
									<li>
										<a href="projet_integrer_etudiants">Comité INTERORDRES</a>
									</li>
									<li class="active">Outils pour les étudiants</li>
								</ol>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget widget-categories">
								<img src="images/projets/interordres.jpg" alt="Intégrer les nouvelles populations étudiantes en situation de handicap aux études supérieures : mission possible (2011-2013)" />
								<ul>
									<li>
										<a href="outils_generaux">Outils généraux</a>
									</li>
									<li>
										<a href="outils_etudiants">Outils pour les étudiants</a>
									</li>
									<li>
										<a href="outils_intervenants">Outils pour les intervenants</a>
									</li>
									<li>
										<a href="outils_enseignants">Outils pour les enseignants</a>
									</li>
									<li class="active">
										<a href="javascript:;">Outils pour les établissements</a>
									</li>
								</ul>
							</div><!-- widget-categories -->
						</div>
						<div class="col-sm-8">
							<div class="col-sm-12 wrap_liens_outils">
								<p>
									<a href="pdf/outils_etablissements/demandes_d_accommodements.pdf" title="Demandes d'accommodements" target="_blank">
										<img src="images/projets/pdf.png" /> Demandes d'accommodements
									</a>
								</p>
								<p>
									<a href="pdf/outils_etablissements/etudes_de_cas.pdf" title="Études de cas" target="_blank">
										<img src="images/projets/pdf.png" /> Études de cas
									</a>
								</p>
								<p>
									<a href="pdf/outils_etablissements/scenarios_ateliers.pdf" title="Scénarios ateliers" target="_blank">
										<img src="images/projets/pdf.png" /> Scénarios ateliers
									</a>
								</p>
								<p>
									<a href="pdf/outils_etablissements/structure_organisationnelle_pour_repondre_aux_obligations_d_accommodements.pdf" title="Structure organisationnelle pour répondre aux obligations d’accommodements" target="_blank">
										<img src="images/projets/pdf.png" /> Structure organisationnelle pour répondre aux obligations d’accommodements
									</a>
								</p>
							</div>
						</div>
						<div class="col-sm-12">
							<hr>
							<a href="nos_projets" class="btn btn-blue btn_retour_projet">Retour à la liste des projets</a>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
