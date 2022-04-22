<?php
session_start();
require_once '../view/movieView.php';
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';
require_once '../view/myListView.php';
require_once '../controller/myListController.php';

if (isset($_GET['tl'])) {

  $id_movie = $_GET['tl'];
  $id_user = $_SESSION['id_user'];

  $addList = new MylistController();
  $r = $addList->addToList($id_movie, $id_user);
  header('Location:' . $_SERVER['PHP_SELF']);
}
if (isset($_GET['tld'])) {

  $id_movie = $_GET['tld'];
  $id_user = $_SESSION['id_user'];

  $deleteList = new MylistController();
  $r = $deleteList->deleteFromList($id_movie, $id_user);
  header('Location:' . $_SERVER['PHP_SELF']);
}
if (isset($_SESSION['id_user'])) {
  $id_user = $_SESSION['id_user'];

  $getMovie = new MyListView();
  $fMovie = $getMovie->getList($id_user);
  // die(var_dump($Movie));
}
$getCategory = new CategoryView();
$allCategory = $getCategory->getCategory();

$getActor = new ActorView();
$allActor = $getActor->getActor();

$getLanguage = new LanguageView();
$allLanguage = $getLanguage->getLanguage();

$getMovie = new MovieView();
$sixMovie = $getMovie->getSixMovie();

$getMovie = new MovieView();
$someMovie = $getMovie->getSomeMovie();



// foreach ($allLanguage as $languag) {
//   if ($languag['id_language'] == $resultMovie[0]['language'])
//     $language = $languag['name'];
// }

// $hours = floor($resultMovie[0]['duration'] / 3600);
// $minutes = floor(($resultMovie[0]['duration'] / 60) % 60);
// $duration = "$hours hr $minutes min";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>UpStream</title>
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

    <!-- Start Main Slider -->

    <!-- Slider main container -->
    <div class="swiper-slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
        foreach ($sixMovie as $movie) {
        ?>
          <div class="swiper-slide ">
            <div class="" style="position: absolute;left: 8%;top: 24%; z-index: 2;">
              <h3>
                <span class="badge bg-warning text-dark fadeInUp animated">New</span>
              </h3>
              <h1 class="swiper-slide__titlea fadeInUp animated mb-4">
                <?php
                $string = strip_tags($movie['title']);
                if (strlen($string) > 28) {

                  // truncate string
                  $stringCut = substr($string, 0, 28);
                  $endPoint = strrpos($stringCut, ' ');

                  //if the string doesn't contain any space then it will cut without word basis.
                  $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                  $string .= ' ...';
                }
                echo $string;
                ?></h1>
              <div class="slide-info swiper-slide__text fadeInUp animated">
                <span></span>
                <span class="radius">+18</span>
                <span>
                  <?php $hours = floor($movie['duration'] / 3600);
                  $minutes = floor(($movie['duration'] / 60) % 60);
                  $duration = $hours . "h " . $minutes . "m";
                  echo $duration; ?>
                </span>
              </div>
              <p class="fadeInUp animated swiper-slide__text col-xl-6 col-lg-12 col-md-12">
                <?php
                $string = strip_tags($movie['description']);
                if (strlen($string) > 130) {

                  // truncate string
                  $stringCut = substr($string, 0, 240);
                  $endPoint = strrpos($stringCut, ' ');

                  //if the string doesn't contain any space then it will cut without word basis.
                  $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                  $string .= ' ...';
                }
                echo $string;
                ?>
              </p>
              <div class="slider-buttons d-flex align-items-center fadeInUp animated">
                <a class="btn hvr-sweep-to-right" href="watching.php?w=<?php echo $movie['id_movie']; ?>">
                  <i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                <?php
                if (isset($_SESSION['id_user'])) {
                  $state = "fas fa-plus mr-2";
                  foreach ($fMovie as $list) {
                    if ($list['id_movie'] == $movie['id_movie']) {
                      $state = "fas fa-minus mr-2";
                    }
                  }
                  if ($state == "fas fa-minus mr-2") { ?>
                    <a class="btn hvr-sweep-to-right ml-3" href="<?php echo $_SERVER['PHP_SELF'] . '?tld=' . $movie['id_movie']; ?>"><i class="<?php echo $state; ?>"></i>My List</a>
                  <?php  } else { ?>
                    <a class="btn hvr-sweep-to-right ml-3" href="<?php echo $_SERVER['PHP_SELF'] . '?tl=' . $movie['id_movie']; ?>"><i class="<?php echo $state; ?>"></i>My List</a>
                <?php
                  }
                }
                ?>
              </div>
            </div>
            <img src="<?php echo $movie['cover']; ?>" alt="Placeholder image with tag Apple">
          </div>
        <?php } ?>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

    <!-- Main Slider End -->
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start Main Tabs Section -->
      <section class="main-tabs">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

              <!-- Season Tabs End -->
              <div class="tab-content" id="pills-tabContent">
                <div id="pills-additions" class="tab-pane animated fadeInRight show active">
                  <div class="row">
                    <?php
                    foreach ($sixMovie as $movie) {
                    ?>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="watching"><img class="img-fluid" src="<?php echo $movie['cover']; ?>" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><i class="fas fa-play"></i></a>
                                </li>
                                <?php
                                include '../include/list.php';
                                ?>
                                <li>
                                  <a href="single.php?i=<?php echo $movie['id_movie']; ?>"><i class="fas fa-info"></i></a>
                                </li>
                              </ul>
                            </div>
                            <!-- Box Content End -->
                          </div>
                          <!-- Video Thumb End -->
                          <div class="video-content">
                            <h2 class="video-title"><a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><?php echo $movie['title']; ?></a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year"><?php echo $movie['date']; ?></span>
                              <?php
                              $hours = floor($movie['duration'] / 3600);
                              $minutes = floor(($movie['duration'] / 60) % 60);
                              $duration = $hours . "h " . $minutes . "m";
                              ?>
                              <span class="video-age"><?php echo $duration; ?></span>
                              <?php
                              foreach ($allLanguage as $language) {
                                if ($language['id_language'] == $movie['language']) {
                                  echo '<span class="video-type">' . $language["name"] . '</span>';
                                }
                              } ?>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    <?php } ?>

                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Tap Pane 1 End -->

                <!-- Tap Pane 2 End -->

                <!-- Tap Pane 3 End -->
              </div>
              <!-- Tab Content End -->
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Main Tabs Section End -->
      <!-- Start Pupular Section -->
      <section class="pupular">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Popular Movies</h2>
              <!-- Start Pupular Slider -->
              <div class="owl-carousel owl-theme owl-loaded owl-drag" id="pupular-slider">
                <!-- Item 1 End -->
                <?php
                foreach ($sixMovie as $movie) {
                ?>
                  <div class="item">
                    <div class="video-block">
                      <div class="video-thumb position-relative thumb-overlay">
                        <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><img alt="" class="img-fluid" src="<?php echo $movie['cover']; ?>" /></a>
                        <div class="box-content">
                          <ul class="icon">
                            <li>
                              <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><i class="fas fa-play"></i></a>
                            </li>
                            <?php
                            include '../include/list.php'; ?>
                            <li>
                              <a href="single.php?i=<?php echo $movie['id_movie']; ?>"><i class="fas fa-info"></i></a>
                            </li>
                          </ul>
                        </div>
                        <!-- Box Content End -->
                      </div>
                      <!-- Video Thumb End -->
                      <div class="video-content">
                        <h2 class="video-title">
                          <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><?php echo $movie['title']; ?></a>
                        </h2>
                        <?php
                        $hours = floor($movie['duration'] / 3600);
                        $minutes = floor(($movie['duration'] / 60) % 60);
                        $duration = $hours . "h " . $minutes . "m";
                        ?>
                        <div class="video-info d-flex align-items-center">
                          <span class="video-year"><?php echo $movie['date']; ?></span>
                          <span class="video-age"><?php echo $duration; ?></span>
                          <?php
                          foreach ($allLanguage as $language) {
                            if ($language['id_language'] == $movie['language']) {
                              echo '<span class="video-type">' . $language["name"] . '</span>';
                            }
                          } ?>

                        </div>
                      </div>
                      <!-- video Content End -->
                    </div>
                    <!-- video Block End -->
                  </div>

                <?php } ?>

              </div>
              <!-- Pupular Slider End -->
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Pupular Section End -->
      <!-- Start Office Box Section -->
      <section class="office-box">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="block-title">TOP 10 BOX OFFICE</h2>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-lg-12">
              <!-- Start Swiper Slider -->
              <div class="swiper-container pt-0 swiper-container-coverflow swiper-container-3d swiper-container-horizontal" style="cursor: grab">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-861.75px, 0px, 0px); perspective-origin: 1436.25px 50%">
                  <?php
                  foreach ($sixMovie as $movie) {
                  ?>
                    <div class="swiper-slide swiper-bg" style="
                        background-image: url('<?php echo $movie['cover']; ?>');
                        width: 574.5px;
                        transition-duration: 0ms;
                        transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);
                        z-index: 1;
                      " data-swiper-slide-index="0">
                      <img alt="" class="entity-img" src="<?php echo $movie['cover']; ?>" />
                      <div class="top-badge">
                        <div class="video-badge">
                          <img alt="" class="img-fluid" src="../img/top-movies.png" />
                        </div>
                      </div>
                      <div class="content" style="z-index: 10;">
                        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px) scale(1)">
                          <?php
                          $string = strip_tags($movie['title']);
                          if (strlen($string) > 32) {

                            // truncate string
                            $stringCut = substr($string, 0, 32);
                            $endPoint = strrpos($stringCut, ' ');

                            //if the string doesn't contain any space then it will cut without word basis.
                            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $string .= ' ...';
                          }
                          echo $string; ?>
                        </p>
                        <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px)">
                          <?php echo $movie['description']; ?></span>
                        <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px) scale(1)">
                          <a class="btn hvr-sweep-to-right" href="watching.php?w=<?php echo $movie['id_movie']; ?>" tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                          <?php
                          if (isset($_SESSION['id_user'])) {
                          ?>

                            <?php
                            $state = "fas fa-plus mr-2";
                            foreach ($fMovie as $list) {
                              if ($list['id_movie'] == $movie['id_movie']) {
                                $state = "fas fa-minus mr-2";
                              }  ?>

                            <?php
                            }
                            if ($state == "fas fa-minus mr-2") { ?>
                              <a class="btn hvr-sweep-to-right ml-3" href="<?php echo $_SERVER['PHP_SELF'] . '?tld=' . $movie['id_movie']; ?>"><i class="<?php echo $state; ?>"></i>My List</a>
                            <?php  } else { ?>
                              <a class="btn hvr-sweep-to-right ml-3" href="<?php echo $_SERVER['PHP_SELF'] . '?tl=' . $movie['id_movie']; ?>"><i class="<?php echo $state; ?>"></i>My List</a>
                            <?php }
                            ?>

                          <?php
                          } ?>
                        </div>
                      </div>
                      <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
                      <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms"></div>
                    </div>
                    <!-- Slide  End -->
                  <?php } ?>

                </div>
                <!-- Swiper Wrapper End -->
                <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide"></div>
                <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide"></div>
                <!-- Navigation Buttons End -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
              </div>
              <!-- End Swiper Slider -->
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Office Box Section End -->
      <!-- Start Trending Section -->
      <section class="trending">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Trending Now</h2>
              <div class="row">
                <?php
                foreach ($sixMovie as $movie) {
                ?>
                  <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <div class="video-block">
                      <div class="video-thumb position-relative thumb-overlay">
                        <a href="./#"><img alt="" class="img-fluid" src="<?php echo $movie['cover']; ?>" /></a>
                        <div class="box-content">
                          <ul class="icon">
                            <li>
                              <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><i class="fas fa-play"></i></a>
                            </li>
                            <li>
                              <?php
                              include '../include/list.php';
                              ?>
                            </li>
                            <li>
                              <a href="single.php?i=<?php echo $movie['id_movie']; ?>"><i class="fas fa-info"></i></a>
                            </li>
                          </ul>
                        </div>
                        <!-- Box Content End -->
                      </div>
                      <!-- Video Thumb End -->
                      <div class="video-content">
                        <h2 class="video-title">
                          <a href="watching.php?w=<?php echo $movie['id_movie']; ?>">
                            <?php
                            echo $movie['title']; ?></a>
                        </h2>
                        <div class="video-info d-flex align-items-center">
                          <span class="video-year"><?php echo $movie['date']; ?></span>
                          <?php
                          $hours = floor($movie['duration'] / 3600);
                          $minutes = floor(($movie['duration'] / 60) % 60);
                          $duration = $hours . "h " . $minutes . "m";
                          ?>
                          <span class="video-age"><?php echo $duration; ?></span>
                          <?php
                          foreach ($allLanguage as $language) {
                            if ($language['id_language'] == $movie['language']) {
                              echo '<span class="video-type">' . $language["name"] . '</span>';
                            }
                          } ?>
                        </div>
                      </div>
                      <!-- video Content End -->
                    </div>
                    <!-- video Block End -->
                  </div>
                <?php } ?>
                <!-- Col End -->
              </div>
              <!-- Row End -->
            </div>
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Trending Section End -->

    </div>
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