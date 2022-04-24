<?php
session_start();
require_once '../controller/movieController.php';
if (isset($_POST['watchingTime'])) {
    $watchingTime = new MovieController();
    $r = $watchingTime->setWatchingTime($_POST['watchingTime'], $_POST['id_movie'], $_SESSION['id_user']);
}
// if (isset($_POST['video'])) {
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "upstream";

//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "INSERT INTO video (time)VALUES (" . $_POST['video'] . ")";

//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }
// var_dump($_POST);
// var_dump($_GET);
