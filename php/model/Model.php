<?php
	include_once("Connection.php");

	class Model
	{
		public $PDO;

		public function Connect()
		{
			if($this->PDO == null)
			{
				try
				{
					$StringConnection=new Connection();
					$this->PDO=new PDO("mysql:host=".$StringConnection->Server.";dbname=".$StringConnection->BD.";charset=utf8", $StringConnection->User, $StringConnection->Password);
				}
				catch(PDOException $e)
				{
					echo $e->getMessage();
				}
			}
		}

		public  function Close_Connection()
		{
			$this->PDO=NULL;
		}

		function Select($STMT)
		{
			try
			{
				$this->Connect();
				$STMT->execute();

				while($Row = $STMT->fetch(PDO::FETCH_ASSOC)) 
				{
           			$Data[]=$Row;
				}
				if (!empty($Data)) {
					return $Data;
				}
			}
			catch(PDOException $e)
			{
				return $e->getMessage();
			}
			{
				$this->Close_Connection();
			}
		}

		function SelectOne($SQL)
		{
			try
			{
				$this->Connect();
				$resultSet = $this->PDO->query($SQL);
				$Data = $resultSet->fetch();
				if (!empty($Data)) {
					return $Data;
				}
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			{
				$this->Close_Connection();
			}
		}

		public function Insert($STMT)
		{
			try
			{
				$success = $STMT->execute();
				return $success;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function Delete($STMT)
		{
			try
			{
				$success = $STMT->execute();
				return $success;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function Update($STMT)
		{
			try
			{
				$success = $STMT->execute();
				return $success;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
	}
?>