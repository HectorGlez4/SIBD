<?
class MState extends Model
	{
		function SelectState($id_state)
		{
			$this->Connect();
			$sql = "Select * From state WHERE id_state = :id_state";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_state", $id_state, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertState($id_state, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO state (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteState($id_state)
		{
			$this->Connect();
			$sql = "DELETE FROM state WHERE id_state = :id_state ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_state", $id_state, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}