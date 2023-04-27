<?php
require_once('db.php');
$name = $_GET['name'];
$email =  $_GET['email'];
$class = $_GET['class'];
$query = "SELECT s.username, s.email, s.Class, tg.subject, exam.marks from students s INNER JOIN tagging tg INNER JOIN sem1info exam ON tg.class_allot = s.class AND s.email = exam.student_email AND exam.subject = tg.subject  WHERE tg.t_email = '$email' AND tg.class_allot = '$class' ";
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="update_class_1.css?v=<?php echo time(); ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Update Marks</title>
</head>
<body>
	<div id="body-header">
	<header style="margin-top: 0px; margin-bottom: 0px; width: auto;">
		
		<nav style="display: inline-block;">
			<ul>
				<li><a href=<?php echo "../profile.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Profile</a></li>
				<li><a href=<?php echo "../class_info.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Class Info</a></li>
				<li><a href=<?php echo "update_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Marks</a></li>
				<li><a href=<?php echo "../update_attendance/attendance_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Update Attendance</a></li>
				<li><a href=<?php echo "../schedules.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Schedules</a></li>

				<li><a href="../logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<?php
	echo'<h1 class="animated-text">Update Marks</h1>'
	?>
</main>
</div>

<div class="sems">
	<div style="display: inline-block;">
			<ul>
				<li style="background-color:#F4B400;  border-radius: 25px; padding: 10px; width: auto; height: auto; text-align: center;"><a href=<?php echo "update_class_1.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=1" ?>>Class 1</a></li>
				<li><a href=<?php echo "update_class_2.php?email=" .$_GET['email']."&name=".$_GET['name']."&class=2" ?>>class 2</a></li>
			</ul>
		</div>
</div>

<div class="marks">
	
<table style="width: 100%;">
	  <tr>
        <th>Sno</th>
    <th>Student Name</th>
    <th>Student Email</th>
    <th>Class</th>
<th>Subject</th>
<th>Marks</th>
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
			<td>  <?php echo $row['marks'];  ?>  </td>
			<td><a style = "color:#064c56" href= <?php echo 'update_form.php?student_name='. urlencode($row['username']).'&student_email='.$row['email'].'&name='.$_GET['name'].'&subject='.$row['subject'].'&class=1'.'&teacher_email='.$email.'&marks='.$row['marks']?> data-toggle="tooltip" data-placement="top" title="Update!"><i class ="fa fa-edit" aria-hidden="true"></i></a></td>	
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