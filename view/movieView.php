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
}
