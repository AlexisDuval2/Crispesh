
<?php
	require_once("action/CommonAction.php");

	class LogoutAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			$this->pagePublique = CommonAction::$VISIBILITY_PUBLIC;

			if ($_SESSION["visibility"] != $this->pagePublique) {
				session_unset();
				session_destroy();
				session_start();
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}
		}
	}
