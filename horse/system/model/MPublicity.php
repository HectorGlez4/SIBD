<?
class MPublicity extends Model
	{
		function SelectPublicity($id_pub)
		{
			$this->Connect();
			$sql = "Select * From publicity WHERE id_pub = :id_pub";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_pub", $id_pub, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertPublicity($id_pub, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO publicity (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeletePublicity($id_pub)
		{
			$this->Connect();
			$sql = "DELETE FROM publicity WHERE id_pub = :id_pub ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_pub", $id_pub, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}