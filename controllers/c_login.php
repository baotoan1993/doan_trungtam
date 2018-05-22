<?php
class C_login
{
	public function Hien_thi_dang_nhap_dang_ky()
	{
		//model
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_hang(); //lấy danh sách menu
		
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
		$smarty->assign("category_name", "Đăng nhập - Đăng ký");
		
		$view = "views/login/v_login.tpl";	
		$smarty->assign("view", $view);	
		$smarty->display("login/layout.tpl");
	}
	
	public function Kiem_tra_dang_nhap()
	{
		$fail_status_login = 0;
		$user = NULL;
		if(isset($_POST['l_Email']) && isset($_POST['l_Password']))
		{
			$mail = $_POST['l_Email'];
			$pass = $_POST['l_Password'];
			include("models/m_user.php");
			$m_user = new M_user();
			$user = $m_user->Kiem_tra_dang_nhap($mail, $pass);
			if($user)
			{
				$_SESSION['user'] = $user;
				$fail_status_login = 1;
			}
		}
		
			
		if($fail_status_login == 0)
		{
			include("models/m_category.php");
			$m_category = new M_category();
			$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_hang(); //lấy danh sách menu
			include("controllers/smarty_sieuthi.php");
			$smarty = new Smarty_sieuthi();
			$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
			$smarty->assign("category_name", "Đăng nhập - Đăng ký");
			if($fail_status_login == 0)
			{
				$smarty->assign("fail_status_login", $fail_status_login);
				
			}
				
			
			$view = "views/login/v_login.tpl";	
			$smarty->assign("view", $view);	
			$smarty->display("login/layout.tpl");
		}
		else
		{
			include("controllers/c_homepage.php");
			$c_homepage = new C_homepage();
			$c_homepage->Hien_thi_trang_chu();
		}
		
		
		//view
		
	}
	
	public function Kiem_tra_dang_ky()
	{
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_hang(); //lấy danh sách menu
		
		
		$fail_status_register = 0;
		if(isset($_POST['r_Username']) && isset($_POST['r_Password']) 
				&& isset($_POST['r_Email']) && isset($_POST['r_Mobile']))
		{
			$mail = $_POST['r_Email'];
			$pass = $_POST['r_Password'];
			$name = $_POST['r_Username'];
			$mobile = $_POST['r_Mobile'];
			$phone = $_POST['r_Phone'];
			$address = $_POST['r_Address'];
			
			include("models/m_user.php");
			$m_user = new M_user();
			$user = $m_user->Kiem_tra_dang_nhap($mail, $pass);
			if(!$user)
			{
				$pass = sha1($pass);
				$m_user->Dang_ky_tai_khoan($mail, $pass, $name, $phone, $mobile, $address);
			}
			else
			{
				$fail_status_register = 1;
			}
		}
		
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
		$smarty->assign("category_name", "Đăng nhập - Đăng ký");
		if($fail_status_register == 1)
		{
			$smarty->assign("fail_status_register", $fail_status_register);
			
		}
			
		
		$view = "views/login/v_login.tpl";	
		$smarty->assign("view", $view);	
		$smarty->display("login/layout.tpl");
	}
}
?>