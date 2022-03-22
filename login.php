<!DOCTYPE html>
<html>
 
<body>
<?php include('./parts/header.php')?>
  <main>  
  <form action="login_script.php" method="post">
        <div class="container">
          <h1>Prihlasenie</h1>
          <hr>
          <p><label for="uname"><b>Meno</b></label>
          <input type="text" placeholder="Zadajte meno" name="meno" required>
            
          <p><label for="psw"><b>Heslo</b></label>
          <input type="password" placeholder="Zadajte heslo" name="heslo" required>
      
          <p><button type="submit" class="loginbtn">Prihlasit sa</button>
          <hr>
          <p style="font-weight: bolder;">Nemate ucet? <p><a href="register.php">Zaregistrujte sa</a></p>
        </div>     
      </form>
  </main>
  <?php include('./parts/footer.php')?>  
</body>
</html>