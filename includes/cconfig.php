<?php
/******XAMMP******/
$dbhost="localhost"; //this is the name of the server the db is stored on
$dbuser="root"; // this is the db username
$dbpassword=""; //this is sblank for xampp
$dbschema="jtweportfolio"; //this is the name of your database
/******LIVE SERVER******/
//$dbhost="localhost";
//$dbuser="c1studentsql";
//$dbpassword="i@mStudent";
//$dbschema="c1studentsql";

/**********************TBLS**********************/
/******XAMMP******/
$tbl_users="tbl_users"; //user table name
$tbl_stats="tbl_stats"; //stats table name
/******LIVE SERVER******/
//$tbl_users="jakew_users";
//$tbl_stats="jakew_stats";

/*****************Connection String*****************/

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbschema);

if (!$dbconn) {
	die("Connection Failed: " . mysqli_connect_error ());
	}
echo "Connection Successfully: <br> ";

/**********************User Types**********************/
$user="user";
?>