<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/getUsers.php');
?>
<main class="container">
    <h1 class="m-4 text-uppercase">Zoznam uživateľov</h1>
   <ul class="list-group">
       <li class="list-group-item list-group-item-action active d-flex row">
           <span class="col-1"> ID.</span>
           <span class="col-2"> Avatar</span>
           <span class="col-2"> Username</span>
           <span class="col-2"> Surname</span>
           <span class="col-2"> Email</span>
           <span class="col-2"> Akcia</span>
       </li>
   </ul>
   <?php foreach ($users as $user) : ?>
    <li class="list-group-item list-group-item-action d-flex row align-items-center">     
            <span class="text-danger col-1"> <?php echo $user["id"] ?></span>
            <div class="col-2">
                <img src="../images/<?php echo $user["avatar"]?>" alt="<?php echo $user["username"]?>" style="width: 30px">
            </div>
            <span class="col-2"> <?php echo $user["username"] ?></span>
            <span class="col-2"> <?php echo $user["surname"] ?></span>
            <span class="col-2"> <?php echo $user["email"] ?></span>
            <div class="col-2 d-flex justify content-center">
                <a style="margin-right: 5px" href="../pages/profile.php<?php echo "?user=".$user["id"]; ?>"class="btn btn-success">Profil</a>
                <a href="../scripts/delete_script.php?id=<?php echo $user["id"];?>" class="btn btn-danger mr-2">Zmazať</a>
            </div>
        </li>
   
   <?php endforeach ?>
   
   
</main>
<?php include('../parts/footer.php'); ?>