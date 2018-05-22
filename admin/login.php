<?php
session_start();
include("controllers/c_login.php");
if(isset($_SESSION['admin']))
{
	header("location: .");
}
$c_login = new C_login();

if(isset($_POST['btnLogin']))
{
	$c_login->Kiem_tra_dang_nhap();
}
else
{
	$c_login->Hien_thi_dang_nhap();	
}
?>