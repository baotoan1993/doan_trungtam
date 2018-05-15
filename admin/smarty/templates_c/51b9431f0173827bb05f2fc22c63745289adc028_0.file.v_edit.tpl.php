<?php
/* Smarty version 3.1.30, created on 2018-05-02 15:24:18
  from "C:\wamp64\www\sieuthimini\admin\views\product\v_edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9d8221d3611_23980476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51b9431f0173827bb05f2fc22c63745289adc028' => 
    array (
      0 => 'C:\\wamp64\\www\\sieuthimini\\admin\\views\\product\\v_edit.tpl',
      1 => 1525268734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9d8221d3611_23980476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
<form class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="col-lg-4"> 
  	<img src="../public/images/product/full/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Image;?>
"> 
    <input type="file" name="hinh" id="changeImage" onchange="changeImageFunc(this)" />
    <div style="width:200px; height:200px; border:1px solid black;">
    	<img src="" id="image-tag" style="width:100%"> 
    </div>
    
  </div>

    <div class="col-lg-3" style="margin: 15px">
        <div class="form-group">
            <label for="usr">Tên SP:</label>
            <input type="text" class="form-control" placeholder="tên sản phẩm" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductName;?>
">
        </div>
        
        <div class="form-group">
            <label for="usr">Giá bán:</label>
            <input type="text" 
            class="form-control" 
            value="<?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->Price);?>
" 
            onkeypress="validate(event)"
            onkeyup="hihi(this);" >
        </div>
        
        <div class="form-group">
            <label for="sel1">Thuộc Loại:</label>
            <select class="form-control" onChange="Thay_doi_loai_cha(this.value, <?php echo $_smarty_tpl->tpl_vars['san_pham']->value->CategoryID;?>
, <?php echo $_smarty_tpl->tpl_vars['loai_cha']->value->CategoryID;?>
)">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_loai_cha']->value, 'cha');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cha']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['cha']->value->CategoryID == $_smarty_tpl->tpl_vars['loai_cha']->value->CategoryID)) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cha']->value->CategoryID;?>
" selected><?php echo $_smarty_tpl->tpl_vars['cha']->value->CategoryName;?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cha']->value->CategoryID;?>
"><?php echo $_smarty_tpl->tpl_vars['cha']->value->CategoryName;?>
</option>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
        
        <div class="form-group">
            <label for="sel1">Chi tiết loại:</label>
            <select class="form-control" id="sl_loaicon">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_loai_con']->value, 'con');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['con']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['con']->value->CategoryID == $_smarty_tpl->tpl_vars['san_pham']->value->CategoryID)) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['con']->value->CategoryID;?>
" selected><?php echo $_smarty_tpl->tpl_vars['con']->value->CategoryName;?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['con']->value->CategoryID;?>
"><?php echo $_smarty_tpl->tpl_vars['con']->value->CategoryName;?>
</option>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
        
        <div class="form-group">
            <label for="sel1">Nhà sản xuất:</label>
            <select class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_nha_san_xuat']->value, 'nsx');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nsx']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['nsx']->value->SupplierID == $_smarty_tpl->tpl_vars['san_pham']->value->SupplierID)) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['nsx']->value->SupplierID;?>
" selected><?php echo $_smarty_tpl->tpl_vars['nsx']->value->SupplierName;?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['nsx']->value->SupplierID;?>
"><?php echo $_smarty_tpl->tpl_vars['nsx']->value->SupplierName;?>
</option>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
    
    </div>
    
    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3" style="margin: 15px">
    	 <div class="form-group">
            <label for="usr">Nhãn hiệu:</label>
            <input type="text" class="form-control" placeholder="nhãn hiệu" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ProductType;?>
">
        </div>
        
        <div class="form-group">
            <label for="usr">Đơn vị tính:</label>
            <input type="text" class="form-control" placeholder="nhãn hiệu" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->SubUnit;?>
">
        </div>
        
        <div class="form-group">
            <label for="usr">Giảm giá (%):</label>
            <input type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->Discount;?>
" min="0"> 
        </div>
        
       
        
        
        
        
        
        <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-danger">Cập nhật</button>
        </div>
        </div>
    </div>
</form>
</div>


<?php echo '<script'; ?>
>
function Thay_doi_loai_cha(e, idCon, idCha)
{
	$.ajax({
		url: 'edit_detail.php',
		method: 'get',
		data: {
			CategoryID: e,
			idCon: idCon,
			idCha: idCha
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
	if(e.value == ''){
		e.value='0'
		return
	}
		
	var price = e.value.toString().replace(/\,/g,"")
	price = parseInt(price)
	$(e).val(price.toLocaleString("en-EN"))
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
