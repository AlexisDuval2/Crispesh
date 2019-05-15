
<?php
	require_once("action/LogoutAction.php");
	$action = new LogoutAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container" id="logout-titre-header">
						<div class="row">
							<div class="col-sm-6">

								<h1>Administrateur</h1>

							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div id="cadre-logout" class="col-sm-5" style="width: 335px;">
							<div class="widget widget-categories">
								<h1 style="
									font-style: italic;
									text-align: center;
									margin-bottom: -55px;">
									Déconnexion réussie
								</h1>
							</div><!-- widget-categories -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
