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

$sql = "UPDATE total_classes SET total_attendance = total_attendance + 1 WHERE email = '$teacher_email' AND class='$class'";
$result = mysqli_query($con, $sql);

if(!$result){
echo(mysqli_error($result));
}else header('location: attendance_class_'.$class.'.php?email='.$teacher_email.'&name='.$teacher_name.'&class='.$class);

?>