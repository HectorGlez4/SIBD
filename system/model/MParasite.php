<?
class MParasite extends Model
	{
		function SelectParasite($id_parasite)
		{
			$this->Connect();
			$sql = "Select * From parasite WHERE id_parasite = :id_parasite";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_parasite", $id_parasite, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertParasite($description)
		{
			$this->Connect();
			$sql = "INSERT INTO parasite (description) 
			VALUES (:description);";
			$stmt = $this->PDO->prepare($sql);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteParasite($id_parasite)
		{
			$this->Connect();
			$sql = "DELETE FROM parasite WHERE id_parasite = :id_parasite ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_parasite", $id_parasite, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}