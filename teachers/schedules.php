<?php
require_once('db.php');
$email =  $_GET['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="exam_info.css?v=<?php echo time(); ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Schedules</title>
</head>
<body>

<div id="body-header">
	<header style="margin-top: 0px; margin-bottom: 0px; width: auto;">
		
		<nav style="display: inline-block;">
			<ul>
				<li><a href=<?php echo "profile.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Profile</a></li>
				<li><a href=<?php echo "class_info.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Class Info</a></li>
				<li><a href=<?php echo "update/update_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Marks</a></li>
				<li><a href=<?php echo "update_attendance/attendance_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Attendance</a></li>
				<li><a href=<?php echo "schedules.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Schedules</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<?php
	echo'<h1 class="animated-text">Time Table</h1>'
	?>
</main>
</div>

<div style = "width:30vw; height:70vw;">

<div style = "width:100%; height:100%">
<img src = "../images/schedules.png">
</div>

</div>

</body>
</html>