<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Management System</title>
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

$sql = "Select * from teachers where email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num==1){

	$result_details = mysqli_fetch_assoc($result);
	
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['username'] = $result_details['name'];
    $_SESSION['loggedin'] = true;
    
	header("location: profile.php");

}else $login = false;

}

?>

<!-- <form id="sign_in" method = "POST">
	<h1 style="font-size: 4.5vw; font-family: 'League Spartan'; color: whitesmoke;">Welcome Back :)</h1>
	<p style="margin-top: -2vw; font-size: 15px; color: whitesmoke; margin-bottom: 3vw; margin-right: 3vw; margin-bottom: 10%;">To keep connected with us please login with your personal information by email address and password 🔐.</p>
	
	<?php

// if($login==false){
// 	echo'<p style="margin-top: -2vw; font-size: 20px; color: red; margin-bottom: 3vw; margin-right: 3vw; margin-bottom: 10%;">Invalid Credentials.</p>';
// }

	?>

	<div id="div_input">
		<label for="email">E-mail</label><br>
		<input type="email" id="email" name = "email" required>
	</div>
	<div id="div_input">
		<label for="password">Password</label><br>
		<input type="password" name="password" id="password" required>
	</div>

	<div id="div_input">
	<button type="submit" style="height: 40px; width: 208px; font-size: 27px; background-color: #064c56; font-weight: bold; cursor: pointer; border-color: white; border-radius: 5px; text-align: center;">Login</button><br>
	<button style="margin-left: 100px; margin-top: 10px; background-color: #017685; border-color: white;border-radius: 5px; text-align: center; height: 40px; width: 100px">Reset Password</button>
</div>
</form> -->

<div class="login-box">
  <h2>Login</h2>
  <form method = "POST">

  <?php

if($login==false){
	echo'<p style="margin-top: -2vw; font-size: 13px; color: red; margin-bottom: 2vw; margin-right: 3vw; margin-bottom: 10%;">Invalid Credentials.</p>';
}

	?>

    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
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