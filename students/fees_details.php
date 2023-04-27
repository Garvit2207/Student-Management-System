<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fees.css?v=<?php echo time(); ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>Fees_Details</title>
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
				<li><a href=<?php echo "attendance.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Attandence</a></li>
				<li><a href=<?php echo "schedules.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Schedules</a></li>
				<li><a href=<?php echo "faculty_details.php?email=" .$_GET['email']."&name=".$_GET['name'] ?>>Faculty Details</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<h1 style="margin-top: 0px; margin-bottom: 0px;">Your Cart</h1>
</main>

</div>

<div class="details_table">
	
	<h3 style="font-size: 1.9vw">
		Semester 4 fee details :
	</h3>
	<div class="order_details">
		
		<ol style="list-style: none;">
			
			<li>
				STUDENT SECURITY :  
			</li>
			<li>
				TUITION FEE :  
			</li>
			<li>
				STUDENT ACTIVITIES & WELFARE CHARGES : 
			</li>
			<li>
				DEVELOPMENT FEES : 
			</li>
			<li>
				EXAMININATION FEES : 
			</li>
			<li>
				MEDICAL FEE AND INSURANCE CHARGES : 
			</li>
			<li>
				ADMISSION FEES : 
			</li>

		</ol>

				<ol style="list-style: none;">
			
			<li>
				Rs  10000.0 
			</li>
			<li>
				Rs  104100.0 
			</li>
			<li>
				Rs  7500.0
			</li>
			<li>
				Rs  57000.0
			</li>
			<li>
				Rs  3000.0
			</li>
			<li>
				Rs  500.0
			</li>
			<li>
				Rs  13000.0
			</li>

		</ol>

	</div>

	<div class="total_amt">
		<h3 style="font-size: 1.7vw">Paya	ble Amount: Rs  195100.0</h3>
		<button style="cursor: pointer;">
			<h3 style="font-size: 1.3vw">Place Order</h3>
		</button>
	</div>

</div>


</body>
</html>