<?php
if (isset($_SESSION['id_user'])) {
?>
    <li>
        <?php
        $state = "fas fa-plus";
        foreach ($fMovie as $list) {
            if ($list['id_movie'] == $movie['id_movie']) {
                $state = "fas fa-minus";
            }  ?>

        <?php
        }
        if ($state == "fas fa-minus") { ?>
            <a href="<?php echo $_SERVER['PHP_SELF'] . '?tld=' . $movie['id_movie']; ?>"><i class="<?php echo $state; ?>"></i></a>
        <?php  } else { ?>
            <a href="<?php echo $_SERVER['PHP_SELF'] . '?tl=' . $movie['id_movie']; ?>"><i class="<?php echo $state; ?>"></i></a>
        <?php }
        ?>
    </li>
<?php
} ?>