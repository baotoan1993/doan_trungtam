<?php
class C_category
{
	public function Hien_thi_danh_sach_loai_hang()
	{
		//model
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_cha();
		
		//view
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Loại hàng");
		$smarty->assign("sub_title", "Danh sách");
		$smarty->assign("content_heading", "Danh sách loại hàng");
		
		$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
		$view = "views/category/v_category.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
		
	}
	
	public function Cap_nhat_loai_hang()
	{
		//model
		$CategoryID = $_GET['CategoryID'];
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_con = $m_category->Lay_danh_sach_loai_con_theo_cha($CategoryID);
		
		$loai_cha = $m_category->Lay_loai_cha_theo_ma($CategoryID);
		
		//view		
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Loại hàng");
		$smarty->assign("sub_title", "Danh sách");
		$smarty->assign("content_heading", "Danh sách loại hàng");
		$smarty->assign("danh_sach_loai_con", $danh_sach_loai_con);
		$smarty->assign("loai_cha", $loai_cha);
		
		$view = "views/category/v_edit_category.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
}
?>