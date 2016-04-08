<?
class MEquestriancenter extends Model
	{
		function SelectEquestriancenter($id_center)
		{
			$this->Connect();
			$sql = "Select * From equestrian_center WHERE id_center = :id_center";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_center", $id_center, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertEquestriancenter($capacity, $id_account, $id_infrastucture, $id_shop)
		{
			$this->Connect();
			$sql = "INSERT INTO equestrian_center (capacity, id_account, id_infrastucture, id_shop) 
			VALUES (:capacity, :id_account, :id_infrastucture, id_shop);";
			$stmt = $this->PDO->prepare($sql);
			$capacity = htmlspecialchars($capacity);
			$id_account = htmlspecialchars($id_account);
			$id_infrastucture = htmlspecialchars($id_infrastucture);
			$id_shop = htmlspecialchars($id_shop);
			$stmt->bindParam(":capacity", $capacity, PDO::PARAM_INT);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			$stmt->bindParam(":id_shop", $id_shop, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteEquestriancenter($id_center)
		{
			$this->Connect();
			$sql = "DELETE FROM equestrian_center WHERE id_center = :id_center ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_center", $id_center, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}
		function UpdateEquestriancenter($capacity, $id_account, $id_infrastucture, $id_shop, $id_center)
		{
			$this->Connect();
			$sql = "UPDATE equestrian_center SET capacity = :capacity, id_account = :id_account,
			id_infrastucture = :id_infrastucture, id_shop = :id_shop
			 WHERE id_center = :id_center ";
			$stmt = $this->PDO->prepare($sql);
			$capacity = htmlspecialchars($capacity);
			$id_account = htmlspecialchars($id_account);
			$id_infrastucture = htmlspecialchars($id_infrastucture);
			$id_shop = htmlspecialchars($id_shop);
			$stmt->bindParam(":capacity", $capacity, PDO::PARAM_INT);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			$stmt->bindParam(":id_shop", $id_shop, PDO::PARAM_INT);
			$stmt->bindParam(":id_center", $id_center, PDO::PARAM_INT);



			return $this->Update($stmt);
		}
	}