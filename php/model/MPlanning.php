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

		function InsertPlanning($id_autTask)
		{
			$this->Connect();
			$sql = "INSERT INTO planning (id_autTask) 
			VALUES (:id_autTask);";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_autTask", $idFormation, PDO::PARAM_INT);
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