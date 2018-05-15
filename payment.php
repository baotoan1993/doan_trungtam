<?php
session_start();
include("models/m_cart.php");
$m_cart = new M_cart();
$kq = $m_cart->Thanh_toan($_SESSION['user']->UserID, $_SESSION['your_cart']);
if($kq){
	unset($_SESSION['your_cart']);
	echo "1";
}else{
	echo "0";
}
//print_r($_SESSION['your_cart'])
?>