<?
class MCompetition extends Model
	{
		function SelectCompetition($id_comp)
		{
			$this->Connect();
			$sql = "Select * From competition WHERE id_comp = :id_comp";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_comp", $id_comp, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertCompetition($involved_item, $start_date, $end_date, $id_manager )
		{
			$this->Connect();
			$sql = "INSERT INTO competition (involved_item, start_date, end_date, id_manager) 
			VALUES (:involved_item, :start_date, :end_date, :id_manager);";
			$stmt = $this->PDO->prepare($sql);
			$involved_item = htmlspecialchars($involved_item);
			$start_date = htmlspecialchars($start_date);
			$end_date = htmlspecialchars($end_date);
			$id_manager = htmlspecialchars($id_manager);
			$stmt->bindParam(":involved_item", $involved_item, PDO::PARAM_STR);
			$stmt->bindParam(":start_date", $start_date, PDO::PARAM_STR);
			$stmt->bindParam(":end_date", $end_date, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteCompetition($id_comp)
		{
			$this->Connect();
			$sql = "DELETE FROM competition WHERE id_comp = :id_comp ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_comp", $id_comp, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}
		function UpdateCompetition($group, $id_item, $id_categ)
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