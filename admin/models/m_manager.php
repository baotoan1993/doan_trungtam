<?php
include_once("database.php");
class M_manager extends Database
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	}
	
	public function Them_tai_khoan($Email, $Password, $Name, $Mobile, $Address, $Role)
	{
		try
		{
			$sql = "SELECT * FROM auth_access
					WHERE Email = ? and Role <> 0";
			$this->setQuery($sql);
			$param = array($Email);	
			$kq = $this->loadRow($param);
			if($kq != NULL)
			{
				return -1;
			}
				
			
			
			$sql = "INSERT INTO auth_access(Email, Password, Name, Mobile, Address, Role)
					VALUES(?,?,?,?,?,?)";
			$this->setQuery($sql);
			$param = array($Email, $Password, $Name, $Mobile, $Address, $Role);
			$this->execute($param);
			return 1;
		}catch(PDOException $ex)
		{
			return 0;
		}
		
	}
	
	public function Lay_danh_sach_tai_khoan()
	{
		$sql = "SELECT * FROM auth_access
				WHERE Role <> 0";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}	
	
	public function Lay_tai_khoan_theo_ma($UserID)
	{
		$sql = "SELECT * FROM auth_access
				WHERE UserID = $UserID";
		$this->setQuery($sql);
		return $this->loadRow();
	}
	
	public function Cap_nhat_tai_khoan($UserID, $Password, $Name, $Mobile, $Address, $Role)
	{
		try
		{
			$sql = "UPDATE auth_access
					SET Name = '$Name',
						Mobile = '$Mobile',
						Address = '$Address',
						Role = $Role, ";
			if($Password != "")
				$sql .= "Password = '$Password' ";
			$sql .= "WHERE UserID = $UserID";
			
			$this->setQuery($sql);
			$this->execute();
			return 1;
		}
		catch(PDOException $e)
		{
			return 0;
		}
		
	}
}
?>