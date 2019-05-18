
<?php
	require_once("action/CommonAction.php");

	class NousJoindreAction extends CommonAction {

		public static $NB_CARAC_PAR_LIGNE = 70;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if (isset($_POST["nom"])) {
				echo $_POST["nom"];
			}
			echo "<br>";
			if (isset($_POST["courriel"])) {
				echo $_POST["courriel"];
			}
			echo "<br>";
			if (isset($_POST["sujet"])) {
				echo $_POST["sujet"];
			}
			echo "<br>";
			if (isset($_POST["msg"])) {
				echo $_POST["msg"];
			}
			echo "<br>";
		}

		public function messageEstValide() {

			$messageEstValide = false;

			$nomOk = isset($_POST["name"]);
			$courrielOk = isset($_POST["email"]);
			$sujetOk = isset($_POST["subject"]);
			$msgOk = isset($_POST["message"]);

			if ($nomOk && $courrielOk && $sujetOk && $msgOk) {
				$messageEstValide = true;
			}

			return $messageEstValide;
		}

		public function envoyerCourriel() {

			$sujet = $_POST["subject"];
			$messageComplet = $_POST["name"] . $_POST["email"] . $_POST["message"];

			// $messageComplet = wordwrap($message, NousJoindreAction::$NB_CARAC_PAR_LIGNE);
			mail("alexisduval@outlook.com", $sujet, $messageComplet);
		}
	}
