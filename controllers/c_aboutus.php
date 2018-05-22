<?php
class C_aboutus
{
	public function Hien_Thi_Ve_Chung_Toi()
	{
		//models
			include("models/m_category.php");
			$m_category = new M_category();
			$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_hang();
		//views
			include("controllers/smarty_sieuthi.php");
			$smarty=new Smarty_sieuthi();
			$view="views/aboutus/v_aboutus_testimonials.tpl";
			$view2="views/aboutus/v_aboutus.tpl";
			$smarty->assign("view",$view);
			$smarty->assign("view2",$view2);
			$smarty->assign("category_name", "Về chúng tôi");
			
			$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
			$smarty->display("aboutus/layout_aboutus.tpl");	
	}
}
?>