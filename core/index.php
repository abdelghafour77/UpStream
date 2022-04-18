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
    <style>
      .slick-bg.bg-1 {
        background-image: url(../img/slider2.jpg);
      }

      .slick-bg.bg-2 {
        background-image: url(../img/slider2.jpg);
      }

      .slick-bg.bg-3 {
        background-image: url(../img/slider3.jpg);
      }
    </style>
    <!-- Start Main Slider -->
    <div class="main-slider" id="main-slider">
      <div class="slider big-slider slider-wrap slick-initialized slick-slider slick-dotted">
        <i class="prev-arrow fas fa-chevron-left slick-arrow"></i>
        <div class="slick-list draggable" style="height: 750px">
          <div class="slick-track" style="opacity: 1; width: 4047px">
            <div class="slide slick-bg bg-1 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1349px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
              <div class="container-fluid position-relative h-100">
                <div class="slider-content h-100">
                  <div class="row align-items-center h-100">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                      <h3 data-animation-in="fadeInUp" data-delay-in="1" class="fadeInUp animated" style="opacity: 1; animation-delay: 1s">
                        <span class="badge bg-warning text-dark">New</span>
                      </h3>
                      <h1 data-animation-in="fadeInUp" data-delay-in="1" class="fadeInUp animated" style="opacity: 1; animation-delay: 1s">Iron door</h1>
                      <div class="slide-info fadeInUp animated" data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 1; animation-delay: 1s">
                        <span>2021</span> <span class="radius">+18</span> <span>2h 6m</span>
                      </div>
                      <p data-animation-in="fadeInUp" data-delay-in="1" class="fadeInUp animated" style="opacity: 1; animation-delay: 1s">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                        the 1500s.
                      </p>
                      <div class="slider-buttons d-flex align-items-center fadeInUp animated" data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 1; animation-delay: 1s">
                        <a class="btn hvr-sweep-to-right" href="watching" tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                        <a class="btn hvr-sweep-to-right ml-3" href="./#" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
                      </div>
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Slider Content End -->
              </div>
              <!-- Container End -->
            </div>
            <div class="slide slick-bg bg-2 slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1349px; position: relative; left: -1349px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms cubic-bezier(0.7, 0, 0.3, 1) 0s" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
              <div class="container-fluid position-relative h-100">
                <div class="slider-content h-100">
                  <div class="row align-items-center h-100">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                      <h3 data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s" class="">
                        <span class="badge bg-warning text-dark">New</span>
                      </h3>
                      <h1 data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s" class="">The Earth</h1>
                      <div class="slide-info" data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s">
                        <span>2021</span> <span class="radius">+18</span> <span>2h 6m</span>
                      </div>
                      <p data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s" class="">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                        the 1500s.
                      </p>
                      <div class="slider-buttons d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s">
                        <a class="btn hvr-sweep-to-right" href="watching" tabindex="-1"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                        <a class="btn hvr-sweep-to-right ml-3" href="./#" tabindex="-1"><i class="fas fa-plus mr-2"></i>My List</a>
                      </div>
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Slider Content End -->
              </div>
              <!-- Container End -->
            </div>
            <div class="slide slick-bg bg-3 slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1349px; position: relative; left: -2698px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms cubic-bezier(0.7, 0, 0.3, 1) 0s" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
              <div class="container-fluid position-relative h-100">
                <div class="slider-content h-100">
                  <div class="row align-items-center h-100">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                      <h3 data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s" class="">
                        <span class="badge bg-warning text-dark">New</span>
                      </h3>
                      <h1 data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s" class="">City dreams</h1>
                      <div class="slide-info" data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s">
                        <span>2021</span> <span class="radius">+18</span> <span>2h 6m</span>
                      </div>
                      <p data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s" class="">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                        the 1500s.
                      </p>
                      <div class="slider-buttons d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1" style="opacity: 0; animation-delay: 1s">
                        <a class="btn hvr-sweep-to-right" href="watching" tabindex="-1"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                        <a class="btn hvr-sweep-to-right ml-3" href="./#" tabindex="-1"><i class="fas fa-plus mr-2"></i>My List</a>
                      </div>
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Slider Content End -->
              </div>
              <!-- Container End -->
            </div>
          </div>
        </div>
        <!-- Slide 1 End -->

        <!-- Slide 2 End -->

        <!-- Slide 3 End -->
        <i class="next-arrow fas fa-chevron-right slick-arrow"></i>
        <ul class="slick-dots" role="tablist">
          <li class="slick-active" role="presentation">
            <button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button>
          </li>
          <li role="presentation" class="">
            <button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button>
          </li>
          <li role="presentation" class="">
            <button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3</button>
          </li>
        </ul>
      </div>
      <!-- Slide Wrap End -->
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
                                <li>
                                  <a href="single.php?i=<?php echo $movie['id_movie']; ?>"><i class="fas fa-info"></i></a>
                                </li>
                              </ul>
                            </div>
                            <!-- Box Content End -->
                          </div>
                          <!-- Video Thumb End -->
                          <div class="video-content">
                            <h2 class="video-title"><a href="watching.php?i=<?php echo $movie['id_movie']; ?>"><?php echo $movie['title']; ?></a></h2>
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

                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Tap Pane 1 End -->
                <div id="pills-movies" class="tab-pane animated fadeInRight">
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/01(1).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">A dam wind</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-age">+18</span>
                            <span class="video-type">Action</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/02(1).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">the message</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-age">+18</span>
                            <span class="video-type">Action</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/03(1).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Verbal messages</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-age">+18</span>
                            <span class="video-type">Action</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/04(1).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">hard life</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-age">+18</span>
                            <span class="video-type">Action</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/05(1).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Destiny</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-age">+18</span>
                            <span class="video-type">Action</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/06(1).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Paper hero</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-age">+18</span>
                            <span class="video-type">Action</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Tap Pane 2 End -->
                <div id="pills-shows" class="tab-pane animated fadeInRight">
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/01(2).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">the border</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/02(2).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">life or death</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/03(2).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Out of life</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/04(2).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The Month</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/05(2).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The Journey</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/06(2).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Sheets gone</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
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
              <h2 class="block-title">Pupular Movies</h2>
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
                            <!-- <li>
                              <a href="./#"><i class="fas fa-plus"></i></a>
                            </li> -->
                            <li>
                              <a href="single.php?w=<?php echo $movie['id_movie']; ?>"><i class="fas fa-info"></i></a>
                            </li>
                          </ul>
                        </div>
                        <!-- Box Content End -->
                      </div>
                      <!-- Video Thumb End -->
                      <div class="video-content">
                        <h2 class="video-title">
                          <a href="single"><?php echo $movie['title']; ?></a>
                        </h2>
                        <?php
                        $hours = floor($movie['duration'] / 3600);
                        $minutes = floor(($movie['duration'] / 60) % 60);
                        $duration = $hours . "h" . $minutes . "m";
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
                      <img alt="" class="entity-img" src="<?php echo $movie['title']; ?>" />
                      <div class="top-badge">
                        <div class="video-badge">
                          <img alt="" class="img-fluid" src="../img/top-movies.png" />
                        </div>
                      </div>
                      <div class="content">
                        <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px) scale(1)">
                          <?php echo $movie['title']; ?>
                        </p>
                        <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px)">
                          <?php echo $movie['description']; ?></span>
                        <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px) scale(1)">
                          <a class="btn hvr-sweep-to-right" href="watching.php?w=<?php echo $movie['id_movie']; ?>" tabindex="0"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                          <!-- <a class="btn hvr-sweep-to-right ml-3" href="./#" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a> -->
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
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                  <div class="video-block">
                    <div class="video-thumb position-relative thumb-overlay">
                      <a href="./#"><img alt="" class="img-fluid" src="../img/01(5).jpg" /></a>
                      <div class="box-content">
                        <ul class="icon">
                          <li>
                            <a href="watching"><i class="fas fa-play"></i></a>
                          </li>
                          <li>
                            <a href="./#"><i class="fas fa-plus"></i></a>
                          </li>
                          <li>
                            <a href="single"><i class="fas fa-info"></i></a>
                          </li>
                        </ul>
                      </div>
                      <!-- Box Content End -->
                    </div>
                    <!-- Video Thumb End -->
                    <div class="video-content">
                      <h2 class="video-title">
                        <a href="single">Freedom</a>
                      </h2>
                      <div class="video-info d-flex align-items-center">
                        <span class="video-year">2021</span> <span class="video-age">+18</span>
                        <span class="video-type">Action</span>
                      </div>
                    </div>
                    <!-- video Content End -->
                  </div>
                  <!-- video Block End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                  <div class="video-block">
                    <div class="video-thumb position-relative thumb-overlay">
                      <a href="./#"><img alt="" class="img-fluid" src="../img/02(5).jpg" /></a>
                      <div class="box-content">
                        <ul class="icon">
                          <li>
                            <a href="watching"><i class="fas fa-play"></i></a>
                          </li>
                          <li>
                            <a href="./#"><i class="fas fa-plus"></i></a>
                          </li>
                          <li>
                            <a href="single"><i class="fas fa-info"></i></a>
                          </li>
                        </ul>
                      </div>
                      <!-- Box Content End -->
                    </div>
                    <!-- Video Thumb End -->
                    <div class="video-content">
                      <h2 class="video-title">
                        <a href="single">the world</a>
                      </h2>
                      <div class="video-info d-flex align-items-center">
                        <span class="video-year">2021</span> <span class="video-age">+18</span>
                        <span class="video-type">Action</span>
                      </div>
                    </div>
                    <!-- video Content End -->
                  </div>
                  <!-- video Block End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                  <div class="video-block">
                    <div class="video-thumb position-relative thumb-overlay">
                      <a href="./#"><img alt="" class="img-fluid" src="../img/03(5).jpg" /></a>
                      <div class="box-content">
                        <ul class="icon">
                          <li>
                            <a href="watching"><i class="fas fa-play"></i></a>
                          </li>
                          <li>
                            <a href="./#"><i class="fas fa-plus"></i></a>
                          </li>
                          <li>
                            <a href="single"><i class="fas fa-info"></i></a>
                          </li>
                        </ul>
                      </div>
                      <!-- Box Content End -->
                    </div>
                    <!-- Video Thumb End -->
                    <div class="video-content">
                      <h2 class="video-title">
                        <a href="single">The gang</a>
                      </h2>
                      <div class="video-info d-flex align-items-center">
                        <span class="video-year">2021</span> <span class="video-age">+18</span>
                        <span class="video-type">Action</span>
                      </div>
                    </div>
                    <!-- video Content End -->
                  </div>
                  <!-- video Block End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                  <div class="video-block">
                    <div class="video-thumb position-relative thumb-overlay">
                      <a href="./#"><img alt="" class="img-fluid" src="../img/04(5).jpg" /></a>
                      <div class="box-content">
                        <ul class="icon">
                          <li>
                            <a href="watching"><i class="fas fa-play"></i></a>
                          </li>
                          <li>
                            <a href="./#"><i class="fas fa-plus"></i></a>
                          </li>
                          <li>
                            <a href="single"><i class="fas fa-info"></i></a>
                          </li>
                        </ul>
                      </div>
                      <!-- Box Content End -->
                    </div>
                    <!-- Video Thumb End -->
                    <div class="video-content">
                      <h2 class="video-title">
                        <a href="single">World of war</a>
                      </h2>
                      <div class="video-info d-flex align-items-center">
                        <span class="video-year">2021</span> <span class="video-age">+18</span>
                        <span class="video-type">Action</span>
                      </div>
                    </div>
                    <!-- video Content End -->
                  </div>
                  <!-- video Block End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                  <div class="video-block">
                    <div class="video-thumb position-relative thumb-overlay">
                      <a href="./#"><img alt="" class="img-fluid" src="../img/05(5).jpg" /></a>
                      <div class="box-content">
                        <ul class="icon">
                          <li>
                            <a href="watching"><i class="fas fa-play"></i></a>
                          </li>
                          <li>
                            <a href="./#"><i class="fas fa-plus"></i></a>
                          </li>
                          <li>
                            <a href="single"><i class="fas fa-info"></i></a>
                          </li>
                        </ul>
                      </div>
                      <!-- Box Content End -->
                    </div>
                    <!-- Video Thumb End -->
                    <div class="video-content">
                      <h2 class="video-title">
                        <a href="single">Happy holiday</a>
                      </h2>
                      <div class="video-info d-flex align-items-center">
                        <span class="video-year">2021</span> <span class="video-age">+18</span>
                        <span class="video-type">Action</span>
                      </div>
                    </div>
                    <!-- video Content End -->
                  </div>
                  <!-- video Block End -->
                </div>
                <!-- Col End -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                  <div class="video-block">
                    <div class="video-thumb position-relative thumb-overlay">
                      <a href="./#"><img alt="" class="img-fluid" src="../img/06(4).jpg" /></a>
                      <div class="box-content">
                        <ul class="icon">
                          <li>
                            <a href="watching"><i class="fas fa-play"></i></a>
                          </li>
                          <li>
                            <a href="./#"><i class="fas fa-plus"></i></a>
                          </li>
                          <li>
                            <a href="single"><i class="fas fa-info"></i></a>
                          </li>
                        </ul>
                      </div>
                      <!-- Box Content End -->
                    </div>
                    <!-- Video Thumb End -->
                    <div class="video-content">
                      <h2 class="video-title">
                        <a href="single">weekend</a>
                      </h2>
                      <div class="video-info d-flex align-items-center">
                        <span class="video-year">2021</span> <span class="video-age">+18</span>
                        <span class="video-type">Action</span>
                      </div>
                    </div>
                    <!-- video Content End -->
                  </div>
                  <!-- video Block End -->
                </div>
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
      <!-- Start Last Seasons Section -->
      <section class="last-seasons pb-0">
        <div class="last-season" style="background-image: linear-gradient(to top, #202020, rgb(2 2 2 / 90%)), url(../img/best-series.jpg)">
          <div class="container-fluid">
            <div class="season-header text-center">
              <h5 class="mb-4">featured</h5>
              <h2 class="mb-4">Best Series</h2>
              <p class="mb-4">News Season 5 Just flown in Watch and debate.</p>
            </div>
            <!-- Season Header End -->
            <div class="season-tabs">
              <ul class="nav nav-pills mb-3 justify-content-center mb-5" id="pills-tab-seasons" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" data-toggle="pill" href="./#pills-drama" role="tab" aria-selected="true">Drama</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" data-toggle="pill" href="./#pills-action" role="tab" aria-selected="false">Action</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" data-toggle="pill" href="./#pills-romance" role="tab" aria-selected="false">Romance</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tab-Content">
                <div id="pills-drama" class="tab-pane animated fadeInRight show active">
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/01(6).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">A happy life</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/02(6).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">A mirage</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/03(6).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Box</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/04(6).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The price</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/05(6).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Sand</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/06(5).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The sky</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Tab Pane 1 End -->
                <div id="pills-action" class="tab-pane animated fadeInRight">
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/01(7).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The End</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/02(7).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">the beginning</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/03(7).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The Search</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/04(7).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The Treasures</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/05(7).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Problems</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/06(6).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">life is Beautiful</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Tab Pane 2 End -->
                <div id="pills-romance" class="tab-pane animated fadeInRight">
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/01(8).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">End of Sorrows</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/02(8).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">the thief</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/03(8).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Millionaire</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/04(8).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The Dreams</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/05(8).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">Black Color</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                      <div class="video-block">
                        <div class="video-thumb position-relative thumb-overlay">
                          <a href="./#"><img alt="" class="img-fluid" src="../img/06(7).jpg" /></a>
                          <div class="box-content">
                            <ul class="icon">
                              <li>
                                <a href="watching"><i class="fas fa-play"></i></a>
                              </li>
                              <li>
                                <a href="./#"><i class="fas fa-plus"></i></a>
                              </li>
                              <li>
                                <a href="single"><i class="fas fa-info"></i></a>
                              </li>
                            </ul>
                          </div>
                          <!-- Box Content End -->
                        </div>
                        <!-- Video Thumb End -->
                        <div class="video-content">
                          <h2 class="video-title">
                            <a href="single">The Ocean</a>
                          </h2>
                          <div class="video-info d-flex align-items-center">
                            <span class="video-year">2021</span>
                            <span class="video-seasons">4 Season</span>
                          </div>
                        </div>
                        <!-- video Content End -->
                      </div>
                      <!-- video Block End -->
                    </div>
                    <!-- Col End -->
                  </div>
                  <!-- Row End -->
                </div>
                <!-- Tab Pane 3 End -->
              </div>
              <!-- Tab Content End -->
            </div>
            <!-- Season tabs End -->
          </div>
          <!-- Container End -->
        </div>
        <!-- Last Season End -->
      </section>
      <!-- Last Seasons Section End -->
      <!-- Start Suggested Section -->
      <section class="suggested pt-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Suggested For You</h2>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="./#"><img alt="" class="img-fluid" src="../img/01(9).jpg" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="./#"><i class="fas fa-plus"></i></a>
                      </li>
                      <li>
                        <a href="single"><i class="fas fa-info"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- Box Content End -->
                </div>
                <!-- Video Thumb End -->
                <div class="video-content">
                  <h2 class="video-title">
                    <a href="single">The Colors</a>
                  </h2>
                  <div class="video-info d-flex align-items-center">
                    <span class="video-year">2021</span> <span class="video-age">+18</span>
                    <span class="video-type">Action</span>
                  </div>
                </div>
                <!-- video Content End -->
              </div>
              <!-- video Block End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="./#"><img alt="" class="img-fluid" src="../img/02(9).jpg" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="./#"><i class="fas fa-plus"></i></a>
                      </li>
                      <li>
                        <a href="single"><i class="fas fa-info"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- Box Content End -->
                </div>
                <!-- Video Thumb End -->
                <div class="video-content">
                  <h2 class="video-title">
                    <a href="single">The Devastation</a>
                  </h2>
                  <div class="video-info d-flex align-items-center">
                    <span class="video-year">2021</span> <span class="video-age">+18</span>
                    <span class="video-type">Action</span>
                  </div>
                </div>
                <!-- video Content End -->
              </div>
              <!-- video Block End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="./#"><img alt="" class="img-fluid" src="../img/03(9).jpg" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="./#"><i class="fas fa-plus"></i></a>
                      </li>
                      <li>
                        <a href="single"><i class="fas fa-info"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- Box Content End -->
                </div>
                <!-- Video Thumb End -->
                <div class="video-content">
                  <h2 class="video-title">
                    <a href="single">The Beauty</a>
                  </h2>
                  <div class="video-info d-flex align-items-center">
                    <span class="video-year">2021</span> <span class="video-age">+18</span>
                    <span class="video-type">Action</span>
                  </div>
                </div>
                <!-- video Content End -->
              </div>
              <!-- video Block End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="./#"><img alt="" class="img-fluid" src="../img/04(9).jpg" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="./#"><i class="fas fa-plus"></i></a>
                      </li>
                      <li>
                        <a href="single"><i class="fas fa-info"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- Box Content End -->
                </div>
                <!-- Video Thumb End -->
                <div class="video-content">
                  <h2 class="video-title">
                    <a href="single">The Silence</a>
                  </h2>
                  <div class="video-info d-flex align-items-center">
                    <span class="video-year">2021</span> <span class="video-age">+18</span>
                    <span class="video-type">Action</span>
                  </div>
                </div>
                <!-- video Content End -->
              </div>
              <!-- video Block End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="./#"><img alt="" class="img-fluid" src="../img/05(9).jpg" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="./#"><i class="fas fa-plus"></i></a>
                      </li>
                      <li>
                        <a href="single"><i class="fas fa-info"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- Box Content End -->
                </div>
                <!-- Video Thumb End -->
                <div class="video-content">
                  <h2 class="video-title">
                    <a href="single">the door is open</a>
                  </h2>
                  <div class="video-info d-flex align-items-center">
                    <span class="video-year">2021</span> <span class="video-age">+18</span>
                    <span class="video-type">Action</span>
                  </div>
                </div>
                <!-- video Content End -->
              </div>
              <!-- video Block End -->
            </div>
            <!-- Col End -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="./#"><img alt="" class="img-fluid" src="../img/06(8).jpg" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="./#"><i class="fas fa-plus"></i></a>
                      </li>
                      <li>
                        <a href="single"><i class="fas fa-info"></i></a>
                      </li>
                    </ul>
                  </div>
                  <!-- Box Content End -->
                </div>
                <!-- Video Thumb End -->
                <div class="video-content">
                  <h2 class="video-title">
                    <a href="single">The Journey</a>
                  </h2>
                  <div class="video-info d-flex align-items-center">
                    <span class="video-year">2021</span> <span class="video-age">+18</span>
                    <span class="video-type">Action</span>
                  </div>
                </div>
                <!-- video Content End -->
              </div>
              <!-- video Block End -->
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
        </div>
        <!-- Container End -->
      </section>
      <!-- Suggested Section End -->
    </div>
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