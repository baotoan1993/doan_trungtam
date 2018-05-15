<?php
include_once("database.php");
class M_product extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Lay_danh_sach_san_pham($vt=-1, $limit=-1)
	{
		$sql = "select p.*, c.CategoryName, s.SupplierName 
				from products p, category c, supplier s
				where p.CategoryID = c.CategoryID 
				and p.SupplierID = s.SupplierID ";
		if($vt > -1 && $limit > -1)
		{
			$sql.="limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Lay_san_pham_theo_ma_san_pham($ProductID)
	{
		$sql = "select p.*, c.CategoryName, s.SupplierName 
				from products p, category c, supplier s
				where p.CategoryID = c.CategoryID 
				and p.SupplierID = s.SupplierID
				and p.ProductID = $ProductID";
		$this->setQuery($sql);
		return $this->loadRow();
	}
	
	public function Them_san_pham($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Image, $Price, $Discount)
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$now = date('Y-m-d H:i:s');
		$sql = "INSERT INTO products(ProductID, CategoryID, SupplierID, ProductName, ProductType, SubUnit, UnitQuantity, Image, Price, Discount, LastUpdate) VALUES (NULL,?,?,?,?,?,1,?,?,?,?)";
		$this->setQuery($sql);
		$params = array($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Image, $Price, $Discount, $now);
		return $this->execute($params);
	}
}
?>

