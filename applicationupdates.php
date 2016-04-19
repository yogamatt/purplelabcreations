<!-- Include Header -->
<?php
session_start();

if (!isset($_SESSION['logged'])) {
	header('Location: http://purplelabcreations.com');
	exit();
}

include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>

<section class="content" role="login" tabindex="-1">
	<div class="container">
		<div class="top-section row">
			<h3 class="text-center page-header">Application Updates</h3>
			<p>&nbsp;</p>
			<div class="col-md-offset-3 col-md-6">
				<form action="applicationupdatescheck.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" id="title" name="title" class="form-control" autofocus>
					</div>
					<div class="form-group">
						<label for="title">Alt</label>
						<input type="text" id="alt" name="alt" class="form-control">
					</div>
					<div class="form-group">
						<label for="tool">Tooltip</label>
						<input type="text" id="tool" name="tool" class="form-control">
					</div>
					<div class="form-group">
						<label for="descript">Description</label>
						<textarea id="description" name="descript" rows="5" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="thumb">Thumbnail</label>
						<input type="file" id="thumb" name="thumb" class="form-control">
					</div>
					<div class="form-group">
						<label for="small">Small Size</label>
						<input type="file" id="small" name="small" class="form-control">
					</div>
					<div class="form-group">
						<label for="medium">Medium Size</label>
						<input type="file" id="medium" name="medium" class="form-control">
					</div>
					<div class="form-group">
						<label for="large">Large Size</label>
						<input type="file" id="large" name="large" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Submit" class="updateButton">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Include Footer -->
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>