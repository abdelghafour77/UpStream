<!DOCTYPE html>
<html lang="en">

<head>
  <title>Account settings</title>
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
      <!-- Start Account Settings Section -->
      <section class="account-settings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="content-settings">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="pill" href="https://excellencetheme.com/templates/avastream/account-settings.html#pills-profile" role="tab" aria-selected="true">Profile Settings</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="pill" href="https://excellencetheme.com/templates/avastream/account-settings.html#pills-account" role="tab" aria-selected="false">Account Settings</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div id="pills-profile" class="tab-pane animated fadeInRight show active">
                    <!-- Start Form -->
                    <form id="profile-settings-form" action="https://excellencetheme.com/templates/avastream/account-settings.html#" method="post">
                      <div class="error-container"></div>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <div class="settings-avatar">
                              <img src="./img/user.jpg" class="img-fluid d-block mx-auto mb-3" alt="User avatar" />
                              <div class="change-avatar"><a href="https://excellencetheme.com/templates/avastream/account-settings.html#">Edit</a></div>
                            </div>
                          </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-10">
                          <h2>John Doe</h2>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s.
                          </p>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <h5 class="mb-3 mt-3 pb-3 section-border">General Information</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Username</label>
                            <input class="form-control form-control-name" name="username" id="username" type="text" placeholder="Enter your Username" value="John Doe" />
                          </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" value="contact@example.com" />
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control form-control-name" name="first-name" id="first-name" type="text" placeholder="Enter your First Name" value="John" />
                          </div>
                        </div>
                        <!-- Col End -->

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control form-control-name" name="last-name" id="last-name" type="text" placeholder="Enter your Last Name" value="Doe" />
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <h5 class="mb-3 mt-3 pb-3 section-border">Change Password</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" class="form-control" name="current-password" id="current-password" placeholder="Enter your Current Password" value="**********" />
                          </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Enter your New Password" value="**********" />
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <h5 class="mb-3 mt-3 pb-3 section-border">Personal Information</h5>
                      <div id="sandbox-container" class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" name="date-of-birth" id="date-of-birth" placeholder="Enter your Date of Birth" value="01/20/2021" />
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="select-plan" aria-label="Default select example" id="select-gender">
                              <option value="1" selected="selected">Male</option>
                              <option value="2">Female</option>
                            </select>
                          </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Language</label>
                            <select class="form-control" name="select-plan" aria-label="Default select example" id="select-language">
                              <option value="1">Arabic</option>
                              <option value="2" selected="selected">English</option>
                              <option value="3">German</option>
                              <option value="4">Spanish</option>
                              <option value="5">French</option>
                              <option value="6">Italian</option>
                              <option value="7">Russian</option>
                              <option value="8">Japanese</option>
                              <option value="9">Chinese</option>
                            </select>
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <div class="form-group d-flex align-items-center mt-3">
                        <a href="https://excellencetheme.com/templates/avastream/account-settings.html#" class="hvr-sweep-to-right btn btn-primary">Save</a>
                        <a href="https://excellencetheme.com/templates/avastream/account-settings.html#" class="hvr-sweep-to-right btn btn-primary ml-3">Cancel</a>
                      </div>
                    </form>
                    <!-- Form End -->
                  </div>
                  <!-- Tap pane 1 End -->
                  <div id="pills-account" class="tab-pane animated fadeInRight">
                    <!-- Start Form -->
                    <form id="account-settings-form" action="https://excellencetheme.com/templates/avastream/account-settings.html#" method="post">
                      <h5 class="mb-3 mt-3 pb-3 section-border">Change Plan</h5>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group mb-3">
                            <label>Change Plan</label>
                            <select class="form-control" name="select-plan" aria-label="Default select example" id="select-plan">
                              <option value="1">STANDARD - Free</option>
                              <option value="2">Platinum - $79/mo</option>
                              <option value="3">Premium - $120/mo</option>
                            </select>
                          </div>
                          <div class="form-group mb-3">
                            <button class="btn btn-info hvr-sweep-to-right" type="button">Cancel Membership</button>
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <h5 class="mb-3 mt-3 pb-3 section-border">Payment Method</h5>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group mb-4">
                            <label class="d-block mb-0">Payment Method</label>
                            <div class="small text-muted mb-3">You have not added a payment method</div>
                            <button class="btn btn-info hvr-sweep-to-right" type="button">Add Payment Method</button>
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <h5 class="mb-3 mt-3 pb-3 section-border">Payment History</h5>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group mb-4">
                            <label class="d-block">Payment History</label>
                            <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You have not made any payment.</div>
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <div class="form-group d-flex align-items-center mt-3">
                        <a href="https://excellencetheme.com/templates/avastream/account-settings.html#" class="btn hvr-sweep-to-right">Save</a>
                        <a href="https://excellencetheme.com/templates/avastream/account-settings.html#" class="btn hvr-sweep-to-right ml-3">Cancel</a>
                      </div>
                    </form>
                    <!-- Form End -->
                  </div>
                  <!-- Tap Pane 2 End -->
                </div>
              </div>
              <!-- Content Settings End -->
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Account Settings Section End -->
    </div>
    <!-- Main Content End -->
    <?php
    require_once 'include/footer.php';
    ?>
    <?php
    require_once 'include/js.php';
    ?>
</body>

</html>