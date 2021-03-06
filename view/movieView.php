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
	public function getLastMovie()
	{
		return $this->getLastMovieDB();
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
	public function findCatMovie($keyword)
	{
		return $this->findCatMovieDB($keyword);
	}
	public function findQualityMovie($keyword)
	{
		return $this->findQualityMovieDB($keyword);
	}
	public function findYearMovie($keyword)
	{
		return $this->findYearMovieDB($keyword);
	}
	public function countMovie()
	{
		return $this->countMovieDB();
	}
	public function getWatchingTime($id_movie, $id_user)
	{
		return $this->getWatchingTimeDB($id_movie, $id_user);
	}
}
