<?php
session_start();
require_once('../controller/movieController.php');

if (isset($_POST['submit-movie'])) {

  $title = $_POST['title'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $category[] = $_POST['category'];
  $language = $_POST['language'];
  $trailer = $_POST['trailer'];
  // $user = $_SESSION['id'];
  $user = 1;
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
          $movie_file = "../uploads/movie/" . $fileNameNew;
          move_uploaded_file($fileTmpName, $movie_file);

          $MovieAdd = new MovieController();
          $res = $MovieAdd->addMovie($title, $description, $date, $category, $language, $movie_file, $trailer, $user);
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

  <title>Créer movie</title>
</head>


<body>
  <!--========== HEADER ==========-->
  <header class="header">
    <div class="header__container">
      <!-- <img src="../img/photo/" class="header__img" /> -->

      <a href="../index" class="header__logo">UpStream</a>

      <div class="header__toggle">
        <i class="bx bx-align-right " id="header-toggle"></i>
      </div>
    </div>
  </header>

  <!--========== NAV ==========-->
  <div class="nav" id="navbar">
    <nav class="nav__container">
      <div>
        <a href="../index" class="nav__link nav__logo">
          <!-- <i class='bx bxs-disc nav__icon'></i> -->
          <img src="../img/mini-logo.png" class="nav__icon" alt="UpStream" width="20" height="20" />
          <span class="nav__logo-name">UpStream</span>

          <!-- <span class="nav__logo-name">HASSAN II</span> -->
        </a>

        <div class="nav__list">
          <div class="nav__items">
            <!-- <h3 class="nav__subtitle">Profile</h3> -->
            <a href="../index" class="nav__link ">
              <i class="bx bx-home nav__icon"></i>
              <span class="nav__name">Accueil</span>
            </a>
          </div>

          <div class="nav__items">

            <div class="nav__dropdown">
              <a href="#" class="nav__link">
                <i class="bx bx-news nav__icon"></i>
                <span class="nav__name">movie</span>
                <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
              </a>

              <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                  <a href="../movie/create" class="nav__dropdown-item">Ajouter</a>
                  <a href="../movie/update" class="nav__dropdown-item">Modifier</a>
                  <a href="../movie/delete" class="nav__dropdown-item">Supprimer</a>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

      <a href="../log_out" class="nav__link nav__logout">
        <i class="bx bx-log-out nav__icon"></i>
        <span class="nav__name">Se déconnecter</span>
      </a>
    </nav>
  </div>

  <!--========== CONTENTS ==========-->
  <main>
    <div class="container">
      <h3>Ajouter movie</h3>

      <form method="post" action="" class="text-center" enctype="multipart/form-data">
        <input class="form-control me-4 my-4" type="text" name="title" id="title" placeholder="title" required />
        <textarea class="form-control me-4 my-4" rows="3" name="description" id="description" placeholder="Description"></textarea>
        <select id="date" name="date" class="form-control me-4 my-4" required>
          <option value disabled selected>-- Date --</option>
          <?php
          for ($i = 2000; $i <= date('Y'); $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
          }
          ?>
        </select>
        <select class=" form-control js-example-basic-multiple" name="category[]" multiple="multiple" required>
          <option value="action">Action</option>
          <option value="crime">Crime</option>
          <option value="comedy">Comedy</option>
          <option value="adventures">Adventures</option>
          <option value="horror">Horror</option>
          <option value="drama">Drama</option>
          <option value="fantasia">Fantasia</option>
          <option value="fiction">Fiction</option>
          <option value="romantic">Romantic</option>
        </select>
        <select id="language" name="language" class="form-control me-4 my-4" required>
          <option value disabled selected>-- Language --</option>
          <option value="arabic">Arabic</option>
          <option value="english">English</option>
          <option value="spanish">Spanish</option>
          <option value="french">French</option>
          <option value="italian">Italian</option>
          <option value="japonese">Japonese</option>
          <option value="chinese">Chinese</option>
          <option value="german">German</option>
        </select>
        <input class="form-control me-4 my-4" type="url" name="trailer" id="trailer" placeholder="link of trailer" required />
        <div class="input-group me-4 my-4">
          <input type="file" class="form-control" id="inputGroupFile02" name="movie_file" accept="video/mp4,video/x-m4v,video/*">
          <label class="input-group-text" for="inputGroupFile02">.mp4</label>
        </div>

        <button class="btn btn-bts text-center me-4 my-4" type="submit" name="submit-movie">Ajouter</button>
        <br>
      </form>

      <br>
    </div>

    <br>

  </main>

  <!--========== MAIN JS ==========-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="../ckeditor5/build/ckeditor.js"></script>
  <script src="../js/ckeditor5.config.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
    });
  </script>
</body>

</html>