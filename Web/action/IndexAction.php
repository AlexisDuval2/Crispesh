
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/CommonAction.php");

	class IndexAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
		}

		//-----------------------------------------------
		// méthode pour insérer le html pour modifier le titre (admin)
		//-----------------------------------------------
		public function optionsTitre() {

			if (isset($_POST["texte-index-titre"])) {
				ContentDao:: ecrire($_POST["texte-index-titre"]);
			}

			$formulaireA = "<form id=\"ck-index-titre\" action=\"index\" method=\"post\">";
			$zoneTexteA = "<textarea name=\"texte-index-titre\">";
			$contenu = ContentDao::lire();
			$zoneTexteB = "</textarea>";
			$cadreBoutonEnvoyerA = "<div class=\"cadre-bouton-envoyer\">";
			$boutonEnvoyer = "<button class=\"bouton-envoyer\" type=\"submit\">Envoyer</button>";
			$cadreBoutonEnvoyerB = "</div>";
			$ckEditor = "<script>CKEDITOR.replace(\"texte-index-titre\", {height: \"102px\"});</script>";
			$formulaireB = "</form >";

			$html_1 = $formulaireA . $zoneTexteA . $contenu . $zoneTexteB;
			$html_2 = $cadreBoutonEnvoyerA . $boutonEnvoyer . $cadreBoutonEnvoyerB;
			$html_3 = $ckEditor . $formulaireB;

			return $html_1 . $html_2 . $html_3;
		}
	}
