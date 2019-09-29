<?PHP 



	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$conn = mysqli_connect('localhost', 'root', '', 'users');

$sql = "CREATE TABLE users.users(
     ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	 username varchar(100) NOT NULL,
	 password varchar(100) NOT NULL,
	 email varchar(100) NOT NULL,
	 UNIQUE (username,email))";
	 
if ($conn->query($sql) === TRUE) {
	echo "Table Users created successfully";
} else {
	echo "Error creating table: " .$conn->error;
}

?>