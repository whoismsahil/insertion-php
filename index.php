<!DOCTYPE html>
<html>

<head>
	<title>Connectivity Demo</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div>

		<h1>Insert Data</h1>

		<form method="POST" action="insert_code.php">

			<label>Roll Number</label>
			<input type="text" name="t1" required><br>

			<label>Name</label>
			<input type="text" name="t2" required><br>

			<label>Address</label>
			<input type="text" name="t3" required><br>

			<label>Course</label>
			<input type="text" name="t4" required><br>

			<input type="submit" value="Submit">

		</form>

	</div>

	<br><br>

	<hr width="60%">

	<br><br>

	<div>

		<h1>Select Data</h1>
		<form action="selectCode.php" method="POST">

			<label>Roll Number</label>
			<input type="text" name="t1" required>

			<input type="submit" value="Select">

		</form>

	</div>

	<br><br>

	<hr width="60%">

	<br><br>

	<div>

		<h1>Delete Record</h1>
		<form action="deleteCode.php" method="POST">

			<label>Roll Number</label>
			<input type="text" name="t1" required>

			<input type="submit" value="Delete Data">

		</form>

	</div>

</body>

</html>