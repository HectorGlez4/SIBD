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

		function InsertTask($action )
		{
			$this->Connect();
			$sql = "INSERT INTO task (action) 
			VALUES (:action);";
			$stmt = $this->PDO->prepare($sql);
			$action = htmlspecialchars($action);
			$stmt->bindParam(":action", $action, PDO::PARAM_STR);
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