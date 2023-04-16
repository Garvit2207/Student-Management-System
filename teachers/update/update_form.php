<?php
require_once('db.php');
// $student_name = str_replace("+"," ",$_GET['student_name']);
$student_name = urlencode($_GET['student_name']);

$student_email =  $_GET['student_email'];
$name = $_GET['name'];
$subject = $_GET['subject'];
$class = $_GET['class'];
$email = $_GET['teacher_email'];
$marks = $_GET['marks'];
$update = false;
$check_marks = true;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="update_form.css?v=<?php echo time(); ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Class info</title>
</head>
<body>
	<div id="body-header">
	<header style="margin-top: 0px; margin-bottom: 0px; width: auto;">
		
		<nav style="display: inline-block;">
			<ul>
				<li><a href=<?php echo "../profile.php?email=" .$email."&name=".$_GET['name'] ?>>Profile</a></li>
				<li><a href=<?php echo "../class_info.php?email=" .$email."&name=".$_GET['name'] ?>>Class Info</a></li>
				<li><a href=<?php echo "update_class_1.php?email=" .$email."&name=".$_GET['name']."&class=1" ?>>Update Marks</a></li>
				<li><a href=<?php echo "../attendance.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Attendance</a></li>
				<li><a href=<?php echo "exam_info.php?email=" .$email."&name=".$_GET['name'] ?>>Schedules</a></li>
				<li><a href=<?php echo "exam_info.php?email=" .$email."&name=".$_GET['name'] ?>>Notice Board</a></li>
				<li><a href=<?php echo "faculty_details.php?email=" .$email."&name=".$_GET['name'] ?>>Faculty Details</a></li>
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


<?php

require_once('db.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
$marks = $_POST['marks'];
if($marks>100){
$check_marks = false;
}else{
$sql = "UPDATE sem1info SET marks = '$marks' where student_email = '$student_email' AND subject = '$subject'";
$result = mysqli_query($con, $sql);
if(!$result){
    echo "Error";
}else $update = true;

if($update){

	header('location: update_class_1.php?email=' .$email.'&name='.$_GET['name'].'&class=1');

}else mysqli_error($result);

}
}

?>



<form method = "POST">
<?php

if($check_marks==false){
	echo'<p style="font-size: 1.5vw; color: red; margin-bottom: 2vw; margin-right: 3vw; font-weight: bold">Invalid Marks.</p>';
}

	?>
<div class = "container">

<div id="heading_name">
<label>Sudent Name</label>
<input type="text" value= <?php echo str_replace('+', '_',$student_name) ?> readonly>	
</div>
<div id="heading_name">

<label>Student roll</label>
<input type="text" value="102116001" readonly>	
</div>
<div id="heading_name">
<label>Subject</label>
<input type="text" value= <?php echo "$subject" ?>>	
</div>
<div id="heading_name">
	
	<label>Marks</label>
<input type="text" name="marks" value= <?php echo "$marks" ?>>
</div>
<button type="submit">update</button><br>

</div>
	</form>


</body>
</html>