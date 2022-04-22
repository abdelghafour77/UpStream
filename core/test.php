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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once '../include/head.php';
    ?>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Animate Styles -->
    <link href="../styles/animate.css" rel="stylesheet" />
    <!-- Demo styles -->
    <style>
        /** Click on ⚙️ to view CSS libraries used - https://unpkg.com/swiper/swiper-bundle.min.css CSS Used below is just to prettify demo. */
        .swiper-container {
            --swiper-navigation-color: #fff;
            --swiper-theme-color: #fff;
            height: 50vh;
            min-height: 640px;
            max-height: 960px;
        }

        .swiper-slide {
            background-color: #0f0f0f;
        }

        .swiper-slide::before {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 70%;
            height: 100%;
            background-color: #3d405b;
            z-index: 1;
            background: linear-gradient(90deg, rgb(39 40 41) 0%, rgb(39 40 41) 35%, rgba(83, 100, 141, 0) 100%);
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* opacity: 0.75; */
        }

        .swiper-slide__title {
            font-family: "Montserrat", sans-serif;
            color: #fff;
            position: absolute;
            /* left: 10%; */
            /* top: 20%; */
            transform: translate(0, -50%);
            /* z-index: 2; */
            /* letter-spacing: -2px; */
            /* opacity: 0.5; */
            transition: 0.3s;
            z-index: 2111;
        }

        .swiper-slide__text {
            font-family: "Montserrat", sans-serif;
            color: #fff;
            /* position: absolute; */
            /* left: 10%; */
            /* top: 60%; */
            transform: translate(0, -50%);
            z-index: 2;
            /* letter-spacing: -2px; */
            /* opacity: 0.5; */
            transition: 0.3s;
            z-index: 99;
        }

        .swiper-slide__text.slider-buttons {
            font-family: "Montserrat", sans-serif;
            color: #fff;
            position: absolute;
            /* left: 10%; */
            /* top: 80%; */
            transform: translate(0, -50%);
            z-index: 2;
            /* letter-spacing: -2px; */
            /* opacity: 0.5; */
            transition: 0.3s;
            z-index: 99;
        }

        .swiper-slide h1 {
            font-size: 5rem;
            z-index: 211;
        }

        .swiper-slide p {
            font-size: 1rem;
            z-index: 2;
        }

        .swiper-slide h2 {
            font-size: 4rem;
            z-index: 2;
        }

        .swiper-slide.swiper-slide-active #0f0f0f__title {
            opacity: 1;

        }

        /** Just some extra styles non-related to the swiper */
    </style>
</head>

<body>

    <!-- Swiper -->
    <section>
        <!-- Slider main container -->
        <div class="swiper-container">
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
                            <h1 class="swiper-slide__titlea fadeInUp animated"><?php echo $movie['title']; ?></h1>
                            <div class="slide-info swiper-slide__text fadeInUp animated">
                                <span></span> <span class="radius">+18</span> <span>2h 6m</span>
                            </div>
                            <p class="fadeInUp animated swiper-slide__text col-xl-6 col-lg-12 col-md-12">
                                <?php echo $movie['description']; ?>
                            </p>
                            <div class="slider-buttons d-flex align-items-center fadeInUp animated">
                                <a class="btn hvr-sweep-to-right" href="watching"><i aria-hidden="true" class="fa fa-play mr-2"></i>Play Now</a>
                                <a class="btn hvr-sweep-to-right ml-3" href="./#"><i class="fas fa-plus mr-2"></i>My List</a>
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
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 1,
            effect: "fade",
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>