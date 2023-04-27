<?php
require_once('db.php'); 
$name = $_GET['name'];
$email =  $_GET['email'];
$class = $_GET['class'];

$query = "SELECT COUNT(username) from students GROUP BY (class) HAVING class=".$class;
$result = mysqli_query($con,$query);

if(!$result){
	echo mysqli_error($result);
}else {
	$row = mysqli_fetch_assoc($result);
	$number_of_students = $row['COUNT(username)'];
	// echo $number_of_students; 
}

$query = "SELECT s.username, s.email, s.Class, tg.subject from teachers t INNER JOIN tagging tg ON tg.t_email = t.email INNER JOIN students s ON tg.class_allot = s.class WHERE t.email = '$email' AND tg.class_allot = '$class';";
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
	<link rel="stylesheet" href="class_info.css?v=<?php echo time(); ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Class info</title>
</head>
<body>
	<div id="body-header">
	<header style="margin-top: 0px; margin-bottom: 0px; width: auto;">
		
		<nav style="display: inline-block;">
			<ul>
			<li><a href=<?php echo "profile.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Profile</a></li>
				<li><a href=<?php echo "class_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Class Info</a></li>
				<li><a href=<?php echo "update/update_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Marks</a></li>
				<li><a href=<?php echo "update_attendance/attendance_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Attendance</a></li>
				<li><a href=<?php echo "schedules.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Schedules</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<?php
	echo"<h1 class='animated-text'>".$name.", here's your class!!</h1>"
	?>
</main>
</div>

<div class="sems">
	<div style="display: inline-block;">
			<ul>
				<li style="background-color:#F4B400;  border-radius: 25px; padding: 10px; width: auto; height: auto; text-align: center;" ><a href=<?php echo "class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Class 1</a></li>
				<li><a href=<?php echo "class_2.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=2" ?>>class 2</a></li>
				<!-- <li><a href="index.html">class 3</a></li> -->
				<!-- <li><a href="index.html">class 4</a></li> -->
				<li><a href=<?php echo "class_info.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>All Classes</a></li>
			</ul>
		</div>
		<p style = "display: inline-block; margin-left: 50vw;"> Total Students =
		<?php
   echo $number_of_students;
		?>
</p>
</div>

<div class="marks">
	
<table style="width: 100%;">
	  <tr>
        <th>Sno</th>
    <th>Student_name</th>
    <th>Student_email</th>
    <th>Class</th>
	<th>Subject</th>
<!-- <th>MAX. MRAKS</th>
<th>GRADE AWARDED</th> -->
  </tr>
	
 	<tr>
		<?php
		$count = 1;
		while($row = mysqli_fetch_assoc($result)){
			?>
<!-- database coloumn name -->
            <td><?php echo $count;
            $count = $count + 1;
            ?></td>
			<td>  <?php echo $row['username'];  ?>  </td>
			<td>  <?php echo $row['email'];  ?>  </td>
			<td>  <?php echo $row['Class'];  ?>  </td>
			<td>  <?php echo $row['subject'];  ?>  </td>

			</tr>
			<?php	
		}
		
		?>

</table>

</div>

</body>
</html>