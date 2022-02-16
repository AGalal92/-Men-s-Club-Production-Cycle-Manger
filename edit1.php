<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>

<body>
	<?php
	$courseId = $_POST['course_id'];
	$courseName = $_POST['course_name'];
	$startDate = $_POST['start_date'];
	$endDate = $_POST['end_date'];
	$price = $_POST['price'];
	$classRoom = $_POST['class'];
	$instructor = $_POST['instructor'];

	include('config/connection.php');

			$query = 'UPDATE courses set course_name ="' . $courseName . '",
							start_date ="' . $startDate . '", end_date="' . $endDate . '",
							price="' . $price . '",class="' . $classRoom . '", 
							instructor="'.$instructor.'" WHERE
							course_id ="' . $courseId . '"';
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	?>
	<script type="text/javascript">
		alert("Update Successfull.");
		window.location = "courses.php";
	</script>
</body>

</html>