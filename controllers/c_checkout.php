<?php

class C_checkout {
	
	public function __construct()
	{
	
	}
	
	public function Hien_thi_thanh_toan()
	{
		//model
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_hang(); //lấy danh sách menu
		
		include("models/m_cart.php");
		$m_cart = new M_cart();
		//$danh_sach_gio_hang = $m_cart->Lay_danh_sach_san_pham_theo_ma_user($UserID);
		$danh_sach_gio_hang = $_SESSION['your_cart'];
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
		$smarty->assign("category_name", "Thanh toán");

		
		$smarty->assign("danh_sach_gio_hang", $danh_sach_gio_hang);
		
		$view = "views/checkout/v_checkout.tpl";
		$smarty->assign("view", $view);
		$smarty->display("checkout/checkout_layout.tpl");
	}
}
?>