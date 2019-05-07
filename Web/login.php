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

								<h4>LOGIN</h4>

							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- page-header -->

				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<div class="widget widget-categories">
								<h1>Connexion</h1>
								<div>
									<form action="login.php" method="post">
										<?php
											if ($action->wrongLogin) {
												?>
												<div>
													<strong>Erreur: </strong>
													<?= $action->cleDeSession; ?>
												</div>
												<?php
											}
										?>
										<div>
											<label for="username">Nom d'usager : </label>
										</div>
										<div>
											<input type="text" name="username" id="username" />
										</div>
										<div>
											<label for="password">Mot de passe : </label>
										</div>
										<div>
											<input type="password" name="pwd" id="password" />
										</div>
										<div>&nbsp;</div>
										<div>
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
