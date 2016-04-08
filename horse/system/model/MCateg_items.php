<?
class MCategitems extends Model
	{
		function SelectCategitems($id_categ)
		{
			$this->Connect();
			$sql = "Select * From categ_items WHERE id_categ = :id_categ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_categ", $id_categ, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertCategitems($group, $id_item )
		{
			$this->Connect();
			$sql = "INSERT INTO categ_items (group, id_item) 
			VALUES (:group, :id_item);";
			$stmt = $this->PDO->prepare($sql);
			$group = htmlspecialchars($group);
			$id_item = htmlspecialchars($id_item);
			$stmt->bindParam(":group", $group, PDO::PARAM_INT);
			$stmt->bindParam(":id_item", $id_item, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteCategitems($id_categ)
		{
			$this->Connect();
			$sql = "DELETE FROM categ_items WHERE id_categ = :id_categ ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_categ", $id_categ, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}
		function UpdateCategitems($group, $id_item, $id_categ)
		{
			$this->Connect();
			$sql = "UPDATE categ_items SET group = :group, id_item = :id_item
			 WHERE id_categ = :id_categ ";
			$stmt = $this->PDO->prepare($sql);
			$group = htmlspecialchars($group);
			$id_item = htmlspecialchars($id_item);
			$stmt->bindParam(":group", $transaction, PDO::PARAM_INT);
			$stmt->bindParam(":id_item", $id_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_categ", $id_bank_account, PDO::PARAM_INT);



			return $this->Update($stmt);
		}
	}