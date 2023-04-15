<?php
require_once('db.php');
$email =  $_GET['email'];
$query = "SELECT * from sem1info where student_email = '$email'";
$result = mysqli_query($con,$query);

if(!$result){
	echo mysqli_error($result);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="exam_info.css?v=<?php echo time(); ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Exam info</title>
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
				<li><a href=<?php echo "exam_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Notice Board</a></li>
				<li><a href=<?php echo "faculty_details.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Faculty Details</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<?php
	echo'<h1 class="animated-text">'.$_GET['name'].', Know Your Progress!!</h1>'
	?>
</main>
</div>

<div class="sems">
	<div style="display: inline-block;">
			<ul>
				<li style="background-color:#F4B400;  border-radius: 25px; padding: 10px; width: 67px; height: 20px; text-align: center;" ><a href="exam_info.html"><a href="st_homepg.html">Sem 1</a></li>
				<li><a href="profile.html">Sem 2</a></li>
				<li><a href="index.html">Sem 3</a></li>
				<li><a href="index.html">Sem 4</a></li>
			</ul>
		</div>
</div>

<div class="marks">
	
<table style="width: 100%;">
	  <tr>
    <th>SUBJECT</th>
    <th>EXAM CODE</th>
    <th>MARKS OBTAINED</th>
<th>MAX. MRAKS</th>
<th>GRADE AWARDED</th>
  </tr>
	
 	<tr>
		<?php
		
		while($row = mysqli_fetch_assoc($result)){
			?>
<!-- database coloumn name -->
			<td>  <?php echo $row['subject'];  ?>  </td>
			<td>  <?php echo $row['examcode'];  ?>  </td>
			<td>  <?php echo $row['marks'];  ?>  </td>
			<td>  <?php echo $row['maxmarks'];  ?>  </td>
			<td>  <?php echo $row['grade'];  ?>  </td>

			</tr>
			<?php	
		}
		
		?>

</table>

</div>

</body>
</html>