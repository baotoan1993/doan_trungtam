<?php
session_start();
include("models/m_cart.php");
$m_cart = new M_cart();

$CustomerName = $_POST['hoten'];
$Email = $_POST['email'];
$Address = $_POST['diachi'];
$Phone = $_POST['sodienthoai'];
$Note = $_POST['ghichu'];

$kq = $m_cart->Thanh_toan($CustomerName, $Email, $Address, $Phone, $Note, $_SESSION['your_cart']);
if($kq == '1')
{
	unset($_SESSION['your_cart']);
}
echo $kq;
?>