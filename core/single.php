<?php
session_start();
require_once '../view/movieView.php';
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';

$getCategory = new CategoryView();
$allCategory = $getCategory->getCategory();

$getActor = new ActorView();
$allActor = $getActor->getActor();

$getLanguage = new LanguageView();
$allLanguage = $getLanguage->getLanguage();

$getMovie = new MovieView();
$sixMovie = $getMovie->getSixMovie();

if (isset($_GET['i'])) {
  $id_movie = $_GET['i'];
} else {
  header('Location: ./ ');
  die;
}
$getMovie = new MovieView();
$resultMovie = $getMovie->getInfoMovie($id_movie);
// die(var_dump($resultMovie));

$AllCategory = " ";
$AllActor = " ";
$language = " ";
$description = $resultMovie[0]['description'];
$id_movie = $resultMovie[0]['id_movie'];
$title = $resultMovie[0]['title'];
$date = $resultMovie[0]['date'];
$director = $resultMovie[0]['director'];
$trailer = $resultMovie[0]['link_trailer'];
$movie_file = $resultMovie[0]['movie_file'];
$cover = $resultMovie[0]['cover'];

$b = "";
foreach ($allCategory as $category) {

  for ($i = 1; $i < count($resultMovie); $i++) {
    if (isset($resultMovie[$i]['name'])) {
      if ($resultMovie[$i]['name'] == $category['name']) {
        $AllCategory .= $b . $resultMovie[$i]['name'];
        $b = " , ";
      }
    }
  }
}
$b = "";
foreach ($allActor as $actor) {

  for ($i = 1; $i < count($resultMovie); $i++) {
    if (isset($resultMovie[$i]['first_name'])) {
      if ($resultMovie[$i]['id_actor'] == $actor['id_actor']) {
        $AllActor .= $b . $resultMovie[$i]['first_name'] . ' ' . $resultMovie[$i]['last_name'];
        $b = " , ";
      }
    }
  }
}

foreach ($allLanguage as $languag) {
  if ($languag['id_language'] == $resultMovie[0]['language'])
    $language = $languag['name'];
}

$hours = floor($resultMovie[0]['duration'] / 3600);
$minutes = floor(($resultMovie[0]['duration'] / 60) % 60);
$duration = "$hours hr $minutes min";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  echo "<title>" . $title . "</title>";


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
    <!-- Start Banner Section -->
    <div class="banner-single banner-wrap banner-bg movie-bg">
      <style>
        .banner-bg.movie-bg {
          background-image: url(<?php echo $cover; ?>);
        }
      </style>
      <div class="container-fluid">
        <div class="banner-content">
          <div class="transparent-block">
            <div class="banner-caption">
              <div class="position-relative mb-4">
                <a href="watching.php?w=<?php echo $id_movie; ?>" class="d-flex align-items-center">
                  <div class="play-icon">
                    <div class="circle pulse"></div>
                    <div class="circle">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <polygon points="40,30 65,50 40,70"></polygon>
                      </svg>
                    </div>
                  </div>
                  <h2 class="banner-name text-white font-weight-700"><?php echo $title; ?></h2>
                </a>
              </div>
            </div>
            <!-- Banner Caption End -->
          </div>
          <!-- Transparent Block End -->
        </div>
        <!-- Banner Content End -->
      </div>
      <!-- Container End -->
    </div>
    <!-- Banner Section End -->
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start Play Details Section -->
      <section class="play-details">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="play-thumb mb-4">
                    <img class="img-fluid" src="<?php echo $cover; ?>" alt="" />
                    <div class="top-badge">
                      <div class="video-badge">
                        <img class="img-fluid" src="../img/top-movies.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- Play Thumb End -->
                  <div class="thumb-details text-center">
                    <span> 1080p</span>
                    <span>24p</span>
                    <span><img class="img-fluid" src="../img/dts-logo.png" alt="" /></span>
                    <span>7.1</span>
                  </div>
                  <!-- Thumb Details End -->
                </div>
                <!-- Col End -->
              </div>
              <!-- Row End -->
            </div>
            <!-- Col End -->
            <div class="col-md-9">
              <div class="play-details-content">
                <div class="title-block d-flex align-items-center justify-content-between">
                  <h2 class="play-title"><?php echo $title; ?></h2>
                </div>
                <!-- Title Block -->
                <div class="details-info mb-4">
                  <!-- <span><i class="fa-solid fa-user"></i> 18+</span> -->
                  <span><i class="fa-solid fa-clock"></i></i> <?php echo $duration; ?></span>
                  <span><i class="fa-solid fa-face-smile"></i></i> <?php echo $date; ?></span>
                  <span><i class="fa-solid fa-film"></i></i> <?php echo $AllCategory; ?></span>
                  <span><i class="fa-solid fa-earth-africa" aria-hidden="true"></i></i> <?php echo $language; ?></span>
                </div>
                <!-- Details Info -->
                <div class="details-desc">
                  <p>
                    <?php echo $description; ?>
                  </p>
                </div>
                <!-- Details Desc -->
                <div class="movie-persons mb-4">
                  <div class="person-block">
                    <h5 class="title">Director</h5>
                    <p class="name"><?php echo $director; ?></p>
                  </div>
                  <!-- Person Block -->
                  <div class="person-block">
                    <h5 class="title">Cast</h5>
                    <p><?php echo $AllActor; ?></p>
                  </div>
                  <!-- Person Block -->
                </div>
                <!-- Movie Persons -->
                <div class="details-buttons">
                  <div class="row d-flex align-items-center">
                    <div class="col-6 col-xl mb-xl-0 mb-3">
                      <a href="watching.php?w=<?php echo $id_movie; ?>" class="btn d-block hvr-sweep-to-right" tabindex="0"><i class="fa-solid fa-play"></i> Play</a>
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-xl mb-xl-0 mb-3">
                      <a href="<?php echo $trailer; ?>" id="trailer" class="btn d-block hvr-sweep-to-right" tabindex="0" data-toggle="modal" data-target="#trailer-modal" aria-hidden="true"><i class="fa-solid fa-film"></i> Trailer</a>
                      <!-- Modal Trailer -->
                      <div class="modal fade" id="trailer-modal" tabindex="0" role="dialog" aria-labelledby="trailer-modal" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document" id="trailerModal">
                          <!-- Modal Content -->
                          <div class="modal-content">
                            <!-- modal header -->
                            <div class="modal-header">
                              <h5 class="modal-title">Trailer</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times"></i></span>
                              </button>
                            </div>
                            <!-- Modal Body -->
                            <div class="modal-body">
                              <video class="video d-block" controls="" loop="">
                                <source src="<?php echo $movie_file; ?>" type="video/mp4" />
                              </video>
                            </div>
                            <!-- Modal Body -->
                          </div>
                          <!-- Modal Content -->
                        </div>
                        <!-- Modal Dialog -->
                      </div>
                      <!-- Modal Trailer -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-xl mb-xl-0">
                      <a id="share" class="btn hvr-sweep-to-right d-block" tabindex="0" data-toggle="modal" data-target="#share-modal">
                        <i class="fa-solid fa-share-nodes"></i> Share</a>
                      <!-- Modal Share -->
                      <div class="modal fade" id="share-modal" tabindex="0" role="dialog" aria-labelledby="share-modal" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document" id="sharemodal">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Share</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times"></i></span>
                              </button>
                            </div>
                            <!-- modal header End -->
                            <div class="modal-body">
                              <div class="icon-container d-flex">
                                <div class="icon-block">
                                  <i class="social-icon fab fa-twitter fa-2x"></i>
                                  <p>Twitter</p>
                                </div>
                                <div class="icon-block">
                                  <i class="social-icon fab fa-facebook fa-2x"></i>
                                  <p>Facebook</p>
                                </div>
                                <div class="icon-block">
                                  <i class="social-icon fab fa-instagram fa-2x"></i>
                                  <p>Instagram</p>
                                </div>
                                <div class="icon-block">
                                  <i class="social-icon fab fa-telegram fa-2x"></i>
                                  <p>Telegram</p>
                                </div>
                              </div>
                            </div>
                            <!-- Modal Body End -->
                          </div>
                          <!-- Modal Content End -->
                        </div>
                        <!-- Modal Dialog End -->
                      </div>
                      <!-- Modal Share End -->
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Details Buttons End -->
              </div>
              <!-- Details Content End -->
            </div>
            <!-- Col End -->
          </div>
          <!-- row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Play Details Section End -->
      <!-- Start Related Movies Section -->
      <section class="related-movies">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Related Movies</h2>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
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
                      $duration = $hours . "h" . $minutes . "m";
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

          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Related Movies Section End -->
    </div>
    <!-- Main Content End -->
    <?php
    require_once '../include/footer.php';
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
  require_once '../include/filter.php';
  ?>
  <?php
  require_once '../include/js.php';
  ?>
</body>

</html>