<?php

include_once('cnx.php');
class Movie extends Connection
{
	protected function addMovieDB($title, $description, $date, $category, $language, $movie_file, $trailer, $user)
	{
		// insert into movie table
		$sql = "INSERT INTO movie(title,description,date,language,link_trailer,movie_file,id_user)values(?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$title, $description, $date, $language, $trailer, $movie_file, $user]); // or die(print_r($stmt->errorInfo() ));
		// insert into categorie
		$sql = "SELECT id_movie FROM movie WHERE title = ? and movie_file =?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$title, $movie_file]);
		$result = $stmt->fetch();
		// die(print_r($category));
		foreach ($category as $cat1) {
			foreach ($cat1 as $cat2) {
				$sql = "INSERT INTO contain(id_movie,id_category)values(?,?)";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$result["id_movie"], $cat2]); // or die(print_r($stmt->errorInfo() ));
			}
		}

		$_SESSION['message'] = 'ajouter';
		return 1;
	}

	protected function getMovieDB($id_movie)
	{
		$sql = "SELECT 
			title,
			description,
			date,
			language,
			link_trailer,
			movie_file,
			id_user
		FROM 
			movie 
		where
			id_movie = ?";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]);
		$result1 = $stmt->fetchAll();

		$sql = "SELECT
			ca.id_category ,
			ca.name 
		FROM
			contain co ,category ca 
		WHERE
			co.id_category =ca.id_category
			and
			co.id_movie = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]);
		$result2 = $stmt->fetchAll();

		$result = array_merge($result1, $result2);
		return $result;
	}
	protected function getMovieNameDB()
	{
		$sql = "SELECT id_movie , title FROM movie  ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}
	protected function updateMovieDB($title, $description, $date, $category, $language, $trailer, $user)
	{

		$sql = "UPDATE movie SET description = ? ,date =?  ,language=? ,link_trailer=? ,id_user=?   WHERE title = ? ; ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$description, $date, $language, $trailer, $user, $title]);
		$_SESSION['message'] = 'modifier';

		return 1;
	}
	// protected function addCoursDB1($titre, $module, $description, $auteur)
	// {
	// 	$sql = "INSERT INTO cours(titre,id_module,description,id_auteur)values(?,?,?,?)";
	// 	$stmt = $this->connect()->prepare($sql);
	// 	$stmt->execute([$titre, $module, $description, $auteur]); // or die(print_r($stmt->errorInfo() ));
	// 	$_SESSION['message'] = 'ajouter';
	// 	return 1;
	// }



	// protected function getLastCoursDB()
	// {
	// 	$sql = "SELECT * FROM cours order by id_cours DESC limit 15 ";

	// 	$stmt = $this->connect()->prepare($sql);
	// 	$stmt->execute();
	// 	$result = $stmt->fetchAll();

	// 	return $result;
	// }
	// protected function getCoursDB1($id)
	// {
	// 	// $sql = "SELECT * FROM cours WHERE id_cours=?";

	// 	$sql = "SELECT co.id_cours as id_cours ,
	// 	co.titre as titre ,
	// 	co.date_pub as date ,
	// 	co.description as description ,
	// 	co.id_module as id_module,
	// 	co.file_Adr as file_Adr,
	// 	co.date_Pub as date_Pub,
	// 	u.nom as n_auteur ,
	// 	u.prenom as p_auteur,
	// 	u.specialite as specialite,
	// 	u.admin as admin
	// 	FROM
	// 	cours co , utilisateur u 
	// 	 WHERE
	// 	co.id_auteur = u.id
	// 	 and
	// 	co.id_cours =?";

	// 	$stmt = $this->connect()->prepare($sql);
	// 	$stmt->execute([$id]);
	// 	$result = $stmt->fetchAll();

	// 	return $result;
	// }
	// protected function getCoursDB2($module)
	// {
	// 	// $sql = "SELECT * FROM cours WHERE id_cours=?";

	// 	$sql = "SELECT co.id_cours as id_cours ,
	// 	co.titre as titre ,
	// 	co.date_pub as date ,
	// 	co.description as description ,
	// 	co.date_Pub as date_Pub,
	// 	m.titre as module,
	// 	u.nom as n_auteur ,
	// 	u.prenom as p_auteur
	// 	FROM
	// 	cours co , utilisateur u ,module m
	// 	 WHERE
	// 	co.id_auteur = u.id
	// 	 and
	// 	co.id_module = m.id_module
	// 	 and
	// 	co.id_module =?";

	// 	$stmt = $this->connect()->prepare($sql);
	// 	$stmt->execute([$module]);
	// 	$result = $stmt->fetchAll();

	// 	return $result;
	// }
	// 
	// protected function deleteCoursDB($id_cours)
	// {
	// 	$sql = "SELECT * FROM cours WHERE id_cours = ? ; ";
	// 	$stmt = $this->connect()->prepare($sql);
	// 	$stmt->execute([$id_cours]);
	// 	$result = $stmt->fetch();
	// 	if ($result['file_Adr'] != '') {
	// 		$link = "../uploads/cours/" . $result['file_Adr'];
	// 		unlink($link);
	// 	}

	// 	$sql = "DELETE from cours WHERE id_cours = ? ;";

	// 	$stmt = $this->connect()->prepare($sql);
	// 	$stmt->execute([$id_cours]);
	// 	$_SESSION['message'] = 'supprimer';

	// 	return 1;
	// }
}
