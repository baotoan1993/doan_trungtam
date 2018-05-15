<?php
include_once("database.php");
class M_cart extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Kiem_tra_san_pham_ton_tai($ma_user, $ma_san_pham)
	{
		$ma_user = (integer)$ma_user;
		$ma_san_pham = (integer)$ma_san_pham;

		$sql = "SELECT * FROM shopcart 
				WHERE UserID = $ma_user
				and ProductID = $ma_san_pham";
		$this->setQuery($sql);
		$danh_sach = $this->loadAllRows();

		if($danh_sach)
		{
			return true;
		}

		return false;
	}
	
	public function Them_san_pham_vao_gio_hang($ma_user, $ma_san_pham)
	{
		$ma_user = (integer)$ma_user;
		$ma_san_pham = (integer)$ma_san_pham;
		if($this->Kiem_tra_san_pham_ton_tai($ma_user, $ma_san_pham))
		{
			$sql = "UPDATE shopcart set Quantity = Quantity + 1 
					WHERE UserID = $ma_user 
					and ProductID = $ma_san_pham";
			$this->setQuery($sql);
			return $this->execute();
		}
		else
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$now = date('Y-m-d H:i:s');
			$sql = "INSERT INTO shopcart
					VALUES (NULL, $ma_san_pham , $ma_user , 1 , '$now')";
			$this->setQuery($sql);
			return $this->execute();
		}
		
	}
	
	public function Lay_danh_sach_san_pham_theo_ma_user($UserID)
	{
		$UserID = (integer)$UserID;
		$sql = "SELECT p.*, s.Quantity 
				FROM products p, shopcart s 
				WHERE p.ProductID = s.ProductID 
				and s.UserID = $UserID";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Xoa_gio_hang($UserID, $ProductID)
	{
		$UserID = (integer)$UserID;
		$ProductID = (integer)$ProductID;
		
		$sql = "DELETE FROM shopcart
				WHERE UserID = $UserID
				and ProductID = $ProductID";
		$this->setQuery($sql);
		return $this->execute();
	}
	
	public function Giam_so_luong($UserID, $ProductID)
	{
		$UserID = (integer)$UserID;
		$ProductID = (integer)$ProductID;
		
		$sql = "UPDATE shopcart
				SET quantity = quantity - 1
				WHERE UserID = $UserID
				AND ProductID = $ProductID";
		
		$this->setQuery($sql);
		return $this->execute();
	}
	
	public function Tang_so_luong($UserID, $ProductID)
	{
		$UserID = (integer)$UserID;
		$ProductID = (integer)$ProductID;
		
		$sql = "UPDATE shopcart
				SET quantity = quantity + 1
				WHERE UserID = $UserID
				AND ProductID = $ProductID";
		
		$this->setQuery($sql);
		return $this->execute();
	}
	
	public function Lay_danh_sach_gio_hang_theo_ma_user($UserID)
	{
		$UserID = (integer)$UserID;
		$sql = "SELECT * FROM shopcart
				WHERE UserID = $UserID";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Thanh_toan_hoa_don($UserID)
	{
		$UserID = (integer)$UserID;
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$now = date('Y-m-d H:i:s');
		$sql = "INSERT INTO orders 
				VALUES(NULL, $UserID, 'giao ho chi minh, nhận tiền sau khi giao', '$now', 'mới')";
		$this->setQuery($sql);
		$this->execute();
		$OrderID = $this->getLastId();
		
		$danh_sach_gio_hang = $this->Lay_danh_sach_gio_hang_theo_ma_user($UserID);
		foreach ($danh_sach_gio_hang as $gio_hang)
		{
			$ProductID = $gio_hang->ProductID;
			$Quantity = $gio_hang->Quantity;
			$sqlTemp = "INSERT INTO orderdetail
						VALUES($OrderID, $ProductID, $Quantity)";
			$this->setQuery($sqlTemp);
			$this->execute();
		}
		$sql = "DELETE FROM shopcart WHERE UserID = $UserID";
		$this->setQuery($sql);
		$this->execute();
	}
	
	public function Thanh_toan($UserID, $ListProduct=array())
	{
		try{
			$UserID = (integer)$UserID;
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$now = date('Y-m-d H:i:s');
			$sql = "INSERT INTO orders 
					VALUES(NULL, $UserID, 'giao ho chi minh, nhận tiền sau khi giao', '$now', 'mới')";
			$this->setQuery($sql);
			$this->execute();
			$OrderID = $this->getLastId();
			
			foreach($ListProduct as $product)
			{
				$ProductID = $product->ProductID;
				$Quantity = $product->Quantity;
				$sqlTemp = "INSERT INTO orderdetail
							VALUES($OrderID, $ProductID, $Quantity)";
				$this->setQuery($sqlTemp);
				$this->execute();
			}
			return true;
		}catch(PDOException $ex){
			return false;
		}
		
	}
}
?>