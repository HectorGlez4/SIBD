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

		function InsertHorseattrib()
		{
			$this->Connect();
			$sql = "INSERT INTO horse_attrib () 
			VALUES ();";
			$stmt = $this->PDO->prepare($sql);
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