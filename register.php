<!DOCTYPE html>
<html>
  <style>
    html {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
    }
    body {
      text-align: center;
      background-color: lightgray;
    } 
    .container {
      background-color: ivory;
      border: solid;
      margin-left: 500px;
      margin-right: 500px;
    }
    b {
      padding-right: 120px;
      text-align: justify;
    }
    a {
      color: black;
      font-size: 20px;
      border: 3px black solid;
      background-color: khaki;
      text-decoration: none;
      padding: 3px;
      font-weight: bold;
    }
    button {
      color: black;
      font-size: 20px;
      border: 3px black solid;
      background-color: khaki;
      padding: 3px;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
  <title>Register</title>
  <p><head><a href="index.php">Index</a></head><p>
<body>
<form action="register_script.php" method="post">
  
  <div class="container">
    <h1>Registracia</h1>
    <hr>
    <p><label for="username"><b>Meno</b></label>
    <br><input type="text" placeholder="Zadajte Meno" name="username" id="username" required>

    <p><label for="surname"><b style="padding-left: 45px;">Priezvisko</b></label>
    <br><input type="text" placeholder="Zadajte Priezvisko" name="surname" id="surname" required>

    <p><label for="email"><b>Email</b></label>
    <br><input type="text" placeholder="Zadajte Email" name="email" id="email" required>

    <p><label for="psw"><b>Heslo</b></label>
    <br><input type="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>

    <p><label for="psw-repeat"><b style="padding-left: 60px;">Heslo znova</b></label>
    <br><input type="password" placeholder="Znovu zadajte heslo" name="psw-repeat" id="psw-repeat" required>
    
    <p><button type="submit" class="registerbtn">Registrovat sa</button>
    <hr>
    <p>
      <p style="font-weight: bolder;">Uz mate ucet? <p><a href="login.php">Prihlaste sa</a></p>
  </div>

</form>
</body>
</html>