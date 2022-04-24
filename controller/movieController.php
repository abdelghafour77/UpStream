<?php

include_once('../classes/movie.php');
class MovieController extends Movie
{

    public function addMovie($title, $description, $date, $category, $language, $quality, $movie_file, $duration, $trailer, $cover, $user, $actor, $director)
    {
        return $this->addMovieDB($title, $description, $date, $category, $language, $quality, $movie_file, $duration, $trailer, $cover, $user, $actor, $director);
    }
    public function setWatchingTime($time, $id_movie, $id_user)
    {
        return $this->setWatchingTimeDB($time, $id_movie, $id_user);
    }
    public function updateMovie($id_movie, $description, $date, $category, $language, $quality, $trailer, $user, $actor, $director)
    {
        return $this->updateMovieDB($id_movie, $description, $date, $category, $language, $quality, $trailer, $user, $actor, $director);
    }
    public function deleteMovie($id_movie)
    {
        return $this->deleteMovieDB($id_movie);
    }
    // public function addCours1($titre, $module, $description, $auteur)
    // {
    //     return $this->addCoursDB1($titre, $module, $description, $auteur);
    // }
    // public function updateCours($description, $id_cours)
    // {
    //     return $this->updateCoursDB($description, $id_cours);
    // }

}
