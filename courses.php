<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'header.php'?>
    </head>
    <!-- for knowlegde network -->
		
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/top-header.png); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Home</a></li>
							<li>Courses</li>
						</ul>
						<h1 class="white-text">Courses Pages</h1>
					</div>
				</div>
				
			</div>

		</div>
        				
		<!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<h2>Chosose streams for enquire about courses.</h2>
				<div class="widget tags-widget">
					<a class="tag" href="biologial-science.php">Biological Science</a>
					<a class="tag" href="#phy">Physical Science</a>
					<a class="tag" href="#arts">Arts</a>
					<a class="tag" href="#commerce">Commerce</a>
					<a class="tag" href="#e-tech">Engineering Technology</a>
					<a class="tag" href="#bio-tech">Biological Technology</a>
				
				</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>
   