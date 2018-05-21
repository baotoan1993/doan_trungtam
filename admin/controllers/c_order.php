<?php
class C_order
{
	public function Hien_thi_don_dat_hang()
	{
		//model
		include("models/m_order.php");
		$m_order = new m_order();
		
		$danh_sach_dat_hang = $m_order->Lay_danh_sach_dat_hang();
		
		
		
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Đơn hàng");
		$smarty->assign("sub_title", "Danh sách");
		$smarty->assign("content_heading", "Danh sách đơn đặt hàng");
		
		$smarty->assign("danh_sach_dat_hang", $danh_sach_dat_hang);
		
		$view = "views/order/v_order.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
	
	public function Hien_thi_chi_tiet_don_hang()
	{
		//model
		include("models/m_order.php");
		$m_order = new m_order();
		$CustomerID = $_GET['customerid'];
		$chi_tiet_dat_hang = $m_order->Lay_chi_tiet_dat_hang_theo_ma($CustomerID);
		$CustomerName = $m_order->Lay_ten_khach_hang_theo_ma($CustomerID);
		
		//view
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Đơn hàng");
		$smarty->assign("sub_title", "Danh sách");
		$smarty->assign("content_heading", "Chi tiết đơn đặt hàng");
		
		$smarty->assign("chi_tiet_dat_hang", $chi_tiet_dat_hang);
		$smarty->assign("ten_khach_hang", $CustomerName);
		
		$view = "views/order/v_order_detail.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
}
?>