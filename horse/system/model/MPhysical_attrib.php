<?
class MPhysicalattrib extends Model
	{
		function SelectPhysicalattrib($id_physical)
		{
			$this->Connect();
			$sql = "Select * From physical_attrib WHERE id_physical = :id_physical";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_physical", $id_physical, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertPhysicalattrib($id_physical, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO physical_attrib (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function Deletephysicalattrib($id_physical)
		{
			$this->Connect();
			$sql = "DELETE FROM physical_attrib WHERE id_physical = :id_physical ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_physical", $id_physical, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}