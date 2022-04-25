<?php
session_start();
require_once('../controller/movieController.php');
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';
require_once '../view/qualityView.php';
require_once '../view/movieView.php';

$getAllMovie = new MovieView();
$allMovieName = $getAllMovie->getMovieName();

if (isset($_POST['submit-movie'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $category[] = $_POST['category'];
    $actor[] = $_POST['actor'];
    $language = $_POST['language'];
    $quality = $_POST['quality'];
    $trailer = $_POST['trailer'];
    $director = $_POST['director'];
    $user = $_SESSION['id_user'];

    $MovieUpdate = new MovieController();
    $res = $MovieUpdate->updateMovie($title, $description, $date, $category, $language, $quality, $trailer, $user, $actor, $director);
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

    <title>Update movie</title>
</head>


<body>
    <?php
    require_once '../include/admin.php';
    ?>
    <!--========== CONTENTS ==========-->
    <main>
        <div class="container">
            <h3>Update movie</h3>

            <form method="post" action="" class="text-center" enctype="multipart/form-data">
                <select id="title" name="title" class="form-control me-4 my-4" required>
                    <option value disabled selected>-- Movie --</option>
                    <?php
                    foreach ($allMovieName as $movie) {
                        echo '<option value="' . $movie['id_movie'] . '">' . $movie['title'] . '</option>';
                    }
                    ?>
                </select>
                <div id="movie">
                    <textarea class="form-control me-4 my-4" rows="3" name="description" id="description" placeholder="Description" disabled></textarea>
                    <select id="date" name="date" class="form-control me-4 my-4" required disabled>
                        <option value disabled selected>-- Date --</option>

                    </select>
                    <select class="form-control category me-4 my-4" name="category[]" multiple="multiple" required disabled>

                    </select>
                    <select id="language" name="language" class="form-control me-4 my-4" required disabled>
                        <option value disabled selected>-- Language --</option>

                    </select>
                    <select id="quality" name="quality" class="form-control me-4 my-4" required disabled>
                        <option value disabled selected>-- Quality --</option>

                    </select>
                    <input class="form-control me-4 my-4" type="text" name="director" id="director" placeholder="Director" required disabled />
                    <select class="form-control actor me-4 my-4" name="actor[]" multiple="multiple" required disabled>

                    </select>
                    <input class="form-control me-4 my-4" type="url" name="trailer" id="trailer" placeholder="Link of trailer" required disabled />
                </div>
                <button class="btn btn-bts text-center me-4 my-4" type="submit" name="submit-movie">Update</button>
                <br>
            </form>

            <br>
        </div>

        <br>

    </main>

    <!--========== MAIN JS ==========-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.category').select2({
                placeholder: {
                    id: '-1', // the value of the option
                    text: 'Category'
                }
            });
            $('.actor').select2({
                placeholder: {
                    id: '-1', // the value of the option
                    text: 'Actor'
                }
            });
        });

        $(document).ready(function() {
            $('#title').on('change', function() {
                var id_movie = $(this).val();
                if (id_movie) {
                    $.post(
                        "../configs/ajax.php", {
                            id_movie: id_movie
                        },
                        function(data) {
                            $('#movie').html(data);
                        }
                    );
                } else {}
            });

        });
    </script>
</body>

</html>