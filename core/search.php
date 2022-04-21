<?php
session_start();
require_once '../view/movieView.php';
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';

if (isset($_GET['search'])) {
    $keyword = $_GET['search'];

    $getMovie = new MovieView();
    $fMovie = $getMovie->findMovie($keyword);
    // die(var_dump($Movie));
} else {
    header('location: index');
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
    <title>UpStream</title>
    <?php
    require_once '../include/head.php';
    ?>
</head>

<body class="loaded">
    <div class="main" id="main">
        <?php
        require_once '../include/header.php';
        ?>
        <!-- Start Main Content -->
        <div class="main-content">
            <!-- Start Trending Section -->
            <section class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title">SEARCHING FOR : <?php echo $keyword; ?></h2>
                            <div class="row">
                                <?php
                                if (count($fMovie) > 0) {
                                    foreach ($fMovie as $movie) {
                                ?>
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                            <div class="video-block">
                                                <div class="video-thumb position-relative thumb-overlay">
                                                    <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><img alt="" class="img-fluid" src="<?php echo $movie['cover']; ?>" /></a>
                                                    <div class="box-content">
                                                        <ul class="icon">
                                                            <li>
                                                                <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><i class="fas fa-play"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="./#"><i class="fas fa-plus"></i></a>
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
                                                        <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><?php echo $movie['title']; ?></a>
                                                    </h2>
                                                    <div class="video-info d-flex align-items-center">
                                                        <span class="video-year"><?php echo $movie['date']; ?></span> <span class="video-age">+18</span>
                                                        <?php
                                                        $hours = floor($movie['duration'] / 3600);
                                                        $minutes = floor(($movie['duration'] / 60) % 60);
                                                        $duration = $hours . "h " . $minutes . "m";
                                                        ?>
                                                        <span class="video-type"><?php echo $duration; ?></span>
                                                    </div>
                                                </div>
                                                <!-- video Content End -->
                                            </div>
                                            <!-- video Block End -->
                                        </div>
                                    <?php }
                                } else {
                                    ?>
                                    <p>NOT FOUND</p>
                                <?php
                                } ?>
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