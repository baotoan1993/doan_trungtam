<?php
include_once("database.php");
class M_supplier extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Lay_danh_sach_nha_san_xuat()
	{
		$sql = "select * from supplier";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>

