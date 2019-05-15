
<?php
	require_once("action/LoginAction.php");
	$action = new LoginAction();
	$action->execute();
	require_once("partial/header.php");
?>

			<!-- CONTENT -->
			<div id="content">
				<div id="page-header" class="style-1">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">

								<h4>Administrateur</h4>

							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div id="cadre-login" class="col-sm-5">
							<div class="widget widget-categories">
								<h1>Connexion</h1>
								<div>
									<form action="login.php" method="post">
										<?php if ($action->wrongLogin) { ?>
											<h1 id="erreur">Erreur de connexion</h1>
										<?php } ?>
										<div class="ligne-formulaire">
											<label class="etiquette" for="username">Nom d'usager : </label>
											<input type="text" name="username" id="username" />
										</div>
										<div class="ligne-formulaire">
											<label class="etiquette" for="password">Mot de passe : </label>
											<input type="password" name="pwd" id="password" />
										</div>
										<div id="cadre-bouton">
											<button type="submit">Connexion</button>
										</div>
									</form>
								</div>
							</div><!-- widget-categories -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

<?php
	require_once("partial/footer.php");
