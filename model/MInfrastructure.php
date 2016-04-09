<?
class MInfrastructure extends Model
	{
		function SelectInfrastructure($id_infrastucture)
		{
			$this->Connect();
			$sql = "Select * From infrastructure WHERE id_infrastucture = :id_infrastucture";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertInfrastructure($price, $level, $group, $ressource_consumption, $items_capacity
									$horses_capacity, $type, $description, $id_item, $id_shop )
		{
			$this->Connect();
			$sql = "INSERT INTO infrastructure (level, group, ressource_consumption, items_capacity
									horses_capacity, type, description, id_item, id_shop) 
			VALUES (:level, :group, :ressource_consumption, :items_capacity, :horses_capacity
					:type, :description, :id_item, :id_shop);";
			$stmt = $this->PDO->prepare($sql);
			$type = htmlspecialchars($type);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":price", $price, PDO::PARAM_INT);
			$stmt->bindParam(":level", $level, PDO::PARAM_INT);
			$stmt->bindParam(":group", $group, PDO::PARAM_INT);
			$stmt->bindParam(":ressource_consumption", $ressource_consumption, PDO::PARAM_INT);
			$stmt->bindParam(":items_capacity", $items_capacity, PDO::PARAM_INT);
			$stmt->bindParam(":horses_capacity", $horses_capacity, PDO::PARAM_INT);
			$stmt->bindParam(":type", $type, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":id_item", $id_item, PDO::PARAM_INT);
			$stmt->bindParam(":id_shop", $id_shop, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteInfrastructure($id_infrastucture)
		{
			$this->Connect();
			$sql = "DELETE FROM infrastructure WHERE id_infrastucture = :id_infrastucture ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}