<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/others_login_stylesheet.css">
  </head>

  <body>
    <h1 style="font-weight: bold; text-align: center; font-size:40px">WELCOME TO LOGROS!</h1>
    <form class="bkground-content animate" action="includes/others_login.inc.php" method="post">
      <div class="imgcontainer">
        <img src="https://www.referralnet.com.au/wp-content/uploads/2015/10/handshake-350x350-1.png" alt="Avatar" class="avatar">
      </div>
      <div class="container">
        <label for="mailuid"><b>Username/E-mail</b></label><br>
        <input type="text" name="mailuid" required><br>
        <label for="pwd"><b>Password</b></label><br>
        <input type="password" name="pwd" required><br>
        <button type="submit" name="login-submit">Login</button>
        <label><br>
          <input type="checkbox" checked="checked" name="remember">Remember me
        </label>
      </div>
      <div class="container" style="background-color:#CCCC99">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel_button"; style="font-weight: bold;">Cancel</button>
        <span class="pwd"; style="font-weight: bold"><a href="#">Forgot password?</a></span>
      </div>
    </form>
    <form action="includes/logout.inc.php" method="post">
      <button type="submit" name="logout-submit">Logout</button>
    </form>
  </body>
</html>
