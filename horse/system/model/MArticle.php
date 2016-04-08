<?
class MArticle extends Model
	{
		function SelectArticle($id_article)
		{
			$this->Connect();
			$sql = "Select * From article WHERE id_article = :id_article";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_article", $id_article, PDO::PARAM_INT);
			return $this->Select($stmt);
		}

		function InsertArticle($title, $texte, $image )
		{
			$this->Connect();
			$sql = "INSERT INTO article (title, texte, image) 
			VALUES (:title, :texte, :image);";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$texte = htmlspecialchars($texte);
			$image = htmlspecialchars($image);
			$stmt->bindParam(":title", $title, PDO::PARAM_INT);
			$stmt->bindParam(":texte", $texte, PDO::PARAM_STR);
			$stmt->bindParam(":image", $image, PDO::PARAM_STR);
			return $this->Insert($stmt);
		}


		function DeleteArticle($id_article)
		{
			$this->Connect();
			$sql = "DELETE FROM article WHERE id_article = :id_article ";
			$stmt = $this->PDO->prepare($sql);
			$stmt->bindParam(":id_article", $id_article, PDO::PARAM_INT);
			return $this->Delete($stmt);
		}


			function UpdateArticle($title, $texte, $image, $id_article)
		{
			$this->Connect();
			$sql = "UPDATE article SET title = :title , texte = :texte ,
			image = :image WHERE id_article = :id_article ";
			$stmt = $this->PDO->prepare($sql);
			$title = htmlspecialchars($title);
			$texte = htmlspecialchars($texte);
			$image = htmlspecialchars($image);
			$stmt->bindParam(":title", $title, PDO::PARAM_INT);
			$stmt->bindParam(":texte", $texte, PDO::PARAM_STR);
			$stmt->bindParam(":image", $image, PDO::PARAM_STR);
			return $this->Update($stmt);
		}
	}