<?PHP include('connection.php');

$sql = "CREATE DATABASE users";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
	echo "Error creating database: " .$conn->error;
}

?>
