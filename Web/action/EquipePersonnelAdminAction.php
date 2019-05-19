
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/CommonAction.php");

	class EquipePersonnelAdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {}

		//-----------------------------------------------
		// fonction pour trouver le nom de la page sans ".php"
		//-----------------------------------------------
		private static function trouverNomPage() {

			$nomCompletPage = basename($_SERVER["PHP_SELF"]);

			return substr_replace($nomCompletPage, "", -4);
		}

		//-----------------------------------------------
		// méthode générique pour insérer le html pour un employé
		//-----------------------------------------------
		public function optionsEmploye($noEmp) {

			$textareaName = self::trouverNomPage() . $noEmp;
			$formId = "ck-" . self::trouverNomPage() . $noEmp;
			$hauteur = 150;

			if (isset($_POST[$textareaName])) {
				ContentDao::modifier_emp($noEmp, $_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_emp($noEmp);

			return $this->afficherCkEditor($textareaName, $formId, $contenu, $hauteur);
		}
	}
