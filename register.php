<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
  <title>Register</title>
  <head><a href="index.php">Hlavna stranka</a></head>
<body>
  <link rel="stylesheet" href="register.css">
  <div class="container">
    <h1>Registracia</h1>

    <p><label for="username"><b>Meno</b></label>
    <input type="text" placeholder="Zadajte Meno" name="username" id="username" required>

    <p><label for="email"><b>Email</b></label>
    <input type="text" placeholder="Zadajte Email" name="email" id="email" required>

    <p><label for="password_1"><b>Heslo</b></label>
    <input type="password" placeholder="Zadajte Heslo" name="password_1" id="password_1" required>

    <p><label for="password_2"><b>Heslo znova</b></label>
    <input type="password" placeholder="Znovu zadajte heslo" name="password_2" id="password_2" required>
    <hr>
    <button type="submit" class="registerbtn">Register</button>
    <p>
      <p>Uz mate ucet? <a href="login.php">Prihlaste sa</a>.</p>
  </div>

</form>
</body>
</html>