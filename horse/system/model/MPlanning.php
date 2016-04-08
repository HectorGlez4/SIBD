<?
class MPlanning extends Model
	{
		function SelectPlanning($id_planning)
		{
			$this->Connect();
			$sql = "Select * From planning WHERE id_planning = :id_planning";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_planning", $id_planning, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertPlanning($id_planning, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO planning (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeletePlanning($id_planning)
		{
			$this->Connect();
			$sql = "DELETE FROM planning WHERE id_planning = :id_planning ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_planning", $id_planning, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}