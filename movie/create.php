<?php
session_start();
require_once('../controller/movieController.php');
require_once '../view/actorView.php';
require_once '../view/categoryView.php';
require_once '../view/languageView.php';
require_once '../view/QualityView.php';

$getActor = new ActorView();
$allActor = $getActor->getActor();

$getCategory = new CategoryView();
$allCategory = $getCategory->getCategory();

$getQuality = new QualityView();
$allQuality = $getQuality->getQuality();

$getLanguage = new LanguageView();
$allLanguage = $getLanguage->getLanguage();

if (isset($_POST['submit-movie'])) {

  $title = $_POST['title'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $category[] = $_POST['category'];
  $actor[] = $_POST['actor'];
  $director = $_POST['director'];
  $language = $_POST['language'];
  $quality = $_POST['quality'];
  $trailer = $_POST['trailer'];
  $user = $_SESSION['id_user'];

  if ($_FILES['cover']['name'] != "") {
    $fileName = $_FILES['cover']['name'];
    $fileTmpName = $_FILES['cover']['tmp_name'];
    $fileSize = $_FILES['cover']['size'];
    $fileError = $_FILES['cover']['error'];
    $fileType = $_FILES['cover']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'png', 'jpeg');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 4572864) {  // 4,5MB
          $fileNameNew =   $title  . "_" . date("dmy") . time() . "." . $fileActualExt; //create unique Id using time and date and name of 'cours'
          $fileNameNew = preg_replace('/\s+/', '_', $fileNameNew); //replace all space with "_"
          $fileNameNew = str_replace("'", "", $fileNameNew); //remove all single quote 
          $cover = "../uploads/cover/" . $fileNameNew;
          move_uploaded_file($fileTmpName, $cover);

          if ($_FILES['movie_file']['name'] != "") {
            $fileName = $_FILES['movie_file']['name'];
            $fileTmpName = $_FILES['movie_file']['tmp_name'];
            $fileSize = $_FILES['movie_file']['size'];
            $fileError = $_FILES['movie_file']['error'];
            $fileType = $_FILES['movie_file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('MKV', 'mkv', 'mp4', 'MP4', 'h264', 'H264', 'AVI', 'avi', 'MOV', 'mov', 'M4V', 'm4v', 'AVC', 'avc');

            if (in_array($fileActualExt, $allowed)) {
              if ($fileError === 0) {
                if ($fileSize < 4572864000) {  // 4500MB
                  $fileNameNew =   $title  . "_" . date("dmy") . time() . "." . $fileActualExt; //create unique Id using time and date and name of 'cours'
                  $fileNameNew = preg_replace('/\s+/', '_', $fileNameNew); //replace all space with "_"
                  $fileNameNew = str_replace("'", "", $fileNameNew); //remove all single quote 
                  $movie_file = "../uploads/movie/" . $fileNameNew;
                  move_uploaded_file($fileTmpName, $movie_file);
                  include_once('../getid3/getid3.php');
                  $getID3 = new getID3;
                  $duration = $getID3->analyze($movie_file);

                  $duration = floatval($duration['playtime_seconds']);

                  $MovieAdd = new MovieController();
                  $res = $MovieAdd->addMovie($title, $description, $date, $category, $language, $quality, $movie_file, $duration, $trailer, $cover, $user, $actor, $director);
                  if ($res == '1') {
                    header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
                    die;
                  }
                } else {
                  $_SESSION['message'] = "Le fichier est trop grand";
                  header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
                  die;
                }
              } else {
                $_SESSION['message'] = "Erreur de téléchargement de fichier";
                header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
                die;
              }
            } else {
              $_SESSION['message'] = "Erreur";
              header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
              die;
            }
          }
        } else {
          $_SESSION['message'] = "Le fichier est trop grand";
          header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
          die;
        }
      } else {
        $_SESSION['message'] = "Erreur de téléchargement de fichier";
        header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
        die;
      }
    } else {
      $_SESSION['message'] = "Erreur";
      header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
      die;
    }
  }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../img/favicon.ico" />

  <!--========== BOX ICONS ==========-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!--========== bootstrap ==========-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!--========== CSS ==========-->
  <link rel="stylesheet" href="../styles/style1.css" />
  <link rel="stylesheet" href="../styles/style2.css" />
  <!-- <link rel="stylesheet" href="../styles/styles.css" /> -->

  <title>Add Movie</title>
</head>


<body>
  <?php
  require_once '../include/admin.php';
  ?>
  <!--========== CONTENTS ==========-->
  <main>
    <div class="container">
      <h3>Add Movie</h3>

      <form method="post" action="" class="text-center" enctype="multipart/form-data">
        <input class="form-control me-4 my-4" type="text" name="title" id="title" placeholder="Title" required />
        <textarea class="form-control me-4 my-4" rows="3" name="description" id="description" placeholder="Description"></textarea>
        <select id="date" name="date" class="form-control me-4 my-4" required>
          <option value disabled selected>Date</option>
          <?php
          for ($i = 2000; $i <= date('Y'); $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
          }
          ?>
        </select>
        <select class="form-control category me-4 my-4" name="category[]" multiple="multiple" required>
          <?php
          foreach ($allCategory as $category) {
            echo '<option value="' . $category['id_category'] . '">' . $category['name'] . '</option>';
          }
          ?>
        </select>
        <select id="language" name="language" class="form-control me-4 my-4" required>
          <option value disabled selected>Language</option>
          <?php
          foreach ($allLanguage as $language) {
            echo '<option value="' . $language['id_language'] . '">' . $language['name'] . '</option>';
          }
          ?>
        </select>
        <select id="quality" name="quality" class="form-control me-4 my-4" required>
          <option value disabled selected>Quality</option>
          <?php
          foreach ($allQuality as $quality) {
            echo '<option value="' . $quality['id_quality'] . '">' . $quality['name'] . '</option>';
          }
          ?>
        </select>
        <input class="form-control me-4 my-4" type="text" name="director" id="director" placeholder="Director" required />
        <select class="form-control actor me-4 my-4" name="actor[]" multiple="multiple" required>
          <?php
          foreach ($allActor as $actor) {
            echo '<option value="' . $actor['id_actor'] . '">' . $actor['first_name'] . ' ' . $actor['last_name'] . '</option>';
          }
          ?>
        </select>
        <input class="form-control me-4 my-4" type="url" name="trailer" id="trailer" placeholder="Link of trailer" required />
        <div class="input-group me-4 my-4">
          <input type="file" class="form-control" id="inputGroupFile02" name="cover" accept=" image/png, image/jpg, image/jpeg" require>
          <label class=" input-group-text" for="inputGroupFile02">Cover</label>
        </div>
        <div class="input-group me-4 my-4">
          <input type="file" class="form-control" id="inputGroupFile02" name="movie_file" accept="video/mp4,video/x-m4v,video/*" require>
          <label class="input-group-text" for="inputGroupFile02">Movie file</label>
        </div>

        <button class="btn btn-bts text-center me-4 my-4" type="submit" name="submit-movie">Add</button>
        <br>
      </form>

      <br>
    </div>

    <br>

  </main>

  <!--========== MAIN JS ==========-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.category').select2({
        placeholder: {
          id: '-1', // the value of the option
          text: 'Category'
        }
      });
      $('.actor').select2({
        placeholder: {
          id: '-1', // the value of the option
          text: 'Actor'
        }
      });
    });
  </script>
</body>

</html>