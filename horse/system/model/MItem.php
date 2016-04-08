<?
class MItem extends Model
	{
		function SelectItem($id_item)
		{
			$this->Connect();
			$sql = "Select * From item WHERE id_item = :id_item";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_item", $id_item, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertItem($id_item, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO item (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteItem($id_item)
		{
			$this->Connect();
			$sql = "DELETE FROM item WHERE id_item = :id_item ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_item", $id_item, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}