<!DOCTYPE html>
<html>
<head>
	<title>Delete Successful</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
	$con = mysqli_connect("localhost", "root", "", "insertcode");

	$na = $_POST['t1'];

	$sql = "DELETE FROM std WHERE rollno='$na'";

	$result = mysqli_query($con, $sql);
	if ($result == 1) {
		echo "<h1>Deletion Successful</h1>";
	}
	else {
		echo "Failed";
	}
?>

</body>
</html>