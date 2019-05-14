
<?php
	require_once("action/CommonAction.php");

	class PersonnelAdministratifAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
		}
	}
