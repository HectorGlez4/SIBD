<?
class MOther extends Model
	{
		function SelectOther($id_other)
		{
			$this->Connect();
			$sql = "Select * From other WHERE id_other = :id_other";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_other", $id_other, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertOther($name, $description, $id_article )
		{
			$this->Connect();
			$sql = "INSERT INTO other (name, description, id_article) 
			VALUES (:name, :description, :id_article);";
			$stmt = $this->PDO->prepare($sql);
			$name = htmlspecialchars($name);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":id_article", $id_article, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteOther($id_other)
		{
			$this->Connect();
			$sql = "DELETE FROM other WHERE id_other = :id_other ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_other", $id_other, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}