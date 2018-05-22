<?php
session_start();
if(!isset($_SESSION['your_cart']))
{
	header("location: .");
}
else
{
	include("controllers/c_checkout.php");
	$c_checkout = new C_checkout();
	$c_checkout->Hien_thi_thanh_toan();
}


?>