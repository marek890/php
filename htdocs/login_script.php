<?php
require_once('connection.php');
$isEmpty = false;

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);

if (empty($username)) {
    $isEmpty = true;
}
if (empty($password)) {
    $isEmpty = true;
}

if ($isEmpty == true) {
    echo "Nieco si nezadal" . "<br>";
}

if ($isEmpty == false) {
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($results) == 1) {
        echo "Uspesne si sa prihlasil" . "<br>";
    }
    else {
        echo "Zadal si nespravne meno alebo heslo" . "<br>";
    }
}
?>