<?php
require_once('db.php');
$name = $_GET['name'];
$email =  $_GET['email'];
$class = $_GET['class'];
$query = "SELECT s.username, s.email, s.Class, tg.subject, att.attendance from students s INNER JOIN teachers t INNER JOIN tagging tg INNER JOIN class1_attendance att ON tg.t_email = t.email AND tg.class_allot = s.class AND 	s.email = att.st_email AND tg.subject = att.subject WHERE t.email = '$email' AND tg.class_allot = '$class'";
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
	<link rel="stylesheet" href="theme.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="attendance.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Update Attendance</title>
</head>
<body>
	<div id="body-header">
	<header style="margin-top: 0px; margin-bottom: 0px; width: auto;">
		
		<nav style="display: inline-block;">
			<ul>
				<li><a href=<?php echo "../profile.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Profile</a></li>
				<li><a href=<?php echo "../class_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Class Info</a></li>
				<li><a href=<?php echo "../update/update_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Marks</a></li>
				<li><a href=<?php echo "attendance_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Attendance</a></li>
				<li><a href=<?php echo "../schedules.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Schedules</a></li>
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
				<li style="background-color:#F4B400;  border-radius: 25px; padding: 10px; width: auto; height: auto; text-align: center;"><a href=<?php echo "attendance_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Class 1</a></li>
				<li><a href=<?php echo "attendance_class_2.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=2"?>>class 2</a></li>
				<!-- <li  style="background-color:#F4B400;  border-radius: 25px; padding: 10px; width: auto; height: auto; text-align: center;"><a href=<?php echo "class_info.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>All Classes</a></li> -->
			</ul>
		</div>
		<p style = "display: inline-block; margin-left: 20vw;"><a style = "color:#064c56; margin-left:0.5vw;" href= <?php echo 'inc_class.php?class='.$class.'&teacher_email='.$email ?> data-toggle="tooltip" data-placement="top" title="Update!"><i class ="fa fa-plus" aria-hidden="true" style = " margin-right:0.5vw;"></i><?php
	echo "Add class ".$class?></a></td>
</p>
</div>

<div class="marks">
	
<table style="width: 100%;">
	  <tr>
        <th>sno</th>
    <th>Student_name</th>
    <th>Class</th>
    <th>Subject</th>
<th>Attendance</th>
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
			<td>  <?php echo $row['Class'];  ?>  </td>
			<td>  <?php echo $row['subject'];  ?>  </td>
			<td style = "color:red; font-weight:bold;">  <?php echo $row['attendance'];  ?>  </td>
			<td><a style = "color:#064c56" href= <?php echo 'inc_attendance.php?student_email='.$row['email'].'&subject='.$row['subject'].'&class='.$class.'&teacher_email='.$email.'&teacher_name='.$name?> data-toggle="tooltip" data-placement="top" title="Update!"><i class ="fa fa-plus" aria-hidden="true"?></i></a></td>	
			</tr>
			<?php	
		}
		
		?>

</table>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>