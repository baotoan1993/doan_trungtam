<?php
/* Smarty version 3.1.30, created on 2018-05-20 14:07:15
  from "C:\wamp64\www\doan_git\admin\views\category\v_edit_category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0181132a7dd0_55944090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d6cb9d3fcb0e5e0735e8c2bd17c6033e5f035b' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_git\\admin\\views\\category\\v_edit_category.tpl',
      1 => 1526825232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0181132a7dd0_55944090 (Smarty_Internal_Template $_smarty_tpl) {
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
	<div class="col-sm-5">
        <div class="form-group">
            <label for="usr">Loại hàng:</label>
            <input type="text" 
            		class="form-control"  
                    value="<?php echo $_smarty_tpl->tpl_vars['loai_cha']->value->CategoryName;?>
" 
                    name="Category" c_id="<?php echo $_smarty_tpl->tpl_vars['loai_cha']->value->CategoryID;?>
" 
            		readonly >
        </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="sel1">Chi tiết loại hàng:</label>
            <select class="form-control" name="CategorySub">
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
         <div class="form-group">
            <label for="usr">Cập nhật chi tiết:</label>
            <input type="text" class="form-control" placeholder="thông tin muốn cập nhật" name="CategoryInfo">
        </div>
        <table width="500px" align="center">
        	<tr align="center">
            	<td><button class="btn btn-success" onClick="Them()">Thêm</button></td>
                <td><button class="btn btn-primary" onClick="CapNhat()">Cập nhật</button></td>
                <td><button class="btn btn-danger" onClick="Xoa()" name="btnXoa">Xoá</button></td>
            </tr>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>


<?php echo '<script'; ?>
>
	function Them(){
		var chitiet = $("[name='CategoryInfo']").val()
		var cha = $("[name='Category']").attr("c_id")
		if(chitiet == "")
		{
			 $("[name='CategoryInfo']").notify("Chưa nhập chi tiết cập nhật !!!", {
				className: 'error',
				position: 'top',
				clickToHide: true,
				showAnimation: 'slideDown',
				autoHide: true,
				autoHideDelay: 3000,
				showDuration: 300,
				hideAnimation: 'slideUp',
				arrowShow: true,
				arrowSize: 10,
				hideDuration: 200,
			});
			return
		}
		
		$.ajax({
			url: 'xu_ly_loai_hang.php',
			type:'POST',
			data:{
				loai: "them",
				CategoryParentID: cha,
				CategoryName: chitiet
			}
		}).done(function(res){
			if(res == 1){
				$('body').css({'pointer-events': 'none', 'opacity': '1'})
				$.notify({
					title: '<strong>Thành công!!</strong>',
					message: 'Trang sẽ được làm mới!',
					
				},{
					type: 'success',
					animate: {
						enter: 'animated fadeInRight',
						exit: 'animated fadeOutRight'
					},
					delay: 1500,
					allow_dismiss: false,
					placement: {
						from: 'top',
						align: 'right'
					},
				});
				setTimeout(function(){
					location.reload()
				},2000)
			}else
			{
				alert("khong them duoc")
			}
		})
	}
	
	function Xoa(){
		var con = $("[name='CategorySub']").val()
		var ten = $("[name='CategorySub'] option:selected").text()
		if(confirm("Bạn có chắc chắn xoá " + ten + " ra khỏi chi tiết loại hàng?")){
			$.ajax({
				url: 'xu_ly_loai_hang.php',
				type:'POST',
				data:{
					loai: "xoa",
					CategoryID: con
				}
			}).done(function(res){
				if(res == 1){
					$('body').css({'pointer-events': 'none', 'opacity': '1'})
					$.notify({
						title: '<strong>Thành công!!</strong>',
						message: 'Trang sẽ được làm mới!',
						
					},{
						type: 'success',
						animate: {
							enter: 'animated fadeInRight',
							exit: 'animated fadeOutRight'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
					setTimeout(function(){
						location.reload()
					},2000)
					
				}else if(res == -1){					
					$.notify({
						title: '<strong>Lỗi!!</strong>',
						message: 'Chi tiết loại hàng đang được sử dụng!!.',
						
					},{
						type: 'danger',
						animate: {
							enter: 'animated flipInY',
							exit: 'animated flipOutX'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
				}else{
					alert("da xay ra loi")
				}
			})
		}else{
			return
		}
	}
	
	function CapNhat(){
		var chitiet = $("[name='CategoryInfo']").val()
		var con = $("[name='CategorySub']").val()
		var ten = $("[name='CategorySub'] option:selected").text()
		if(chitiet == "")
		{
			 $("[name='CategoryInfo']").notify("Chưa nhập chi tiết cập nhật !!!", {
				className: 'error',
				position: 'top',
				clickToHide: true,
				showAnimation: 'slideDown',
				autoHide: true,
				autoHideDelay: 3000,
				showDuration: 300,
				hideAnimation: 'slideUp',
				arrowShow: true,
				arrowSize: 10,
				hideDuration: 200,
			});
			return
		}
		
		if(confirm("Bạn có chắc chắn thay đổi " + ten + " thành " + chitiet + " không?")){
			$.ajax({
				url: 'xu_ly_loai_hang.php',
				type:'POST',
				data:{
					loai: "capnhat",
					CategoryName: chitiet,
					CategoryID: con
				}
			}).done(function(res){
				if(res == 1){
					$('body').css({'pointer-events': 'none', 'opacity': '1'})
					$.notify({
						title: '<strong>Cập nhật thành công!!</strong>',
						message: 'Trang sẽ được làm mới!',
						
					},{
						type: 'success',
						animate: {
							enter: 'animated fadeInRight',
							exit: 'animated fadeOutRight'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
					setTimeout(function(){
						location.reload()
					},2000)
				}else if(res == -1){
					$.notify({
						title: '<strong>Lỗi!!</strong>',
						message: 'Tên loại hàng đã được sử dụng!!.',
						
					},{
						type: 'danger',
						animate: {
							enter: 'animated flipInY',
							exit: 'animated flipOutX'
						},
						delay: 1500,
						allow_dismiss: false,
						placement: {
							from: 'top',
							align: 'right'
						},
					});
				}else{
					alert("khong thanh cong")
				}
			})
		}
		
		
	}
<?php echo '</script'; ?>
>









<?php }
}
