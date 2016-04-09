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

		function InsertWeather($name, $description, $id_action )
		{
			$this->Connect();
			$sql = "INSERT INTO weather (name, description, id_action) 
			VALUES (:name, :description, :id_action);";
			$stmt = $this->PDO->prepare($sql);
			$name = htmlspecialchars($name);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":id_action", $id_action, PDO::PARAM_INT);
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
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