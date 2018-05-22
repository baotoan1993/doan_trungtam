<?php
include_once("database.php");
class M_summary extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Lay_tong_so_luong_san_pham()
	{
		$sql = "SELECT count(*) FROM products";
		$this->setQuery($sql);
		return $this->loadRecord();
	}
	
	public function Lay_tong_so_luong_don_dat_hang()
	{
		$sql = "SELECT count(*) FROM customers";
		$this->setQuery($sql);
		return $this->loadRecord();
	}
	
	public function Lay_tong_so_luong_san_pham_da_dat_hang()
	{
		$sql = "SELECT sum(Quantity) FROM orderdetail";
		$this->setQuery($sql);
		return $this->loadRecord();
	}
	
	public function Thong_ke_ban_hang_theo_ngay()
	{
		$sql = "select DAY(o.DateCreated) as 'Day', sum(od.Quantity * p.Price) as 'Price'
				from orders o, orderdetail od, products p
				where o.OrderID = od.OrderID
				and od.ProductID = p.ProductID
				GROUP BY DAY(o.DateCreated)";
				
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>