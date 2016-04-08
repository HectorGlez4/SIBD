<?
class MShop extends Model
	{
		function SelectShop($id_shop)
		{
			$this->Connect();
			$sql = "Select * From shop WHERE id_shop = :id_shop";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_shop", $id_shop, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertShop($id_shop, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO shop (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteShop($id_shop)
		{
			$this->Connect();
			$sql = "DELETE FROM shop WHERE id_shop = :id_shop ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_shop", $id_shop, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}