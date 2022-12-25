<?php
include('./control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TG Work space</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav { 
  overflow: hidden;
  background-color: DodgerBlue;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>TG Work space</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="regestration.php">Regestration</a>
  <a href="login.php"> login</a>
  <a href="home.php"> Home</a>
</div>

<div class="row">
  <div class="middle side">
  
    <!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $passErr  = "";
$name = $pass = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = ($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed and contains atlest two wrolds";
    }
  }
  
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $pass = ($_POST["password"]);
    // check if e-mail address is well-formed
    if (!filter_var($pass, )) {
      $passErr = "Invalid password format";
    }
  }
    

}


?>
</br>
</br>
<b>
<h2>Login</h2>

<form action="" method="post">

Name:<input type="text" name="username" placeholder="Enter your username" >
    <span class="error">* <?php echo $nameErr;?></span>
</br></br>
    Password:<input type="password" name="password" placeholder="Enter your password" >
    <span class="error">* <?php echo $passErr;?></span>
    </br></br>
    <input name="submit" type="submit" value="LOGIN">
</br>
</br>
  </div>
>    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</br></br>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
 
</form>

</body>
</html>    
   
</div>
  
<br><br>
</b>
<div class="footer">
  <p>trused by google</p>
</div>
  
</body>
</html>
<?php


?>
<?php echo $error; ?>