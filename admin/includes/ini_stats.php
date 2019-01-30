<?php
session_start(); //This lets the server know that you have capturing and using session data
include "../../includes/cconfig.php"; //contains sql login information

$ip=$_SERVER['REMOTE_ADDR']; //this captures the users ip
$browser=$_SERVER['HTTP_USER_AGENT']; //this captures the users browser
$username=$_SESSION['user']; //this captures username used to login
date_default_timezone_set("Europe/London");
$time=date('l-d/m/Y G:i:s'); //this captures time of login

echo "IP = ". $ip;
echo "<br>Browser = ". $browser;
echo "<br>Un = ". $username;
echo "<br>time = ". $time;

$query=mysqli_query($dbconn, "INSERT into `$dbschema`.`$tbl_stats`
								(`ip`, `time`, `un`, `browser`)
					VALUES
								('$ip', '$time', '$username', '$browser')
					");
?>