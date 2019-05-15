
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/IndexAction.php");
	$action = new IndexAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<section class="full-section" id="section-23">
					<div class="full-section-container bg-blanc">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">

									<h1 id="index-titre">
										<?php echo ContentDao::lire(); ?>
									</h1>

								</div>
							</div>
						</div>
					</div> <!-- full-section -->
				</section>

				<div class="container">
					<div class="row">
						<div id="index-main" class="col-sm-12">
							<p>Le Centre de recherche pour l’inclusion des personnes en situation de handicap (CRISPESH) est un centre collégial de transfert de technologie en pratiques sociales novatrices (CCTT-PSN), né d’un partenariat entre le <a href="http://www.cvm.qc.ca/Pages/index.aspx" target="_blank">Cégep du Vieux Montréal&nbsp;</a>et le <a href="http://www.dawsoncollege.qc.ca/french/" target="_blank">Collège Dawson</a>. Le Centre a été reconnu en octobre 2010 par le <a href="http://www.education.gouv.qc.ca/" target="_blank">Ministère de l’Éducation et de l'Enseignement Supérieur.</a></p>
							<p>En juillet 2015, le cégep du Vieux Montréal et le collège Dawson confiaient la gestion du CRISPESH à un organisme<br> à but non lucratif du même nom créé dans le but de réaliser le mandat du Centre.</p>
							<img src="assets/images/logo.png">
							<br>
							<p>Le CRISPESH fait partie du <a href="http://reseautranstech.qc.ca/" target="_blank">Réseau Trans-tech</a>, un regroupement de 49 centres collégiaux de transfert de technologie réunissant plus de 1000 experts à travers le Québec qui se dédient à l’innovation au moyen de la recherche appliquée et du transfert.</p>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

				<div class="rond_background red droite grosseur_2" id="cercle_2"></div>

				<div class="bloc_gris">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="headline">

									<h3>CRISPESH</h3>

								</div><!-- headline -->
							</div><!-- col -->
						</div><!-- row -->
						<div class="clearfix"></div>
					</div><!-- container -->
				</div><!-- bloc_gris -->

				<div class="bloc_gris">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="service-box style-2 wow">
									<i class="mt-icons-circle bleu"></i>
										<div class="service-box-content">
											<h4>Notre Mission</h4>
										<p>Le CRISPESH a plus spécifiquement pour mission l’avancement des connaissances ainsi que le développement et la promotion de pratiques sociales favorisant l’inclusion scolaire, sociale et professionnelle des personnes vivant une situation de handicap.</p>
									</div><!-- service-box-content -->
								</div><!-- service-box -->
							</div><!-- col -->
							<div class="col-sm-4">
								<div class="service-box style-2 wow" data-wow-delay="0.4s">
									<i class="mt-icons-circle vert"></i>
									<div class="service-box-content">
										<h4>Nos Valeurs</h4>
										<p>En faisant de l’inclusion le cœur de sa mission, le CRISPESH est un fier défenseur de l’égalité des chances pour tous. Vecteur de rigueur intellectuelle et d’innovation, il réalise sa mission en valorisant le respect, l’engagement et la collaboration afin de sensibiliser et responsabiliser la société québécoise à la diversité et à l’importance de créer et de mettre en place des initiatives durables qui contribuent à la pleine inclusion de personnes en situation de handicap.</p>
									</div><!-- service-box-content -->
								</div><!-- service-box -->
							</div><!-- col -->
							<div class="col-sm-4">
								<div class="service-box style-2 wow">
									<i class="mt-icons-circle rouge"></i>
									<div class="service-box-content">
										<h4>Notre Vision</h4>
										<p>En réunissant des leaders et des acteurs issus des domaines du développement, de la recherche, du transfert et de l’innovation, le CRISPESH compte ouvrir la voie vers la pleine inclusion des personnes en situation de handicap, et ce, dans tous les secteurs de la société.</p>
									</div><!-- service-box-content -->
								</div><!-- service-box -->
							</div><!-- col -->
						</div><!-- row -->
						<div class="clearfix"></div>
					</div><!-- container -->
				</div><!-- bloc_gris -->

				<div class="container">
					<div class="rond_background bleu grosseur_2" id="cercle_1"></div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<div class="headline">
								<h3>Le Mandat des CCTT-PSN</h3>
							</div><!-- headline -->
						</div><!-- col -->
					</div><!-- row -->
					<div class="row">
						<div class="col-sm-4">
							<div class="service-box style-2 wow">
								<i class="mt-icons-circle rouge"></i>
								<div class="service-box-content">
									<p>Soutenir les différents organismes et entreprises dans l’innovation sociale par des services d’accompagnement et de transfert de connaissances.</p>
								</div><!-- service-box-content -->
							</div><!-- service-box -->
						</div><!-- col -->
						<div class="col-sm-4">
							<div class="service-box style-2 wow">
								<i class="mt-icons-circle bleu"></i>
								<div class="service-box-content">
									<p>Développer des liens profitables entre les milieux et les collèges.</p>
								</div><!-- service-box-content -->
							</div><!-- service-box -->
						</div><!-- col -->
						<div class="col-sm-4">
							<div class="service-box style-2 wow">
								<i class="mt-icons-circle vert"></i>
								<div class="service-box-content">
									<p>Contribuer à la conception, à la réalisation et à l’amélioration des pratiques sociales novatrices au moyen de la recherche appliquée.</p>
								</div><!-- service-box-content -->
							</div><!-- service-box -->
						</div><!-- col -->
					</div><!-- row -->
					<div class="row">
						<div class="col-sm-4">
							<div class="service-box style-2 wow">
								<i class="mt-icons-circle jaune"></i>
								<div class="service-box-content">
									<p>Contribuer à former la relève scientifique en initiant les étudiants à la recherche.</p>
								</div><!-- service-box-content -->
							</div><!-- service-box -->
						</div><!-- col -->
						<div class="col-sm-4">
							<div class="service-box style-2 wow">
								<i class="mt-icons-circle mauve"></i>
								<div class="service-box-content">
									<p>Informer et former les milieux avec lesquels ils collaborent.</p>
								</div><!-- service-box-content -->
							</div><!-- service-box -->
						</div><!-- col -->
					</div><!-- row -->
				</div>
				<br>
				<hr>

				<div class="container clearfix">
					<div class="rond_background orange droite grosseur_2" id="cercle_2"></div>
					<div class="row">
						<div class="col-sm-12">
							<div class="headline">
								<h3>Nouveaux projets en cours</h3>
							</div><!-- headline -->
						</div><!-- col -->
					</div><!-- row -->
					<div class="col-sm-4">
						<div class="service-box style-6 wow">
							<div class="service-box-image">
								<img src="images/projets/ours.jpg">
							</div><!-- service-box-image -->
							<div class="service-box-content">
								<h4>
									<a href="projet_ameliorer_sommeil.php">Améliorer les conditions de sommeil de l’enfant vivant avec un trouble du spectre de l’autisme  grâce à un design réfléchi et personnalisé de sa chambre (2016-2017)</a>
								</h4>
							</div><!-- service-box-content -->
						</div><!-- service-box -->
					</div><!-- col -->
					<div class="col-sm-4">
						<div class="service-box style-6 wow">
							<div class="service-box-image">
								<img src="images/projets/iphone.jpg">
							</div><!-- service-box-image -->
							<div class="service-box-content">
								<h4>
									<a href="projet_incubateur_autochtones.php">Développement d’un modèle d’incubateur d’entreprises inclusif destiné aux Autochtones (2016-2018)</a>
								</h4>
							</div><!-- service-box-content -->
						</div><!-- service-box -->
					</div><!-- col -->
					<div class="col-sm-4">
						<div class="service-box style-6 wow">
							<div class="service-box-image">
								<img src="images/projets/cle.jpg">
							</div><!-- service-box-image -->
							<div class="service-box-content">
								<h4>
									<a href="projet_soutenir_employeur.php">Soutenir l’employeur dans l’inclusion professionnelle des personnes vivant avec une déficience intellectuelle ou un trouble du spectre de l’autisme (2016-2017)</a>
								</h4>
							</div><!-- service-box-content -->
						</div><!-- service-box -->
					</div><!-- col -->
				</div><!-- container -->

				<br>
				<hr>

				<section class="full-section parallax" id="section-15" data-stellar-background-ratio="0.1">
					<div class="container">
						<div id="wrap_titre_partenaires" class="row">
							<div class="col-md-5 border_right_verte">
								<h3>Partenaires financiers</h3>
								<div>
									<img src="images/logos/mees.png">
									<img src="images/logos/mesi.png">
								</div>
							</div>
							<div class="col-md-5 border_right_verte">
								<h3>Cégeps affiliés</h3>
								<div>
									<img src="images/logos/dawson.jpg">
									<img src="images/logos/vieux-montreal.jpg">
								</div>
							</div>
							<div class="col-md-2">
								<h3>Membre des réseaux</h3>
								<div>
									<img src="images/logos/transtech.jpg">
									<img src="images/logos/rqis.jpg">
									<img src="images/logos/qc_innove.jpg">
								</div>
							</div>
						</div>
					</div><!-- container -->
				</section><!-- full-section -->

<?php
	require_once("partial/footer.php");
