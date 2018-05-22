<?php 
session_start();
if(isset($_SESSION['admin']))
{
	include("controllers/c_homepage.php");
	$c_homepage = new C_homepage();
	$c_homepage->Hien_thi_trang_chu();
}
else
{
	include("controllers/c_login.php");
	$c_homepage = new C_login();
	$c_homepage->Hien_thi_dang_nhap();
}
?>