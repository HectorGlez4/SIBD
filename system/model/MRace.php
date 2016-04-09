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

		function InsertRace($description, $id_article)
		{
			$this->Connect();
			$sql = "INSERT INTO race (description, id_article) 
			VALUES (:description, :id_article);";
			$stmt = $this->PDO->prepare($sql);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":id_article", $id_article, PDO::PARAM_INT);
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