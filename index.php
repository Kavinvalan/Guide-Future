<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
        <!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bg-img.png); width:100%; height: 656px;"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							<h1 class="white-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">Guide to Future</h1>
							
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Discover yourself<br>Take the test to find the perfect career-path for you after Shcooling</b></p>

									<a class="main-button icon-button" href="login.php">Get Started!</a>

								<?php else: ?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Discover yourself,<br>Take the test to find the perfect career-path for you after schooling</b></p>

									<a class="main-button icon-button" href="http://127.0.0.1:5000/">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->



        <!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="margin-top: 100px; font-size: 45px;">Guide - Future</h2>
						<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
						<p class="lead"><b style=color:#ffbf80;>Guide - Future</b> is one stop destination <br>in helping you understand yourself, the best career for you <br> and providing all the resources in the process.</p>
                    </div>
				</div>	

				<div class="row">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="#" >
								<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="login.php"><h4>Career Prediction</h4></a>
								<?php else: ?>
									<a href="http://127.0.0.1:5000/"><h4>Career Prediction</h4></a>
									
								
							<?php endif ?>
								
								<p>Take the test to find the perfect career-path for you after Schooling.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="blog.php" >
								<h4>Knowledge Network</h4>
								</a>
								<p>Gain knowledge through various sources, like important informational links, access to study materials, etc.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="computer-courses.php" >
								<h4>Online Courses</h4>
								</a>
								<p>Links to relevant Courses.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
									
				</div>
				<!-- /row -->
				
				<hr class="section-hr">

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Call To Action -->
		<div id="cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bg-mid.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
					
						
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

									<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
									<p class="lead white-text" >We Create Beautiful Experiences
										That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="register.php">Get Started!</a>
								<?php else: ?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b></h2>

								<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
								<p class="lead white-text" >We Create Beautiful Experiences
									That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="main.php">Get Started!</a>
									
							<?php endif ?>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">About Guide-Future</h2>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">Our, platform Guide-Future is created based on the motive of helping students who are especially completing their schooling. We have made this platform to help them pursue their career paths according to nowadays world of work and based on their personalities.<br>Our conceptual career assistance framework is based on cognitive behavioural
          theory, that majorly associates to find the accurate career match for you. It
          is custom made with 4 major fields like Orientation, Interest, Personality,
          and Aptitude.<div>

					</div>

				</div>
				<!-- row -->
				<hr class="section-hr">
			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta-bg.png)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Help us to get to know you.</p>
						<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

<?php include 'footer.php'?>
</html>
