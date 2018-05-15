<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
class C_homepage 
{
	public function Hien_thi_trang_chu(){
		//model
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_hang();
		
		include("models/m_supplier.php");
		$m_supplier = new M_supplier();
		$danh_sach_thuong_hieu = $m_supplier->Lay_danh_sach_thuong_hieu(0, 10);
		
		include("models/m_product.php");
		$m_product = new M_product();
		$danh_sach_san_pham_noi_bat = $m_product->Lay_danh_sach_san_pham_noi_bat();
		$danh_sach_san_pham_giam_gia = $m_product->Lay_danh_sach_san_pham_giam_gia(0, 4);
		$danh_sach_san_pham_mua_nhieu = $m_product->Lay_danh_sach_san_pham_mua_nhieu_nhat(0, 4);
		
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		
		$smarty->assign("category_name", "Trang chủ");
		$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
		$smarty->assign("danh_sach_san_pham_noi_bat", $danh_sach_san_pham_noi_bat);
		$smarty->assign("danh_sach_san_pham_giam_gia", $danh_sach_san_pham_giam_gia);
		$smarty->assign("danh_sach_san_pham_mua_nhieu", $danh_sach_san_pham_mua_nhieu);
		$smarty->assign("danh_sach_thuong_hieu", $danh_sach_thuong_hieu);
		
		$view = "views/homepage/v_homepage.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");	
	}
}
?>