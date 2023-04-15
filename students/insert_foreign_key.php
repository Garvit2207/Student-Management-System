<?php

$con = mysqli_connect("localhost", "root","","test");
if(!$con){
    die("Connection error");
}

$sql = "select * from sem1info";
$result = mysqli_query($con, $sql);

if($result){
    echo"column added";
}else echo mysqli_error($result);

?>
