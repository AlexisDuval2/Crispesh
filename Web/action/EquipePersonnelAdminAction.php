
<?php
	require_once("action/DAO/ContentDao.php");
	require_once("action/CommonAction.php");

	class EquipePersonnelAdminAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {}

		//-----------------------------------------------
		// méthode pour insérer le html pour modifier l'employé no 1
		//-----------------------------------------------
		public function optionsEmploye1() {

			$textareaName = "equipe-pers-admin-emp-1";
			$formId = "ck-equipe-pers-admin-emp-1";
			$hauteur = 200;

			if (isset($_POST[$textareaName])) {
				ContentDao::ecrire_equipePersAdminChemin_b1($_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_equipePersAdminChemin_b1();

			return $this->afficherCkEditor($textareaName, $formId, $contenu, $hauteur);
		}

	}
