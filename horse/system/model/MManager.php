<?
class MManager extends Model
	{
		function SelectManager($id_manager)
		{
			$this->Connect();
			$sql = "Select * From manager WHERE id_manager = :id_manager";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_manager", $id_manager, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertManager($id_manager, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO manager (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteManager($id_manager)
		{
			$this->Connect();
			$sql = "DELETE FROM manager WHERE id_manager = :id_manager ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_manager", $id_manager, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}