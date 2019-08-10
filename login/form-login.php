<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel=icon type="image/png" href="../login/img/logoku.png">
    <link href="https://fonts.googleapis.com/css?family=Gugi|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="../login/css/master.css">
    <script type="text/javascript">
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
    </script>
  </head>
  <body>
    <div class="form">
      <h2>Login</h2>
      <form action="../login/login.php" method="post">
        <img src="../login/img/icon-login.png" class="icon">
        <input type="text" name="username" class="userbox" placeholder=" Username">
        <br><br>
        <input type="password" name="password" class="passbox" placeholder=" Password" id="myInput">
        <br><br>
        <input type="checkbox" onclick="myFunction()" class="show"><p>Show Password</p>
        <br><br>
        <input type="submit" name="login" id="login" value="Login">
      </form>
    </div>
  </body>
</html>
