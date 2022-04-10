<?php

require_once('cnx.php');

class User extends Connection
{
	protected function addUserDB($name, $email, $password)
	{

		$sql = "SELECT name FROM user WHERE email = ? ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$email]);
		$result = $stmt->fetch();
		if (isset($result["name"])) {
			$_SESSION['message'] = " Email deja ajouter  ";
			return 2;
		}
		$sql = "INSERT INTO user (name,email,password)values(?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $email, $password]);
		$_SESSION['message'] = 'ajouter';

		return 1;
	}

	protected function addUserDB2($name, $email, $password)
	{
		$sql = "SELECT name FROM user WHERE email = ? ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$email]);
		$result = $stmt->fetch();
		if (isset($result["name"])) {
			$_SESSION['message'] = " Email deja ajouter  ";
			return 2;
		}
		$sql = "INSERT INTO user (name,email,password)values(?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $email, $password]);
		$_SESSION['message'] = 'ajouter';

		return 1;
	}
	protected function getUserDB($email, $password)
	{
		$sql = "SELECT *  FROM user WHERE email = ? ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$email]);
		$result = $stmt->fetch();
		if (!isset($result["password"])) {
			$_SESSION['message'] = "Email incorrect";
			return 1;
		}
		$res = password_verify($password, $result["password"]);
		if ($res) {
			return "";
		}
		$_SESSION['message'] = 'Mot de passe incorrect';
		return 1;
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
	protected function UpdateUserDB($id, $name, $email, $password)
	{
		$sql = "UPDATE user SET 
		name = ? ,
		email = ?, 
		password = ?,
		WHERE id = ? ; ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $email, $password, $id]);
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
