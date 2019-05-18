
<?php
	require_once("action/CommonAction.php");

	class NousJoindreAction extends CommonAction {

		//-----------------------------------------------
		// constantes
		//-----------------------------------------------
		public static $NB_CARAC_PAR_LIGNE = 50;
		public static $UTF_8 = "Content-Type: text/html; charset=UTF-8";
		public static $ERREUR_NOM = "<script>alert(\"Le champ \\\"nom\\\" est obligatoire\")</script>";
		public static $ERREUR_COURRIEL = "<script>alert(\"Le champ \\\"courriel\\\" est obligatoire\")</script>";
		public static $ERREUR_SUJET = "<script>alert(\"Le champ \\\"sujet\\\" est obligatoire\")</script>";
		public static $ERREUR_MSG = "<script>alert(\"Le champ \"message\" est obligatoire\")</script>";

		//-----------------------------------------------
		// Constructeur
		//-----------------------------------------------
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		//-----------------------------------------------
		// fonction principale
		//-----------------------------------------------
		protected function executeAction() {
			if ($this->nomOk() && $this->courrielOk()) {echo "nom + courriel ok";}

			// if ($this->messageEstValide()) {
			// 	echo "message est valide";
			// 	echo $this->envoyerCourriel();
			// }
		}

		//-----------------------------------------------
		// fonction pour vérifier nom
		//-----------------------------------------------
		private function nomOk() {
			$nomOk = false;
			if (isset($_POST["nom"])) {
				if ($_POST["nom"] != "") {$nomOk = true;}
				else {echo NousJoindreAction::$ERREUR_NOM;}
			}
			return $nomOk;
		}

		//-----------------------------------------------
		// fonction pour vérifier courriel
		//-----------------------------------------------
		private function courrielOk() {
			$courrielOk = false;
			if (isset($_POST["courriel"])) {
				if ($_POST["courriel"] != "") {$courrielOk = true;}
				else {echo NousJoindreAction::$ERREUR_COURRIEL;}
			}
			return $courrielOk;
		}

		//-----------------------------------------------
		// fonction pour afficher nom
		//-----------------------------------------------
		public function nom() {
			$nom = "";
			if (isset($_POST["nom"])) {$nom = $_POST["nom"];}
			return $nom;
		}

		//-----------------------------------------------
		// fonction pour afficher courriel
		//-----------------------------------------------
		public function courriel() {
			$courriel = "";
			if (isset($_POST["courriel"])) {$nom = $_POST["courriel"];}
			return $courriel;
		}

		//-----------------------------------------------
		// fonctions pour obtenir données
		//-----------------------------------------------
		public function messageEstValide() {

			// $messageEstValide = false;


			// $valeursNonNulles = 			if (isset($_POST["nom"]) && isset($_POST["courriel"]) && isset($_POST["sujet"]) && isset($_POST["msg"])) {


			// if (isset($_POST["nom"]) && isset($_POST["courriel"]) && isset($_POST["sujet"]) && isset($_POST["msg"])) {
			// 	$messageEstValide = true;
			// }
			// else {
			// 	if (!$this->nomOk()) {
			// 		echo NousJoindreAction::ERREUR_NOM;
			// 	}

			// }
			// $this->courrielOk()
			// $this->sujetOk()
			// $this->msgOk()

			// $this->nomOk()
			// $this->courrielOk()
			// $this->sujetOk()
			// $this->msgOk()

			// if (!$nomOk) {
			// }
			// elseif ($nomOk && $courrielOk && $sujetOk && $msgOk) {
			// 	$messageEstValide = true;
			// }

			// return $messageEstValide;
		}

		public function envoyerCourriel() {

			// $sujet = $_POST["sujet"];
			// $messageComplet = $_POST["nom"] . $_POST["courriel"] . $_POST["msg"];

			// $messageComplet = wordwrap($messageComplet, NousJoindreAction::$NB_CARAC_PAR_LIGNE);
			// mail("alexisduval@outlook.com", $sujet, $messageComplet, NousJoindreAction::$UTF_8);

			// return $sujet . $messageComplet;
		}
	}
