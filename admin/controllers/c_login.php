<?php
class C_login
{
	public function Hien_thi_dang_nhap()
	{
		
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		
		$smarty->display("login/layout.tpl");
	}
	public function Kiem_tra_dang_nhap()
	{
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		
		include("models/m_login.php");
		$m_login = new M_login();
		$kq = $m_login->Kiem_tra_dang_nhap($username, $password);
		if($kq == NULL)
			echo 0;
		else
		{
			$_SESSION['admin'] = $kq;
			echo 1;
		}
			
	}
}
?>