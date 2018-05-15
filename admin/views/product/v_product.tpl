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
  	{foreach $danh_sach_san_pham as $san_pham}
    <tr>
      <td width="80px"><img src="../public/images/product/{$san_pham->Image}" style="width:100%" ></td>
      <td>{$san_pham->ProductName}</td>
      <td>{number_format($san_pham->Price)}</td>
      <td>{$san_pham->CategoryName}</td>
      <td>{$san_pham->SupplierName}</td>
      <td>
      	<div class="btn-group"> 
        	<a class="btn btn-primary" href="edit_product.php?ProductID={$san_pham->ProductID}"><i class="icon_cog"></i></a> 
            <a class="btn btn-danger" href="#"><i class="icon_trash"></i></a> </div>
      </td>
    </tr>
    {/foreach}
  </tbody>
  <tfoot>
  	<tr>
    	<td colspan="6" align="center">
        	 <div style="text-align:center" class="page_list">{$page_list}</div>
        </td>
    </tr>
  </tfoot>
</table>
