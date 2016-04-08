<?
class MHorse extends Model
	{
		function SelectHorse($idHorse)
		{
			$this->Connect();
			$sql = "Select * From horse WHERE id_horse = :idHorse";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":idHorse", $idHorse, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertHorse($idHorse, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO chapter (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteHorse($idHorse)
		{
			$this->Connect();
			$sql = "DELETE FROM horse WHERE id_horse = :idHorse ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":idHorse", $idHorse, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}