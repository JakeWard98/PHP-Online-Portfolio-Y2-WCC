<?php
session_start();
if(isset($_POST['save']))
{
	$content  = $_POST['content'];
	$file = "../logs/error.log";
	$Saved_File = fopen($file, 'w+');
	fwrite($Saved_File, $content);
	fclose($Saved_File);
	$_SESSION['msg'] = "Error Log Successfully Updated. <br>";
	header ('Location: ../errors.php');
}
?>