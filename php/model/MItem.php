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

		function InsertItem($level, $price, $description, $type, $id_shop )
		{
			$this->Connect();
			$sql = "INSERT INTO item (level, price, description, type, id_shop) 
			VALUES (:level, :price, :description, :type , :id_shop);";
			$stmt = $this->PDO->prepare($sql);
			$description = htmlspecialchars($description);
			$type = htmlspecialchars($type);
			$stmt->bindParam(":level", $level, PDO::PARAM_INT);
			$stmt->bindParam(":price", $price, PDO::PARAM_INT);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":type", $type, PDO::PARAM_STR);
			$stmt->bindParam(":id_shop", $id_shop, PDO::PARAM_INT);

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