<?php
require_once('db.php');
$query = "select * from attendance";
$result = mysqli_query($con,$query);
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
				<li><a href="st_homepg.html">Home</a></li>
				<li><a href="profile.html">Profile</a></li>
				<li><a href="exam_info.html">Exam Info</a></li>
				<li><a href="fees_details.html">Fees Details</a></li>
				<li><a href="attendance.html">Attendance</a></li>
				<li><a href="index.html">Schedules</a></li>
				<li><a href="index.html">Notice Board</a></li>
				<li><a href="faculty_details.html">Faculty Details</a></li>
				<li><a href="index.html">Logout</a></li>
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
    <th>Attended Lactures</th>
    <th>Total Lactures</th>
<th>Percentage</th>
<th>Short?</th>
  </tr>
	
 	<tr>
		<?php
		
		while($row = mysqli_fetch_assoc($result)){
			?>
<!-- database coloumn name -->
			<td>  <?php echo $row['subject'];  ?>  </td>
			<td>  <?php echo $row['attended'];  ?>  </td>
			<td>  <?php echo $row['total'];  ?>  </td>
			<td>  <?php echo $row['percentage'];  ?>  </td>
			<td>  <?php echo $row['short']; ?>  </td>

			</tr>
			<?php
		}
		
		?>

</table>

</div>

</body>
</html>