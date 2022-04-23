<?php
session_start();
require_once '../view/userView.php';
require_once '../view/movieView.php';
$user = new UserView();
$users = $user->countUser();
$movie = new MovieView();
$movies = $movie->countMovie();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us</title>
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
              <h2 class="Page-title">About Us</h2>
              <ol class="breadcrumb">
                <li>
                  <i class="fa fa-home"></i>
                  <a href="../">Home</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li><a href="about">About Us</a></li>
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
      <!-- Start Our Statistics Section -->
      <section class="statistics">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Our Statistics</h2>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="icon-box text-center">
                <div class="icon"><i class="fas fa-video"></i></div>
                <div class="number count1" data-from="10" data-to="9300" data-time="1000"><?php echo $movies[0]; ?></div>
                <p>Movies</p>
              </div>
              <!-- Icon Box End -->
            </div>
            <!-- Col End -->
            <!-- <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="icon-box text-center">
                <div class="icon"><i class="fas fa-eye"></i></div>
                <div class="number count2" data-from="10" data-to="7400" data-time="1000">55</div>
                <p>Shows</p>
              </div> -->
            <!-- Icon Box End -->
            <!-- </div> -->
            <!-- Col End -->
            <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="icon-box text-center">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="number count2" data-from="10" data-to="1500" data-time="1000"><?php echo $users[0]; ?></div>
                <p>Members</p>
              </div>
              <!-- Icon Box End -->
            </div>
            <!-- Col End -->
            <!-- <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="icon-box text-center">
                <div class="icon"><i class="fas fa-trophy"></i></div>
                <div class="number count4" data-from="10" data-to="860" data-time="1000">246</div>
                <p>Awards</p>
              </div> -->
            <!-- Icon Box End -->
            <!-- </div> -->
            <!-- Col End -->
          </div>
          <!-- Row end -->
        </div>
        <!-- Container end -->
      </section>
      <!-- Our Statistics Section End -->
      <div class="gap-50"></div>
      <!-- Start Subscribe Section -->
      <section class="subscribe section-parallax">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img class="img-fluid mb-4" src="../img/05.png" alt="" />
            </div>
            <!-- Col End -->
            <div class="col-md-6">
              <h2 class="mb-4">And If You Join the Experience?</h2>
              <p class="mb-4">
                True friendship is perhaps the only relation that survives the trials and tribulations of time and remains unconditional. A unique blend of affection,
                loyalty, love, respect, trust and loads of fun is perhaps what describes the true meaning of friendship. Similar interests, mutual respect and strong
                attachment with each other are what friends share between each other. These are just the general traits of a friendship. To experience what is
                friendship, one must have true friends, who are indeed rare treasure.
              </p>
              <a href="../user/sign-up" class="btn hvr-sweep-to-right">JOIN US</a>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row end -->
        </div>
        <!-- Container end -->
      </section>
      <!-- Subscribe Section End -->
      <div class="gap-50"></div>
      <!-- Start Our Team Section -->
      <section class="our-team">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Our Team</h2>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row end -->
          <div class="row">
            <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="card team-box">
                <div class="team-box-img">
                  <img src="../img/01.jpg" class="img-fluid img-zoom" alt="" />
                </div>
                <div class="card-body">
                  <h2 class="card-title team-box-name">AOUAD Abdelghafour</h2>
                  <span>Project manager</span>
                </div>
              </div>
              <!-- Team Box End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="card team-box">
                <div class="team-box-img">
                  <img src="../img/02.jpg" class="img-fluid img-zoom" alt="" />
                </div>
                <div class="card-body">
                  <h2 class="card-title team-box-name">KASSEMI Anass</h2>
                  <span>Code & Quality Supervisor</span>
                </div>
              </div>
              <!-- Team Box End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="card team-box">
                <div class="team-box-img">
                  <img src="../img/03.jpg" class="img-fluid img-zoom" alt="" />
                </div>
                <div class="card-body">
                  <h2 class="card-title team-box-name">NAJAHI Ahlam</h2>
                  <span>Deliverables Supervisor</span>
                </div>
              </div>
              <!-- Team Box End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-xl mb-5 mb-xl-0">
              <div class="card team-box">
                <div class="team-box-img">
                  <img src="../img/04.jpg" class="img-fluid img-zoom" alt="" />
                </div>
                <div class="card-body">
                  <h2 class="card-title team-box-name">RHALIM Sami</h2>
                  <span>Communication Supervisor</span>
                </div>
              </div>
              <!-- Team Box End -->
            </div>
            <!-- Col End -->
          </div>
          <!-- Row end -->
        </div>
        <!-- Container end -->
      </section>
      <!-- Our Team Section End -->
    </div>
    <!-- Main Content End -->

    <?php
    require_once '../include/footer.php';
    require_once '../include/filter.php';
    require_once '../include/js.php';
    ?>
    <script>
      $.fn.jQuerySimpleCounter = function(options) {
        var settings = $.extend({
          start: 0,
          end: 100,
          easing: 'swing',
          duration: 400,
          complete: ''
        }, options);

        var thisElement = $(this);

        $({
          count: settings.start
        }).animate({
          count: settings.end
        }, {
          duration: settings.duration,
          easing: settings.easing,
          step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
          },
          complete: settings.complete
        });
      };

      $('.count1').jQuerySimpleCounter({
        end: <?php echo $movies[0]; ?>,
        duration: 3000
      });
      $('.count2').jQuerySimpleCounter({
        end: <?php echo $users[0]; ?>,
        duration: 3000
      });
    </script>
</body>

</html>