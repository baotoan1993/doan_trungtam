<?php
session_start();
include("controllers/c_login.php");
$c_login = new C_login();
$c_login->Hien_thi_dang_nhap_dang_ky();
?>