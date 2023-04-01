<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="rbody">
  <nav class="menu">
    <ul class="imenu">
      <li class="inmenu"><a  href="indexhome.php">home</a></li>
      <li class="inmenu"><a href="admin.php">admin</a></li>
      <li class="inmenu"><a href="register.php">register</a></li>
      <li class="inmenu"><a href="login.php">login</a></li>
      
    </ul>
  </nav>
  <div class="container">
  <h2 id="h2">USER'S REGISTRATION FORM</h2>
  <form action="reg_login.php" method="POST">
    <div class="ins">
<label for="fullname">FULLNAME:</label><br>
<input type="text" name="fname" id="fullname" required>
</div>
  <div class="ins">
    <label for="email">EMAIL:</label><br>
    <input type="email" name="email" id="email" required>
    </div>
    <div class="ins">
      <label for="phone">PHONE NUMBER:</label><br>
      <input type="text" name="phone" id="phoneid" required>
</div>

    <div class="ins">
      <label for="password">PASSWORD:</label><br>
      <input type="password" name="pass1" id="pword" required>
      </div>
      <div class="ins">
        <label for="confirm">CONFIRM PASSWORD:</label><br>
        <input type="password" name="pass2" id="conm">
        </div>

        <div class="ins" ><input type="submit" name="submit" id="submit" value="REGISTER NOW"></div>
        <div class="ins" ><p id="para">already have an account?  <a href="login.php" class="anka">login</a></p></div>

  </form>
  </div>
  <script src="script.js"></script>
</body>
</html>