<?
class MRace extends Model
	{
		function SelectRace($id_race)
		{
			$this->Connect();
			$sql = "Select * From race WHERE id_race = :id_race";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_race", $id_race, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertRace($id_race, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO race (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteRace($id_race)
		{
			$this->Connect();
			$sql = "DELETE FROM race WHERE id_race = :id_race ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_race", $id_race, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}