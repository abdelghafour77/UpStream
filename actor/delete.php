<?php
session_start();
require_once('../controller/actorController.php');
require_once '../view/actorView.php';

$getAllActor = new ActorView();
$allActor = $getAllActor->getActor();


if (isset($_POST['submit-actor'])) {

  $id_actor = $_POST['id_actor'];


  $ActorDelete = new ActorController();
  $res = $ActorDelete->deleteActor($id_actor);
  if ($res == '1') {
    header('Location:' . $_SERVER['PHP_SELF']);
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

  <title>Delete actor</title>
</head>


<body>
  <?php
  require_once '../include/admin.php';
  ?>
  <!--========== CONTENTS ==========-->
  <main>
    <div class="container">
      <h3>Delete Actor</h3>

      <form method="post" action="" class="text-center" enctype="multipart/form-data">
        <select id="id_actor" name="id_actor" class="form-control me-4 my-4" required>
          <option value disabled selected>-- Actor --</option>
          <?php
          foreach ($allActor as $actor) {
            echo '<option value="' . $actor['id_actor'] . '">' . $actor['first_name'] . ' ' . $actor['last_name'] . '</option>';
          }
          ?>
        </select>

        <button class="btn btn-bts text-center me-4 my-4" type="submit" name="submit-actor">Delete</button>
        <br>
      </form>

      <br>
    </div>

    <br>

  </main>

  <!--========== MAIN JS ==========-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>


</body>

</html>