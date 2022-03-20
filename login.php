<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="login.css">
  <p><head><a href="index.php">Index</a></head><p>
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
      margin-left: 700px;
      margin-right: 700px;
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
<body>
    <form action="login1.php" method="post">
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
</body>
</html>