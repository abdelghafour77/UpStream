<?php
session_start();
require_once '../view/movieView.php';
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';
require_once '../view/qualityView.php';
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
    // die(var_dump($fMovie));
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

if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    $title = "SEARCHING FOR :" . $keyword;
    $getMovie = new MovieView();
    $Movie = $getMovie->findMovie($keyword);
    // die(var_dump($Movie));
} elseif (isset($_GET['cat'])) {
    foreach ($allCategory as $cat) {
        if ($cat['name'] == ucfirst(strtolower($_GET['cat']))) {
            $title = "Category : " . $cat['name'];
            $keyword = $cat['id_category'];
            $getMovie = new MovieView();
            $Movie = $getMovie->findCatMovie($keyword);
        }
    }
} elseif (isset($_GET['year'])) {
    $title = "Year : " . $_GET['year'];
    $keyword = $_GET['year'];
    $getMovie = new MovieView();
    $Movie = $getMovie->findYearMovie($keyword);
} elseif (isset($_GET['quality'])) {
    foreach ($allQuality as $quality) {
        if ($quality['name'] == $_GET['quality']) {
            $title = "Quality : " . $quality['name'];
            $keyword = $quality['id_quality'];
            $getMovie = new MovieView();
            $Movie = $getMovie->findQualityMovie($keyword);
        }
    }
} else {
    header('location: index');
}
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
                            <h2 class="block-title"><?php echo $title; ?></h2>
                            <div class="row">
                                <?php
                                if (count($Movie) > 0) {
                                    foreach ($Movie as $movie) {
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
                                                    <h2 class="video-title">
                                                        <a href="watching.php?w=<?php echo $movie['id_movie']; ?>"><?php echo $movie['title']; ?></a>
                                                    </h2>
                                                    <div class="video-info d-flex align-items-center">
                                                        <span class="video-year"><?php echo $movie['date']; ?></span>
                                                        <?php
                                                        $hours = floor($movie['duration'] / 3600);
                                                        $minutes = floor(($movie['duration'] / 60) % 60);
                                                        $duration = $hours . "h " . $minutes . "m";
                                                        ?>
                                                        <span class="video-age"><?php echo $duration; ?></span>

                                                        <span class="video-type">
                                                            <?php
                                                            foreach ($allQuality as $quality) {
                                                                if ($quality['id_quality'] == $movie['quality']) {
                                                                    echo '<span class="video-type">' . $quality["name"] . '</span>';
                                                                }
                                                            } ?>
                                                        </span>
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