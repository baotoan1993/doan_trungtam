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
	
	public function Lay_danh_sach_san_pham_theo_ten($ProductName, $limit=-1, $vt=-1)
	{
		$sql = "select p.*, c.CategoryName, s.SupplierName 
				from products p, category c, supplier s
				where p.CategoryID = c.CategoryID 
				and p.SupplierID = s.SupplierID
				and ProductName like '%$ProductName%' limit 0, 10";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Them_san_pham($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $Image="", $Price, $Discount)
	{
		try
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$now = date('Y-m-d H:i:s');
			$params = array();
			if($Image == "")
			{
				$sql = "INSERT INTO products(CategoryID, SupplierID, ProductName, ProductType, SubUnit, Description, Image, UnitQuantity, Price, Discount, LastUpdate) VALUES (?,?,?,?,?,?,'khongco.jpg',1,?,?,?)";
				$params = array($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $Price, $Discount, $now);
			}
			else
			{
				$sql = "INSERT INTO products(CategoryID, SupplierID, ProductName, ProductType, SubUnit, Description, Image, UnitQuantity, Price, Discount, LastUpdate) VALUES (?,?,?,?,?,?,?,1,?,?,?)";
				$params = array($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $Image, $Price, $Discount, $now);
			}
			
			$this->setQuery($sql);
			$this->execute($params);
			return 1;
		}catch(PDOException $ex)
		{
			return 0;
		}
		
	}
	
	public function Cap_nhat_san_pham($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $Image="", $Price, $Discount, $ProductID)
	{
		try
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$now = date('Y-m-d H:i:s');
			$param = array();
			if($Image == "")
			{
				$sql = "UPDATE products
						SET CategoryID = ?, 
							SupplierID = ?, 
							ProductName = ?, 
							ProductType = ?, 
							SubUnit = ?,
							Description = ?, 
							Price = ?, 
							Discount = ?, 
							LastUpdate = ?
						WHERE ProductID = ?";
				$param = array($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $Price, $Discount, $now, $ProductID);
			}else
			{
				$sql = "UPDATE products
						SET CategoryID = ?, 
							SupplierID = ?, 
							ProductName = ?, 
							ProductType = ?, 
							SubUnit = ?, 
							Description = ?,
							Image = ?,
							Price = ?, 
							Discount = ?, 
							LastUpdate = ?
						WHERE ProductID = ?";
				$param = array($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $Image, $Price, $Discount, $now, $ProductID);
			}
			$this->setQuery($sql);
			$this->execute($param);
			return 1;
		}catch(PDOException $ex)
		{
			return 0;
		}
	}
	
	public function Xoa_san_pham_theo_ma_san_pham($ProductID)
	{
		try{
			$sql = "DELETE FROM products
				WHERE ProductID = ?";
			$this->setQuery($sql);
			$this->execute(array($ProductID));
			return 1;	
		}catch(PDOException $e){
			return 0;
		}
		
		
	}
}
?>

