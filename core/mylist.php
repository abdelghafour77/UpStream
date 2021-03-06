<?php
session_start();
require_once '../view/movieView.php';
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';
require_once '../view/qualityView.php';
require_once '../view/myListView.php';
require_once '../controller/myListController.php';

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
    $fMovie = $getMovie->getAllList($id_user);
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

$getQuality = new QualityView();
$allQuality = $getQuality->getQuality();

$getMovie = new MovieView();
$sixMovie = $getMovie->getSixMovie();

$getMovie = new MovieView();
$someMovie = $getMovie->getSomeMovie();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My List</title>
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
                            <h2 class="block-title">My LIST </h2>
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
                                                                <a href="<?php echo $_SERVER['PHP_SELF'] . '?tld=' . $movie['id_movie']; ?>"><i class="fas fa-minus"></i></a>
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
                                                    <!-- video Content End -->
                                                </div>
                                            </div>

                                            <!-- video Block End -->
                                        </div>
                                    <?php }
                                } else {
                                    ?>
                                    <p>Your List Is Empty</p>
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