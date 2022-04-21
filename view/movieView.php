<?php

include_once('../classes/movie.php');

class MovieView extends Movie
{
	public function getMovieName()
	{
		return $this->getMovieNameDB();
	}
	public function getMovie($id_movie)
	{
		return $this->getMovieDB($id_movie);
	}
	public function getInfoMovie($id_movie)
	{
		return $this->getInfoMovieDB($id_movie);
	}
	public function getSixMovie()
	{
		return $this->getSixMovieDB();
	}
	public function getSomeMovie()
	{
		return $this->getSomeMovieDB();
	}
	public function getMovieNotification()
	{
		return $this->getMovieNotificationDB();
	}
	public function findMovie($keyword)
	{
		return $this->findMovieDB($keyword);
	}
}
