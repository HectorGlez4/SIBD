<?
class MEquestriancenter extends Model
	{
		function SelectEquestriancenter($id_center)
		{
			$this->Connect();
			$sql = "Select * From equestrian_center WHERE id_center = :id_center";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_center", $id_center, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertEquestriancenter($id_center, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO equestrian_center (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteEquestriancenter($id_center)
		{
			$this->Connect();
			$sql = "DELETE FROM equestrian_center WHERE id_center = :id_center ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_center", $id_center, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}