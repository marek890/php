<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/profile_script.php');
?>



<main class="container">
    <h1 class="m-4 text-uppercase">Profil</h1>

    <?php foreach ($users as $user) : ?>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-4"><img src="../images/<?php echo $user["avatar"] ?>" alt="<?php echo $user["username"] ?>" style="width: 300px"></div>
                <div class="col-6">
                <p>
                    
                <div class="row">    
                <div class="col-4 list-group-item active">ID</div>
                <div class="col-4 border-top list-group-item"><?php echo $user["id"] ?></div>
   
                <div class="w-100"></div>

                <div class="col-4 list-group-item active">Meno</div>
                <div class="col-4 list-group-item"><?php echo $user["username"] ?></div>

                <div class="w-100"></div>

                <div class="col-4 list-group-item active">Priezvisko</div>
                <div class="col-4 list-group-item"><?php echo $user["surname"] ?></div>

                <div class="w-100"></div>
                
                <div class="col-4 list-group-item active">Email</div>
                <div class="col-4 list-group-item"><?php echo $user["email"] ?></div>
                <div style="text-align: center; margin-top: 50px;">
                <a href="../pages/password_change.php" class="btn btn-danger">Zmenit heslo</a>
                </div>
                </div>
                
                </div>
                
            </div>
            
        </div>
    <?php endforeach ?>
    
</main>
<?php include('../parts/footer.php'); ?>