<?php

session_start();

if(!isset($_SESSION) || ($_SESSION['loggedin'] != true)){
	header("location: index.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="profile.css?v=<?php echo time(); ?>">
	<title>Profile</title>
</head>
<body>
<div id="body-header">
<header>
	
	<nav>
		<ul>
				<li><a href=<?php echo "profile.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>Profile</a></li>
				<li><a href=<?php echo "class_info.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>Class Info</a></li>
				<li><a href=<?php echo "update/update_class_1.php?email=" .$_SESSION['email']."&name=".$_SESSION['username']."&class=1" ?>>Update Marks</a></li>
				<li><a href=<?php echo "update_attendance/attendance_class_1.php?email=" .$_SESSION['email']."&name=".$_SESSION['username']."&class=1" ?>>Update Attendance</a></li>
				<li><a href=<?php echo "class_info.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>Schedules</a></li>
				<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>

</header>

<div class="intro">
<?php

echo '<h1 class="name">Welcome, '.$_SESSION['username'].'</h1>'

?>

<div class="college">
	<h4 style="text-align: center; margin-top: -2.5vw; font-size: 1.2vw;">CSED</h4>
	<div style="display: inline-block; text-align: center;">
		<hr>
	</div>
	<div style="margin-left: 10px; margin-right: 10px; display: inline-block;">
		<h1 style="font-size: 2.5vw">Thapar Institue of Engineering and Technology</h1>
	</div>
<div style="display: inline-block;">
	<hr>
</div>
</div>
</div>
<div style="margin: auto; text-align: center; width: 15vw">
<div class="image" <?php echo "style = 'background-image: url(../images/".$_SESSION['username']."_photo.jpg);'" ?>>
</div>
</div>


<div style="text-align: center; margin: auto; width: 75vh; ">
	<p> 
			I'm a competitive programmer and a huge fan of coding. I love to experiment and discover new things. The quality that I enjoyed the most about myself was that once I started something I liked, I didn't stop until I got the most out of it. Right now, I'm developing a Web application. Why wait to discover more about me? Simply scroll down!

	</p>
</div>
</div>
</body>
</html>