<?php
	session_start(); //This lets the server know that you have capturing and using session data
	
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
	<title>ADMIN PAGE</title>
</head>
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
	
	<article>
		<div>
			<h1>WELCOME TO THE ADMIN PAGE<h1>
		</div>
		
		<div style="padding-left: 30px;
					margin-right: 30px;
					font-family: 'Ubuntu', sans-serif;
					color: white;
					font-size: 1.1em;">
			PLEASE SCROLL DOWN TO SEE THE NAVIGATION BAR.
		</div>
		
		<div style="padding-left: 30px;
					margin-right: 30px;
					font-family: 'Ubuntu', sans-serif;
					color: white;
					font-size: 1.1em;">
			THE NAVIGATION BAR WILL APPEAR AT THE TOP OF THE PAGE
		</div>
	</article>	
	<?php include 'includes/footer.php';
	//this pulls the php file from the folder.
	?>
		
</html>
<?php
	}
?>