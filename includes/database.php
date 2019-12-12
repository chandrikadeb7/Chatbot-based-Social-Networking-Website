<?php

$host="localhost";
$user="root";
$pass="170399";
$db="biobook";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysqli_error());

}
else
{
	//echo("Connected");
}
?>