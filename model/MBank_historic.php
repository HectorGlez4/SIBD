<?
class MBankhistoric extends Model
	{
		function SelectBankhistoric($id_bank_hist)
		{
			$this->Connect();
			$sql = "Select * From bank_historic WHERE id_bank_hist = :id_bank_hist";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_bank_hist", $id_bank_hist, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertBankhistoric($transaction, $id_account, $id_bank_account)
		{
			$this->Connect();
			$sql = "INSERT INTO bank_historic (transaction, id_account, id_bank_account) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$transaction = htmlspecialchars($transaction);
			$id_account = htmlspecialchars($id_account);
			$id_bank_account = htmlspecialchars($id_bank_account);
			$stmt->bindParam(":transaction", $transaction, PDO::PARAM_STR);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_bank_account", $id_bank_account, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteBankhistoric($id_bank_hist)
		{
			$this->Connect();
			$sql = "DELETE FROM bank_historic WHERE id_bank_hist = :id_bank_hist ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_automatic_task", $id_bank_hist, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}
		function UpdateBankhistoric($transaction, $id_account, $id_bank_account, $id_bank_hist)
		{
			$this->Connect();
			$sql = "UPDATE bank_historic SET transaction = :transaction, id_account = :id_account, id_bank_account = :id_bank_account
			 WHERE id_bank_hist = :id_bank_hist ";
			$stmt = $this->PDO->prepare($sql);
			$transaction = htmlspecialchars($transaction);
			$id_account = htmlspecialchars($id_account);
			$id_bank_account = htmlspecialchars($id_bank_account);
			$stmt->bindParam(":transaction", $transaction, PDO::PARAM_STR);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_bank_account", $id_bank_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_bank_hist", $id_bank_hist, PDO::PARAM_INT);



			return $this->Update($stmt);
		}
	}