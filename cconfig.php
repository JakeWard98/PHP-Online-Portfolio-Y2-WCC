<?php
$dbhost="localhost";//this is the name of the server the db is stored on
$dbuser="c1studentsql"; //this is the db username
$dbpassword="i@mStudent";//this is blank for xampp
$dbschema="c1studentsql";//this is the name of your database
/***************** TBLS **********************/
$tbl_users="rthompson_users";//users table name
$tbl_stats="rthompson_stats";//Stats table name.

$dbconn=mysqli_connect($dbhost ,$dbuser ,$dbpassword ,$dbschema);
if(!$dbconn){
	die("connection failed:" . mysqli_connect_error());
}
echo "Connected Successfully";

/**********user types*********/
$user="user";
?>