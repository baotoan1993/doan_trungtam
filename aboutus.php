<?php
session_start();
include("controllers/c_aboutus.php");
$c_aboutus=new C_aboutus();
$c_aboutus->Hien_Thi_Ve_Chung_Toi();
?>