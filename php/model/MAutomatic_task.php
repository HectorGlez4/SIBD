<?
class MAutomatictask extends Model
	{
		function SelectAutomatictask($id_autTask)
		{
			$this->Connect();
			$sql = "Select * From automatic_task WHERE id_autTask = :id_autTask";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_autTask", $id_autTask, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertAutomatictask($frequence, $id_task )
		{
			$this->Connect();
			$sql = "INSERT INTO automatic_task (frequence, id_task) 
			VALUES (:frequence, :id_task);";
			$stmt = $this->PDO->prepare($sql);
			$frequence = htmlspecialchars($frequence);
			$id_task = htmlspecialchars($id_task);
			$stmt->bindParam(":frequence", $frequence, PDO::PARAM_STR);
			$stmt->bindParam(":id_task", $id_task, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteAutomatictask($id_autTask)
		{
			$this->Connect();
			$sql = "DELETE FROM automatic_task WHERE id_autTask = :id_autTask ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_automatic_task", $id_autTask, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}
		function UpdateAutomatictask($frequence, $id_task, $id_autTask)
		{
			$this->Connect();
			$sql = "UPDATE automatic_task SET frequence = :frequence , id_task = :id_task ,
			 WHERE id_autTask = :id_autTask ";
			$stmt = $this->PDO->prepare($sql);
			$frequence = htmlspecialchars($frequence);
			$id_task = htmlspecialchars($id_task);
			$stmt->bindParam(":frequence", $frequence, PDO::PARAM_STR);
			$stmt->bindParam(":id_task", $id_task, PDO::PARAM_INT);
			return $this->Update($stmt);
		}
	}