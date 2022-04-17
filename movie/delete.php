<?php
session_start();
require_once('../controller/movieController.php');
require_once '../view/movieView.php';

$getAllMovie = new MovieView();
$allMovieName = $getAllMovie->getMovieName();


if (isset($_POST['submit-movie'])) {

  $id_movie = $_POST['title'];

  // $user = $_SESSION['id'];
  $user = 1;

  $MovieDelete = new MovieController();
  $res = $MovieDelete->deleteMovie($id_movie);
  if ($res == '1') {
    header('Location:' . $_SERVER['PHP_SELF']);
    die;
  }
}

?>

<!DOCTYPE html>
<html lang="eng">

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

  <title>Delete movie</title>
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
          <i class='bx bx-camera-movie nav__icon'></i>
          <!-- <img src="../img/mini-logo.png" class="nav__icon" alt="UpStream" width="20" height="20" /> -->
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
                  <a href="../movie/create" class="nav__dropdown-item">Add</a>
                  <a href="../movie/update" class="nav__dropdown-item">Update</a>
                  <a href="../movie/delete" class="nav__dropdown-item">Delete</a>
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
      <h3>Delete movie</h3>

      <form method="post" action="" class="text-center" enctype="multipart/form-data">
        <select id="title" name="title" class="form-control me-4 my-4" required>
          <option value disabled selected>-- Movie --</option>
          <?php
          foreach ($allMovieName as $movie) {
            echo '<option value="' . $movie['id_movie'] . '">' . $movie['title'] . '</option>';
          }
          ?>
        </select>

        <button class="btn btn-bts text-center me-4 my-4" type="submit" name="submit-movie">Delete</button>
        <br>
      </form>

      <br>
    </div>

    <br>

  </main>

  <!--========== MAIN JS ==========-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>


</body>

</html>