<?php
require_once('connection.php');
$isEmpty = false;
$hasPasswordCertainLength = true;
$hasPasswordAtLeastOneNumber = true;
$passwordAreSame = true;
$usernameOrEmailAlreadyExists = false;


$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);

if(empty($_POST["email"])){
    $isEmpty = true;
}
if(empty($_POST["username"])){
    $isEmpty = true;
}
if(empty($_POST["surname"])){
    $isEmpty = true;
}
if(empty($_POST["psw"])){
    $isEmpty = true;
}
if(empty($_POST["psw-repeat"])){
    $isEmpty = true;
}
if($isEmpty == true){
    echo "Nieco si nezadal" . "<br>";
}

if (!preg_match("/[0-9]/", $password)) {
    $hasPasswordAtLeastOneNumber = false;
    echo "Heslo musi obsahovat aspon jeden ciselny znak" . "<br>";
}

if($_POST["psw"] == $_POST["psw-repeat"]){
    $passwordAreSame = true;
}
else{
    $passwordAreSame = false;
    echo "Hesla sa nezhoduju" . "<br>";
}

if(strlen($password) < 6){
    $hasPasswordCertainLength = false;
    echo "Heslo musi mat minimalne 6 znakov" . "<br>";
} 
else{
    $hasPasswordCertainLength = true;
}

$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user['username'] === $username) {
    $usernameOrEmailAlreadyExists = true;
    echo "Uzivatelske meno uz existuje" . "<br>";
}

if ($user['email'] === $email) {
    $usernameOrEmailAlreadyExists = true;
    echo "Email uz bol pouzity" . "<br>";
}

if($isEmpty == false && $hasPasswordCertainLength && $hasPasswordAtLeastOneNumber == true && $passwordAreSame == true && $usernameOrEmailAlreadyExists = false){
    $hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, surname, password, email) 
    VALUES('$username', '$surname', '$hash', '$email')";
    if ($conn->query($sql) == true){       
        echo "Registracia bola uspesna";
    }
    else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>