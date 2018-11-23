<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "studassisst");

  if(isset($_POST['login'])) {
    $login = $_POST['login'];
  }

  if(isset($_POST['password'])) {
    $pass = $_POST['password'];
  }

  $sql= "SELECT * FROM user WHERE login = '$login' AND password = '$pass' ";
  $result = mysqli_query($db,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
    $_SESSION["login"] = $check["login"];
    $_SESSION["name"] = $check["name"];
    $_SESSION["email"] = $check["email"];
    $_SESSION["age"] = $check["age"];
    $_SESSION["university"] = $check["university"];
    $_SESSION["course"] = $check["course"];
    header("Location: index.php");
  } else{
  }

  mysqli_close($db);
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign in</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
  <form id="login-box" method="POST" action="login.php">
    <div class="left">
      <br>
      <h1>Sign in</h1>
      <br>
      <input type="text" name="login" placeholder="Username" />
      <input type="password" name="password" placeholder="Password" />

      <input type="submit" name="signup_submit" value="Sign me in" />
      <br>
      <div class="alert alert-danger" style="<?php if(isset($error) && $error ){ echo "display: block"; } else { echo "display: none"; } ?>">
      </div>
      <br>
       <small class="reg">Don't have an account? <a href="registration.html">Register</a></small>

    </div>

    <div class="right">
     <h1 class="logo"><a href="index.php">Student Assistant</a></h1>

    </div>
  </form>
</body>
</html>
