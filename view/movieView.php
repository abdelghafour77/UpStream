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
}
