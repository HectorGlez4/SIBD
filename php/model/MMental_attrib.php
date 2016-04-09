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

		function InsertMentalattrib($sociability, $intelligence, $humeur, $id_horse_attrib )
		{
			$this->Connect();
			$sql = "INSERT INTO mental_attrib (sociability, intelligence, humeur, id_horse_attrib) 
			VALUES (:sociability, :intelligence, :humeur, :id_horse_attrib);";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":sociability", $sociability, PDO::PARAM_INT);
			$stmt->bindParam(":intelligence", $intelligence, PDO::PARAM_INT);
			$stmt->bindParam(":humeur", $humeur, PDO::PARAM_INT);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);
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