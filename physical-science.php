<?php
session_start();
/*
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:index.php");
    exit;
}*/

 // Include config file
require_once "config.php"; ?>


<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>


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
							<li><a href="courses.php">Career-Library</a></li>
                            <li>Physical-Science</li>
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

				
				<!-- tags widget -->
				<h2>Chosose course-category for enquire about courses.</h2>
				<!-- Streams -->

                <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="engineering.php" class="course-img" target="_blank">
									<img src="img/Engineering/engineering.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="engineering.php" target="_blank" style="font-size:18px; text-align: center">Enginnering</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="computer-courses.php" class="course-img" target="_blank">
									<img src="img/Engineering/computer-science.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="blog.php"  style="font-size:18px; text-align: center">ComputerScience & IT</a>
							</div>
						</div>
		            	<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="architecture.php" class="course-img" target="_blank">
									<img src="img/Engineering/architecture.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="architecture.php" target="_blank" style="font-size:18px; text-align: center">Architecture</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="science.php" class="course-img" target="_blank">
									<img src="img/Engineering/science.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="phy-science.php" target="_blank" style="font-size:18px; text-align: center">Science</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="mathematic-statistic.php" class="course-img" target="_blank">
									<img src="img/Engineering/maths.png" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="mathematics-statistics.php" target="_blank" style="font-size:18px; text-align: center">Mathematics & Statistics</a>
							</div>
						</div>

                        <?php include 'footer.php'?>
				