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
				<!-- Streams -->
				
				<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="physical-science.php" class="course-img" target="_blank">
									<img src="img/Streams/physical sicence.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="physical-science.php" target="_blank" style="font-size:18px; text-align: center">Physical-Science</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="biological-science.php" class="course-img" target="_blank">
									<img src="img/Streams/biology.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="biological-science.php" target="_blank" style="font-size:18px; text-align: center">Biological-Science</a>
							</div>
						</div>
		            	<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="arts.php" class="course-img" target="_blank">
									<img src="img/Streams/arts.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="arts.php" target="_blank" style="font-size:18px; text-align: center">Arts</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="commerce.php" class="course-img" target="_blank">
									<img src="img/Streams/commerce.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="commerce.php" target="_blank" style="font-size:18px; text-align: center">Commerce</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="bio-system-technology.php" class="course-img" target="_blank">
									<img src="img/Streams/bio-tech.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="bio-system-technology.php" target="_blank" style="font-size:18px; text-align: center">Bio-system Technology</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="engineering-technology.php" class="course-img" target="_blank">
									<img src="img/Streams/e-technology.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="engineering-technology.php" target="_blank" style="font-size:18px; text-align: center">Engineering Technology</a>
							</div>
						</div>
						
		
		
		
		<?php include 'footer.php'?>
		
</html>
   