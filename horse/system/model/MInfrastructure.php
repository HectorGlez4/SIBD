<?
class MInfrastructure extends Model
	{
		function SelectInfrastructure($id_infrastucture)
		{
			$this->Connect();
			$sql = "Select * From infrastructure WHERE id_infrastucture = :id_infrastucture";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertInfrastructure($id_infrastucture, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO infrastructure (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteInfrastructure($id_infrastucture)
		{
			$this->Connect();
			$sql = "DELETE FROM infrastructure WHERE id_infrastucture = :id_infrastucture ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}