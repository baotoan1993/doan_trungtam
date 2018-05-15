<?php
include_once("database.php");
class M_user extends Database
{
	public function construct()
	{
		parent::__construct();
	}
	
	public function Kiem_tra_dang_nhap($mail, $pass)
	{
		$sql = "SELECT * from auth_access
				WHERE Email = ? and Password = ?";
		$this->setQuery($sql);
		return $this->loadRow(array($mail, $pass));
	}
	
	public function Dang_ky_tai_khoan($mail, $pass, $name, $phone, $mobile, $address)
	{
		$sql = "INSERT INTO auth_access(Email, Password, Name, Phone, Mobile, Address)
				VALUES (?, ?, ?, ?, ?, ?)";
		$params = array($mail, $pass, $name, $phone, $mobile, $address);
		$this->setQuery($sql);
		return $this->execute($params);
	}
}

/*$m = new M_user();
$a = $m->Kiem_tra_dang_nhap('admin@gmail.com', '123456');*/
?>