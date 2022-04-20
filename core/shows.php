<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shows</title>
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
    <div class="swiper-container swiper-container-coverflow swiper-container-3d swiper-container-horizontal" style="cursor: grab">
      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1011.75px, 0px, 0px); perspective-origin: 1686.25px 50%">
        <div class="swiper-slide swiper-bg swiper-slide-duplicate" style="
              background-image: url('img/04.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(100deg);
              z-index: -1;
            " data-swiper-slide-index="3">
          <img src="./img/04.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(-30%, 0px, 0px) scale(0.7)">
              A thousand months
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(-20%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(-30%, 0px, 0px) scale(0.7)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 2; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms"></div>
        </div>
        <div class="swiper-slide swiper-bg swiper-slide-duplicate swiper-slide-prev" style="
              background-image: url('img/05.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -99.9259px) rotateX(0deg) rotateY(49.9629deg);
              z-index: 0;
            " data-swiper-slide-index="4">
          <img src="./img/05.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(-29.9778%, 0px, 0px) scale(0.700222)">
              The Great Journey
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(-19.9852%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(-29.9778%, 0px, 0px) scale(0.700222)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0.999259; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms"></div>
        </div>
        <div class="swiper-slide swiper-bg swiper-slide-active" style="
              background-image: url('img/01.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);
              z-index: 1;
            " data-swiper-slide-index="0">
          <img src="./img/01.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px) scale(1)">
              the border
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(0%, 0px, 0px) scale(1)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms"></div>
        </div>
        <!-- Slide 1 End -->
        <div class="swiper-slide swiper-bg swiper-slide-next" style="
              background-image: url('img/02.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -100.074px) rotateX(0deg) rotateY(-50.0371deg);
              z-index: 0;
            " data-swiper-slide-index="1">
          <img src="./img/02.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              life or death
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(20%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 1.00074; transition-duration: 0ms"></div>
        </div>
        <!-- Slide 2 End -->
        <div class="swiper-slide swiper-bg" style="
              background-image: url('img/03.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(-100deg);
              z-index: -1;
            " data-swiper-slide-index="2">
          <img src="./img/03.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              Out of life
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(20%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 2; transition-duration: 0ms"></div>
        </div>
        <!-- Slide 3 End -->
        <div class="swiper-slide swiper-bg" style="
              background-image: url('img/04.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -300.074px) rotateX(0deg) rotateY(-150.037deg);
              z-index: -2;
            " data-swiper-slide-index="3">
          <img src="./img/04.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              A thousand months
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(20%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 3.00074; transition-duration: 0ms"></div>
        </div>
        <!-- Slide 4 End -->
        <div class="swiper-slide swiper-bg swiper-slide-duplicate-prev" style="
              background-image: url('img/05.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -400px) rotateX(0deg) rotateY(-200deg);
              z-index: -3;
            " data-swiper-slide-index="4">
          <img src="./img/05.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              The Great Journey
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(20%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 4; transition-duration: 0ms"></div>
        </div>
        <!-- Slide 5 End -->
        <div class="swiper-slide swiper-bg swiper-slide-duplicate swiper-slide-duplicate-active" style="
              background-image: url('img/01.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -500.074px) rotateX(0deg) rotateY(-250.037deg);
              z-index: -4;
            " data-swiper-slide-index="0">
          <img src="./img/01.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              the border
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(20%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 5.00074; transition-duration: 0ms"></div>
        </div>
        <div class="swiper-slide swiper-bg swiper-slide-duplicate swiper-slide-duplicate-next" style="
              background-image: url('img/02.jpg');
              width: 674.5px;
              transition-duration: 0ms;
              transform: translate3d(0px, 0px, -600px) rotateX(0deg) rotateY(-300deg);
              z-index: -5;
            " data-swiper-slide-index="1">
          <img src="./img/02.jpg" class="entity-img" alt="" />
          <div class="top-badge">
            <div class="video-badge">
              <img class="img-fluid" src="./img/top-series.png" alt="" />
            </div>
          </div>
          <div class="content">
            <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              life or death
            </p>
            <span class="caption mb-4" data-swiper-parallax="-20%" style="transition-duration: 0ms; transform: translate3d(20%, 0px, 0px)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen book.</span>
            <div class="slider-buttons d-flex align-items-center" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7" style="transition-duration: 0ms; transform: translate3d(30%, 0px, 0px) scale(0.7)">
              <a href="watching" class="btn hvr-sweep-to-right" tabindex="0"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
              <a href="shows" class="btn hvr-sweep-to-right ml-3" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>
            </div>
          </div>
          <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms"></div>
          <div class="swiper-slide-shadow-right" style="opacity: 6; transition-duration: 0ms"></div>
        </div>
      </div>
      <!-- Swiper Wrapper End -->
      <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide"></div>
      <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide"></div>
      <!-- Navigation Buttons End -->
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <!-- End Swiper Slider -->
    <!-- Start Main Content -->
    <div class="main-content">
      <!-- Start Worth Watching Section -->
      <section class="worth-watching">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Worth Watching</h2>
              <!-- Start Pupular Slider -->
              <div id="pupular-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                <!-- Item 1 End -->

                <!-- Item 2 End -->

                <!-- Item 3 End -->

                <!-- Item 4 End -->

                <!-- Item 5 End -->

                <!-- Item 6 End -->

                <!-- Item 7 End -->
                <!-- Owl Slider End -->
                <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(-1179px, 0px, 0px); transition: all 0.25s ease 0s; width: 4009px">
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/03(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The Box</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/04(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The price</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/05(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The Sand</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/06.jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The sky</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/07.jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">the border</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/01(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">A happy life</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/02(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">A mirage</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/03(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The Box</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/04(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The price</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/05(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The Sand</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/06.jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The sky</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/07.jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">the border</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/01(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">A happy life</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/02(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">A mirage</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/03(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The Box</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/04(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The price</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 205.8px; margin-right: 30px">
                      <div class="item">
                        <div class="video-block">
                          <div class="video-thumb position-relative thumb-overlay">
                            <a href="shows"><img class="img-fluid" src="./img/05(1).jpg" alt="" /></a>
                            <div class="box-content">
                              <ul class="icon">
                                <li>
                                  <a href="watching"><i class="fas fa-play"></i></a>
                                </li>
                                <li>
                                  <a href="shows"><i class="fas fa-plus"></i></a>
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
                            <h2 class="video-title"><a href="single">The Sand</a></h2>
                            <div class="video-info d-flex align-items-center">
                              <span class="video-year">2021</span>
                              <span class="video-seasons">4 Season</span>
                            </div>
                          </div>
                          <!-- video Content End -->
                        </div>
                        <!-- video Block End -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-nav disabled">
                  <div class="owl-prev">prev</div>
                  <div class="owl-next">next</div>
                </div>
                <div class="owl-dots">
                  <div class="owl-dot active"><span></span></div>
                  <div class="owl-dot"><span></span></div>
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
      <!-- Worth Watching Section End -->
      <!-- Start Latest in Series Section -->
      <section class="latest-series">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Latest in Series</h2>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="shows"><img class="img-fluid" src="./img/01(2).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">the border</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/02(2).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">life or death</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/03(2).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">Out of life</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/04(2).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">A thousand months</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/05(2).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">The Great Journey</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/06(1).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">Sheets gone</a></h2>
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
        <!-- Container End -->
      </section>
      <!-- Latest in Series Section End -->
      <!-- Start Variety Shows Section -->
      <section class="variety-shows">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="block-title">Variety Shows</h2>
            </div>
            <!-- Col End -->
          </div>
          <!-- Row End -->
          <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
              <div class="video-block">
                <div class="video-thumb position-relative thumb-overlay">
                  <a href="shows"><img class="img-fluid" src="./img/01(3).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">The End</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/02(3).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">the beginning</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/03(3).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">The Search</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/04(3).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">The Treasures</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/05(3).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">Problems</a></h2>
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
                  <a href="shows"><img class="img-fluid" src="./img/06(2).jpg" alt="" /></a>
                  <div class="box-content">
                    <ul class="icon">
                      <li>
                        <a href="watching"><i class="fas fa-play"></i></a>
                      </li>
                      <li>
                        <a href="shows"><i class="fas fa-plus"></i></a>
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
                  <h2 class="video-title"><a href="single">life is Beautiful</a></h2>
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
        <!-- Container End -->
      </section>
      <!-- Variety Shows Section End -->
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