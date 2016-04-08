<?
class MOther extends Model
	{
		function SelectOther($id_other)
		{
			$this->Connect();
			$sql = "Select * From other WHERE id_other = :id_other";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_other", $id_other, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertOther($id_other, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO other (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteOther($id_other)
		{
			$this->Connect();
			$sql = "DELETE FROM other WHERE id_other = :id_other ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_other", $id_other, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}