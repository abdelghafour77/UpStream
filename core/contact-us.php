<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us</title>
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
    <!-- Start Sub Header Section -->
    <div class="sub-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-sm-12">
            <nav aria-label="breadcrumb" class="text-center breadcrumb-nav">
              <h2 class="Page-title">Contact Us</h2>
              <ol class="breadcrumb">
                <li>
                  <i class="fa fa-home"></i>
                  <a href="contact-us">Home</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li><a href="contact-us">Contact Us</a></li>
              </ol>
            </nav>
            <!-- Breadcrumb End -->
          </div>
          <!-- Col End -->
        </div>
        <!-- Row End -->
      </div>
      <!-- Container end -->
    </div>
    <!-- Sub Header Section End -->
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start Contact Us Section -->
      <section class="contact-us">
        <div class="container">
          <div class="row text-center intro">
            <div class="col-12">
              <h2>How Can We Help?</h2>
              <p class="text-max-800">Talk to one of our consultants today and learn how to start leveraging your business.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <form class="contact__form" method="post" action="">
                <!-- form message -->
                <div class="row">
                  <div class="col-12">
                    <div class="alert alert-success contact__msg" style="display: none" role="alert">Your message was sent successfully.</div>
                  </div>
                </div>
                <!-- end message -->

                <!-- form element -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Name" required="" />
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email" required="" />
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="phone" type="text" class="form-control" placeholder="Phone" required="" />
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="subject" type="text" class="form-control" placeholder="Subject" required="" />
                  </div>
                  <div class="col-12 form-group">
                    <textarea name="message" class="form-control" rows="3" placeholder="Message" required=""></textarea>
                  </div>
                  <div class="col-12">
                    <input name="submit" type="submit" class="btn btn-success" value="Send Message" />
                  </div>
                </div>
                <!-- end form element -->
              </form>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Contact Us Section End -->
    </div>
    <!-- Main Content End -->

    <?php
    require_once '../include/footer.php';
    require_once '../include/filter.php';
    require_once '../include/js.php';
    ?>
</body>

</html>