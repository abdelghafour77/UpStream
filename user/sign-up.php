<?php
session_start();
require_once('../controller/userController.php');
// require_once '../views/moduleView.php';

// require_once('../views/utilisateurView.php');
if (isset($_SESSION['id'])) {
  header('Location: ./');
}

if (isset($_POST['sign-up'])) {
  if ($_POST['password'] == $_POST['confirm_password']) {
    $res = "password not match";

    if (strlen($_POST['password']) < 6) {
      $res = "password must be at least 6 characters";
    } else {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $picture = '';
      //uploading image
      if (isset($_FILES['picture'])) {

        if ($_FILES['picture']['name'] != "") {

          $fileName = $_FILES['picture']['name'];
          $fileTmpName = $_FILES['picture']['tmp_name'];
          $fileSize = $_FILES['picture']['size'];
          $fileError = $_FILES['picture']['error'];
          $fileType = $_FILES['picture']['type'];

          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));
          $allowed = array('jpg', 'jpeg', 'png');

          if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
              if ($fileSize < 5000000) {
                $picture = $username . "_" . date("dmy") . time() . "." . $fileActualExt;
                $fileDestination = "../uploads/users/" . $picture;
                move_uploaded_file($fileTmpName, $fileDestination);

                if ($res == '1') {
                  header('Location: check ');
                  die;
                } elseif ($res == '2') {
                  header('Location: create'); //pour eviter alert when refresh page
                  die;
                }
              } else {
                $_SESSION['message'] = "L'image est trop grande";
                header('Location: create'); //pour eviter alert when refresh page
                die;
              }
            } else {
              $_SESSION['message'] = "Erreur de téléchargement de l'image";
              header('Location: create'); //pour eviter alert when refresh page
              die;
            }
          } else {
            $_SESSION['message'] = "Erreur";
            header('Location: create'); //pour eviter alert when refresh page
            die;
          }
        }
      }
      $UserAdd = new UserController();
      $res = $UserAdd->addUser($username,  $email, $picture, $password);
      if ($res == '1') {
        header('Location: login ');
        die;
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ava Stream - Movies &amp; Tv Shows Bootstrap 4 Template</title>
  <?php
  require_once '../include/head.php';
  ?>
</head>

<body class="loaded">
  <!-- Start Preloader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- Preloader End -->
  <div class="main" id="main">
    <?php
    require_once '../include/header.php';
    ?>
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start SignUp Section -->
      <section class="signup">
        <div class="container">
          <div class="row text-center intro">
            <div class="col-12">
              <h2>Create an Account</h2>
              <p class="text-max-800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-lg-12">
              <!-- Start Form -->
              <form id="signup-form" action="sign-up" method="post" enctype="multipart/form-data">
                <div class="error-container"></div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input class="form-control form-control-name" name="username" id="username" placeholder="username" type="text" required />
                    </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" class="form-control" name="email" placeholder="email" required />
                    </div>
                  </div>
                  <!-- Col End -->
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="password" required />
                    </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" class="form-control" name="confirm_password" id="confirm-password" placeholder="confirm password" required />
                    </div>
                  </div>
                  <!-- Col End -->
                </div>

                <div class="form-group">
                  <label>picture for account</label>
                  <input type="file" class="form-control" name="picture" id="picture" accept=" image/png, image/jpg, image/jpeg" />
                </div>

                <div class="form-group">
                  <!-- <label class="checkbox-inline mb-3" style="width: 100%"><input type="checkbox" required="required" /> I accept the
                    <a href="terms">Terms of Use</a> &amp;
                    <a href="privacy">Privacy Policy</a>.
                  </label> -->
                  <button class="btn hvr-sweep-to-right" name="sign-up" type="submit">Sign Up</button>
                </div>
              </form>
              <!-- Form End -->
              <div class="text-center">Already have an account? <a href="login">Login here</a></div>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- SignUp Section End -->
    </div>
    <!-- Main Content End -->
    <?php
    require_once '../include/footer.php';
    ?>
  </div>
  <!-- Main Class End -->
  <!-- Start Search Modal -->
  <div class="zoom-anim-dialog mfp-hide modal-searchPanel search-form" id="search-popup">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="search-panel">
          <form class="search-group">
            <div class="input-group">
              <input class="form-control" name="s" placeholder="Search" type="search" value="" />
              <button class="input-group-btn search-button"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Search Modal -->
  <?php
  require_once '../include/filter.php';
  ?>
  <?php
  require_once '../include/js.php';
  ?>
</body>

</html>