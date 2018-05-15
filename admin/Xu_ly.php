<?php
/*$files = $_FILES['Image'];
$Price = $_POST['Price'];
$Price = str_replace(",", "", $Price);
$Price = str_replace("₫", "", $Price);
$ProductName = $_POST['ProductName'];
$CategoryID = $_POST['CategoryID'];
$SubUnit = $_POST['SubUnit'];
$SupplierID = $_POST['SupplierID'];
$ProductType = $_POST['ProductType'];
$Discount = $_POST['Discount'];

include("models/m_product.php");
$m_product = new M_product();
$m_product->Them_san_pham($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $files['name'], $Price, $Discount);

move_uploaded_file($files['tmp_name'], "../public/images/product/".$files['name']);

header("location: product.php");*/

$Description = $_POST['Description'];
echo $Description;
?>