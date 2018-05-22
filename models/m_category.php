<?php
include_once("database.php");
class M_category extends Database
{
	public function Lay_danh_sach_loai_hang()
	{
		$sql = "SELECT * from category";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Lay_ten_loai_hang_theo_ma_loai($ten)
	{
		$sql = "select CategoryName from category where CategoryID = ? ";
		$param = array($ten);
		$this->setQuery($sql);
		return $this->loadRecord($param);
	}
}

/*$m = new M_category();
$ds = $m->Lay_danh_sach_loai_hang();
echo "<pre>";
print_r($ds);
echo "</pre>";*/
?>