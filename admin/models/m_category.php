<?php
include_once("database.php");
class M_category extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Lay_danh_sach_loai_cha()
	{
		$sql = "select * from category
				where CategoryParentID is null";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Lay_loai_cha_theo_con($CategoryID)
	{
		$sql = "select CategoryParentID from category
				where CategoryID = $CategoryID";
		$this->setQuery($sql);
		$CategoryParentID = $this->loadRecord();
		$sql = "select * from category
				where CategoryID = $CategoryParentID";
		$this->setQuery($sql);
		return $this->loadRow();
	}
	
	public function Lay_danh_sach_loai_con_theo_cha($CategoryID)
	{
		$sql = "select * from category
				where CategoryParentID = $CategoryID";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>

