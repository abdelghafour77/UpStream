<?php
session_start();
require_once('../controller/userController.php');
require_once('../view/userView.php');


if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $id_user = $_SESSION['id_user'];
  $email = $_POST['email'];
  $picture = $_SESSION['picture'];
  $password = $_SESSION['password'];

  if (password_verify($_POST['current-password'], $_SESSION['password']) == 1) {

    if ($_POST['new-password'] != '') {
      if (strlen($_POST['new-password']) < 6) {
        $_SESSION['message'] = "password must be at least 6 characters";
        header('Location:' . $_SERVER['PHP_SELF']);
      }
      $password = password_hash($_POST['new-password'], PASSWORD_DEFAULT);
    }
  }

  //uploading picture code needed
  $UserUpdate = new UserController();
  $res = $UserUpdate->updateUser($id_user, $username,  $email, $password);
  $userCheck = new UserView();
  $res = $userCheck->getUser($email);
  $_SESSION['id_user'] = $res['id_user'];
  $_SESSION['username'] = $res['username'];
  $_SESSION['email'] = $res['email'];
  $_SESSION['picture'] = $res['picture'];
  $_SESSION['password'] = $res['password'];
  $_SESSION['admin'] = $res['admin'];
  $_SESSION['super'] = $res['super'];
  header('Location:' . $_SERVER['PHP_SELF']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Account settings</title>
  <?php
  require_once '../include/head.php';
  ?>
</head>

<body class="loaded">
  <!-- Start Preloader -->

  <!-- Preloader End -->
  <div class="main" id="main">
    <?php
    require_once '../include/header.php';
    ?>
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start Account Settings Section -->
      <section class="account-settings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="content-settings">
                <div class="tab-content" id="pills-tabContent">
                  <div id="pills-profile" class="tab-pane animated fadeInRight show active">
                    <!-- Start Form -->
                    <form id="profile-settings-form" action="account-settings" method="post">
                      <div class="error-container"></div>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <div class="settings-avatar">
                              <img src="../uploads/users/<?php if ($_SESSION['picture'] != '') {
                                                            echo $_SESSION['picture'];
                                                          } else {
                                                            echo "user.jpg";
                                                          }; ?>" class="img-fluid d-block mx-auto mb-3" alt="User avatar" />
                              <div class="change-avatar"><a href="account-settings">Edit</a></div>
                            </div>
                          </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-10">
                          <h2><?php echo $_SESSION['username']; ?></h2>
                          <!-- <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s.
                          </p> -->
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <h5 class="mb-3 mt-3 pb-3 section-border">General Information</h5>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Username</label>
                            <input class="form-control form-control-name" name="username" id="username" type="text" placeholder="Enter your Username" value="<?php echo $_SESSION['username']; ?>" />
                          </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" value="<?php echo $_SESSION['email']; ?>" />
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
                            <input type="password" class="form-control" name="current-password" id="current-password" placeholder="Enter your Current Password" />
                          </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Enter your New Password" />
                          </div>
                        </div>
                        <!-- Col End -->
                      </div>
                      <!-- Row End -->
                      <div class="form-group d-flex align-items-center mt-3">
                        <button class="hvr-sweep-to-right btn btn-primary" name="update" type="submit">Save</button>
                        <a href="../" class="hvr-sweep-to-right btn btn-primary ml-3">Cancel</a>
                      </div>
                    </form>
                    <!-- Form End -->
                  </div>
                  <!-- Tap pane 1 End -->

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
    require_once '../include/footer.php';
    ?>
    <?php
    require_once '../include/js.php';
    ?>
</body>

</html>