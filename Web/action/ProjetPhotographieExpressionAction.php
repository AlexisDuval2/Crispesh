
<?php
	require_once("action/CommonAction.php");

	class ProjetPhotographieExpressionAction extends CommonAction {

		private static $DOSSIER_IMAGES = "images\\projets\\";

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->image();
		}


		//-----------------------------------------------
		// fonction pour trouver le chemin pour les images
		//-----------------------------------------------
		private static function trouverCheminPrImages() {

			$cheminAvecAction = dirname(__FILE__);
			$cheminSansAction = substr_replace($cheminAvecAction, "", -6);

			return $cheminSansAction . self::$DOSSIER_IMAGES;
		}

		//-----------------------------------------------
		// méthode pour insérer le html pour modifier le texte (admin)
		//-----------------------------------------------
		private function image() {

			$chemin = self::trouverCheminPrImages();

			if (!empty($_FILES)) {

				$nom_temp = $_FILES["image"]["tmp_name"];

				$nomAlexis = "Alexis" . ".jpg";

				$_FILES["image"]["name"] = $nomAlexis;
				echo $_FILES["image"]["name"];

				$nom = basename($_FILES["image"]["name"]);
				echo move_uploaded_file($nom_temp, $chemin . $nom);
			}
		}
	}
