<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];
$login_query="select user_id,email,password from user where email=$uid && password=$pw";
$login_query_result= mysqli_query($dbf,$login_query);
$user_details=mysqli_fetch_assoc($login_query_result);

if($uid == $user_details and $pw == 'data123')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:securepage.php");
}
?>