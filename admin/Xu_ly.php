<?php
$file = $_FILES['Image'];
$Price = $_POST['Price'];
$Price = str_replace(",", "", $Price);
$Price = str_replace("₫", "", $Price);
$ProductName = $_POST['ProductName'];
$CategoryID = $_POST['CategoryID'];
$SubUnit = $_POST['SubUnit'];
$Description = $_POST['Description'];
$SupplierID = $_POST['SupplierID'];
$ProductType = $_POST['ProductType'];
$Discount = $_POST['Discount'];

include("models/m_product.php");
$m_product = new M_product();

$kq = $m_product->Them_san_pham($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $file['name'], $Price, $Discount);

if($kq == 1)
{
	if($file['error']== 0){
		move_uploaded_file($file['tmp_name'], "../public/images/product/".$file['name']);
		copy("../public/images/product/".$file['name'],"../public/images/product/full/".$file['name']);
	}
	header("location: product.php");
}
else
{
	echo "them san pham that bai";	
}
?>