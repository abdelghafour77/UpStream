<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>404</title>
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
      <section class="404">
        <div class="container">
          <div class="row">
            <div class="content error-page text-center col">
              <div class="error-code">
                <h2>404</h2>
              </div>
              <!-- Error Code end -->
              <div class="error-message">
                <h3>Oops... Page Not Found!</h3>
              </div>
              <!-- Error Message end -->
              <div class="error-body">
                <p>Try using the button below to go to main page of the site</p>
                <a href="index" class="btn hvr-sweep-to-right">Back to Home Page</a>
              </div>
              <!-- Error Body end -->
            </div>
            <!-- Content end -->
          </div>
          <!-- Row end -->
        </div>
        <!-- Container end -->
      </section>
      <!-- 404 Section end -->
    </div>
    <!-- Main Content End -->
    <?php
    require_once '../include/footer.php';
    ?>

  </div>
  <!-- Main Class End -->

  <?php
  require_once '../include/filter.php';
  require_once '../include/js.php';
  ?>
</body>

</html>