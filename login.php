<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="login.css">
  <head><a href="index.php">Hlavna stranka</a></head>
<body>
    <form action="login1.php" method="post">
        <div class="container">
            
          <p><label for="uname"><b>Meno</b></label>
          <input type="text" placeholder="Zadajte meno" name="meno" required>
            
          <p><label for="psw"><b>Heslo</b></label>
          <input type="password" placeholder="Zadajte heslo" name="heslo" required>
      
          <p><input type="submit" value="Login"/>

          <p>Nemate ucet? <a href="register.php">Zaregistrujte sa</a>.</p>
        </div>     
      </form>
</body>
</html>