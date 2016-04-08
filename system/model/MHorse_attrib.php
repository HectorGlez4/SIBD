<?
class MHorseattrib extends Model
	{
		function SelectHorseattrib($id_horse_attrib)
		{
			$this->Connect();
			$sql = "Select * From horse_attrib WHERE id_horse_attrib = :id_horse_attrib";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertHorseattrib($id_horse_attrib)
		{
			$this->Connect();
			$sql = "INSERT INTO horse_attrib (id_horse_attrib) 
			VALUES (:id_horse_attrib);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteHorseattrib($id_horse_attrib)
		{
			$this->Connect();
			$sql = "DELETE FROM horse_attrib WHERE id_horse_attrib = :id_horse_attrib ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}

		function UpdateHorseattrib($capacity, $id_account, $id_infrastucture, $id_shop, $id_center)
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