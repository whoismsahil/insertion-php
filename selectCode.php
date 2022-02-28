<!DOCTYPE html>
<html>
<head>
	<title>Select Code</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
	$con = mysqli_connect("localhost", "root", "", "insertcode");

	$na = $_POST['t1'];

	$sql = "SELECT * FROM std WHERE rollno='$na'";

    $result = mysqli_query($con, $sql);

    echo "<h1>You searched for the Roll Number <br> <em>" . $na . "</em></h1>";

    echo "<br>";
    
    echo "<table>";
    echo "<thead>";
    echo "<tr>
            <td>Roll Number</td>
            <td>Name</td>
            <td>Address</td>
            <td>Course</td>
          </tr>";
    echo "</thead>";
    
    while ($r = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$r['rollno']}
                <td>{$r['name']}
                <td>{$r['address']}
                <td>{$r['course']}";
    }
    echo "</table>";
?>

</body>
</html>