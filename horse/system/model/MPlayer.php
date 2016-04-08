<?
class MPlayer extends Model
	{
		function SelectPlayer($id_account)
		{
			$this->Connect();
			$sql = "Select * From player WHERE id_account = :id_account";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertPlayer($id_account, $title, $description )
		{
			$this->Connect();
			$sql = "INSERT INTO player (id_formation, title, description) 
			VALUES (:idFormation, :title, :description);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);
			$stmt->bindParam(":idFormation", $idFormation, PDO::PARAM_INT);
			$stmt->bindParam(":title", $title, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeletePlayer($id_account)
		{
			$this->Connect();
			$sql = "DELETE FROM player WHERE id_account = :id_account ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_account", $id_account, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}