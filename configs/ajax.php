<?php
session_start();
require_once('../controller/movieController.php');
require_once('../view/movieView.php');
require_once '../view/categoryView.php';
require_once '../view/actorView.php';
require_once '../view/languageView.php';
require_once '../view/qualityView.php';


$getCategory = new CategoryView();
$allCategory = $getCategory->getCategory();

$getActor = new ActorView();
$allActor = $getActor->getActor();

$getLanguage = new LanguageView();
$allLanguage = $getLanguage->getLanguage();

$getQuality = new QualityView();
$allQuality = $getQuality->getQuality();

$getAllMovie = new MovieView();
$allMovieName = $getAllMovie->getMovieName();

if (isset($_POST["id_movie"])) {

    $getMovie = new MovieView();
    $output = $getMovie->getMovie($_POST["id_movie"]);

    // foreach ($result as $output) {
?>

    <div id="movie">
        <textarea class="form-control me-4 my-4" rows="3" name="description" id="description" placeholder="Description"><?php echo $output[0]['description']; ?></textarea>
        <select id="date" name="date" class="form-control me-4 my-4" required>
            <option disabled>-- Date --</option>
            <?php
            for ($i = 2000; $i <= date('Y'); $i++) {
                if ($output[0]['date'] == $i)
                    echo '<option value="' . $i . '" selected>' . $i . '</option>';
                else
                    echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select>
        <select class="form-control category me-4 my-4" name="category[]" multiple="multiple" required>
            <?php
            foreach ($allCategory as $category) {
                $v = "";
                for ($i = 1; $i < count($output); $i++) {

                    if ($output[$i]['name'] == $category['name']) {
                        $v = "selected";
                    }
                }
                echo '<option value="' . $category['id_category'] . '" ' . $v . '>' . $category['name'] . '</option>';
            }
            ?>
        </select>
        <select id="language" name="language" class="form-control me-4 my-4" required>
            <option value disabled>-- Language --</option>

            <?php
            foreach ($allLanguage as $language) {
                if ($language['id_language'] == $output[0]['language'])
                    echo '<option value="' . $language['id_language'] . '" selected>' . $language['name'] . '</option>';
                else
                    echo '<option value="' . $language['id_language'] . '">' . $language['name'] . '</option>';
            }
            ?>
        </select>
        <select id="quality" name="quality" class="form-control me-4 my-4" required>
            <option value disabled>-- Quality --</option>

            <?php
            foreach ($allQuality as $quality) {
                if ($quality['id_quality'] == $output[0]['quality'])
                    echo '<option value="' . $quality['id_quality'] . '" selected>' . $quality['name'] . '</option>';
                else
                    echo '<option value="' . $quality['id_quality'] . '">' . $quality['name'] . '</option>';
            }
            ?>
        </select>
        <input class="form-control me-4 my-4" type="text" name="director" id="director" placeholder="director" value="<?php echo $output[0]['director']; ?>" required />
        <select class="form-control actor me-4 my-4" name="actor[]" multiple="multiple" required>
            <?php
            foreach ($allActor as $actor) {
                $v = "";
                for ($i = 1; $i < count($output); $i++) {

                    if ($output[$i]['id_actor'] == $actor['id_actor']) {
                        $v = "selected";
                    }
                }
                echo '<option value="' . $actor['id_actor'] . '" ' . $v . '>' . $actor['first_name'] . ' ' . $actor['last_name'] . '</option>';
            }
            ?>
        </select>
        <input class="form-control me-4 my-4" type="url" name="trailer" id="trailer" placeholder="link of trailer" value="<?php echo $output[0]['link_trailer']; ?>" required />

    </div>

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
    </script>
<?php
}
if (isset($_POST["id_actor"])) {

    $getActor = new ActorView();
    $output = $getActor->getActorById($_POST["id_actor"]);
?>

    <div id="actor">

        <input class="form-control me-4 my-4" type="text" name="first_name" id="first_name" placeholder="first name" value="<?php echo $output[0]['first_name']; ?>" required />
        <input class="form-control me-4 my-4" type="text" name="last_name" id="last_name" placeholder="last name" value="<?php echo $output[0]['last_name']; ?>" required />

    </div>

<?php
}
if (isset($_POST["id_category"])) {

    $getCategory = new CategoryView();
    $output = $getCategory->getCategoryById($_POST["id_category"]);
?>

    <div id="category">

        <input class="form-control me-4 my-4" type="text" name="name" id="name" placeholder="name" value="<?php echo $output[0]['name']; ?>" required />

    </div>

<?php
}
if (isset($_POST['watchingTime'])) {
    $watchingTime = new MovieController();
    $r = $watchingTime->setWatchingTime($_POST['watchingTime'], $_POST['idmovie'], $_SESSION['id_user']);
}
