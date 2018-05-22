<?php
session_start();
$ma_san_pham = $_POST['ma_san_pham'];
$ten_san_pham = $_POST['ten_san_pham'];
$don_gia = $_POST['don_gia'];
$hinh = $_POST['hinh'];

$checkExist = false;
if(isset($_SESSION['your_cart']))
{
	foreach($_SESSION['your_cart'] as $product)
	{
		if($product->ProductID == $ma_san_pham)
		{
			$checkExist = true;
			$product->Quantity = $product->Quantity + 1;
			echo '1';
			break;
		}
	}
}


if($checkExist == false)
{
	$cart = new stdClass();
	$cart->ProductID = $ma_san_pham;
	$cart->ProductName = $ten_san_pham;
	$cart->Quantity = 1;
	$cart->Price = $don_gia;
	$cart->Image = $hinh;
	
	$_SESSION['your_cart'][] = $cart;
	echo '1';
}
?>