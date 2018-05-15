<?php
include("controllers/c_products.php");
$c_products = new C_products();
$c_products->Hien_thi_danh_sach_san_pham_theo_ma_loai();
?>