<!-- Include Header -->
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
<section class="content" role="login" tabindex="1">
	<div class="container">
		<div class="top-section">
			<form action="registerinput.php" method="post" id="register">
				<label for="user">Username:</label>
				<input type="text" id="user" name="user"><br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password"><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
</section>
<!-- Include Footer -->
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>