
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
				if ($noEmp == 1) {ContentDao::ecrire_equipePersAdminChemin_b1($_POST[$textareaName]);}
				elseif ($noEmp == 2) {ContentDao::ecrire_equipePersAdminChemin_b2($_POST[$textareaName]);}
			}

			if ($noEmp == 1) {$contenu = ContentDao::lire_equipePersAdminChemin_b1();}
			elseif ($noEmp == 2) {$contenu = ContentDao::lire_equipePersAdminChemin_b2();}

			return $this->afficherCkEditor($textareaName, $formId, $contenu, $hauteur);
		}
	}
