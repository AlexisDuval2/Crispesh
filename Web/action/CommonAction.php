
<?php
	session_start();

	abstract class CommonAction {

		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_MEMBER = 1;
		private $pageVisibility;

		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}

		public function execute() {
			if (empty($_SESSION["visibility"])) {
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}
			if ($_SESSION["visibility"] < $this->pageVisibility) {
				header("location:login.php");
				exit;
			}
			$this->executeAction();
		}

		protected abstract function executeAction();

		public function getUsername() {
			return empty($_SESSION["username"]) ? "Invité" : $_SESSION["username"];
		}

		public function isLoggedIn() {
			return $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;
		}

		public function hasSpecialBackground() {

			$page_login = "login.php";
			$page_logout = "logout.php";
			$page_erreur = "erreur.php";

			$page = basename($_SERVER["PHP_SELF"]);

			return $page == $page_login || $page == $page_logout || $page == $page_erreur;
		}
	}