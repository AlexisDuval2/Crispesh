
<?php
	require_once("action/CommonAction.php");

	class ErreurAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
		}

		public function getErrorMessage() {

			$message = "Page \"erreur\"";

			if (isset($_GET["code"])) {
				if ($_GET["code"] == 403) {$message = "Accès refusé";}
				else if ($_GET["code"] == 404) {$message = "Page non trouvée";}
				else if ($_GET["code"] == 500) {$message = "Erreur interne";}
			}

			return $message;
		}
	}
