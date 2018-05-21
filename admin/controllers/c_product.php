<?php
include_once("controllers/Pager.php");
class C_product
{
	public function Hien_thi_san_pham()
	{
		include("models/m_product.php");
		$m_product = new M_product();
		if(isset($_POST['btnXoa']))
		{
			$ProductID = $_POST['ProductID'];
			$kq = $m_product->Xoa_san_pham_theo_ma_san_pham($ProductID);
			echo $kq;
			return;
		}
		//model
		
		$danh_sach_san_pham = $m_product->Lay_danh_sach_san_pham();
		
		$limit = 10;
		$p = new pager();
		$count = count($danh_sach_san_pham);
		$page_list = NULL;	
		if($count > 10)
		{
			$pages = $p->findPages($count, $limit);
			$vt = $p->findStart($limit);
			$curPage = 0;
			if(isset($_GET['page']))
				$curPage = $_GET['page'];
			$page_list = $p->pageList($curPage, $pages);
			$danh_sach_san_pham = $m_product->Lay_danh_sach_san_pham($vt, $limit);
		}
		//view
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Sản phẩm");
		$smarty->assign("sub_title", "Danh sách sản phẩm");
		$smarty->assign("content_heading", "");
		$smarty->assign("page_list", $page_list);
		$smarty->assign("danh_sach_san_pham", $danh_sach_san_pham);
		
		$view = "views/product/v_product.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
	
	public function Hien_thi_cap_nhat_san_pham()
	{
		//model
		include("models/m_product.php");
		$m_product = new M_product();
		$ProductID = $_GET['ProductID'];
		$san_pham = $m_product->Lay_san_pham_theo_ma_san_pham($ProductID);
		
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_cha = $m_category->Lay_danh_sach_loai_cha(); 	
		$loai_cha = $m_category->Lay_loai_cha_theo_con($san_pham->CategoryID);
		$danh_sach_loai_con = $m_category->Lay_danh_sach_loai_con_theo_cha($loai_cha->CategoryID);

		include("models/m_supplier.php");
		$m_supplier = new M_supplier();
		$danh_sach_nha_san_xuat = $m_supplier->Lay_danh_sach_nha_san_xuat();
		
		//view
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Sản phẩm");
		$smarty->assign("sub_title", "Danh sách sản phẩm");
		$smarty->assign("content_heading", "Cập nhật");
		$smarty->assign("san_pham", $san_pham);
		$smarty->assign("danh_sach_loai_cha", $danh_sach_loai_cha);
		$smarty->assign("loai_cha", $loai_cha);
		$smarty->assign("danh_sach_loai_con", $danh_sach_loai_con);
		$smarty->assign("danh_sach_nha_san_xuat", $danh_sach_nha_san_xuat);
		
		$view = "views/product/v_edit.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
	
	public function Hien_thi_them_san_pham_moi()
	{
		//model
		include("models/m_category.php");
		$m_category = new M_category();
		$danh_sach_loai_cha = $m_category->Lay_danh_sach_loai_cha(); 	
		$danh_sach_loai_con = $m_category->Lay_danh_sach_loai_con_theo_cha($danh_sach_loai_cha[0]->CategoryID);

		include("models/m_supplier.php");
		$m_supplier = new M_supplier();
		$danh_sach_nha_san_xuat = $m_supplier->Lay_danh_sach_nha_san_xuat();
		
		//view
		include("controllers/smarty_admin.php");
		$smarty = new Smarty_admin();
		$smarty->assign("main_menu", "Sản phẩm");
		$smarty->assign("sub_title", "Danh sách sản phẩm");
		$smarty->assign("content_heading", "");
		$smarty->assign("danh_sach_loai_cha", $danh_sach_loai_cha);
		$smarty->assign("danh_sach_loai_con", $danh_sach_loai_con);
		$smarty->assign("danh_sach_nha_san_xuat", $danh_sach_nha_san_xuat);
		
		$view = "views/product/v_add_product.tpl";
		$smarty->assign("view", $view);
		$smarty->display("layout.tpl");
	}
	
	public function Cap_nhat_san_pham()
	{
		$ProductID = $_POST['txtProductID'];
		$ProductName = $_POST['txtProductName'];
		$Price = str_replace(",","",$_POST['txtPrice']);
		$CategoryID = $_POST['slCategoryIDSub'];
		$SupplierID = $_POST['slSupplier'];
		$ProductType = $_POST['txtProductType'];
		$SubUnit = $_POST['txtSubUnit'];
		$Discount = $_POST['txtDiscount'];
		$Description = $_POST['txtDescription'];
		$file = $_FILES['Image'];
		
		
		
		
		
		include("models/m_product.php");
		$m_product = new M_product();
		$kq = $m_product->Cap_nhat_san_pham($CategoryID, $SupplierID, $ProductName, $ProductType, $SubUnit, $Description, $file['name'], $Price, $Discount, $ProductID);
		if($kq == 1)
		{
			if($file['error']== 0){
				move_uploaded_file($file['tmp_name'], "../public/images/product/".$file['name']);
				copy("../public/images/product/".$file['name'],"../public/images/product/full/".$file['name']);
			}
			header("location: product.php");
		}
		else
		{
			echo "cap nhat khong thanh cong";	
		}
	}
}
?>