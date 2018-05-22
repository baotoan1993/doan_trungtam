<?php
class C_homepage
{
	public function Hien_thi_trang_chu()
	{
		//model
		include("models/m_summary.php");
		$m_summary = new M_summary();
		$tong_so_luong_san_pham = $m_summary->Lay_tong_so_luong_san_pham();
		$tong_don_dat_hang = $m_summary->Lay_tong_so_luong_don_dat_hang();
		$tong_so_luong_san_pham_dat_hang = $m_summary->Lay_tong_so_luong_san_pham_da_dat_hang();
		$thong_ke_theo_ngay = $m_summary->Thong_ke_ban_hang_theo_ngay();
		
		//view
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Home");
		$smarty->assign("sub_title", "Thống kê");
		
		$smarty->assign("tong_so_luong_san_pham", $tong_so_luong_san_pham);
		$smarty->assign("tong_don_dat_hang", $tong_don_dat_hang);
		$smarty->assign("tong_so_luong_san_pham_dat_hang", $tong_so_luong_san_pham_dat_hang);
		$smarty->assign("thong_ke_theo_ngay", $thong_ke_theo_ngay);
		
		$view = "views/homepage/v_summary.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
}
?>