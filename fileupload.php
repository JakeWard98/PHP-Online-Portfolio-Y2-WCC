<?php
session_start(); //This lets the server know that you have capturing and using session data
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="A Digital Portfolio">
<meta name="keywords" content="Portfolio">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<head>
	<title>PHP PAGE</title>
</head>
<!--3rd party goes before own css as the css after will overwrite anything-->
<link href="css/lightbox.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/lightbox.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
<!--MAIN CSS-->
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--FONT-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet" type="text/css">
<style>
       .js [data-entrance] { visibility: hidden; }
</style>

<body>
	<?php include 'includes/header.php';
	//this pulls the php file from the folder.
	?>
	
	<?php include 'includes/nav2.php';
	//this pulls the php file from the folder.
	?>
	
	<?php include 'includes/slider.php';
	//this pulls the php file from the folder.
	?>
<div id="upload"></div>	<!-- this is the upload redirect anchor point-->
	<article>
	
	<div class= "php">
	<?php 
		if(isset($_SESSION['msg']))
		{
		echo $_SESSION['msg']; //displays the msg
		unset($_SESSION['msg']); //removes from sessions memory
		}
		?>
		</div>
		<form action="php/upload.php" method="POST" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form>
	</article>	
	
	<?php include 'includes/footer.php';
	//this pulls the php file from the folder.
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--Example php to teach me-->
	<!--<?php //this is an openeing PHP tag
		
		$welcome = "Welome to my Site!";
		
		echo "Hello World!<br>";
		echo "<br>How are you?<br><br>";
		echo $welcome;
		echo "<br><br>Today is " . date("d/m/y") . "<br>";
		date_default_timezone_set("Europe/London");
		echo "The time is " . date("G:i:s <br>");
		
		//Declare variable
		$time = time();
		//Displays Unix Time
		//echo $time;
		
		$time = date('l-d/m/Y', $time);
		echo $time
	//this is a closing PHP tag?> -->
</body>
</html>