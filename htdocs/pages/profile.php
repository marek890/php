<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/profile_script.php');

?>


<main class="container">
    <h1 class="m-4 text-uppercase">Profil</h1>
   <ul class="list-group">
       <li class="list-group-item list-group-item-action active d-flex row">
           <span class="col-1"> ID.</span>
           <span class="col-2"> Avatar</span>
           <span class="col-3"> Username</span>
           <span class="col-3"> Surname</span>
           <span class="col-3"> Email</span>
       </li>
   </ul>
   <?php foreach ($users as $user) : ?>
        <li class="list-group-item list-group-item-action d-flex row align-items-center">
            <span class="text-danger col-1"> <?php echo $user["id"] ?></span>
            <div class="col-2">
                <img src="../images/<?php echo $user["avatar"]?>" alt="<?php echo $user["username"]?>" style="width: 100px">
            </div>
            <span class="col-3"> <?php echo $user["username"] ?></span>
            <span class="col-3"> <?php echo $user["surname"] ?></span>
            <span class="col-3"> <?php echo $user["email"] ?></span>
        </li>
        <?php endforeach ?>
        <a href="../pages/password_change.php" class="btn btn-danger">Zmenit heslo</a>
</main>
<?php include('../parts/footer.php'); ?>