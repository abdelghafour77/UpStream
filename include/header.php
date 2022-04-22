<?php
require_once '../view/movieView.php';

$getMovie = new MovieView();
$NotificationMovie = $getMovie->getMovieNotification();
?>
<!-- Start Mobile Header -->
<header class="mobile-header">
    <div class="mobile-header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-logo text-center">
                        <a href="../index"><img alt="" class="img-fluid" src="../img/header-logo.png" /></a>
                    </div>
                </div>
                <!-- Logo Col End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Content End -->
</header>
<!-- Mobile Header End -->
<!-- Start Header -->
<header class="main-nav clearfix is-sticky">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-9 pl-0">
                <!-- Start Navigation -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="../index"><img alt="" class="img-fluid" src="../img/header-logo.png" /></a>
                    <!-- Logo End -->
                    <div class="site-nav-inner float-left">
                        <button aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                            <span class="fa fa-bars"></span>
                        </button>
                        <!-- Navbar Toggler End -->
                        <div class="navbar-collapse navbar-responsive-collapse collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="../core/index">Home</a>
                                </li>
                                <!-- Nav Item 1 End -->
                                <li class="nav-item">
                                    <a class="nav-link" href="../core/movies">Movies</a>
                                </li>
                                <!-- Nav Item 2 End -->
                                <?php if (isset($_SESSION['id_user'])) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../core/mylist">My list</a>
                                    </li>
                                <?php } ?>
                                <!-- Nav Item 3 End -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link menu-dropdown" data-toggle="dropdown" href="./#">More <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu fade-up" role="menu">
                                        <li>
                                            <a class="dropdown-item" href="../core/about">About Us</a>
                                        </li>
                                        <!-- Sub Nav Item 1 End -->
                                        <li>
                                            <a class="dropdown-item" href="../core/contact-us">Contact Us</a>
                                        </li>
                                        <!-- Sub Nav Item 2 End -->
                                        <li>
                                            <a class="dropdown-item" href="../core/404">404</a>
                                        </li>
                                        <!-- Sub Nav Item 3 End -->
                                        <!-- <li>
                                            <a class="dropdown-item" href="./login">Login</a>
                                        </li> -->
                                        <!-- Sub Nav Item 4 End -->
                                        <!-- <li>
                                            <a class="dropdown-item" href="./sign-up">Signup</a>
                                        </li> -->
                                        <!-- Sub Nav Item 5 End -->
                                    </ul>
                                    <!-- Dropdown End -->
                                </li>
                                <!-- Nav Item 4 End -->
                            </ul>
                            <!-- Nav UL End -->
                        </div>
                        <!-- Navbar Collapse End -->
                    </div>
                    <!-- Site Nav Inner End -->
                </nav>
                <!-- Navigation End -->
            </div>
            <!-- Col End -->
            <div class="col-lg-3 text-right right-menu-wrap">
                <ul class="nav d-flex align-items-center list-inline m-0 float-right">
                    <li class="nav-item">
                        <div class="nav-search">
                            <a href="#search" class="nav-link ">
                                <i class="fa-solid fa-magnifying-glass">
                                </i>
                            </a>
                        </div>
                        <!-- <div class="container ">
                            <input type="text" placeholder="Search...">
                            <div class="search"></div>
                        </div> -->
                        <!-- <div class="nav-search">
                            <a class="nav-link modal-popup" href="index.php#search-popup"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div> -->
                        <!-- Search Icon End -->
                    </li>
                    <li class="nav-item dropdown">
                        <div class="nav-notification">
                            <a class="nav-link menu-dropdown" data-toggle="dropdown" href="./#"><i class="fa-solid fa-bell"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right fade-up" role="menu">
                                <?php
                                foreach ($NotificationMovie as $movie) {

                                    if (!empty($movie["last_update"])) {

                                        $timestamp = strtotime($movie["last_update"]);

                                        $strTime = array("second", "minute", "hour", "day", "month", "year");
                                        $length = array("60", "60", "24", "30", "12", "10");

                                        $currentTime = time();
                                        if ($currentTime >= $timestamp) {
                                            $diff     = time() - $timestamp;
                                            for ($i = 0; $diff >= $length[$i] && $i < count($length) - 1; $i++) {
                                                $diff = $diff / $length[$i];
                                            }

                                            $diff = round($diff);
                                            $ago = $diff . " " . $strTime[$i] . " ago ";
                                        }
                                    }

                                ?>
                                    <li>
                                        <a class="dropdown-item" href="../core/watching.php?w=<?php echo $movie['id_movie']; ?>">
                                            <div class="notification-card media">
                                                <div class="notification-thumb">
                                                    <img alt="" class="img-fluid" src="<?php echo $movie['cover']; ?>" />
                                                </div>
                                                <!-- Notification thumb end -->
                                                <div class="notification-content media-body">
                                                    <h2 class="notification-title"><?php echo $movie['title']; ?></h2>
                                                    <span class="date"><i class="far fa-clock"></i> <?php echo $ago; ?></span>
                                                </div>
                                                <!-- Notification Content end -->
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                            <!-- Notification List End -->
                        </div>
                        <!-- Notification End -->
                    </li>
                    <!-- Nav Item 4 End -->
                    <li class="nav-item">
                        <div class="nav-filter">
                            <?php if (isset($_SESSION['admin'])) {
                                if ($_SESSION['admin'] == 1) {
                            ?>

                                    <a class="nav-link openbtn" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" id="dropdown-account" role="button">
                                        <svg class="filter-animate" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24 14v-4c-1.619 0-2.906.267-3.705-1.476-.697-1.663.604-2.596 1.604-3.596l-2.829-2.828c-1.033 1.033-1.908 2.307-3.666 1.575-1.674-.686-1.404-2.334-1.404-3.675h-4c0 1.312.278 2.985-1.404 3.675-1.761.733-2.646-.553-3.667-1.574l-2.829 2.828c1.033 1.033 2.308 1.909 1.575 3.667-.348.849-1.176 1.404-2.094 1.404h-1.581v4c1.471 0 2.973-.281 3.704 1.475.698 1.661-.604 2.596-1.604 3.596l2.829 2.829c1-1 1.943-2.282 3.667-1.575 1.673.687 1.404 2.332 1.404 3.675h4c0-1.244-.276-2.967 1.475-3.704 1.645-.692 2.586.595 3.596 1.604l2.828-2.829c-1-1-2.301-1.933-1.604-3.595l.03-.072c.687-1.673 2.332-1.404 3.675-1.404zm-12 2c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"></path>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right fade-up">
                                        <li>
                                            <a class="dropdown-item" href="../movie/create">Movie CRUD</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../actor/create">Actor CRUD</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../category/create">Category CRUD</a>
                                        </li>


                                    <?php
                                }
                            }
                            if (isset($_SESSION['super'])) {
                                if ($_SESSION['super'] == 1) {
                                    ?>

                                        <li>
                                            <a class="dropdown-item" href="../user/list_users">Users</a>
                                        </li>

                                    </ul>

                        </div>

                    <?php
                                }
                            } else { ?>
            </div>
        <?php } ?>

        <!-- Sidebar Filter Button End -->
        </li>
        <!-- Nav Item 2 End -->
        <li class="nav-item">
            <div class="nav-account ml-2">
                <div class="dropdown">
                    <div aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" id="dropdown-account" role="button">
                        <?php if (!isset($_SESSION['picture']) || $_SESSION['picture'] == '') { ?>
                            <img alt="" class="img-fluid user-icon rounded-circle" src="../uploads/users/user.jpg" />
                        <?php } else { ?>
                            <img alt="" class="img-fluid user-icon rounded-circle" src="../uploads/users/<?php echo $_SESSION['picture']; ?>" />
                        <?php  } ?>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-right fade-up">
                        <?php if (isset($_SESSION['id_user'])) {
                        ?>
                            <li>
                                <a class="dropdown-item" href="../user/account-settings">Account Settings</a>
                            </li>
                            <!-- Li 1 end -->
                            <li>
                                <a class="dropdown-item" href="../user/logout">Logout</a>
                            </li>
                            <!-- Li 3 end -->
                        <?php
                        } else { ?>
                            <li>
                                <a class="dropdown-item" href="../user/login">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../user/sign-up">Sign-up</a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- Account List End -->
                </div>
                <!-- Account Drop Down End -->
            </div>
            <!-- Account Menu End -->
        </li>
        <!-- Nav Item 3 End -->
        </ul>
        <!-- Nav UL End -->
        </div>
        <!-- Col End -->
    </div>
    <!-- Row End -->
    </div>
    <!-- Container End -->
</header>
<!-- Header End -->