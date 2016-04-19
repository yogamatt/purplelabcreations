<?php
session_start();
?>
<!-- Include Header -->
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
<?php
if (!isset($_SESSION['logged'])){
?>
	<section class="content" role="login" tabindex="-1">
		<div class="container">
			<div class="top-section">
				<h3 class="text-center page-header">Log in</h3>
				<form action="logincheck.php" method="post" id="login">
					<label for="user">Username:</label>
					<input type="text" id="user" name="user"><br><br>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password"><br><br>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</section>
<?php	
} else {
?>
	<section class="content" role="logged" tabindex="1">
		<div class="container">
			<div class="top-section row">
				<h3 class="text-center page-header">Sup. You are logged in!</h3>
				<a href="/logout.php" class="pull-right">Log Out</a>
				<p>&nbsp;</p>
				<h4 class="text-center">What do you want to do?</h4>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<div class="updates col-md-6 text-center">
					<p>Update Website Section:</p>
					<a href="websiteupdates.php"><span class="updateButton">Head there now</span></a>
				</div>
				<div class="updates col-md-6 text-center">
					<p>Update Application Section:</p>
					<a href="applicationupdates.php"><span class="updateButton">Well go on</span></a>
				</div>
			</div>
		</div>
	</section>
<?php 
}
?>
<!-- Include Footer -->
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>