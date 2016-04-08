<?
class MHorse extends Model
	{
		function SelectHorse($idHorse)
		{
			$this->Connect();
			$sql = "Select * From horse WHERE id_horse = :idHorse";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":idHorse", $idHorse, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertHorse($name, $general_state, $description, $race, $level, $experience, $race, $level, $experience, $id_sickness, $id_injury, $id_parasite, $id_infrastucture, $id_state, $id_item, $id_horse_attrib )
		{
			$this->Connect();
			$sql = "INSERT INTO horse (name, general_state, description, race, level, experience, race, level, experience, id_sickness, id_injury, id_parasite, id_infrastucture, id_state, id_item, id_horse_attrib) 
			VALUES (:name, :general_state, :description, :race, :level, :experience, :race, :id_sickness, :id_injury, :id_parasite, :id_infrastucture, :id_state, :id_item, :id_horse_attrib);";
			$stmt = $this->PDO->prepare($sql);
			$name = htmlspecialchars($name);
			$general_state = htmlspecialchars($general_state);
			$description = htmlspecialchars($description);
			$race = htmlspecialchars($race);
			$level = htmlspecialchars($level);
			$experience = htmlspecialchars($experience);
			$id_sickness = htmlspecialchars($id_sickness);
			$id_injury = htmlspecialchars($id_injury);
			$id_parasite = htmlspecialchars($id_parasite);
			$id_infrastucture = htmlspecialchars($id_infrastucture);
			$id_state = htmlspecialchars($id_state);
			$id_item = htmlspecialchars($id_item);
			$id_horse_attrib = htmlspecialchars($id_horse_attrib);
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
			$stmt->bindParam(":general_state", $general_state, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":race", $race, PDO::PARAM_STR);
			$stmt->bindParam(":level", $level, PDO::PARAM_INT);
			$stmt->bindParam(":experience", $experience, PDO::PARAM_INT);
			$stmt->bindParam(":id_sickness", $id_sickness, PDO::PARAM_INT);
			$stmt->bindParam(":id_injury", $id_injury, PDO::PARAM_INT);
			$stmt->bindParam(":id_parasite", $id_parasite, PDO::PARAM_INT);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			$stmt->bindParam(":id_state", $id_state, PDO::PARAM_INT);
			$stmt->bindParam(":id_item", $id_item, PDO::PARAM_INT);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);


			return $this->Insert($stmt);
		}


		function DeleteHorse($idHorse)
		{
			$this->Connect();
			$sql = "DELETE FROM horse WHERE id_horse = :idHorse ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":idHorse", $idHorse, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}

		function UpdateHorse($name, $general_state, $description, $race, $level, $experience, $race, $level, $experience, $id_sickness, $id_injury, $id_parasite, $id_infrastucture, $id_state, $id_item, $id_horse_attrib, $id_horse)
		{
			$this->Connect();
			$sql = "UPDATE horse SET name = :name, general_state = :general_state,
			description = :description, race = :race, level = :level, experience = :experience, id_sickness = :id_sickness, id_injury = :id_injury,  id_parasite = :id_parasite,  id_infrastucture = :id_infrastucture, id_state = :id_state, id_item = :id_item,id_horse_attrib = :id_horse_attrib   
			 WHERE id_horse = :id_horse ";
			$stmt = $this->PDO->prepare($sql);
			$name = htmlspecialchars($name);
			$general_state = htmlspecialchars($general_state);
			$description = htmlspecialchars($description);
			$race = htmlspecialchars($race);
			$level = htmlspecialchars($level);
			$experience = htmlspecialchars($experience);
			$id_sickness = htmlspecialchars($id_sickness);
			$id_injury = htmlspecialchars($id_injury);
			$id_parasite = htmlspecialchars($id_parasite);
			$id_infrastucture = htmlspecialchars($id_infrastucture);
			$id_state = htmlspecialchars($id_state);
			$id_item = htmlspecialchars($id_item);
			$id_horse_attrib = htmlspecialchars($id_horse_attrib);
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
			$stmt->bindParam(":general_state", $general_state, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":race", $race, PDO::PARAM_STR);
			$stmt->bindParam(":level", $level, PDO::PARAM_INT);
			$stmt->bindParam(":experience", $experience, PDO::PARAM_INT);
			$stmt->bindParam(":id_sickness", $id_sickness, PDO::PARAM_INT);
			$stmt->bindParam(":id_injury", $id_injury, PDO::PARAM_INT);
			$stmt->bindParam(":id_parasite", $id_parasite, PDO::PARAM_INT);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			$stmt->bindParam(":id_state", $id_state, PDO::PARAM_INT);
			$stmt->bindParam(":id_item", $id_item, PDO::PARAM_INT);
			$stmt->bindParam(":id_horse_attrib", $id_horse_attrib, PDO::PARAM_INT);
			$stmt->bindParam(":id_horse", $id_horse, PDO::PARAM_INT);



			return $this->Update($stmt);
		}
	}