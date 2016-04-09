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

		function InsertPlayer($email, $password, $name, $lastname, $sex, $birthday, $phone, $mail_address,
							$avatar, $description, $website, $ip_address, $inscription_date, $last_login_date,
							$pseudonym, $id_infrastucture, $id_club, $id_inventary, $id_task, $id_bank_account,
							$id_horse)
		{
			$this->Connect();
			$sql = "INSERT INTO player (email, password, name, lastname, sex, birthday, phone, mail_address,
									avatar, description, website, ip_address, inscription_date, last_login_date,
									pseudonym, id_infrastucture, id_club, id_inventary, id_task, id_bank_account,
									id_horse) 
			VALUES (:email, :password, :name, :lastname, :sex, :birthday, :phone, :mail_address,
					:avatar, :description, :website, :ip_address, :inscription_date, :last_login_date,
					:pseudonym, :id_infrastucture, :id_club, :id_inventary, :id_task, :id_bank_account, :id_horse);";
			$stmt = $this->PDO->prepare($sql);
			$email = htmlspecialchars($email);
			$password = htmlspecialchars($password);
			$name = htmlspecialchars($name);
			$lastname = htmlspecialchars($lastname);
			$mail_address = htmlspecialchars($mail_address);
			$avatar = htmlspecialchars($avatar);
			$description = htmlspecialchars($description);
			$website = htmlspecialchars($website);
			$ip_address = htmlspecialchars($ip_address);
			$pseudonym = htmlspecialchars($pseudonym);
			$stmt->bindParam(":email", $email, PDO::PARAM_STR);
			$stmt->bindParam(":password", $password, PDO::PARAM_STR);
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
			$stmt->bindParam(":lastname", $lastname, PDO::PARAM_STR);
			$stmt->bindParam(":sex", $sex, PDO::PARAM_BOOL);
			$stmt->bindParam(":birthday", $birthday, PDO::PARAM_STR);
			$stmt->bindParam(":phone", $phone, PDO::PARAM_INT);
			$stmt->bindParam(":mail_address", $mail_address, PDO::PARAM_STR);
			$stmt->bindParam(":avatar", $avatar, PDO::PARAM_STR);
			$stmt->bindParam(":description", $description, PDO::PARAM_STR);
			$stmt->bindParam(":website", $website, PDO::PARAM_STR);
			$stmt->bindParam(":ip_address", $ip_address, PDO::PARAM_STR);
			$stmt->bindParam(":inscription_date", $inscription_date, PDO::PARAM_STR);
			$stmt->bindParam(":last_login_date", $last_login_date, PDO::PARAM_STR);
			$stmt->bindParam(":pseudonym", $pseudonym, PDO::PARAM_STR);
			$stmt->bindParam(":id_infrastucture", $id_infrastucture, PDO::PARAM_INT);
			$stmt->bindParam(":id_club", $id_club, PDO::PARAM_INT);
			$stmt->bindParam(":id_inventary", $id_inventary, PDO::PARAM_INT);
			$stmt->bindParam(":id_task", $id_task, PDO::PARAM_INT);
			$stmt->bindParam(":id_bank_account", $id_bank_account, PDO::PARAM_INT);
			$stmt->bindParam(":id_horse", $id_horse, PDO::PARAM_INT);

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