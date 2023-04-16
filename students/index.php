<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Portal</title>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
</head>
<body>
<header>

<?php
$login = true;
if($_SERVER['REQUEST_METHOD'] == "POST"){

	$email = $_POST['email'];
	$password = $_POST['password'];

$USERNAME = "root";
$SERVERNAME = "localhost";
$PASSWORD = "";
$DATABASE = "test";

$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

if(!$conn){

	die("failed to connect ".mysqli_connect_error());

}

$sql = "Select * from students where email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num==1){

	$result_details = mysqli_fetch_assoc($result);
	
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['username'] = $result_details['username'];
    $_SESSION['loggedin'] = true;
    
	header("location: st_homepg.php");

}else $login = false;

}

?>

<div class="login-box">
  <h2>Login</h2>
  <form method = "POST">

  <?php

if($login==false){
	echo'<p style="margin-top: -2vw; font-size: 13px; color: red; margin-bottom: 2vw; margin-right: 3vw; margin-bottom: 10%;">Invalid Credentials.</p>';
}

	?>

    <div class="user-box">
      <input type="email" name="email" required>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required>
      <label>Password</label>
    </div>
    <button type="Submit" style="background: none; border: none; cursor: pointer;">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Login
    </button>
  </form>
</div>
</header>

</body>
</html>