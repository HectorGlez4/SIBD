<?
class MMentalattrib extends Model
	{
		function SelectMentalattrib($id_mental)
		{
			$this->Connect();
			$sql = "Select * From mental_attrib WHERE id_mental = :id_mental";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_mental", $id_mental, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertMentalattrib($id_mental, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO mental_attrib (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteMentalattrib($id_mental)
		{
			$this->Connect();
			$sql = "DELETE FROM mental_attrib WHERE id_mental = :id_mental ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_mental", $id_mental, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}