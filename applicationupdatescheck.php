<!-- Include Header -->
<?php
session_start();

if (!isset($_SESSION['logged'])) {
	header('Location: http://purplelabcreations.com');
	exit();
}

include ($_SERVER['DOCUMENT_ROOT'].'/header.php');

require ($_SERVER['DOCUMENT_ROOT'].'/db-connect.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//echo $conn->host_info . "\n";
//Connection


$title = $_POST['title'];
$alt = $_POST['alt'];
$tool = $_POST['tool'];
$descript = $_POST['descript'];

$thumb = $_FILES["thumb"]["name"];
$thumbtype = $_FILES['thumb']['type'];
$thumbpath = "uploads/apps/".$thumb;

$small = $_FILES["small"]["name"];
$smalltype = $_FILES['small']['type'];
$smallpath = "uploads/apps/".$small;

$medium = $_FILES["medium"]["name"];
$mediumtype = $_FILES['medium']['type'];
$mediumpath = "uploads/apps/".$medium;

$large = $_FILES["large"]["name"];
$largetype = $_FILES['large']['type'];
$largepath = "uploads/apps/".$large;


move_uploaded_file($_FILES["thumb"]["tmp_name"],"uploads/apps/" .$thumb);
move_uploaded_file($_FILES["small"]["tmp_name"],"uploads/apps/" .$small);
move_uploaded_file($_FILES["medium"]["tmp_name"],"uploads/apps/" .$medium);
move_uploaded_file($_FILES["large"]["tmp_name"],"uploads/apps/" .$large);


if ($stmt = $conn->prepare("INSERT INTO apps (title, alt, tool, descript, thumbpath, smallpath, mediumpath, largepath) VALUES (?,?,?,?,?,?,?,?)")) {
    $stmt->bind_param('ssssssss', $title, $alt, $tool, $descript, $thumbpath, $smallpath, $mediumpath, $largepath);
	$stmt->execute();
    $stmt->close();
    ?>
    <section class="content" role="appsuccess" tabindex="-1">
		<div class="container">
			<div class="top-section">
				<h3 class="text-center page-header">Yo. It worked</h3>
				<h4 class="text-center">Wanna head back?</h4>
				<div class="text-center">
					<p>Might as well:</p>
					<p>&nbsp;</p>
					<a href="plc-admin.php" class="noHov"><span class="updateButton">Go, go, go</span></a>
				</div>
			</div>
		</div>
	</section>
	<?php
} else {
	?>
	<section class="content" role="appfail" tabindex="-1">
		<div class="container">
			<div class="top-section">
				<h3 class="text-center page-header">Big time fail.</h3>
				<h4 class="text-center">Wanna head back?</h4>
				<div class="text-center">
					<p>Might as well:</p>
					<p>&nbsp;</p>
					<a href="applicationupdates.php" class="noHov"><span class="updateButton">Go, go, go</span></a>
				</div>
			</div>
		</div>
	</section>
	<?php
}

$mysqli->close();

include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');

?>