<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Password = sha1($Password);
include("models/m_user.php");
$m_user = new M_user();
$user = $m_user->Kiem_tra_dang_nhap($Email, $Password);
if($user)
{
	session_start();
	$_SESSION['user'] = $user;
	echo true;
	
}
	
else
	echo false;
?>