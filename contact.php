<?php
session_start();
include("controllers/c_contact.php");
$c_contact=new C_contact();
$c_contact->Hien_thi_Lien_He();

?>