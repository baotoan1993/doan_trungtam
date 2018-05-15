<?php
class C_homepage
{
	public function Hien_thi_trang_chu()
	{
		//model
		
		//view
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Home");
		$smarty->assign("sub_title", "Thống kê");
		$smarty->assign("content_heading", "");
		
		$view = "views/homepage/v_summary.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
}
?>