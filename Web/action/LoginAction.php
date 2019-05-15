
<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class LoginAction extends CommonAction {

		public $wrongLogin = false;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if (isset($_POST["username"])) {

				if (UserDAO::authenticate($_POST["username"], $_POST["pwd"])) {

					$_SESSION["username"] = $_POST["username"];
					$_SESSION["visibility"] = CommonAction::$VISIBILITY_MEMBER;
					header("location:index");
					exit();
				}
				else {$this->wrongLogin = true;}
			}
		}
	}
