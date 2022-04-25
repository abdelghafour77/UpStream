<?php
session_start();
require_once('../view/userView.php');
require_once('../controller/userController.php');

$User = new UserView();
$AllUser = $User->getAllUser();

// die(var_dump($_SESSION));

if ($_SESSION['super'] != 1) {
    header('Location: ../index');
    exit;
}

if (isset($_GET['s'])) {

    $id_user = $_GET['s'];

    $disable = new UserController();
    $disable->disableAdmin($id_user);
    header('Location:' . $_SERVER['PHP_SELF']);
}
if (isset($_GET['e'])) {

    $id_user = $_GET['e'];

    $enable = new UserController();
    $enable->enableAdmin($id_user);
    header('Location:' . $_SERVER['PHP_SELF']);
}
if (isset($_GET['d'])) {

    $id_user = $_GET['d'];

    $delete = new UserController();
    $delete->deleteUser($id_user);
    header('Location:' . $_SERVER['PHP_SELF']);
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
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="../styles/style1.css" />
    <link rel="stylesheet" href="../styles/style2.css" />
    <!-- <link rel="stylesheet" href="../styles/styles.css" /> -->

    <title>List of Users</title>
</head>


<body>
    <?php
    require_once '../include/admin.php';
    ?>
    <!--========== CONTENTS ==========-->
    <main>
        <div class="container">
            <h3>List of Users</h3>
            <br>

            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Admin</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($AllUser as $user) {
                    ?>

                        <tr>
                            <td><?php echo $user['id_user']; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <?php if ($user['admin'] == 1) { ?>
                                    <a class="btn btn-warning" href="list_users.php?s=<?php echo $user['id_user']; ?>">Disable</a>
                                <?php } else { ?>
                                    <a class="btn btn-success" href="list_users.php?e=<?php echo $user['id_user']; ?>">Enable</a>
                                <?php } ?>
                            </td>
                            <td><a class="btn btn-danger" href="list_users.php?d=<?php echo $user['id_user']; ?>">Delete</a></td>
                        </tr>
                    <?php   }
                    ?>
                </tbody>
            </table>

            <br>
        </div>

        <br>

    </main>

    <!--========== MAIN JS ==========-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>