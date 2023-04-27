
<?php

session_start();

if(!isset($_SESSION) || ($_SESSION['loggedin'] != true)){
	header("location: submit_data_to_php.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
		<link href='https://fonts.googleapis.com/css?family=League Spartan' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

			<link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">

</head>
<body>


<div id="body-header">
	<header style="margin-top: 0px; margin-bottom: 0px; width: auto;">

	<main>
	<h2 style="margin-top: 0px; font-family: 'Roboto'; color: white;"><?php

echo "Welcome " .$_SESSION['username']. " !!";

?></h2>
</main>
</div>

<div id="headings">
	
	<div id="heading_name">
		<div id="options">
			<span>
			Profile
		</span>
		<a href=<?php echo "profile.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>
        <span class="link"></span>
      </a>
  </div>
	</div>

<div id="heading_name">
	<div id="options">
		<span>
			Exam Info
		</span>
			 <a href=<?php echo "exam_info.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>
        <span class="link"></span>
      </a>
	</div>
	</div>

	<div id="heading_name">
		<div id="options">
			<span>
			Fees Details
		</span>
		<a href=<?php echo "fees_details.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>
        <span class="link"></span>
      </a>
		</div>
	</div>

<div id="heading_name">
		<div id="options">
			<span>
			Attandence
		</span>
		<a href=<?php echo "attendance.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>
        <span class="link"></span>
      </a>
		</div>
	</div>

	<div id="heading_name">
		<div id="options">
			<span>
			Schedules
		</span>
		<a href=<?php echo "schedules.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>
        <span class="link"></span>
      </a>
		</div>
	</div>

<div id="heading_name">
	<div id="options">
				<span>
			Faculty Details
		</span>
		<a href=<?php echo "faculty_details.php?email=" .$_SESSION['email']."&name=".$_SESSION['username'] ?>>
        <span class="link"></span>
      </a>
	</div>
	</div>

	<div id="heading_name">
		<div id="options">
			<span>
			Log out
		</span>
			 <a href="logout.php">
        <span class="link"></span>
      </a>
		</div>
	</div>

</div>



</body>
</html>