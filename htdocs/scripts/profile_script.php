<?php
require_once('../scripts/connection.php');
$user = isset($_GET["user"]) ? $_GET["user"] : "";

$sql = "SELECT * FROM users WHERE id=$user";
$result = $conn->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
    array_push($users, $user);
}
?>