<?
class MInventary extends Model
	{
		function SelectInventary($id_inventary)
		{
			$this->Connect();
			$sql = "Select * From inventary WHERE id_inventary = :id_inventary";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_inventary", $id_inventary, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertInventary($id_inventary, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO inventary (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteInventary($id_inventary)
		{
			$this->Connect();
			$sql = "DELETE FROM inventary WHERE id_inventary = :id_inventary ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_inventary", $id_inventary, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}