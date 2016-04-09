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

		function InsertHorseclub($capacity, $infrastucture_list, $competition_list, $id_account
								$id_manager, $id_comp, $id_shop, $id_infrastucture )
		{
			$this->Connect();
			$sql = "INSERT INTO horse_club (capacity, infrastucture_list, competition_list, id_account,
											id_manager, id_comp, id_shop, id_infrastucture) 
			VALUES (:capacity, :infrastucture_list, :competition_list, :id_account,
				:id_manager, :id_comp, :id_shop, :id_infrastucture);";

			$stmt = $this->PDO->prepare($sql);
			$infrastucture_list = htmlspecialchars($infrastucture_list);
			$competition_list = htmlspecialchars($competition_list);
			$stmt->bindParam(":capacity", $capacity, PDO::PARAM_INT);
			$stmt->bindParam(":infrastucture_list", $infrastucture_list, PDO::PARAM_STR);
			$stmt->bindParam(":competition_list", $competition_list, PDO::PARAM_STR);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_manager", $id_manager, PDO::PARAM_INT);
			$stmt->bindParam(":id_shop", $id_shop, PDO::PARAM_INT);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
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