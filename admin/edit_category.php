<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location: .");
}
include("controllers/c_category.php");
$c_category = new C_category();
$c_category->Cap_nhat_loai_hang();
?>