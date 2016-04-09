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

		function InsertManager($id_account)
		{
			$this->Connect();
			$sql = "INSERT INTO manager (id_account) 
			VALUES (:id_account);";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
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