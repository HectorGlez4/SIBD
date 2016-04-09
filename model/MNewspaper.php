<?
class MNewspaper extends Model
	{
		function SelectNewspaper($id_newspaper)
		{
			$this->Connect();
			$sql = "Select * From newspaper WHERE id_newspaper = :id_newspaper";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_newspaper", $id_newspaper, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertNewspaper($date_news, $news, $specific_key_point, $id_agenda, $id_article )
		{
			$this->Connect();
			$sql = "INSERT INTO newspaper (date_news, news, specific_key_point, id_agenda, id_article) 
			VALUES (:date_news, :news, :specific_key_point, :id_agenda, :id_article);";
			$stmt = $this->PDO->prepare($sql);
			$news = htmlspecialchars($news);
			$specific_key_point = htmlspecialchars($specific_key_point);
			$stmt->bindParam(":date_news", $date_news, PDO::PARAM_STR);
			$stmt->bindParam(":news", $news, PDO::PARAM_STR);
			$stmt->bindParam(":specific_key_point", $specific_key_point, PDO::PARAM_STR);
			$stmt->bindParam(":id_agenda", $id_agenda, PDO::PARAM_INT);
			$stmt->bindParam(":id_article", $id_article, PDO::PARAM_INT);
			return $this->Insert($stmt);
		}


		function DeleteNewspaper($id_newspaper)
		{
			$this->Connect();
			$sql = "DELETE FROM newspaper WHERE id_newspaper = :id_newspaper ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_newspaper", $id_newspaper, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}