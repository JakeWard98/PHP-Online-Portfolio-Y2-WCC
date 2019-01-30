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
	<title>ADMIN STATS PAGE</title>
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
			<h1>WELCOME TO THE ADMIN STATS PAGE<h1>
		</div>
	
	
		<?php
			include "../includes/cconfig.php";
			$query=mysqli_query($dbconn, "SELECT `ip`, `time`, `un`, `browser` FROM `$dbschema`.`$tbl_stats`");
					//print_r($query);	
						if (mysqli_num_rows($query) > 0) {
	   // output data of each row
    while($row = mysqli_fetch_assoc($query))
	{
        echo "<br>ip: " . $row["ip"]. " - time: " . $row["time"]. " - username: " . $row["un"]. " - browser: ". $row["browser"]. "<br>";
	}
	}else 
	{
		echo "0 results";
		
		echo mysql_error($dbconn);
	}

mysqli_close($dbconn);
		?>
	</article>	
	<?php include 'includes/footer.php';
	//this pulls the php file from the folder.
	?>
		
</html>
<?php
	}
?>