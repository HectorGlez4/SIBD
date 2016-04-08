<?
class MInjury extends Model
	{
		function SelectInjury($id_injury)
		{
			$this->Connect();
			$sql = "Select * From injury WHERE id_injury = :id_injury";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_injury", $id_injury, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertInjury($id_injury, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO injury (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteInjury($id_injury)
		{
			$this->Connect();
			$sql = "DELETE FROM injury WHERE id_injury = :id_injury ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_injury", $id_injury, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}