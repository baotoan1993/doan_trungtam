<?php
$ProductName = $_POST['ProductName'];
include("models/m_product.php");
$m_product = new M_product();
$danh_sach_san_pham = $m_product->Lay_danh_sach_san_pham_theo_ten($ProductName);


include("controllers/Pager.php");
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
?>

<table class="table table-striped table-advance table-hover">
  <thead>
    <tr>
      <th>Hình</th>
      <th>Tên SP</th>
      <th>Đơn giá</th>
      <th>Loại</th>
      <th>Nhà sản xuất</th>
      <th></th>

    </tr>
  </thead>
  <tbody>
  	<?php foreach ($danh_sach_san_pham as $san_pham): ?>
    <tr>
      <td width="80px"><img src="../public/images/product/<?php echo $san_pham->Image ?>" style="width:100%" ></td>
      <td><?php echo $san_pham->ProductName ?></td>
      <td><?php echo number_format($san_pham->Price) ?></td>
      <td><?php echo $san_pham->CategoryName ?></td>
      <td><?php echo $san_pham->SupplierName ?></td>
      <td>
      	<div class="btn-group"> 
        	<a class="btn btn-primary" href="edit_product.php?ProductID=<?php echo $san_pham->ProductID ?>"><i class="icon_cog"></i></a> 
            <a class="btn btn-danger btnXoa" href="javascript:void(0)" ProductID="<?php echo $san_pham->ProductID ?>" onclick="XoaHang(this)"><i class="icon_trash"></i></a> </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
  <tfoot>
  	<tr>
    	<td colspan="6" align="center">
        	 <div style="text-align:center" class="page_list"><?php echo $page_list ?></div>
        </td>
    </tr>
  </tfoot>
</table>
