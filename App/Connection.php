<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=agenda_aluno;charset=utf8",
				"root",
				"abacaxi" 
			);

			return $conn;

		} catch (\PDOException $e) {
		}
	}
}

?>