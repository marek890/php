<?php
require_once('connection.php');
$isEmpty = false;

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);

if (empty($_POST["username"])) {
    $isEmpty = true;
}
if (empty($_POST["psw"])) {
    $isEmpty = true;
}

if ($isEmpty == true) {
    echo "Nieco si nezadal" . "<br>";
}
$sql_u = "SELECT * FROM users WHERE username='$username'";
$sql_e = "SELECT * FROM users WHERE email='$email'";
$res_u = mysqli_query($conn, $sql_u);
$res_e = mysqli_query($conn, $sql_e);

if ($isEmpty == false) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
        echo "Uspesne si sa prihlasil" . "<br>";
    }
}
?>