<?
class MHorseclub extends Model
	{
		function SelectHorseclub($id_club)
		{
			$this->Connect();
			$sql = "Select * From horse_club WHERE id_club = :id_club";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_club", $id_club, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertHorseclub($id_club, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO horse_club (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteHorseclub($id_club)
		{
			$this->Connect();
			$sql = "DELETE FROM horse_club WHERE id_club = :id_club ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_club", $id_club, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}