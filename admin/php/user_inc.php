<?php
error_reporting (E_ALL);
ini_set("display_errors", 1);
session_start(); //this allows us to store session data
include '../../includes/cconfig.php';
$update=mysqli_real_escape_string($dbconn, $_POST['Update']);//tests if user clicked "update" form button
$new=mysqli_real_escape_string($dbconn, $_POST['new']);//tests if user clicked "new" reg form button
$delete=mysqli_real_escape_string($dbconn, $_POST['delete']);//tests if user clicked "delete" form button

$currID=mysqli_real_escape_string($dbconn, $_POST['ID']);
$username=mysqli_real_escape_string($dbconn, $_POST['username']); //this must match the name of the input field in the form
$password=mysqli_real_escape_string($dbconn, $_POST['password']);

//3 lines below are for testing
	echo "You have entered ".$currID." as your ID<br>";
	echo "You have entered ".$username." as your username<br>";
	echo "You have entered ".$password." as your password<br>";
	
	if (!empty($new) && !empty($username) && !empty ($password))
	//if user clicked "new" reg form button
	{
		//This test to see if the username is already in use
		$query=mysqli_query($dbconn, 
							"SELECT `un` FROM `$dbschema`.`$tbl_users`
							WHERE
									('$username'=`un`)"
							);
							
							
			
			// Return the number of rows in result set
			$rowcount=mysqli_num_rows($query);
		
			
		if ($rowcount <1)
			{
				
				//this adds a new user to the database
				$query=mysqli_query($dbconn, 
							"INSERT into `$dbschema`.`$tbl_users`
									(`un`,`pw`,`type`)
							VALUES
									('$username','$password','$user')"
							);
				// Free result set
			
				mysqli_free_result($query);
				$msg = "<br>New User Added";
				$_SESSION['msg'] = $msg;
				header('location: ../usermanage.php');
			}
		else
			{
				$msg ="<br>This Username is already taken";
				$_SESSION['msg'] = $msg;
				header('Location: ../usermanage.php');
			
			}
	}
	
	if (!empty($delete) && !empty($username) && !empty ($password))
	//if user clicked "delete" form button
	{
		$query=" DELETE FROM `$dbschema`.`$tbl_users` WHERE `un`='$username'";
		$result= mysqli_query($dbconn, $query);
		
		if(!$result)
			{
				echo "Something went Wrong - ". mysqli_error($dbconn);
				//^ TESTING ONLY
				//$msg = "Something went Wrong"
				//$_SESSION['msg'] = $msg;
				//header('Location: ../usermanage.php');
			}
		else
			{
				$msg = "Record Deleted Successfully";
				$_SESSION['msg'] = $msg;
				header('Location: ../usermanage.php');
			}
	}
	
	if (!empty($update) && !empty($username) && !empty ($password))
	//if user clicked "update" form button
	//have all fields ben filled out and the update button been clicked
	{
		$query="SELECT `ID` from `$dbschema`.`$tbl_users`
				WHERE
			('$username'=`un` AND `ID`!='$currID')";
			
			$rowcount=mysqli_num_rows($result);
			
			if($rowcount >0)
		{
			$msg ="Sorry username already in use";
			$_SESSION['msg'] = $msg;
			header('Location: ../usermanage.php');
		}
		else
		{
		//no duplicate found
		$query=mysqli_query($dbconn,"UPDATE `$dbschema`.`$tbl_users`
									SET `un` = '$username', `pw`='$password'
									WHERE `ID`='$currID'");
										
		print_r($query);
									
		}
		$msg ="Updated Successfully";
		$_SESSION['msg'] = $msg;
		header('Location: ../usermanage.php');
	}
		else //has form been submitted correctly
	{
		$msg ="<br>Please fill out form correctly";
		$_SESSION['msg'] = $msg;
		header('Location: ../usermanage.php');
	
	}
?>