<?php

include('config/connection.php');
include('templates/header.php');

?>

<body>
	<?php



	if (!isset($_GET['do']) || $_GET['do'] != 1) {


		switch ($_GET['type']) {
			case 'courses':
				$query = 'DELETE FROM courses
							WHERE
							course_id = ' . $_GET['id'];
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
	?>
				<script type="text/javascript">
					alert("Successfully Deleted.");
					window.location = "courses.php";
				</script>

			<?php
			case 'students':
				$query = 'DELETE FROM students
							WHERE
							student_id = ' . $_GET['id'];
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
				//break;
			?>

				<script type="text/javascript">
					alert("Successfully Deleted.");
					window.location = "students.php";
				</script>
	<?php
				//break;
		}
	}
	?>

</body>

</html>