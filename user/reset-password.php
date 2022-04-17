<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
    <?php
    session_start();
    require_once 'include/head.php';
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
        require_once 'include/header.php';
        ?>
        <!-- Start Sub Header Section -->
        <div class="sub-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center breadcrumb-nav">
                            <h2 class="Page-title">Reset Password</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <a href="index">Home</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li><a href="reset-password">Reset Password</a></li>
                            </ol>
                        </nav>
                        <!-- Breadcrumb End -->
                    </div>
                    <!-- Col End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container end -->
        </div>
        <!-- Sub Header Section End -->
        <!-- Start Main Content -->
        <div class="main-content">
            <!-- Start Reset Password Section -->
            <section class="reset-password">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <h2>Forgot Password ?</h2>
                            <p class="text-max-800">You Can Reset Password Using This Form.</p>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                    <div class="row h-100">
                        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                            <div class="d-table-cell align-middle">
                                <!-- Start Form -->
                                <form id="reset-form" action="reset-password" method="post">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="reset-password" class="btn hvr-sweep-to-right">Reset password</a>
                                    </div>
                                </form>
                                <!-- Form End -->
                            </div>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </section>
            <!-- Reset Password Section End -->
        </div>
        <!-- Main Content End -->
        <?php
        require_once 'include/footer.php';
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
                            <input class="form-control" name="s" placeholder="Search" type="search" value=""> <button class="input-group-btn search-button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->
    <?php
    require_once 'include/filter.php';
    ?>
    <?php
    require_once 'include/js.php';
    ?>
</body>

</html>