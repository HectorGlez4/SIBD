<?
class MWeather extends Model
	{
		function SelectWeather($id_weather)
		{
			$this->Connect();
			$sql = "Select * From weather WHERE id_weather = :id_weather";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_weather", $id_weather, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertWeather($id_weather, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO weather (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteWeather($id_weather)
		{
			$this->Connect();
			$sql = "DELETE FROM weather WHERE id_weather = :id_weather ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_weather", $id_weather, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}