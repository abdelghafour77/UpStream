<?php

include_once('../classes/movie.php');
class MovieController extends Movie
{

    public function addMovie($title, $description, $date, $category, $language, $movie_file, $trailer, $user)
    {
        return $this->addMovieDB($title, $description, $date, $category, $language, $movie_file, $trailer, $user);
    }
    public function updateMovie($id_movie, $description, $date, $category, $language, $trailer, $user)
    {
        return $this->updateMovieDB($id_movie, $description, $date, $category, $language, $trailer, $user);
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
