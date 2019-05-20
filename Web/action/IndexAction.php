
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/CommonAction.php");

	class IndexAction extends CommonAction {

		private static $DOSSIER_IMAGES = "images\\projets\\";

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->image();
		}

		//-----------------------------------------------
		// méthode pour insérer le html pour modifier le titre (admin)
		//-----------------------------------------------
		public function optionsTitre() {

			$textareaName = "texte-index-titre";
			$formId = "ck-index-titre";
			$hauteur = 102;

			if (isset($_POST[$textareaName])) {
				ContentDao:: ecrire_titreIndex($_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_titreIndex();

			return $this->afficherCkEditor($textareaName, $formId, $contenu, $hauteur);
		}

		//-----------------------------------------------
		// méthode pour insérer le html pour modifier le texte (admin)
		//-----------------------------------------------
		public function optionsTexte() {

			$textareaName = "texte-index-main";
			$formId = "ck-index-main";
			$hauteur = 550;

			if (isset($_POST[$textareaName])) {
				ContentDao:: ecrire_texteIndex($_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_texteIndex();

			return $this->afficherCkEditor($textareaName, $formId, $contenu, $hauteur);
		}

		//-----------------------------------------------
		// fonction pour trouver le nom de la page sans ".php"
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

			// if (isset($_FILES["choix_images"])) {
			if (!empty($_FILES)) {
				echo var_dump($_FILES);
				$nom_temp = $_FILES["image"]["tmp_name"];
				$nom = basename($_FILES["image"]["name"]);
				echo move_uploaded_file($nom_temp, $chemin . $nom);
			}

			// if (move_uploaded_file($nomImage, $chemin)) {
			// 	echo "téléchargement réussi";
			// } else {
			// 	echo "erreur";
			// }
		}
	}
