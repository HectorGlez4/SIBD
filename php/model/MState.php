<?
class MState extends Model
	{
		function SelectState($id_state)
		{
			$this->Connect();
			$sql = "Select * From state WHERE id_state = :id_state";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_state", $id_state, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertState($health, $moral, $stress, $tiredness, $hunger, $cleanliness )
		{
			$this->Connect();
			$sql = "INSERT INTO state (health, moral, stress, tiredness, hunger, cleanliness) 
			VALUES (:health, :moral, :stress, :tiredness, :hunger, :cleanliness);";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":health", $health, PDO::PARAM_INT);
			$stmt->bindParam(":moral", $moral, PDO::PARAM_INT);
			$stmt->bindParam(":stress", $stress, PDO::PARAM_INT);
			$stmt->bindParam(":tiredness", $tiredness, PDO::PARAM_INT);
			$stmt->bindParam(":hunger", $hunger, PDO::PARAM_INT);
			$stmt->bindParam(":cleanliness", $cleanliness, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteState($id_state)
		{
			$this->Connect();
			$sql = "DELETE FROM state WHERE id_state = :id_state ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_state", $id_state, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}