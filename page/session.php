<?php

include 'DB.php';

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

$sql = "SELECT staff_id, staff_fname, staff_title FROM $staff WHERE staff_id='$user_check'";
// SQL query to fetch information of registerd users and finds user match.
$result = mysqli_query($conn, $sql);


while($rows= mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$staff_id=$rows['staff_id'];
		$login_session =$rows['staff_fname'];
		$title1 =$rows['staff_title'];

	}

if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>