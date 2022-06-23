<?php
session_start();
/*
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:index.php");
    exit;
}*/
 
// Include config file
require_once "../config.php";

// Define variables and initialize with empty values
$course = "";
$course_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["course"]))){
        $username_err = "Please enter stream.";
    } else{
        $username = trim($_POST["course"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err))
        
?>
 
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/s.css"/>
    <style>
        body{ font: 14px sans-serif;
        margin:auto; 
        margin-top: 120px;
        width:500px; 
        background-color: blueviolet;
        color: black;
        
        
        }
        .wrapper{  border-style: solid;
        border-color: blue;
        border-radius: 30px;
        padding: 20px;  background-color: white;}
    </style>
</head>
<body>
    <!--Header-->
    <header id="header" class="transparent-nav" style="position: fixed; top: 0;background-color:slategrey">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.php" style="padding-bottom: 10px;">Guide-Future-Add Stream</a>
					</div>
					<!-- /Logo -->

				</div>
			</div>
		</header>
		<!-- /Header -->

    <div class="wrapper" >
        <h2>Add-Stream-Course</h2>
                <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label><b>Stream</b></label>
                <input type="text" name="course" class="form-control <?php echo (!empty($course_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $course; ?>">
                <span class="invalid-feedback"><?php echo $course_err; ?></span>
            </div>    
                       <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add">
    </div>
        </form>
    </div>
</body>
</html>

