<?php
session_start();
require_once '../view/movieView.php';
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';
require_once '../view/QualityView.php';
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

$getQuality = new QualityView();
$allQuality = $getQuality->getQuality();

$getMovie = new MovieView();
$sixMovie = $getMovie->getSixMovie();

$getMovie = new MovieView();
$lastMovie = $getMovie->getLastMovie();

$getMovie = new MovieView();
$someMovie = $getMovie->getSomeMovie();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Movies</title>
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
    <!-- Start Swiper Slider -->
    <div class="swiper-container swiper-container-coverflow swiper-container-3d swiper-container-horizontal" style="cursor: grab ;">
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
                <?php echo $movie['title']; ?>
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
      <!-- Swiper Wrapper -->
      <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide"></div>
      <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide"></div>
      <!-- navigation buttons -->
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <!-- End Swiper Slider -->
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start Recently Added Section -->
      <section class="recently-added">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Recently Added</h2>
              <!-- Start Pupular Slider -->
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
                              foreach ($allQuality as $quality) {
                                if ($quality['id_quality'] == $movie['quality']) {
                                  echo '<span class="video-type">' . $quality["name"] . '</span>';
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
              <!-- Pupular Slider End -->
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Recently Added Section End -->
      <!-- Start Hollywood Movies Section -->
      <section class="hollywood-movies">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Movies of this year</h2>
            </div>
          </div>
          <div class="row">
            <?php
            foreach ($lastMovie as $movie) {
            ?>
              <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                <div class="video-block">
                  <div class="video-thumb position-relative thumb-overlay">
                    <a href="movies"><img class="img-fluid" src="<?php echo $movie['cover']; ?>" alt="" /></a>
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
                      foreach ($allQuality as $quality) {
                        if ($quality['id_quality'] == $movie['quality']) {
                          echo '<span class="video-type">' . $quality["name"] . '</span>';
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
        <!-- Container End -->
      </section>
      <!-- Hollywood Movies Section End -->
      <!-- Start Award-Winning Movies Section -->
      <section class="award-winning">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">most viewed</h2>
            </div>
          </div>
          <div class="row">
            <?php foreach ($sixMovie as $movie) {
            ?>
              <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                <div class="video-block">
                  <div class="video-thumb position-relative thumb-overlay">
                    <a href="movies"><img class="img-fluid" src="<?php echo $movie['cover']; ?>" alt="" /></a>
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
                      foreach ($allQuality as $quality) {
                        if ($quality['id_quality'] == $movie['quality']) {
                          echo '<span class="video-type">' . $quality["name"] . '</span>';
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
        <!-- Container End -->
      </section>
      <!-- Award-Winning Movies Section End -->
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