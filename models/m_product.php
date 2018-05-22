<?php
include_once("database.php");
class M_product extends Database
{
	public function Lay_danh_sach_san_pham_theo_ma_loai($ma_loai, $vt=-1, $limit=-1)
	{
		$sql = "select * from products where CategoryID = ? ";
		if($vt > -1 && $limit > -1)
		{
			$sql.= "limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai));
	}
	
	public function Lay_chi_tiet_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		//$sql = "select * from products where ProductID = ? ";
		$sql = "SELECT p.*, s.SupplierName 
				FROM products p, supplier s 
				WHERE p.SupplierID = s.SupplierID 
				and p.ProductID = ?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));
	}
	
	public function Lay_san_pham_cung_loai_ngau_nhien($ma_loai)
	{
		$sql = "SELECT * from products
				WHERE CategoryID = ?
				ORDER BY RAND()
				LIMIT 0, 8";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai));
	}
	
	public function Lay_danh_sach_san_pham_noi_bat()
	{
		$sql = "SELECT * FROM products
				ORDER BY Priority DESC, RAND()
				LIMIT 0, 4";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	 
	public function Lay_danh_sach_san_pham_giam_gia($vt=-1, $limit=-1)
	{
		$sql = "SELECT * FROM products
				WHERE Discount is not null
				ORDER BY Discount DESC, RAND() ";
		if($vt > -1 && $limit >-1)
		{
			$sql.= "LIMIT $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Lay_danh_sach_san_pham_mua_nhieu_nhat($vt=-1, $limit=-1)
	{
		$sql = "select p.* from products p left join 
					(select od.ProductID, sum(od.Quantity) as sum_quatity 
					from orderdetail od 
					group by od.ProductID 
					ORDER BY `sum_quatity` 
					DESC LIMIT 0, 4) d 
				on p.ProductID = d.ProductID";
		
		if($vt > -1 && $limit > -1)
		{
			$sql.= " LIMIT $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Lay_hinh_anh_theo_ma_san_pham($ma_san_pham)
	{
		$sql = "select Image from products where ProductID = $ma_san_pham";
		$this->setQuery($sql);
		return $this->loadRecord();
	}
	
	public function Lay_danh_sach_san_pham_theo_thuong_hieu($ma_thuong_hieu, $vt=-1, $limit=-1)
	{
		$sql = "select * from products where SupplierID = ? ";
		if($vt > -1 && $limit > -1)
		{
			$sql.= " LIMIT $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_thuong_hieu));
	}
	
	public function Lay_danh_sach_san_pham_theo_ten($ten, $vt=-1, $limit=-1)
	{
		$sql = "select * from products 
				where ProductName like '%$ten%' 
				or ProductName like '%$ten' 
				or ProductName like '$ten%'";
		if($vt > -1 && $limit > -1)
		{
			$sql.= " LIMIT $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>