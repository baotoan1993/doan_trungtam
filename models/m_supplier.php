<?php
include_once("database.php");
class M_supplier extends Database
{

	public function Lay_danh_sach_thuong_hieu($vt=-1, $limit=-1)
	{
		$sql = "SELECT * FROM supplier ORDER BY Rand() ";
		if($vt > -1 && $limit > -1)
		{
			$sql.= "LIMIT $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>