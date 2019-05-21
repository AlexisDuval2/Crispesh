
<?php
	require_once("action/DAO/ContentDao.php");

	session_start();

	abstract class CommonAction {

		public static $VISIBILITY_PUBLIC = 0;
		public static $VISIBILITY_MEMBER = 1;
		public static $MODE_ECRITURE = "Mode écriture";
		public static $HAUTEUR_PR_EMP = 150;
		private static $DOSSIER_IMAGES = "images\\projets\\";
		public static $HAUTEUR_PR_TITRE_PROJET = 150;
		public static $HAUTEUR_PR_TEXTE_PROJET = 150;

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

		//-----------------------------------------------
		// méthode générique pour afficher le ckEditor
		//-----------------------------------------------
		public function afficherCkEditor($textareaName, $formId, $contenu, $hauteur) {

			$formulaireA = "<form class=\"ckeditor\" id=\"" . $formId . "\" method=\"post\">";
			$zoneTexteA = "<textarea name=\"" . $textareaName . "\">";
			$zoneTexteB = "</textarea>";
			$cadreBoutonModifierA = "<div class=\"cadre-bouton-modifier\">";
			$boutonModifier = "<button class=\"bouton-modifier\" type=\"submit\"><a href=\"javascript:;\">Modifier</a></button>";
			$cadreBoutonModifierB = "</div>";
			$ckEditor = "<script>CKEDITOR.replace(\"" . $textareaName . "\", {height: \"" . $hauteur . "px\"});</script>";
			$formulaireB = "</form >";

			$html_1 = $formulaireA . $zoneTexteA . $contenu . $zoneTexteB;
			$html_2 = $cadreBoutonModifierA . $boutonModifier . $cadreBoutonModifierB;
			$html_3 = $ckEditor . $formulaireB;

			return $html_1 . $html_2 . $html_3;
		}

		//-----------------------------------------------
		// fonction pour trouver le nom de la page sans ".php"
		//-----------------------------------------------
		public static function trouverNomPage() {

			$nomCompletPage = basename($_SERVER["PHP_SELF"]);

			return substr_replace($nomCompletPage, "", -4);
		}

		//-----------------------------------------------
		// méthode générique pour insérer le html pour un employé
		//-----------------------------------------------
		public function optionsEmploye($noEmp) {

			$textareaName = self::trouverNomPage() . $noEmp;
			$formId = "ck-" . self::trouverNomPage() . $noEmp;

			if (isset($_POST[$textareaName])) {
				ContentDao::modifier_emp($noEmp, $_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_emp($noEmp);

			return $this->afficherCkEditor($textareaName, $formId, $contenu, self::$HAUTEUR_PR_EMP);
		}

		//-----------------------------------------------
		// fonction pour trouver le chemin pour les images
		//-----------------------------------------------
		private static function trouverCheminPrImages() {

			$cheminAvecAction = dirname(__FILE__);
			$cheminSansAction = substr_replace($cheminAvecAction, "", -6);

			return $cheminSansAction . self::$DOSSIER_IMAGES;
		}

		//-----------------------------------------------
		// méthode pour afficher l'option de téléversement d'image
		//-----------------------------------------------
		public function optionImage() {

			$formulaireA = "<form class=\"formulaire-image\" enctype=\"multipart/form-data\" method=\"POST\">";
			$tailleMax = "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"10000000\"/>";
			$divMsgChoisir = "<div class=\"choisir-image\">Cliquez ici pour choisir une image (doit être un .jpg)</div>";
			$boutonParcourir = "<input class=\"parcourir\" name=\"image\" type=\"file\"/>";
			$cadreBoutonModifierA = "<div class=\"cadre-bouton-modifier\">";
			$boutonModifier = "<input class=\"bouton-modifier bouton-modifier-image\" type=\"submit\" value=\"Modifier\"/>";
			$cadreBoutonModifierB = "</div>";
			$formulaireB = "</form>";

			$html_1 = $formulaireA . $tailleMax . $divMsgChoisir . $boutonParcourir;
			$html_2 = $cadreBoutonModifierA . $boutonModifier . $cadreBoutonModifierB . $formulaireB;

			return $html_1 . $html_2;
		}

		//-----------------------------------------------
		// fonction pour téléverser une image de projet
		//-----------------------------------------------
		public function televerserImage() {

			$chemin = self::trouverCheminPrImages();

			$nomDeLaPage = CommonAction::trouverNomPage();

			if (!empty($_FILES)) {

				$nom_temp = $_FILES["image"]["tmp_name"];

				$nomAutomatique = $nomDeLaPage . ".jpg";
				$_FILES["image"]["name"] = $nomAutomatique;

				$nom = basename($_FILES["image"]["name"]);

				move_uploaded_file($nom_temp, $chemin . $nom);
			}
		}

		//-----------------------------------------------
		// méthode générique pour insérer le html pour le titre d'un projet
		//-----------------------------------------------
		public function optionsTitreProjet() {

			$textareaName = self::trouverNomPage() . "titre";
			$formId = "ck-" . self::trouverNomPage() . "titre";

			if (isset($_POST[$textareaName])) {
				ContentDao::modifier_titreProjet($_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_titreProjet();

			return $this->afficherCkEditor($textareaName, $formId, $contenu, self::$HAUTEUR_PR_TITRE_PROJET);
		}

		//-----------------------------------------------
		// méthode générique pour insérer le html pour le texte d'un projet
		//-----------------------------------------------
		public function optionsTexteProjet() {

			$textareaName = self::trouverNomPage() . "texte";
			$formId = "ck-" . self::trouverNomPage() . "texte";

			if (isset($_POST[$textareaName])) {
				ContentDao::modifier_texteProjet($_POST[$textareaName]);
			}

			$contenu = ContentDao::lire_texteProjet();

			return $this->afficherCkEditor($textareaName, $formId, $contenu, self::$HAUTEUR_PR_TEXTE_PROJET);
		}
	}