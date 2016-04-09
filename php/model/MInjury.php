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

		function InsertInjury($description )
		{
			$this->Connect();
			$sql = "INSERT INTO injury (description) 
			VALUES ( :description);";
			$stmt = $this->PDO->prepare($sql);
			$description = htmlspecialchars($description);
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