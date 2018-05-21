<?php
include("models/m_category.php");
$m_category = new M_category();
$loai = $_POST['loai'];
if($loai == "them")
{
	$CategoryParentID = $_POST['CategoryParentID'];
	$CategoryName = $_POST['CategoryName'];

	$kq = $m_category->Them_chi_tiet_loai_hang($CategoryParentID, $CategoryName);
	echo $kq;
}else if($loai == "xoa")
{
	$CategoryID = $_POST['CategoryID'];
	$kq = $m_category->Xoa_chi_tiet_loai_hang($CategoryID);
	
	echo $kq;
}else if($loai == "capnhat")
{
	$CategoryID = $_POST['CategoryID'];
	$CategoryName = $_POST['CategoryName'];
	$kq = $m_category->Cap_nhat_loai_hang($CategoryID, $CategoryName);
	echo $kq;
}
?>