<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faculty Details</title>
	<link rel="stylesheet" href="faculty.css?v=<?php echo time(); ?>">
	<link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

</head>
<body>

<header>
	
	<nav>
		<ul>
		<li><a href=<?php echo "st_homepg.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Home</a></li>
				<li><a href=<?php echo "profile.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Profile</a></li>
				<li><a href=<?php echo "exam_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Exam Info</a></li>
				<li><a href=<?php echo "fees_details.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Fees Details</a></li>
				<li><a href=<?php echo "attendance.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Attendence</a></li>
				<li><a href=<?php echo "exam_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Schedules</a></li>
				<li><a href=<?php echo "faculty_details.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Faculty Details</a></li>
				<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>

</header>

<main>
	<div class="bg_img">
		<img src="../images/Faculty.png">
	</div>
<hr>
<div class="details">
	<h3 class="heading">Know Your Faculty</h3>

<ul class="subheading">
	<li style="margin-bottom: 10px;"><a href="https://som.thapar.edu/facultydetails/MTM0NA==">Pankaj Narula</a></li>
	<li style="margin-bottom: 10px;"><a href="https://som.thapar.edu/facultydetails/MTM0NA==">Tanu Goyal</a></li>
	<li style="margin-bottom: 10px;"><a href="https://som.thapar.edu/facultydetails/MTM0NA==">Shruti Agarwal</a></li>
	<li style="margin-bottom: 10px;"><a href="https://som.thapar.edu/facultydetails/MTM0NA==">Deep Maan</a></li>
	<li style="margin-bottom: 10px;"><a href="https://som.thapar.edu/facultydetails/MTM0NA==">Manisha Kaushal</a></li>
	<li style="margin-bottom: 10px;"><a href="https://som.thapar.edu/facultydetails/MTM0NA==">Varun</a></li>
</ul>
</div>
</body>
</main>
</html>