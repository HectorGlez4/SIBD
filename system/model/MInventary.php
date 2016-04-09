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

		function InsertInventary($id_item)
		{
			$this->Connect();
			$sql = "INSERT INTO inventary (id_item) 
			VALUES (:id_item);";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_item", $idFormation, PDO::PARAM_INT);
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