
<?php
	session_start();

	abstract class CommonAction {

		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_MEMBER = 1;
		public static $MODE_ECRITURE = "Mode écriture";

		private $pageVisibility;

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
			if (empty($_SESSION["mode"])) {
				$_SESSION["mode"] = CommonAction::$MODE_ECRITURE;
			}

			$this->executeAction();
		}

		protected abstract function executeAction();

		//-----------------------------------------------
		// méthode pour obtenir le nom de l'admin
		//-----------------------------------------------
		public function getUsername() {
			return empty($_SESSION["username"]) ? "Invité" : $_SESSION["username"];
		}

		//-----------------------------------------------
		// méthode pour vérifier si l'admin est connecté
		//-----------------------------------------------
		public function isLoggedIn() {
			return $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;
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
		// méthode pour s'assurer que ce n'est pas la page logout
		//-----------------------------------------------
		public function estPageLogout() {
			return basename($_SERVER["PHP_SELF"]) == "logout.php";
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
			$formulaireA = "<form method=\"post\">";
			$divBoutonLecture = "<div id=\"bouton-mode-lecture\"></div>";
			$divBoutonEcriture = "<div id=\"bouton-mode-ecriture\"></div>";
			$formulaireB = "</form>";
			$menuAdminB = "</div>";
			$script = "<script src=\"js/admin.js\"></script>";

			$resultat1 = $enTete . $petiteEnTete . $boutonDeconnexion . $boutonMenuAdmin;
			$resultat2 = $menuAdminA . $formulaireA;
			$resultat3 = $divBoutonLecture . $divBoutonEcriture;
			$resultat4 = $formulaireB . $menuAdminB . $script;

			return $resultat1 . $resultat2 . $resultat3 . $resultat4;
		}

		//-----------------------------------------------
		// méthode pour vérifier si l'admin est en mode écriture
		//-----------------------------------------------
		public function enModeEcriture() {
			if (isset($_POST["mode"])) {
				$_SESSION["mode"] = $_POST["mode"];
			}

			return $_SESSION["mode"] == CommonAction::$MODE_ECRITURE;
		}
	}