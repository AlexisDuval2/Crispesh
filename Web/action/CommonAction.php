
<?php
	session_start();

	abstract class CommonAction {

		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_MEMBER = 1;

		private $pageVisibility;
		private $modeEcriture = false;

		//-----------------------------------------------
		// Constructeur
		//-----------------------------------------------
		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}

		//-----------------------------------------------
		// méthode principale
		//-----------------------------------------------
		public function execute() {

			if (empty($_SESSION["visibility"])) {
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}
			if ($_SESSION["visibility"] < $this->pageVisibility) {
				header("location:login");
				exit;
			}

			$this->executeAction();
		}

		protected abstract function executeAction();

		//-----------------------------------------------
		// méthode pour obtenir le nom de l'utilisateur
		//-----------------------------------------------
		public function getUsername() {
			return empty($_SESSION["username"]) ? "Invité" : $_SESSION["username"];
		}

		//-----------------------------------------------
		// méthode pour vérifier si l'utilisateur est connecté
		//-----------------------------------------------
		public function isLoggedIn() {
			return $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;
		}

		//-----------------------------------------------
		// méthode pour vérifier si l'utilisateur est connecté
		//-----------------------------------------------
		public function enModeEcriture() {
			return $modeEcriture;
		}

		//-----------------------------------------------
		// méthode pour vérifier si la page a un fond spécial
		//-----------------------------------------------
		public function aUnFondSpecial() {

			$page_login = "login.php";
			$page_logout = "logout.php";
			$page_erreur = "erreur.php";

			$page = basename($_SERVER["PHP_SELF"]);

			return $page == $page_login || $page == $page_logout || $page == $page_erreur;
		}

		//-----------------------------------------------
		// méthode pour mettre le fond spécial
		//-----------------------------------------------
		public function fondSpecial() {
			return "<div id=\"page-wrapper\" style=\"background-image: url(images/backgrounds/bg-login-logout.png);\">";
		}

		//-----------------------------------------------
		// méthode pour mettre le fond normal
		//-----------------------------------------------
		public function fondNormal() {
			return "<div id=\"page-wrapper\">";
		}

		//-----------------------------------------------
		// méthode pour montrer les options à l'administrateur
		//-----------------------------------------------
		public function montrerOptions() {

			$enTete = "<div id=\"header-admin-grand\">Vous êtes en mode administrateur</div>";
			$petiteEnTete = "<div id=\"header-admin-petit\">mode admin</div>";
			$boutonDeconnexion = "<div id=\"bouton-deconnexion\"><a href=\"logout\">Déconnexion</a></div>";
			$boutonMenuAdmin = "<div id=\"bouton-menu-admin\"><a href=\"javascript:;\">Menu admin</a></div>";
			$menuAdminA = "<div id=\"menu-admin\">";
			$boutonModeLecture = "<div id=\"bouton-mode-lecture\"><a href=\"javascript:;\">Mode lecture</a></div>";
			$boutonModeEcriture = "<div id=\"bouton-mode-ecriture\"><a href=\"javascript:;\">Mode écriture</a></div>";
			$menuAdminB = "</div>";
			$script = "<script src=\"js/admin.js\"></script>";

			$resultat1 = $enTete . $petiteEnTete . $boutonDeconnexion . $boutonMenuAdmin;
			$resultat2 = $menuAdminA . $boutonModeLecture . $boutonModeEcriture . $menuAdminB . $script;

			return $resultat1 . $resultat2;
		}
	}