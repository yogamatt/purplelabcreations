<!-- Include Header -->
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
<!-- Jumbotron -->
<section class="content jumbotron first" id="main" role="main" tabindex="-1">
	<div class="container">
		<div class="top-section">
			<h1>Purple Lab Creations</h1>
			<h2>Website Design &amp; Development</h2>
			<p>&nbsp;</p>
			<p>Designs that will tell your story and promote your business.</p>
			<p>Functionality that is gurenteed to satisfy.</p>
			<p>Click <a href="/info">here</a> for more information!</p> 
		</div>
	</div>
</section>
<!-- W and A Choices -->
<section id="choices" class="content second" role="choices" tabindex="-1">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-6">
				<span aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Websites">W</span>
			</div>
			<div class="col-md-6">
				<span aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Applications">A</span>
			</div>
		</div>
	</div>
</section>
<!-- Websites -->
<section id="websites" class="jumbotron content third" role="websiteinfo" tabindex="-1">
	<div class="container text-center">
		<h2 class="">Websites</h2>
		<p>From design to development, PLC can work with a variety of platforms and languages.</p>
		<p>Whether you are needing a new site, a redesign or just some maintenance, PLC will gladly assist.</p>
		<div class="updates">
			<a href="#webform"><p class="updateButton">Streamline <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p></a>
		</div>
	</div>
</section>
<!-- Website Portfolio -->
<section class="content fourth" role="websites" tabindex="-1">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
					require ($_SERVER['DOCUMENT_ROOT'].'/db-connect.php');
					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					//echo $conn->host_info . "\n";

					if ($stmt = $conn->prepare("SELECT id, time, title, alt, tool, descript, thumbpath, smallpath, mediumpath, largepath FROM websites ORDER BY id DESC LIMIT 1")){

						//$stmt->bind_param('s',$id);

						$stmt->execute();

						$stmt->store_result();

						$stmt->bind_result($id, $time, $title, $alt, $tool, $descript, $thumbpath, $smallpath, $mediumpath, $largepath);

						while ($stmt->fetch()) {

						$time = date('F jS, Y',strtotime($time)); ?>

							<div class="img-container">
								<img class="dim img-responsive" title="<?php echo $tool; ?>" data-toggle="modal" data-target="#pmodal<?php echo $id; ?>" sizes="100vw" src="<?php echo $thumbpath; ?>" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
							</div>
							<div class="time line-height-small text-right">Uploaded on <?php echo $time; ?></div>


							<!-- Website Modal #1 -->
							<div class="modal fade" id="pmodal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="plabel<?php echo $id; ?>" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="plabel<?php echo $id; ?>"><?php echo $title; ?></h4>
										</div>
										<div class="modal-body text-center">
											<img class="img-responsive center-block" src="<?php echo $thumbpath; ?>" sizes="100vw" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
											<p class="line-height-small"><?php echo $descript; ?></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- End Website Modal #1 -->
							
						<?php

						}

						$stmt->free_result();

						$stmt->close();
					}

					$conn->close();
				?>

			</div>
			<div class="col-md-4">
				<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
					require ($_SERVER['DOCUMENT_ROOT'].'/db-connect.php');
					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					//echo $conn->host_info . "\n";

					if ($stmt = $conn->prepare("SELECT id, time, title, alt, tool, descript, thumbpath, smallpath, mediumpath, largepath FROM websites ORDER BY id DESC LIMIT 1, 1")){

						//$stmt->bind_param('s',$id);

						$stmt->execute();

						$stmt->store_result();

						$stmt->bind_result($id, $time, $title, $alt, $tool, $descript, $thumbpath, $smallpath, $mediumpath, $largepath);

						while ($stmt->fetch()) {

						$time = date('F jS, Y',strtotime($time)); ?>

							<div class="img-container">
								<img class="dim img-responsive" title="<?php echo $tool; ?>" data-toggle="modal" data-target="#pmodal<?php echo $id; ?>" sizes="100vw" src="<?php echo $thumbpath; ?>" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
							</div>
							<div class="time line-height-small text-right">Uploaded on <?php echo $time; ?></div>


							<!-- Website Modal #2 -->
							<div class="modal fade" id="pmodal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="plabel<?php echo $id; ?>" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="plabel<?php echo $id; ?>"><?php echo $title; ?></h4>
										</div>
										<div class="modal-body text-center">
											<img class="img-responsive center-block" src="<?php echo $thumbpath; ?>" sizes="100vw" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
											<p class="line-height-small"><?php echo $descript; ?></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- End Website Modal #2 -->
						
						<?php

						}

						$stmt->free_result();

						$stmt->close();
					}

					$conn->close();
				?>

			</div>
			<div class="col-md-4">
				<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
					require ($_SERVER['DOCUMENT_ROOT'].'/db-connect.php');
					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					//echo $conn->host_info . "\n";

					if ($stmt = $conn->prepare("SELECT id, time, title, alt, tool, descript, thumbpath, smallpath, mediumpath, largepath FROM websites ORDER BY id DESC LIMIT 2, 1")){
						
						//$stmt->bind_param('s',$id);

						$stmt->execute();

						$stmt->store_result();

						$stmt->bind_result($id, $time, $title, $alt, $tool, $descript, $thumbpath, $smallpath, $mediumpath, $largepath);

						while ($stmt->fetch()) {

						$time = date('F jS, Y',strtotime($time)); ?>

							<div class="img-container">
								<img class="dim img-responsive" title="<?php echo $tool; ?>" data-toggle="modal" data-target="#pmodal<?php echo $id; ?>" sizes="100vw" src="<?php echo $thumbpath; ?>" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
							</div>
							<div class="time line-height-small text-right">Uploaded on <?php echo $time; ?></div>


							<!-- Website Modal #3 -->
							<div class="modal fade" id="pmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="plabel<?php echo $id; ?>" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="plabel<?php echo $id; ?>"><?php echo $title; ?></h4>
										</div>
										<div class="modal-body text-center">
											<img class="img-responsive center-block" src="<?php echo $thumbpath; ?>" sizes="100vw" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
											<p class="line-height-small"><?php echo $descript; ?></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- End Website Modal #3 -->	

						<?php

						}

						$stmt->free_result();

						$stmt->close();
					}

					$conn->close();
				?>

			</div>
		</div>
	</div>
</section>
<!-- Applications -->
<section id="applications" class="jumbotron content fifth" role="applicationinfo" tabindex="-1">
	<div class="container text-center">
		<h2 class="">Applications</h2>
		<p>&nbsp;</p>
		<p>This section hasn't been completed yet!</p>
	</div>
</section>
<!-- Application Portfolio -->
<section class="content sixth" role="applications" tabindex="-1">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
					require ($_SERVER['DOCUMENT_ROOT'].'/db-connect.php');
					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					//echo $conn->host_info . "\n";

					if ($stmt = $conn->prepare("SELECT id, time, title, alt, tool, descript, thumbpath, smallpath, mediumpath, largepath FROM apps ORDER BY id DESC LIMIT 1")){
						
						//$stmt->bind_param('s',$id);

						$stmt->execute();

						$stmt->store_result();

						$stmt->bind_result($id, $time, $title, $alt, $tool, $descript, $thumbpath, $smallpath, $mediumpath, $largepath);

						while ($stmt->fetch()) {

						$time = date('F jS, Y',strtotime($time)); ?>

							<div class="img-container">
								<img class="dim img-responsive" title="<?php echo $tool; ?>" data-toggle="modal" data-target="#pmodal<?php echo $id; ?>" sizes="100vw" src="<?php echo $thumbpath; ?>" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
							</div>
							<div class="time line-height-small text-right">Uploaded on <?php echo $time; ?></div>

							<!-- Application Modal #1 -->
							<div class="modal fade" id="pmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="plabel<?php echo $id; ?>" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="plabel<?php echo $id; ?>"><?php echo $title; ?></h4>
										</div>
										<div class="modal-body text-center">
											<img class="img-responsive center-block" src="<?php echo $thumbpath; ?>" sizes="100vw" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt; ?>">
											<p class="line-height-small"><?php echo $descript; ?></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- End Application Modal #1 -->	

						<?php

						}

						$stmt->free_result();

						$stmt->close();
					}

					$conn->close();
				?>

			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
</section>
<!-- Pre-Footer -->
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/prefooter.php');
?>
<!-- Include Footer -->
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/footer.php');
?>