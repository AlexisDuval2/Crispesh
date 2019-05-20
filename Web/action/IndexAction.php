
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/CommonAction.php");

	class IndexAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {}

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
	}
