<?php

include_once('../classes/movie.php');
class MovieController extends Movie
{

    public function addMovie($title, $description, $date, $category, $language, $movie_file, $trailer, $user)
    {
        return $this->addMovieDB($title, $description, $date, $category, $language, $movie_file, $trailer, $user);
    }
    public function updateMovie($title, $description, $date, $category, $language, $trailer, $user)
    {
        return $this->updateMovieDB($title, $description, $date, $category, $language, $trailer, $user);
    }
    // public function addCours1($titre, $module, $description, $auteur)
    // {
    //     return $this->addCoursDB1($titre, $module, $description, $auteur);
    // }
    // public function updateCours($description, $id_cours)
    // {
    //     return $this->updateCoursDB($description, $id_cours);
    // }
    // public function deleteCours($id_cours)
    // {
    //     return $this->deleteCoursDB($id_cours);
    // }
}
