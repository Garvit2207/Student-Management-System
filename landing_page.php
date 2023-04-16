<?php
$login = true;
if($_SERVER['REQUEST_METHOD'] == "POST"){

  $select = $_POST['select'];
 
  if($select == 'student'){
    header('location: ../final_site/students/index.php');
  }else header('location: ../final_site/teachers/index.php');



}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Management System</title>
	<link rel="stylesheet" href="landing_page.css?v=<?php echo time(); ?>">
	<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    	<link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>

</head>
<body>

<div class="heading">
<h1 style="width: 85%; margin-left: auto; margin-right: auto;">
	Student Management System
</h1>	
</div>

  <form method = 'POST'>
<div class="wrapper">
 <input type="radio" name="select" id="option-1" value="student" checked>
 <input type="radio" name="select" id="option-2" value="teacher">
   <label for="option-1" class="option option-1">
     <div class="dot"></div>
      <span>Student</span>
      </label>
   <label for="option-2" class="option option-2">
     <div class="dot"></div>
      <span>Teacher</span>
   </label>
</div>
<br>
<button type="submit">Proceed</button><br>
</form>

</body>
</html>