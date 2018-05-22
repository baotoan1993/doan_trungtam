<?php
/* Smarty version 3.1.30, created on 2018-05-21 16:35:53
  from "C:\wamp64\www\doan_trungtam\admin\views\product\v_add_product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02f5691d1495_89848738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c216885d44fe0562a5c18d7098e450fdea6f737' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\admin\\views\\product\\v_add_product.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02f5691d1495_89848738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong><?php echo $_smarty_tpl->tpl_vars['content_heading']->value;?>
</strong></h2>
      </div>
      <div class="panel-body" id="main_content">
        <div class="row">
          <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="Xu_ly.php">
            <div class="col-lg-4">
              <input type="file" 
                    name="Image" 
                    id="changeImage" 
                    onchange="changeImageFunc(this)"
                    accept="image/*" />
              <div style="width:200px; height:200px; border:1px solid black;"> <img src="" id="image-tag" style="width:100%"> </div>
              <hr>
            </div>
            <div class="col-lg-3" style="margin: 15px">
              <div class="form-group">
                <label for="usr">Tên SP:</label>
                <input type="text" class="form-control" placeholder="tên sản phẩm" name="ProductName" required>
              </div>
              <div class="form-group">
                <label for="usr">Giá bán:</label>
                <input type="text" 
                class="form-control" 
                value="1,000" 
                onkeypress="validate(event)"
                
                onKeyUp="keyUp(this)"
                name="Price" required>
              </div>
              <div class="form-group">
                <label for="sel1">Thuộc Loại:</label>
                <select class="form-control" onChange="Thay_doi_loai_cha(this.value)">
                  
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_loai_cha']->value, 'cha');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cha']->value) {
?>
                    
                  <option value="<?php echo $_smarty_tpl->tpl_vars['cha']->value->CategoryID;?>
" ><?php echo $_smarty_tpl->tpl_vars['cha']->value->CategoryName;?>
</option>
                  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                
                </select>
              </div>
              <div class="form-group">
                <label for="sel1">Chi tiết loại:</label>
                <select class="form-control" id="sl_loaicon" name="CategoryID">
                  
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_loai_con']->value, 'con');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['con']->value) {
?>
                    
                  <option value="<?php echo $_smarty_tpl->tpl_vars['con']->value->CategoryID;?>
"><?php echo $_smarty_tpl->tpl_vars['con']->value->CategoryName;?>
</option>
                  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                
                </select>
              </div>
            </div>
            <div class="col-lg-1"> </div>
            <div class="col-lg-3" style="margin: 15px">
              <div class="form-group">
                <label for="sel1">Nhà sản xuất:</label>
                <select class="form-control" name="SupplierID">
                  
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_nha_san_xuat']->value, 'nsx');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nsx']->value) {
?>
                    
                  <option value="<?php echo $_smarty_tpl->tpl_vars['nsx']->value->SupplierID;?>
"><?php echo $_smarty_tpl->tpl_vars['nsx']->value->SupplierName;?>
</option>
                  
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                
                </select>
              </div>
              <div class="form-group">
                <label for="usr">Nhãn hiệu:</label>
                <input type="text" class="form-control" placeholder="nhãn hiệu" name="ProductType" required>
              </div>
              <div class="form-group">
                <label for="usr">Đơn vị tính:</label>
                <input type="text" class="form-control" placeholder="Đơn vị tính" name="SubUnit" required>
              </div>
              <div class="form-group">
                <label for="usr">Giảm giá (%):</label>
                <input type="number" class="form-control" min="0" value="0" name="Discount">
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
              <label>Mô tả:</label>
              <textarea name="Description" class="ckeditor form-control" rows="5"></textarea>
              <br>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-7" style="text-align:center">
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-danger">Thêm sản phẩm</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function keyUp(e)
{
	if(e.value == '' || e.value == '₫'){
		e.value='0'
		return
	}
	
	var price = e.value.replace(/\,|\₫/g,'')
	price = parseInt(price)
	var option = { style: "currency", currency: "VND" };
	$(e).val(price.toLocaleString("en-EN", option))
}


function Thay_doi_loai_cha(e)
{
	console.log(e)
	$.ajax({
		url: 'edit_detail.php',
		method: 'get',
		data: {
			CategoryID: e
		}
	}).done(function(res){
		$('#sl_loaicon').html(res)
	})
}

function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
  
}

function hihi(e)
{
	var price = e.value.toString().replace(/\./g,"")
	var price = e.value.toString().replace(/\,/g,"")
	price = parseInt(price)
	$(e).val(price.toLocaleString("vi-VN"))
}

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
			$('#image-tag').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}

function changeImageFunc(e){
	readURL(e);
}

<?php echo '</script'; ?>
><?php }
}
