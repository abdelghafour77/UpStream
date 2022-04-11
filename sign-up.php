<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ava Stream - Movies &amp; Tv Shows Bootstrap 4 Template</title>
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
              <form id="signup-form" action="sign-up" method="post">
                <div class="error-container"></div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input class="form-control form-control-name" name="username" id="username" placeholder="" type="text" required="" />
                    </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" class="form-control" name="email" required="required" />
                    </div>
                  </div>
                  <!-- Col End -->
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input class="form-control form-control-name" name="username" id="first-name" placeholder="" type="text" required="" />
                    </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input class="form-control form-control-name" name="username" id="last-name" placeholder="" type="text" required="" />
                    </div>
                  </div>
                  <!-- Col End -->
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" id="password" required="required" />
                    </div>
                  </div>
                  <!-- Col End -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" class="form-control" name="confirm_password" id="confirm-password" required="required" />
                    </div>
                  </div>
                  <!-- Col End -->
                </div>
                <div class="form-group">
                  <label>Select Plan</label>
                  <select class="form-control" name="select-plan" aria-label="Default select example" id="select-plan">
                    <option value="1">STANDARD - Free</option>
                    <option value="2">Platinum - $79/mo</option>
                    <option value="3">Premium - $120/mo</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="checkbox-inline mb-3" style="width: 100%"><input type="checkbox" required="required" /> I accept the
                    <a href="terms">Terms of Use</a> &amp;
                    <a href="privacy">Privacy Policy</a>.</label>
                  <button class="btn hvr-sweep-to-right" type="submit">Sign Up</button>
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
  require_once 'include/filter.php';
  ?>
  <?php
  require_once 'include/js.php';
  ?>
</body>

</html>