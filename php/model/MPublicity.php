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

		function InsertPublicity($name, $description, $id_article )
		{
			$this->Connect();
			$sql = "INSERT INTO publicity (name, description, id_article) 
			VALUES (:name, :description, :id_article);";
			$stmt = $this->PDO->prepare($sql);
			$name = htmlspecialchars($name);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":id_article", $id_article, PDO::PARAM_INT);
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