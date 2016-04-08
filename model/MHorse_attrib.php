<?
class MHorseattrib extends Model
	{
		function SelectHorseattrib($id_horse_attrib)
		{
			$this->Connect();
			$sql = "Select * From horse_attrib WHERE id_horse_attrib = :id_horse_attrib";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertHorseattrib($id_horse_attrib, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO horse_attrib (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteHorseattrib($id_horse_attrib)
		{
			$this->Connect();
			$sql = "DELETE FROM horse_attrib WHERE id_horse_attrib = :id_horse_attrib ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}