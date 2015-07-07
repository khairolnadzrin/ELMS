<?php

include 'DB.php';


$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$password = sha1($password);

$sql = "SELECT staff_id, staff_pass, staff_unique FROM $staff WHERE staff_id='$username' AND staff_pass='$password'";
// SQL query to fetch information of registerd users and finds user match.
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if ($rows == 1) {

	while($rows2= mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$staff_unique = $rows2['staff_unique'];

		if($staff_unique == 1){

			$_SESSION['login_user']=$username; // Initializing Session
			$_SESSION['unique']=$staff_unique;
			header("location: staff.php"); // Redirecting To Other Page

		}
		if($staff_unique == 2){

			$_SESSION['login_user']=$username; // Initializing Session
			$_SESSION['unique']=$staff_unique;
			header("location: management.php"); // Redirecting To Other Page

		}
	}

} else {
$error = "Username or Password is invalid";
}

}

?>