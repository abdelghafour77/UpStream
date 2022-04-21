<?php
session_start();

// require_once('../controller/userController.php');
require_once('../view/userView.php');


if (isset($_SESSION['id_user'])) {
  header('Location: ../');
}

if (isset($_POST['check'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $userCheck = new UserView();
  $res = $userCheck->getUser($email);
  if ($res == 1) {
    header('Location:' . $_SERVER['PHP_SELF']);
  } else {
    if (password_verify($password, $res['password']) == 1) {
      $_SESSION['id_user'] = $res['id_user'];
      $_SESSION['username'] = $res['username'];
      $_SESSION['email'] = $res['email'];
      $_SESSION['picture'] = $res['picture'];
      $_SESSION['password'] = $res['password'];
      $_SESSION['admin'] = $res['admin'];
      $_SESSION['super'] = $res['super'];
      header('Location: ../');
    }
  }
}
// print_r($_POST);
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
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
      <!-- Start Login Section -->
      <section class="login">
        <div class="container">
          <div class="row text-center intro">
            <div class="col-12">
              <h2>Welcome Back !</h2>
              <p class="text-max-800">Login to fully enjoy your streaming experience.</p>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Start Form -->
              <form id="login-form" action="" method="post" class="mb-4">
                <div class="error-container"></div>
                <div class="form-group">
                  <label class="control-label col-xs-4">Email</label>
                  <input type="email" class="form-control" name="email" required="required" />
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-4">Password</label>
                  <input type="password" class="form-control" name="password" required="required" />
                </div>
                <div class="form-group">
                  <label class="checkbox-inline mb-3"><input type="checkbox" /> Save Password</label>
                  <button type="submit" name="check" class="btn btn-block hvr-sweep-to-right btn-primary btn-lg">Login</button>
                </div>
                <a href="reset-password">Lost your Password?</a>
              </form>
              <!-- Form End -->
              <!-- <div class="row d-flex align-items-center mb-4">
                <div class="col-md-6">
                  <a href="watching" class="btn facebook-color d-block hvr-sweep-to-right mb-3" tabindex="0"><i class="icofont-facebook mr-2" aria-hidden="true"></i>Facebook</a>
                </div> -->
              <!-- Col End -->
              <!-- <div class="col-md-6">
                  <a href="watching" class="btn twitter-color d-block hvr-sweep-to-right mb-3" tabindex="0"><i class="icofont-twitter mr-2" aria-hidden="true"></i>Twitter</a>
                </div> -->
              <!-- Col End -->
              <!-- </div> -->
              <!-- Row End -->
              <p class="text-center">Don't have an account? <a href="sign-up">Sign up here!</a></p>
            </div>
            <!-- Col End -->
            <div class="col-lg-6">
              <img class="img-fluid" src="../img/login.jpeg" alt="" />
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Login Section End -->
    </div>
    <!-- Main Content End -->
    <?php
    require_once '../include/footer.php';
    ?>
  </div>
  <!-- Main Class End -->
  <!-- Start Search Modal -->
  <div id="search">
    <button type="button" class="close">×</button>
    <form>
      <input type="search" value="" placeholder="type keyword(s) here" />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
  <!-- <div class="zoom-anim-dialog mfp-hide modal-searchPanel search-form" id="search-popup">
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
  </div> -->
  <!-- End Search Modal -->
  <?php
  require_once '../include/js.php';
  ?>
</body>

</html>