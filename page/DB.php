<?php
$host="localhost";
$user="root";
$pass="";
$path="/cloudsql/alpha-988:stratos";

$db_name="elms";

$staff="staff";
$leave="leave_apply";


$conn = new mysqli(null, $user, $pass, $db_name, null, $path);

if (!$conn)
{
	echo "Error Connecting to Database.\n";
}

mysqli_select_db($conn,$db_name)or die("cannot select db");
?>