<?
class MTask extends Model
	{
		function SelectTask($id_task)
		{
			$this->Connect();
			$sql = "Select * From task WHERE id_task = :id_task";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_task", $id_task, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertTask($id_task, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO task (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteTask($id_task)
		{
			$this->Connect();
			$sql = "DELETE FROM task WHERE id_task = :id_task ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_task", $id_task, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}