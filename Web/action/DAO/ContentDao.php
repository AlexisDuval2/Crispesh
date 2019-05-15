
<?php
	class ContentDao {

		private static $chemin = "action/DAO/indexData.txt";

		public static function lire() {
			return file_get_contents(ContentDao::$chemin);
		}

		public static function ecrire($message) {
			file_put_contents(ContentDao::$chemin, $message);
		}
	}
