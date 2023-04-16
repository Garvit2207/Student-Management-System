<?php

$name = $_GET['name'];
$email = $_GET['email'];

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
		<li><a href=<?php echo "st_homepg.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Home</a></li>
				<li><a href=<?php echo "profile.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Profile</a></li>
				<li><a href=<?php echo "exam_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Exam Info</a></li>
				<li><a href=<?php echo "fees_details.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Fees Details</a></li>
				<li><a href=<?php echo "attendance.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Attandence</a></li>
				<li><a href=<?php echo "exam_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Schedules</a></li>
				<li><a href=<?php echo "faculty_details.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Faculty Details</a></li>
				<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>

</header>

<div class="intro">
<?php

echo '<h1 class="name">'.$name.'</h1>'

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
	<div class="image" <?php echo "style = 'background-image: url(../images/".$name."_photo.jpg);'" ?>>
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