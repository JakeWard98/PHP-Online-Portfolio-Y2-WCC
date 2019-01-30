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
	<title>ADMIN USER MANAGER</title>
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
			<h1>WELCOME TO THE ADMIN USER MANGER<h1>
			
			<div class= "php">
			<?php 
				if(isset($_SESSION['msg']))
				{
				echo $_SESSION['msg']; //displays the msg
				unset($_SESSION['msg']); //removes from sessions memory
				}
			?>
			</div>
		
		</div>
		
			<form name="registration" action="php/user_inc.php#update" method="POST">

				<input type="text" name="username" placeholder="Username">
				<br>
				<br>
				<input type="password" name="password" placeholder="Password">
				<br>
				<br>
				<input type="submit" name="new" value="Register">
				<br>
			</form>

		<?php
		
		include "../includes/cconfig.php";
		
			$query=mysqli_query($dbconn, 
						"SELECT `ID`, `un`, `pw`, `type`
						FROM `$dbschema`.`$tbl_users`"
						);//pulls all informatiopn from table
	
	$result = $query; //specifies result as quety string
	//print_r($query);
	if (mysqli_num_rows($result) > 0) { //test to see if any results

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) //while loops through results set
			{	
				
		?>
		
	<form name="update" action="php/user_inc.php" method="POST">
				<br>
				<input type="hidden" name="ID" value="<?php echo $row['ID'];?>">
				Username <input type="text" name="username" value="<?php echo $row['un'];?>">
				Password <input type="password" name="password" value="<?php echo $row['pw'];?>">
				Type <input type="" name="" value="<?php echo $row['type'];?>">
				<input type="submit" name="Update" value="Update">
				<input type="submit" name="delete" value="Delete">
				<br>
		</form>
			
	<?php
			}
    /* free result set */
    mysqli_free_result($result);
	}
	?>
	
	</article>	
	
	<?php include 'includes/footer.php';
	//this pulls the php file from the folder.
	?>
		
</html>
<?php
	}
?>