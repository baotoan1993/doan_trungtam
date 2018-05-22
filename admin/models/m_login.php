<?php
include_once("database.php");
class M_login extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Kiem_tra_dang_nhap($username, $password)
	{
		$sql = "SELECT * FROM auth_access
				WHERE Email = ? and Password = ? and Role <> 0";
		$this->setQuery($sql);
		$param = array($username, $password);
		$kq = $this->loadRow($param);
		return $kq;
	}
}
?>