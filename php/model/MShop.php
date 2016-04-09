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

		function InsertShop($element)
		{
			$this->Connect();
			$sql = "INSERT INTO shop (element) 
			VALUES (:element);";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":element", $elementw, PDO::PARAM_STR);
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