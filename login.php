<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <?php
  require_once 'include/head.php';
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
    require_once 'include/header.php';
    ?>
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start Login Section -->
      <section class="login">
        <div class="container">
          <div class="row text-center intro">
            <div class="col-12">
              <h2>Welcome Back !</h2>
              <p class="text-max-800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Start Form -->
              <form id="login-form" action="login" method="post" class="mb-4">
                <div class="error-container"></div>
                <div class="form-group">
                  <label class="control-label col-xs-4">Username</label>
                  <input type="text" class="form-control" name="username" required="required" />
                </div>
                <div class="form-group">
                  <label class="control-label col-xs-4">Password</label>
                  <input type="password" class="form-control" name="password" required="required" />
                </div>
                <div class="form-group">
                  <label class="checkbox-inline mb-3"><input type="checkbox" required="required" /> Save Password</label>
                  <button type="submit" class="btn btn-block hvr-sweep-to-right btn-primary btn-lg">Login</button>
                </div>
                <a href="reset-password">Lost your Password?</a>
              </form>
              <!-- Form End -->
              <div class="row d-flex align-items-center mb-4">
                <div class="col-md-6">
                  <a href="watching" class="btn facebook-color d-block hvr-sweep-to-right mb-3" tabindex="0"><i class="icofont-facebook mr-2" aria-hidden="true"></i>Facebook</a>
                </div>
                <!-- Col End -->
                <div class="col-md-6">
                  <a href="watching" class="btn twitter-color d-block hvr-sweep-to-right mb-3" tabindex="0"><i class="icofont-twitter mr-2" aria-hidden="true"></i>Twitter</a>
                </div>
                <!-- Col End -->
              </div>
              <!-- Row End -->
              <p class="text-center">Don't have an account? <a href="sign-up">Sign up here!</a></p>
            </div>
            <!-- Col End -->
            <div class="col-lg-6">
              <img class="img-fluid" src="./img/login.png" alt="" />
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
    require_once 'include/footer.php';
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
  require_once 'include/js.php';
  ?>
</body>

</html>