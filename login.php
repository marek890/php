<!DOCTYPE html>
<html>
 
<body>
<?php include('./parts/header.php')?>
  <main>  
  <form action="login_script.php" method="post">
        <div class="container">
          <h1>Prihlasenie</h1>
          <hr>
          <p><label for="username"><b>Meno</b></label>
          <input type="text" placeholder="Zadajte meno" name="username" id="username" required>
            
          <p><label for="psw"><b>Heslo</b></label>
          <input type="password" placeholder="Zadajte heslo" name="psw" id="psw" required>
      
          <p><button type="submit" class="loginbtn" name="login_user">Prihlasit sa</button>
          <hr>
          <p style="font-weight: bolder;">Nemate ucet? <p><a href="register.php">Zaregistrujte sa</a></p>
        </div>     
      </form>
  </main>
  <?php include('./parts/footer.php')?>  
</body>
</html>