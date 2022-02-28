<!DOCTYPE html>
<html>
<head>
	<title>Insert Successful</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
	$con = mysqli_connect("localhost", "root", "", "insertcode");

	$na = $_POST['t1'];
	$name = $_POST['t2'];
	$add = $_POST['t3'];
	$c = $_POST['t4'];

	$sql = "INSERT INTO std VALUES('$na', '$name', '$add', '$c')";

	$result = mysqli_query($con, $sql);
	if ($result == 1) {
		echo "<h1>Registration Successful</h1>";
	}
	else {
		echo "Failed";
	}
?>

</body>
</html>