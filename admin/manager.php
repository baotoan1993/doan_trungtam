<?php
session_start();
include("controllers/c_manager.php");
$c_manager = new C_manager();

if(isset($_GET['edit']))
{
	$c_manager->Hien_thi_cap_nhat();
}
else
{
	if(isset($_POST['btnThem']))
	{
		$c_manager->Them_tai_khoan();
	}
	else if(isset($_POST['btnCapNhat']))
	{
		$c_manager->Cap_nhat_tai_khoan();
	}
	else if(isset($_POST['change']))
	{
		$c_manager->Lay_tai_khoan_theo_ma();
	}
	else
	{
		$c_manager->Hien_thi_them_quan_ly();
	}
}

?>