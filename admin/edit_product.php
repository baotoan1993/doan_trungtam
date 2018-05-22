<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location: .");
}
include("controllers/c_product.php");
$c_product = new C_product();
$c_product->Hien_thi_cap_nhat_san_pham();
?>