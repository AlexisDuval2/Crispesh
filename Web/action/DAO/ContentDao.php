
<?php
	require_once("action/CommonAction.php");

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

		//-------------------------------------------------
		// fonction pour lire un employé
		public static function lire_emp($no) {

			$chemin = "action/DAO/data_" . CommonAction::trouverNomPage() . "_emp_" . $no . ".txt";

			return file_get_contents($chemin);
		}
		//-------------------------------------------------

		//-------------------------------------------------
		// fonction pour modifier un employé
		public static function modifier_emp($no, $message) {

			$chemin = "action/DAO/data_" . CommonAction::trouverNompage() . "_emp_" . $no . ".txt";

			file_put_contents($chemin, $message);
		}
		//-------------------------------------------------

		//-------------------------------------------------
		// LES PAGES DE TYPE "PROJET"
		//-------------------------------------------------

		//-------------------------------------------------
		// titre
		//-------------------------------------------------
		public static function lire_titreProjet() {

			$chemin = "action/DAO/data_" . CommonAction::trouverNomPage() . "_titreProjet.txt";

			return file_get_contents($chemin);
		}
		//-------------------------------------------------

		//-------------------------------------------------
		// texte principal
		//-------------------------------------------------
		public static function modifier_titreProjet($message) {

			$chemin = "action/DAO/data_" . CommonAction::trouverNompage() . "_titreProjet.txt";

			file_put_contents($chemin, $message);
		}
	}
