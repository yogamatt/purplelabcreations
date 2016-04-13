<?php
include 'header.php';
?>



<?php
function connect() {
$servername = "localhost";
$username = "plc-admin";
$password = "plc-password";
$dbname = "purplelabcreations";
// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
echo $conn1->host_info . "\n";
}
connect();
?>
<!--
<?php
include 'footer.php';
?>
-->