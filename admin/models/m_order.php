<?php
include_once("database.php");
class M_order extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Lay_danh_sach_dat_hang()
	{
		$sql = "SELECT * FROM customers";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Lay_chi_tiet_dat_hang_theo_ma($CustomerID)
	{
		$sql = "SELECT od.*, p.ProductName, p.Price FROM `orderdetail` od, customers c, orders o, products p
				WHERE c.CustomerID = ?
				AND c.CustomerID = o.CustomerID
				AND o.OrderID = od.OrderID
				AND p.ProductID = od.ProductID";
		$this->setQuery($sql);
		return $this->loadAllRows(array($CustomerID));
	}
	
	public function Lay_ten_khach_hang_theo_ma($CustomerID)
	{
		$sql = "SELECT CustomerName FROM customers
				WHERE CustomerID = ?";
		$this->setQuery($sql);
		return $this->loadRecord(array($CustomerID));
	}
}
?>