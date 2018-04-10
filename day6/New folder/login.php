<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<?php
	$login = $_POST['login'];
	$password = $_POST['password'];
	$dbhost = "localhost";
	$dbuser = "root";
	$dbname = "test";
	$conn = mysqli_connect($dbhost,$dbuser,' ',$dbname);
	if(mysqli_connect_errno()){
		die("connection unsuccessful");
	}
	
		$query = "SELECT * FROM student where username='{$login}'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_row($result);
		echo '<pre>'; print_r($row); echo '</pre>';
		var_dump($row);
	?>
</head>
<body>

</body>
</html>