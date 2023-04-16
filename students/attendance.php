<?php
require_once('db.php');
$email =  $_GET['email'];
$query = "SELECT class from students WHERE email = '$email'";
$result = mysqli_query($con,$query);


if(!$result){
	echo "foff1";
}

$row = mysqli_fetch_assoc($result);
$class = $row['class'];

// echo $class;

$query = "SELECT att.subject, att.attendance,total.total_attendance  from class".$class."_attendance att INNER JOIN total_classes total WHERE att.st_email = '$email' AND att.subject = total.subject AND total.class= '$class'";
$result = mysqli_query($con,$query);

if(!$result){
	echo "foff2";
}

// $query = "SELECT total.attendance, from total_classes total WHERE  = '$email'";
// $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="exam_info.css?v=<?php echo time(); ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Attendance</title>
</head>
<body>

<div id="body-header">
	<header style="margin-top: 0px; margin-bottom: 0px; width: auto;">
		
		<nav style="display: inline-block;">
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
	<h1 style="margin-top: 0px; font-family: 'roboto';">Attendance Record</h1>
</main>
</div>

<marquee behavior="alternate" style="background-color: #F4B400;" scrollamount="10">
<b style="text-align: center; background-color:#F4B400;  color: red; font-size:22px">Required attendance Percentage for getting pass grade > 75%</b>
</marquee>

<div class="marks">
	
<table style="width: 100%;">
	  <tr style="color: white; background-color: black">
    <th>Subject</th>
    <th>Attended Lectures</th>
    <th>Total Lectures</th>
<th>Percentage</th>
  </tr>
	
 	<tr>
		<?php
		
		while($row = mysqli_fetch_assoc($result)){
			?>
<!-- database coloumn name -->
			<td>  <?php echo $row['subject'];  ?>  </td>
			<td>  <?php echo $row['attendance'];  ?>  </td>
			<td>  <?php echo $row['total_attendance'];  ?>  </td>
			<td>  <?php 
               
			   $percentage = round($row['attendance']/$row['total_attendance'], 4)*100;

			echo $percentage."%";  ?>  </td>
			</tr>
			<?php
		}
		
		?>

</table>

</div>

</body>
</html>