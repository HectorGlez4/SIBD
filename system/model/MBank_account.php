<?
class MBankaccount extends Model
	{
		function SelectBankaccount($id_bank_account)
		{
			$this->Connect();
			$sql = "Select * From bank_account WHERE id_bank_account = :id_bank_account";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_bank_account", $id_bank_account, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertBankaccount($id_account)
		{
			$this->Connect();
			$sql = "INSERT INTO bank_account (id_account) 
			VALUES (:id_account);";
			$stmt = $this->PDO->prepare($sql);
			$id_account = htmlspecialchars($id_account);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteBankaccount($id_bank_account)
		{
			$this->Connect();
			$sql = "DELETE FROM bank_account WHERE id_bank_account = :id_bank_account ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_bank_account", $id_bank_account, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}
		function UpdateBankaccount($id_account, $id_bank_account)
		{
			$this->Connect();
			$sql = "UPDATE bank_account SET id_account = :id_account
			 WHERE id_bank_account = :id_bank_account ";
			$stmt = $this->PDO->prepare($sql);
			$id_account = htmlspecialchars($id_account);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_bank_account", $id_bank_account, PDO::PARAM_INT);

			return $this->Update($stmt);
		}
	}