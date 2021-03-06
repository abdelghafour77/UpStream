<?php

include_once('cnx.php');
class Movie extends Connection
{
	protected function addMovieDB($title, $description, $date, $category, $language, $quality, $movie_file, $duration, $trailer, $cover, $user, $actor, $director)
	{
		// insert into movie table
		$sql = "INSERT INTO movie(title,description,date,language,quality,link_trailer,movie_file,duration,cover,id_user,director)values(?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$title, $description, $date, $language, $quality, $trailer, $movie_file, $duration, $cover, $user, $director]); // or die(print_r($stmt->errorInfo() ));
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
		foreach ($actor as $acat1) {
			foreach ($acat1 as $acat2) {
				$sql = "INSERT INTO acting(id_movie,id_actor)values(?,?)";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$result["id_movie"], $acat2]); // or die(print_r($stmt->errorInfo() ));
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
			quality,
			link_trailer,
			movie_file,
			director,
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

		$sql = "SELECT
		act.id_actor ,
		act.first_name,
		act.last_name 
	FROM
		acting ac ,actor act
	WHERE
		ac.id_actor =act.id_actor
		and
		ac.id_movie = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]);
		$result3 = $stmt->fetchAll();

		$result = array_merge($result1, $result2, $result3);
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
	protected function countMovieDB()
	{
		$sql = "SELECT count(*)  FROM movie ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$res = $stmt->fetch();
		// die(var_dump($res));
		return $res;
	}
	protected function updateMovieDB($id_movie, $description, $date, $category, $language, $quality, $trailer, $user, $actor, $director)
	{

		$sql = "UPDATE movie SET description = ? ,date =?  ,language=? ,quality=? ,link_trailer=? ,id_user=?  ,director=? WHERE id_movie = ? ; ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$description, $date, $language, $quality, $trailer, $user, $director, $id_movie]);


		$sql = "DELETE from contain where id_movie = ? ;";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]); // or die(print_r($stmt->errorInfo() ));
		foreach ($category as $cat1) {
			foreach ($cat1 as $cat2) {
				$sql = "INSERT INTO contain(id_movie,id_category)values(?,?)";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$id_movie, $cat2]); // or die(print_r($stmt->errorInfo() ));
			}
		}

		$sql = "DELETE from acting where id_movie = ? ;";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]); // or die(print_r($stmt->errorInfo() ));
		foreach ($actor as $acat1) {
			foreach ($acat1 as $acat2) {
				$sql = "INSERT INTO acting(id_movie,id_actor)values(?,?)";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$id_movie, $acat2]); // or die(print_r($stmt->errorInfo() ));
			}
		}
		$_SESSION['message'] = 'modifier';

		return 1;
	}
	protected function deleteMovieDB($id_movie)
	{
		$sql = "SELECT * FROM movie WHERE id_movie = ? ; ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]);
		$result = $stmt->fetch();
		if ($result['cover'] != '') {
			$link =  $result['cover'];
			unlink($link);
		}
		if ($result['movie_file'] != '') {
			$link =  $result['movie_file'];
			unlink($link);
		}
		$sql = "DELETE from movie WHERE id_movie = ? ; ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]);
		$_SESSION['message'] = 'modifier';

		return 1;
	}
	protected function getInfoMovieDB($id_movie)
	{
		$sql = "SELECT 
			id_movie,
			title,
			description,
			date,
			language,
			quality,
			link_trailer,
			movie_file,
			cover,
			duration,
			duration,
			director,
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

		$sql = "SELECT
		act.id_actor ,
		act.first_name,
		act.last_name 
	FROM
		acting ac ,actor act
	WHERE
		ac.id_actor =act.id_actor
		and
		ac.id_movie = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie]);
		$result3 = $stmt->fetchAll();

		$result = array_merge($result1, $result2, $result3);
		return $result;
	}



	protected function getSixMovieDB()
	{
		$sql = "SELECT * FROM movie order by id_movie DESC limit 6 ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}
	protected function getLastMovieDB()
	{
		$sql = "SELECT * FROM movie WHERE date = year(now()) limit 6 ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}

	protected function getSomeMovieDB()
	{
		$sql = "SELECT * FROM movie order by id_movie  limit 4";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}
	protected function getMovieNotificationDB()
	{
		$sql = "SELECT id_movie ,title,cover,last_update FROM movie order by last_update DESC limit 5";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}


	protected function findMovieDB($keyword)
	{
		$keyword = "%" . $keyword . "%";


		$sql = " SELECT 
			id_movie,
			title,
			date,
			language,
			quality,
			cover,
			duration,
			director
	  	FROM
		   movie
	  	WHERE
			title LIKE ? or
			description LIKE ? ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$keyword, $keyword]);
		$result = $stmt->fetchAll();
		return $result;
	}

	protected function findCatMovieDB($keyword)
	{
		$sql = " SELECT 
			m.id_movie,
			m.title,
			m.date,
			m.language,
			m.quality,
			m.cover,
			m.duration,
			m.director
	  	FROM
		   movie m , contain co
	  	WHERE
			co.id_movie=m.id_movie
		and
			co.id_category = ? ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$keyword]);
		$result = $stmt->fetchAll();
		return $result;
	}
	protected function findQualityMovieDB($keyword)
	{
		$sql = " SELECT 
			id_movie,
			title,
			date,
			language,
			quality,
			cover,
			duration,
			director
	  	FROM
			movie 
	  	WHERE
			quality = ? ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$keyword]);
		$result = $stmt->fetchAll();
		return $result;
	}
	protected function findYearMovieDB($keyword)
	{
		$sql = " SELECT 
			id_movie,
			title,
			date,
			language,
			quality,
			cover,
			duration,
			director
	  	FROM
		   movie m 
	  	WHERE
			date = ? ";

		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$keyword]);
		$result = $stmt->fetchAll();
		return $result;
	}

	protected function setWatchingTimeDB($time, $id_movie, $id_user)
	{
		// insert into movie table
		$sql = "SELECT time FROM watching_time WHERE id_movie = ? and id_user =?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie, $id_user]); // or die(print_r($stmt->errorInfo() ));
		$result = $stmt->fetch();
		if (isset($result['time'])) {
			if ($result['time'] >= 0) {
				$sql = "UPDATE watching_time set time = ? WHERE id_movie = ? and id_user =?";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$time, $id_movie, $id_user]);
			}
		} else {
			// insert into categorie
			$sql = "INSERT INTO watching_time (time,id_movie,id_user) values(?,?,?)";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$time, $id_movie, $id_user]);
			$result = $stmt->fetch();
		}
		$_SESSION['message'] = 'ajouter';
		return 1;
	}
	protected function getWatchingTimeDB($id_movie, $id_user)
	{
		// insert into movie table
		$sql = "SELECT time FROM watching_time WHERE id_movie = ? and id_user =?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id_movie, $id_user]); // or die(print_r($stmt->errorInfo() ));
		$result = $stmt->fetch();
		if (isset($result['time']))
			$result = $result['time'];

		$_SESSION['message'] = 'ajouter';
		return $result;
	}
}
