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

		function InsertPhysicalattrib($resistance, $endurance, $detente, $speed, $id_horse_attrib)
		{
			$this->Connect();
			$sql = "INSERT INTO physical_attrib (resistance, endurance, detente, speed, id_horse_attrib) 
			VALUES (:resistance, :endurance, :detente, :speed, :id_horse_attrib);";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":resistance", $resistance, PDO::PARAM_INT);
			$stmt->bindParam(":endurance", $endurance, PDO::PARAM_INT);
			$stmt->bindParam(":detente", $detente, PDO::PARAM_INT);
			$stmt->bindParam(":speed", $speed, PDO::PARAM_INT);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);
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