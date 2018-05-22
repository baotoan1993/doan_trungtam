<?php
class C_manager
{
	public function Hien_thi_them_quan_ly()
	{
		//model
		
		//view
		include("smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Home");
		$smarty->assign("sub_title", "Quản lý");
		
		$view = "views/manager/v_add_manager.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
	
	public function Them_tai_khoan()
	{
		include("models/m_manager.php");
		$m_manager = new M_manager();
		
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$Password = sha1($Password);
		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$Mobile = $_POST['Mobile'];
		$Role = $_POST['Role'];
		
		$kq = $m_manager->Them_tai_khoan($Email, $Password, $Name, $Mobile, $Address, $Role);
		
		echo $kq;
	}
	
	public function Hien_thi_cap_nhat()
	{
		//model
		include("models/m_manager.php");
		$m_manager = new M_manager();
		$danh_sach_tai_khoan = $m_manager->Lay_danh_sach_tai_khoan();
		
		//view
		include("smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Home");
		$smarty->assign("sub_title", "Quản lý");
		
		$smarty->assign("danh_sach_tai_khoan", $danh_sach_tai_khoan);
		
		$view = "views/manager/v_edit_manager.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
	
	public function Lay_tai_khoan_theo_ma()
	{
		include("models/m_manager.php");
		$m_manager = new M_manager();
		$UserID = $_POST['UserID'];
		$taikhoan = $m_manager->Lay_tai_khoan_theo_ma($UserID);
		echo json_encode($taikhoan);
	}
	
	public function Cap_nhat_tai_khoan()
	{
		include("models/m_manager.php");
		$m_manager = new M_manager();
		
		$UserID = $_POST['UserID'];
		$Password = $_POST['Password'] == "" ? "" : sha1($_POST['Password']);
		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$Mobile = $_POST['Mobile'];
		$Role = $_POST['Role'];
		
		$kq = $m_manager->Cap_nhat_tai_khoan($UserID, $Password, $Name, $Mobile, $Address, $Role);
		echo $kq;
	}
}
?>