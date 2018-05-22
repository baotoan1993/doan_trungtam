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
	
	public function Lay_loai_cha_theo_ma($CategoryID)
	{
		$sql = "select * from category
				where CategoryID = $CategoryID";
		$this->setQuery($sql);
		return $this->loadRow();
	}
	
	public function Them_chi_tiet_loai_hang($CategoryParentID, $CategoryName)
	{
		try{
			$sql = "INSERT INTO category(CategoryParentID,CategoryName)
					VALUES(?,?)";
			$this->setQuery($sql);
			$this->execute(array($CategoryParentID, $CategoryName));
			return 1;
		}catch(PDOException $ex)
		{
			return 0;
		}
	}
	
	
	
	public function Xoa_chi_tiet_loai_hang($CategoryID)
	{
		try{
			$sql="SELECT c.* FROM category c, products p
					WHERE p.CategoryID = c.CategoryID
					and p.CategoryID = ?";
			$this->setQuery($sql);
			$checkExist = $this->loadAllRows(array($CategoryID));
			if(count($checkExist) > 0)
				return -1;
			else
			{
				$sql = "DELETE from category where CategoryID = ?";
				$this->setQuery($sql);
				$this->execute(array($CategoryID));
				return 1;
			}
		}catch(PDOException $ex)
		{
			return 0;
		}
	}
	
	public function Cap_nhat_loai_hang($CategoryID, $CategoryName)
	{
		try{
			$sql="SELECT * FROM category
				  WHERE CategoryName = ?";
			$this->setQuery($sql);
			$checkExist = $this->loadAllRows(array($CategoryName));
			if(count($checkExist) > 0)
				return -1;
			else
			{
				$sql = "UPDATE category
						SET CategoryName = ?
						WHERE CategoryID = ?";
				$this->setQuery($sql);
				$this->execute(array($CategoryName, $CategoryID));
				return 1;
			}
		}catch(PDOException $ex)
		{
			return 0;
		}
	}
}
?>

