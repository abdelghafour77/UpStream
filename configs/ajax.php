<?php
require_once('../controller/movieController.php');
require_once('../view/movieView.php');
require_once '../view/categoryView.php';
require_once '../view/languageView.php';

$getCategory = new CategoryView();
$allCategory = $getCategory->getCategory();

$getLanguage = new LanguageView();
$allLanguage = $getLanguage->getLanguage();

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
        <select class=" form-control js-example-basic-multiple" name="category[]" multiple="multiple" required>
            <?php
            foreach ($allCategory as $category) {
                $v = "";
                for ($i = 1; $i < count($output); $i++) {

                    if ($output[$i]['name'] == $category['name']) {
                        $v = "selected";
                    }
                }
                echo '<option value="' . $category['id_category'] . '" ' . $v . '>' . $category['name'] . '</option>';

                // for ($i = 1; $i < count($output); $i++) {
                //     if ($output[$i]['name'] == $category['name']) {
                //         echo '<option value="' . $category['id_category'] . '" selected>' . $category['name'] . '</option>';
                //     } else {
                //         echo '<option value="' . $category['id_category'] . '">' . $category['name'] . '</option>';
                //     }
                // }
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
        <input class="form-control me-4 my-4" type="url" name="trailer" id="trailer" placeholder="link of trailer" value="<?php echo $output[0]['link_trailer']; ?>" required />

    </div>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: {
                    id: '-1', // the value of the option
                    text: 'Category'
                }
            });
        });
    </script>
<?php
    // break;
}
// }
