<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location: .");
}
include("controllers/c_order.php");
$c_order = new C_order();

if(isset($_GET['customerid']))
{
	$c_order->Hien_thi_chi_tiet_don_hang();
	return;
}

$c_order->Hien_thi_don_dat_hang();
?>