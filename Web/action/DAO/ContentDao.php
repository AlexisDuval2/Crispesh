
<?php
	class ContentDao {

		//-------------------------------------------------
		// PAGE INDEX
		//-------------------------------------------------
		// titre
		private static $indexCheminTitre = "action/DAO/indexTitreData.txt";

		public static function lireTitreIndex() {
			return file_get_contents(ContentDao::$indexCheminTitre);
		}

		public static function ecrireTitreIndex($message) {
			file_put_contents(ContentDao::$indexCheminTitre, $message);
		}

		//-------------------------------------------------
		// texte principal
		private static $indexCheminTexte = "action/DAO/indexTexteData.txt";

		public static function lireTexteIndex() {
			return file_get_contents(ContentDao::$indexCheminTexte);
		}

		public static function ecrireTexteIndex($message) {
			file_put_contents(ContentDao::$indexCheminTexte, $message);
		}

		//-------------------------------------------------
		// PAGE ÉQUIPE
		//-------------------------------------------------

	}
