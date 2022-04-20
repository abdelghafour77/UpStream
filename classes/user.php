<?php

require_once('cnx.php');

class User extends Connection
{
	protected function addUserDB($username, $email, $picture, $password)
	{
		$sql = "SELECT username FROM user WHERE email = ? ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$email]);
		$result = $stmt->fetch();
		if (isset($result["name"])) {
			$_SESSION['message'] = " Email deja ajouter  ";
			return 2;
		}
		$sql = "INSERT INTO user (username,email,picture,password)values(?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$username, $email, $picture, $password]);
		$_SESSION['message'] = 'ajouter';

		return 1;
	}


	protected function getUserDB($email)
	{
		$sql = "SELECT *  FROM user WHERE email = ? ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$email]);
		$res = $stmt->fetch();

		if (!isset($res["password"])) {
			$_SESSION['message'] = "Email incorrect";
			return 1;
		}
		$_SESSION['message'] = "Email correct";
		// die(var_dump($res));
		return $res;
	}
	protected function getAllUserDB()
	{
		$sql = "SELECT *  FROM user ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$res = $stmt->fetchAll();
		$_SESSION['message'] = "Email correct";
		// die(var_dump($res));
		return $res;
	}
	protected function getUserDB2($email)
	{
		$sql = "SELECT name, id  FROM user WHERE email = ? ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$email]);
		$result = $stmt->fetch();
		$res = array('name' => $result['name'], 'id' => $result['id']);

		return $res;
	}
	protected function UpdateUserDB($id_user, $name, $email, $password)
	{
		$sql = "UPDATE user SET 
		username = ? ,
		email = ?, 
		password = ?
		WHERE id_user = ? ; ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $email, $password, $id_user]);
		$_SESSION['message'] = 'modifier';

		return 1;
	}
	protected function disableAdminDB($id_user)
	{
		$sql = "UPDATE user SET 
		admin = NULL
		WHERE id_user = ? ; ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_user]);
		$_SESSION['message'] = 'modifier';

		return 1;
	}
	protected function enableAdminDB($id_user)
	{
		$sql = "UPDATE user SET 
		admin = 1
		WHERE id_user = ? ; ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_user]);
		$_SESSION['message'] = 'modifier';

		return 1;
	}
	protected function deleteUserDB($id_user)
	{

		$sql = "DELETE from user WHERE id_user = ? ; ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_user]);
		$_SESSION['message'] = 'modifier';

		return 1;
	}
	protected function UpdateUserDB2($id, $name, $email)
	{
		$sql = "UPDATE user SET 
		name = ? ,
		email = ?, 
		WHERE id = ? ; ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $email, $id]);
		$_SESSION['message'] = 'modifier';


		return 1;
	}
}
