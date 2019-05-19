
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
		public function afficherCkEditor($textareaName, $formId, $contenu, $hauteur) {

			$formulaireA = "<form id=\"" . $formId . "\" method=\"post\">";
			$zoneTexteA = "<textarea name=\"" . $textareaName . "\">";
			$zoneTexteB = "</textarea>";
			$cadreBoutonModifierA = "<div class=\"cadre-bouton-modifier\">";
			$boutonModifier = "<button class=\"bouton-modifier\" type=\"submit\"><a href=\"javascript:;\">Modifier</a></button>";
			$cadreBoutonModifierB = "</div>";
			$ckEditor = "<script>CKEDITOR.replace(\"" . $textareaName . "\", {height: \"" . $hauteur . "px\"});</script>";
			$formulaireB = "</form >";

			$html_1 = $formulaireA . $zoneTexteA . $contenu . $zoneTexteB;
			$html_2 = $cadreBoutonModifierA . $boutonModifier . $cadreBoutonModifierB;
			$html_3 = $ckEditor . $formulaireB;

			return $html_1 . $html_2 . $html_3;
		}

		//-----------------------------------------------
		// méthode pour insérer le html pour modifier le titre (admin)
		//-----------------------------------------------
		public function optionsTitre() {

			$textareaName = "texte-index-titre";
			$formId = "ck-index-titre";
			$hauteur = 102;

			if (isset($_POST[$textareaName])) {
				ContentDao:: ecrireTitreIndex($_POST[$textareaName]);
			}

			$contenu = ContentDao::lireTitreIndex();

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
				ContentDao:: ecrireTexteIndex($_POST[$textareaName]);
			}

			$contenu = ContentDao::lireTexteIndex();

			return $this->afficherCkEditor($textareaName, $formId, $contenu, $hauteur);
		}
	}
