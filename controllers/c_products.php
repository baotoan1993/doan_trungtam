<?php
session_start();
class C_products
{
	public $danh_sach_loai_hang = NULL;
	public $m_category = NULL;
	public $m_product = NULL;
	public $danh_sach_thuong_hieu = NULL;
	public function __construct()
	{
		//model
		include("models/m_category.php");
		$this->m_category = new M_category();
		$this->danh_sach_loai_hang = $this->m_category->Lay_danh_sach_loai_hang(); //lấy danh sách menu
		
		include("models/m_product.php");
		$this->m_product = new M_product();
		
		include("models/m_supplier.php");
		$m_supplier = new M_supplier();
		$this->danh_sach_thuong_hieu = $m_supplier->Lay_danh_sach_thuong_hieu(0, 10);
	}
	public function Hien_thi_danh_sach_san_pham_theo_ma_loai()
	{
		//model	
		$ma_loai = $_GET["ma_loai"];
		$ten_loai_san_pham = $this->m_category->Lay_ten_loai_hang_theo_ma_loai($ma_loai);//lấy tên loại hàng hiển thị trên nav_menu

		$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_theo_ma_loai($ma_loai);
		include("Pager.php");
		$limit = 8;
		$p = new pager();
		$count = count($danh_sach_san_pham);
		$page_list = NULL;	
		if($count > 8)
		{
			$pages = $p->findPages($count, $limit);
			$vt = $p->findStart($limit);
			$curPage = 0;
			if(isset($_GET['page']))
				$curPage = $_GET['page'];
			$page_list = $p->pageList($curPage, $pages);
			$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_theo_ma_loai($ma_loai, $vt, $limit);
		}
		
				
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $this->danh_sach_loai_hang);
		
		$smarty->assign("category_name", $ten_loai_san_pham);
		
		$smarty->assign("danh_sach_san_pham", $danh_sach_san_pham);

		$smarty->assign("page_list", $page_list);
		$smarty->assign("danh_sach_thuong_hieu", $this->danh_sach_thuong_hieu);

		
		$view = "views/products/v_products.tpl";
		$smarty->assign("view", $view);
		$smarty->display("products/products_layout.tpl");
	}
	
	public function Hien_thi_chi_tiet_san_pham()
	{
		//model
		$ma_san_pham = $_GET["ma_san_pham"];
		$san_pham = $this->m_product->Lay_chi_tiet_san_pham_theo_ma_san_pham($ma_san_pham);//lấy tên sản phẩm hiển thị trên nav_menu
		
		$san_pham_cung_loai = $this->m_product->Lay_san_pham_cung_loai_ngau_nhien($san_pham->CategoryID);
		
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $this->danh_sach_loai_hang);
		$smarty->assign("category_name", $san_pham->ProductName);
		$smarty->assign("san_pham", $san_pham);
		$smarty->assign("san_pham_cung_loai", $san_pham_cung_loai);
		$smarty->assign("danh_sach_thuong_hieu", $this->danh_sach_thuong_hieu);
		
		$view = "views/detail/v_detail.tpl";
		$smarty->assign("view", $view);
		$smarty->display("detail/detail_layout.tpl");
	}
	
	public function Hien_thi_san_pham_giam_gia()
	{
		//model	
		$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_giam_gia();
		include("Pager.php");
		$limit = 8;
		$p = new pager();
		$count = count($danh_sach_san_pham);
		$page_list = NULL;	
		if($count > 8)
		{
			$pages = $p->findPages($count, $limit);
			$vt = $p->findStart($limit);
			$curPage = 0;
			if(isset($_GET['page']))
				$curPage = $_GET['page'];
			$page_list = $p->pageList($curPage, $pages);
			$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_giam_gia($vt, $limit);
		}
		
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $this->danh_sach_loai_hang);
		$smarty->assign("category_name", "Sản phẩm giảm giá");
		$smarty->assign("danh_sach_san_pham", $danh_sach_san_pham);
		$smarty->assign("page_list", $page_list);
		$smarty->assign("danh_sach_thuong_hieu", $this->danh_sach_thuong_hieu);
		
		$view = "views/products/v_products.tpl";
		$smarty->assign("view", $view);
		$smarty->display("products/products_layout.tpl");
	}
	
	public function Hien_thi_san_pham_ban_chay()
	{
		//model	
		$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_mua_nhieu_nhat();
		include("Pager.php");
		$limit = 8;
		$p = new pager();
		$count = count($danh_sach_san_pham);
		$page_list = NULL;	
		if($count > 8)
		{
			$pages = $p->findPages($count, $limit);
			$vt = $p->findStart($limit);
			$curPage = 0;
			if(isset($_GET['page']))
				$curPage = $_GET['page'];
			$page_list = $p->pageList($curPage, $pages);
			$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_mua_nhieu_nhat($vt, $limit);
		}
		
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $this->danh_sach_loai_hang);
		$smarty->assign("category_name", "Được mua nhiều nhất");
		$smarty->assign("danh_sach_san_pham", $danh_sach_san_pham);
		$smarty->assign("page_list", $page_list);
		$smarty->assign("danh_sach_thuong_hieu", $this->danh_sach_thuong_hieu);
		
		$view = "views/products/v_products.tpl";
		$smarty->assign("view", $view);
		$smarty->display("products/products_layout.tpl");
	}
	
	public function Hien_thi_san_pham_theo_thuong_hieu()
	{
		//model	
		$ma_thuong_hieu = $_GET['ma_thuong_hieu'];
		$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_theo_thuong_hieu($ma_thuong_hieu);
		include("Pager.php");
		$limit = 8;
		$p = new pager();
		$count = count($danh_sach_san_pham);
		$page_list = NULL;	
		if($count > 8)
		{
			$pages = $p->findPages($count, $limit);
			$vt = $p->findStart($limit);
			$curPage = 0;
			if(isset($_GET['page']))
				$curPage = $_GET['page'];
			$page_list = $p->pageList($curPage, $pages);
			$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_theo_thuong_hieu($ma_thuong_hieu, $vt, $limit);
		}
		
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $this->danh_sach_loai_hang);
		$smarty->assign("category_name", "Theo thương hiệu");
		$smarty->assign("danh_sach_san_pham", $danh_sach_san_pham);
		$smarty->assign("page_list", $page_list);
		$smarty->assign("danh_sach_thuong_hieu", $this->danh_sach_thuong_hieu);
		
		$view = "views/products/v_products.tpl";
		$smarty->assign("view", $view);
		$smarty->display("products/products_layout.tpl");
	}

	public function Hien_thi_san_pham_theo_ten()
	{
		//model	
		$ten_san_pham = $_GET['ten_san_pham'];
		$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_theo_ten($ten_san_pham);
		include("Pager.php");
		$limit = 8;
		$p = new pager();
		$count = count($danh_sach_san_pham);
		$page_list = NULL;	
		if($count > 8)
		{
			$pages = $p->findPages($count, $limit);
			$vt = $p->findStart($limit);
			$curPage = 0;
			if(isset($_GET['page']))
				$curPage = $_GET['page'];
			$page_list = $p->pageList($curPage, $pages);
			$danh_sach_san_pham = $this->m_product->Lay_danh_sach_san_pham_theo_ten($ten_san_pham, $vt, $limit);
		}
		
		//view
		include("controllers/smarty_sieuthi.php");
		$smarty = new Smarty_sieuthi();
		$smarty->assign("danh_sach_loai_hang", $this->danh_sach_loai_hang);
		$smarty->assign("category_name", "Tìm sản phẩm");
		$smarty->assign("danh_sach_san_pham", $danh_sach_san_pham);
		$smarty->assign("page_list", $page_list);
		$smarty->assign("danh_sach_thuong_hieu", $this->danh_sach_thuong_hieu);
		
		$view = "views/products/v_products.tpl";
		$smarty->assign("view", $view);
		$smarty->display("products/products_layout.tpl");
	}
}
?>