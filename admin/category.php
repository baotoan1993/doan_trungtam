<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location: .");
}
include("controllers/c_category.php");
$c_category = new C_category();
$c_category->Hien_thi_danh_sach_loai_hang();
?>