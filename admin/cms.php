<?php
	session_start(); //This lets the server know that you have capturing and using session data
	error_reporting (E_ALL);
	ini_set('display_errors', 1);
		
	if($_SESSION['logincheck']!="OK")
	{
		$_SESSION['msg']="To view these pages, please login!";
		header('location: ../login.php#reg');
	}
	else
	{

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
<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--FONT-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet" type="text/css">
<style>
       .js [data-entrance] { visibility: hidden; }
</style>

<body>
	<?php include 'includes/header.php';
	//this pulls the php file from the folder.
	?>
	
	<?php include 'includes/nav.php';
	//this pulls the php file from the folder.
	?>
<div id="upload"></div>	<!-- this is the upload redirect anchor point-->
	
	
	<div class= "php">
	<?php 
		if(isset($_SESSION['msg']))
		{
		echo $_SESSION['msg']; //displays the msg
		unset($_SESSION['msg']); //removes from sessions memory
		}
		?>
		</div>
		
	<article>
		<form action="php/upload.php" method="POST" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form>
	
		<?php
			$dir = "../gallery/";
			$exclude = array(".","..", ".doc");
			//you dont want these entries in your files array
			$files = scandir($dir);
			$files = array_diff($files, $exclude);
			//delete the entries in the exclude array from your files
			
			if(!empty($files))//check if the files array is not empty
				{
					foreach ($files as $file)
					{
		?>
		<div class="gallery_img" id="delete">
			<a href="<?php echo $dir."/".$file;?>">
				<img src="<?php echo $dir."/".$file;?>">
				<p class="filetext"><?php echo $file;?></p>
			</a>
			<form action="php/image_delete.php#delete" method="post">
				<input type="hidden" name ="filename" value="<?php echo $file;?>">
				<input type="hidden" name="directory" value="<?php echo $dir;?>">
				<input class="small_btn" type="submit" value="Delete">
			</form>
		</div>

		<?php
					}//end of foreach loop
				}
			else //if directory is empty
				{
					echo "No Files Found in Directory";	
				}
		?>
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
<?php
	}
?>