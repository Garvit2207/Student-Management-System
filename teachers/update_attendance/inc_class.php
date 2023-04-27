<?php
require_once('db.php');
$class = $_GET['class'];
$teacher_email = $_GET['teacher_email'];
echo $teacher_email;
$sql = "SELECT * from teachers WHERE email = '$teacher_email'";
$result = mysqli_query($con, $sql);
if(!$result){
    echo(mysqli_error($result));
    }
$row = mysqli_fetch_assoc($result);
$teacher_name = $row['name'];

$sql = "UPDATE tagging SET total_lectures = total_lectures + 1 WHERE t_email = '$teacher_email' AND class_allot='$class'";
$result = mysqli_query($con, $sql);

if(!$result){
echo(mysqli_error($result));
}else header('location: attendance_class_'.$class.'.php?email='.$teacher_email.'&name='.$teacher_name.'&class='.$class);

?>