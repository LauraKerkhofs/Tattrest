<?php
class Tattoo_Table {
	private $db;
	public function __construct ( $db ) {
	$this->db = $db;}

	public function saveTattoo ($titel, $feeling, $vorm, $plaats, $afbeelding) {
		$sql = "INSERT INTO tattoos (titel, feeling_id, vorm_id, plaats_id, afbeelding)
					 VALUES ( '$titel', '$feeling', '$vorm', '$plaats', '$afbeelding')";
		$statement = $this->db->prepare($sql);
		try{
			$statement->execute();
		} catch (Exception $e){
			$bds = "<p>Je probeerde deze sql: $postSQL<p>
					<p>Exception: $e</p>";
			trigger_error($bds);
		}
	}

	public function geefTattoo($id) {
		$sql = "SELECT * FROM tattoos WHERE tattoo_id = ?";
		$statement = $this->db->prepare($sql);
		$data = array($id);
		try {
			$statement->execute($data);
		} catch (Exception $e) {
			$bds = "<p>Je probeerde deze sql: $sql <p>
				<p>Exception: $e</p>";
			trigger_error($bds );
		}
		$model = $statement->fetchObject();
		return $model;
	}

	public function verwijderTattoo($id) {
		$sql = "DELETE FROM tattoos WHERE tattoo_id = ?";
		$statement = $this->db->prepare($sql);
		$data = array($id);
		try {
			$statement->execute($data);
		} catch (Exception $e) {
			$bds = "<p>Je probeerde deze sql: $sql <p>
				<p>Exception: $e</p>";
			trigger_error($bds );
		}
	}

	public function geefAlleTattoos () {
		$sql = "SELECT *  FROM tattoos";
		$statement = $this->db->prepare( $sql );
		try{
			$statement->execute();
		} catch (Exception $e) {
			$bds = "<p>Je probeerde deze sql: $sql <p>
					<p>Exception: $e</p>";
			trigger_error($bds);
		}
		return $statement;
	}
}


