
<?php
	class ContentDao {

		//-------------------------------------------------
		// PAGE INDEX
		//-------------------------------------------------
		// titre
		private static $indexCheminTitre = "action/DAO/data_index_titre.txt";

		public static function lireTitreIndex() {
			return file_get_contents(self::$indexCheminTitre);
		}

		public static function ecrireTitreIndex($message) {
			file_put_contents(self::$indexCheminTitre, $message);
		}

		//-------------------------------------------------
		// texte principal
		private static $indexCheminTexte = "action/DAO/data_index_texte.txt";

		public static function lireTexteIndex() {
			return file_get_contents(self::$indexCheminTexte);
		}

		public static function ecrireTexteIndex($message) {
			file_put_contents(self::$indexCheminTexte, $message);
		}

		//-------------------------------------------------
		// PAGES POUR L'ÉQUIPE
		//-------------------------------------------------
		// equipe_personnel_admin.php
		private static $equipePersAdminChemin_b1 = "action/DAO/data_equipePersAdmin_bloc_01.txt";

		public static function lireEquipePersAdminChemin_b1() {
			return file_get_contents(self::$equipePersAdminChemin_b1);
		}

		public static function ecrireEquipePersAdminChemin_b1($message) {
			file_put_contents(self::$equipePersAdminChemin_b1, $message);
		}


	}
