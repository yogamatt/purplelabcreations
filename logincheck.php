<?php
session_start();
require ($_SERVER['DOCUMENT_ROOT'].'/db-connect.php');
//Conection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//echo $conn->host_info . "\n";

$user = $_POST['user'];
$password = $_POST['password'];

if ($stmt = $conn->prepare("SELECT password FROM users WHERE username = ? LIMIT 1")) {
    $stmt->bind_param('s', $user);
	$stmt->execute();
    $stmt->store_result();
	$result = $stmt->num_rows;

    if ($result == 1) {
    	$stmt->bind_result($hash);
    	$stmt->fetch();

    	if (password_verify($password, $hash)) {
    		echo $user.' has logged in.';
    		$_SESSION['logged'] = '1';
    		header('Location: http://purplelabcreations.com/plc-admin.php');
    	} else {
    		echo 'failed!';	
    	}

  	}
  	echo 'Wrong Username/Password';
    $stmt->close();
}

$mysqli->close();

include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>