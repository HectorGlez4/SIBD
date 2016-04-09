<?
class MAgenda extends Model
	{
		function SelectAgenda($id_agenda)
		{
			$this->Connect();
			$sql = "Select * From agenda WHERE id_agenda = :id_agenda";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_agenda", $id_agenda, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertAgenda($datee, $time, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO agenda (datee, time, description) 
			VALUES (:datee, :time, :description);";
			$stmt = $this->PDO->prepare($sql);
			$datee = htmlspecialchars($datee);
			$time = htmlspecialchars($time);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":datee", $datee, PDO::PARAM_STR);
			$stmt->bindParam(":time", $time, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteAgenda($id_agenda)
		{
			$this->Connect();
			$sql = "DELETE FROM agenda WHERE id_agenda = :id_agenda ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_agenda", $id_agenda, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}

		function UpdateAgenda($datee, $time, $description, $id_agenda)
		{
			$this->Connect();
			$sql = "UPDATE agenda SET datee = :datee , time = :time ,
			description = :description WHERE id_agenda = :id_agenda ";
			$stmt = $this->PDO->prepare($sql);
			$datee = htmlspecialchars($datee);
			$time = htmlspecialchars($time);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":datee", $datee, PDO::PARAM_STR);
			$stmt->bindParam(":time", $time, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Update($stmt);
		}
	}