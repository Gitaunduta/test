<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="lbody">
  <nav class="menu">
    <ul class="imenu">
      <li class="inmenu"><a  href="indexhome.php">home</a></li>
      <li class="inmenu"><a href="admin.php">admin</a></li>
      <li class="inmenu"><a href="register.php">register</a></li>
      <li class="inmenu"><a href="login.php">login</a></li>  
    </ul>
  </nav>

  <div class="container">
    <h2 style="margin-left: 50px; " id="h2">USER'S LOGIN FORM</h2>

    <form action="log.php" method="POST">
      <div class="ins">
        <label for="email">EMAIL:</label><br>
        <input type="email" name="email" id="emaili" required>
      </div>
      <div class="ins">
        <label for="password">PASSWORD:</label><br>
        <input type="password" name="pass1" id="password" required>
      </div>
      <div class="ins" >
        <input type="submit" name="submit" id="submit" value="LOGIN">
      </div>
      <div class="ins" >
        <p id="para">Don't have an Account? <a href="register.php" class="anka">REGISTER</a></p>
      </div>
    </form>
  </div>
</body>
</html>