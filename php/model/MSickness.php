<?
class MSickness extends Model
	{
		function SelectSickness($id_sickness)
		{
			$this->Connect();
			$sql = "Select * From sickness WHERE id_sickness = :id_sickness";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_sickness", $id_sickness, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertSickness( $description )
		{
			$this->Connect();
			$sql = "INSERT INTO sickness (description) 
			VALUES ( :description);";
			$stmt = $this->PDO->prepare($sql);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteSickness($id_sickness)
		{
			$this->Connect();
			$sql = "DELETE FROM sickness WHERE id_sickness = :id_sickness ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_sickness", $id_sickness, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}