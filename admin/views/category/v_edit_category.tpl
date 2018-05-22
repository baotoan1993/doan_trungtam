<div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>{$content_heading}</strong></h2>
              </div>
<div class="panel-body" id="main_content">
<div class="row">
	<div class="col-sm-5">
        <div class="form-group">
            <label for="usr">Loại hàng:</label>
            <input type="text" 
            		class="form-control"  
                    value="{$loai_cha->CategoryName}" 
                    name="Category" c_id="{$loai_cha->CategoryID}" 
            		readonly >
        </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="sel1">Chi tiết loại hàng:</label>
            <select class="form-control" name="CategorySub">
            {foreach $danh_sach_loai_con as $con}
                <option value="{$con->CategoryID}">{$con->CategoryName}</option>
            {/foreach}
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


<script>
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
				$('body').css({literal}{'pointer-events': 'none', 'opacity': '1'}{/literal})
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
					$('body').css({literal}{'pointer-events': 'none', 'opacity': '1'}{/literal})
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
					$('body').css({literal}{'pointer-events': 'none', 'opacity': '1'}{/literal})
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
</script>









