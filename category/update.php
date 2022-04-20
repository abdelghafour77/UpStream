<?php
session_start();
require_once('../controller/categoryController.php');

require_once '../view/categoryView.php';

$getAllCategory = new CategoryView();
$allCategoryName = $getAllCategory->getCategory();

if (isset($_POST['submit-category'])) {

    $id_category = $_POST['id_category'];
    $name = $_POST['name'];



    $CategoryUpdate = new CategoryController();
    $res = $CategoryUpdate->updateCategory($id_category, $name);
    if ($res == '1') {
        header('Location:' . $_SERVER['PHP_SELF']); //pour eviter alert when refresh page
        die;
    }
}

?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../img/favicon.ico" />

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!--========== bootstrap ==========-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="../styles/style1.css" />
    <link rel="stylesheet" href="../styles/style2.css" />
    <!-- <link rel="stylesheet" href="../styles/styles.css" /> -->

    <title>Update Category</title>
</head>


<body>
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <!-- <img src="../img/photo/" class="header__img" /> -->

            <a href="../index" class="header__logo">UpStream</a>

            <div class="header__toggle">
                <i class="bx bx-align-right " id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="../index" class="nav__link nav__logo">
                    <!-- <i class='bx bxs-disc nav__icon'></i> -->
                    <i class='bx bxs-camera-movie nav__icon'></i> <!-- <img src="../img/mini-logo.png" class="nav__icon" alt="UpStream" width="20" height="20" /> -->
                    <span class="nav__logo-name">UpStream</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <!-- <h3 class="nav__subtitle">Profile</h3> -->
                        <a href="../index" class="nav__link ">
                            <i class="bx bx-home nav__icon"></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </div>

                    <div class="nav__items">

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bxs-movie-play nav__icon'></i>
                                <span class="nav__name">movie</span>
                                <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="../movie/create" class="nav__dropdown-item">Add</a>
                                    <a href="../movie/update" class="nav__dropdown-item">Update</a>
                                    <a href="../movie/delete" class="nav__dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bxs-user nav__icon'></i>
                                <span class="nav__name">actor</span>
                                <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="../actor/create" class="nav__dropdown-item">Add</a>
                                    <a href="../actor/update" class="nav__dropdown-item">Update</a>
                                    <a href="../actor/delete" class="nav__dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bxs-category nav__icon'></i>
                                <span class="nav__name">category</span>
                                <i class="bx bx-chevron-down nav__icon nav__dropdown-icon"></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="../category/create" class="nav__dropdown-item">Add</a>
                                    <a href="../category/update" class="nav__dropdown-item">Update</a>
                                    <a href="../category/delete" class="nav__dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav__dropdown">
                            <a href="../user/list_users" class="nav__link">
                                <i class='bx bx-list-ul nav__icon'></i>
                                <span class="nav__name">List of Users</span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <a href="../log_out" class="nav__link nav__logout">
                <i class="bx bx-log-out nav__icon"></i>
                <span class="nav__name">Log out</span>
            </a>
        </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <main>
        <div class="container">
            <h3>Update category</h3>

            <form method="post" action="" class="text-center" enctype="multipart/form-data">
                <select id="id_category" name="id_category" class="form-control me-4 my-4" required>
                    <option value disabled selected>-- category --</option>
                    <?php
                    foreach ($allCategoryName as $category) {
                        echo '<option value="' . $category['id_category'] . '">' . $category['name'] . '</option>';
                    }
                    ?>
                </select>
                <div id="category">

                    <input class="form-control me-4 my-4" type="text" name="name" id="name" placeholder="name" required disabled />

                </div>
                <button class="btn btn-bts text-center me-4 my-4" type="submit" name="submit-category">Update</button>
                <br>
            </form>

            <br>
        </div>

        <br>

    </main>

    <!--========== MAIN JS ==========-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#id_category').on('change', function() {
                var id_category = $(this).val();
                if (id_category) {
                    $.post(
                        "../configs/ajax.php", {
                            id_category: id_category
                        },
                        function(data) {
                            $('#category').html(data);
                        }
                    );
                } else {}
            });

        });
    </script>
</body>

</html>