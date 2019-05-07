
<?php
	class UserDAO {

		public static function authenticate($username, $password) {

			$result = FALSE;

			if ($username == "test" && $password == "test") {
				$result = TRUE;
			}

			return $result;
		}
	}