<?php
include 'header.php';
?>
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
<section class="content second" role="websites" tabindex="-1">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
			</div>
		</div>
	</div>
</section>
<section class="content third" role="websites" tabindex="-1">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="img-responsive" data-toggle="modal" data-target="#modalPort" sizes="100vw" src="/images/modal/portfolio5.png" srcset="/images/modal/portfolio5.png 500w, /images/modal/portfolio100.jpg 1000w, /images/modal/portfolio150.jpg 1500w" alt="Udacity Portfolio Site">
			</div>
		</div>
	</div>
</section>
<!--Modals-->
<div class="modal fade" id="modalPort" tabindex="-1" role="dialog" aria-labelledby="portfolioModallabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="portfolioModallabel">Project 1</h4>
			</div>
			<div class="modal-body text-center">
				<img class="img-responsive center-block" src="/images/modal/portfolio100.jpg" sizes="100vw" srcset="/images/modal/portfolio5.png 500w, /images/modal/portfolio100.jpg 1000w, /images/modal/portfolio150.jpg 1500w" alt="Udacity Portfolio Site">
				<p class="line-height-small">This is my first project in this class. It is currently being developed so please check back.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>