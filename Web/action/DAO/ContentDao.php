
<?php
	class ContentDao {

		//-------------------------------------------------
		// PAGE INDEX
		//-------------------------------------------------

		//-------------------------------------------------
		// titre
		private static $indexCheminTitre = "action/DAO/data_index_titre.txt";
		public static function lire_titreIndex() {
			return file_get_contents(self::$indexCheminTitre);
		}
		public static function ecrire_titreIndex($message) {
			file_put_contents(self::$indexCheminTitre, $message);
		}
		//-------------------------------------------------

		//-------------------------------------------------
		// texte principal
		private static $indexCheminTexte = "action/DAO/data_index_texte.txt";
		public static function lire_texteIndex() {
			return file_get_contents(self::$indexCheminTexte);
		}
		public static function ecrire_texteIndex($message) {
			file_put_contents(self::$indexCheminTexte, $message);
		}
		//-------------------------------------------------

		//-------------------------------------------------
		// LES PAGES DE TYPE "ÉQUIPE"
		//-------------------------------------------------

		// fonction pour trouver le nom de la page sans ".php"
		private static function trouverNomPage() {

			$nomCompletPage = basename($_SERVER["PHP_SELF"]);

			return substr_replace($nomCompletPage, "", -4);
		}

		// fonction pour lire un employé
		public static function lire_emp($no) {

			$chemin = "action/DAO/data_" . self::trouverNomPage() . "_emp_" . $no . ".txt";

			return file_get_contents($chemin);
		}

		// fonction pour modifier un employé
		public static function modifier_emp($no, $message) {

			$chemin = "action/DAO/data_" . self::trouverNompage() . "_emp_" . $no . ".txt";

			file_put_contents($chemin, $message);
		}
	}
