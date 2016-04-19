<?php

require ($_SERVER['DOCUMENT_ROOT'].'/db-connect.php');
//Conection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo $conn->host_info . "\n";

//Get Form Posts
$user = $_POST['user'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT)."\n";

$sql = "INSERT INTO users (username, password) VALUES ('$user', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>