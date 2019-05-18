
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
		public static $ADRESSE_COURRIEL = "alexisduval@outlook.com";

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

			$nomOk = $this->donneeOk("nom");
			$courrielOk = $this->donneeOk("courriel");
			$sujetOk = $this->donneeOk("sujet");
			$msgOk = $this->donneeOk("msg");

			if ($nomOk && $courrielOk && $sujetOk && $msgOk) {
				echo "tout est ok";
			}
		}

		//-----------------------------------------------
		// fonction pour afficher les valeurs du formulaire
		//-----------------------------------------------
		public function afficher($cle) {
			$resultat = "";
			if (isset($_POST[$cle])) {$resultat = $_POST[$cle];}
			return $resultat;
		}

		//-----------------------------------------------
		// fonction pour vérifier la validité d'une donnée
		//-----------------------------------------------
		private function donneeOk($cle) {
			$donneeOk = false;
			if (isset($_POST[$cle])) {
				if ($_POST[$cle] != "") {$donneeOk = true;}
				else {
					if ($cle == "nom") {echo self::$ERREUR_NOM;}
					else if ($cle == "courriel") {echo self::$ERREUR_COURRIEL;}
					else if ($cle == "sujet") {echo self::$ERREUR_SUJET;}
					else if ($cle == "msg") {echo self::$ERREUR_MSG;}
				}
			}
			return $donneeOk;
		}

		//-----------------------------------------------
		// fonction pour envoyer un courriel
		//-----------------------------------------------
		private function envoyerCourriel() {

			// $sujet = $_POST["sujet"];
			// $messageComplet = $_POST["nom"] . $_POST["courriel"] . $_POST["msg"];

			// $messageComplet = wordwrap($messageComplet, NousJoindreAction::$NB_CARAC_PAR_LIGNE);
			// mail("alexisduval@outlook.com", $sujet, $messageComplet, NousJoindreAction::$UTF_8);

			// return $sujet . $messageComplet;
		}
	}
