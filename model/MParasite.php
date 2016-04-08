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

		function InsertParasite($id_parasite, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO parasite (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
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