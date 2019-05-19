
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/CommonAction.php");

	class EquipePersonnelAdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {}

		//-----------------------------------------------
		// méthode générique pour insérer le html pour un employé
		//-----------------------------------------------
		public function optionsEmploye($noEmp) {

			$textareaName = "equipe-pers-admin-emp-" . $noEmp;
			$formId = "ck-equipe-pers-admin-emp-" . $noEmp;
			$hauteur = 150;

			if (isset($_POST[$textareaName])) {
				ContentDao::modifier_emp($noEmp, $_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_emp($noEmp);

			return $this->afficherCkEditor($textareaName, $formId, $contenu, $hauteur);
		}
	}
