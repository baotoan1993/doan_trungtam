<?php
session_start();
include("controllers/c_product.php");
$c_product = new C_product();
$c_product->Hien_thi_them_san_pham_moi();
?>