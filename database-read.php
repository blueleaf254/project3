<?php
	// 1. Create a database connection
include "db-info.php";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



	// 2. Perform database query
	$query  = "SELECT * FROM leads ";

	
	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Sale Leads</title>
</head>
<body>

	<h1>List of Leads</h1>

	<table border>
	
		<tr>
	
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Comments</th>			
		</tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>
			<td><?php echo $pages["id"]; ?></td>
			<td><?php echo $pages["first_name"]; ?></td>
			<td><?php echo $pages["last_name"]; ?></td>
			<td><?php echo $pages["phone"]; ?></td>
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["message"]; ?></td>					

		</tr>

<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Index</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>