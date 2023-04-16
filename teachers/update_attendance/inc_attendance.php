<?php
require_once('db.php');
$student_email = $_GET['student_email'];
$subject = $_GET['subject'];
$class = $_GET['class'];
$teacher_email = $_GET['teacher_email'];
$teacher_name = $_GET['teacher_name'];

    
$sql = "UPDATE class".$class."_attendance SET attendance = attendance + 1 WHERE st_email = '$student_email' AND subject = '$subject'";
$result = mysqli_query($con, $sql);

if(!$result){
echo(mysqli_error($result));
}else header('location: attendance_class_'.$class.'.php?email='.$teacher_email.'&name='.$teacher_name.'&class='.$class);

?>