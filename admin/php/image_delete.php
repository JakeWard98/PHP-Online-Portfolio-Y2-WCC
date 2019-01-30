<?php
session_start(); //This lets the server know that you have capturing and using session data
$dir="../".$_POST['directory'];//name of directory
$file=$_POST['filename'];//name of the file that will be deleted
$filetodelete = $dir.$file;
//echo $filetodelete;

if (!empty($dir) && !empty($file)) 
{
	$delete = unlink($filetodelete);
	
	if (!$delete)
	{
		$msg ="Error deleting image";
		$_SESSION['msg'] = $msg;
		header('Location: ../cms.php');
	}
	
	else
	{
		$msg ="Image deleted";
		$_SESSION['msg'] = $msg;
		header('Location: ../cms.php');
	}
	
	
}


/* 
$filetodelete = $file;
$delete = unlink($filetodelete);
if (!$delete)
  {
	  echo "<br>error with $file";
	/* $msg ="Error deleting image";
	$_SESSION['msg'] = $msg;
	header('Location: ../cms.php'); 
  }
else
  {
	  echo "woop $file deleted";
	/* $msg ="Image Deleted";
	$_SESSION['msg'] = $msg;
	header('Location: ../cms.php'); 
  }
   */
  
  
?>