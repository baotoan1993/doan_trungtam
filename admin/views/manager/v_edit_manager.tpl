<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Thêm tài khoản quản lý</strong></h2>
            </div>
            <div class="panel-body" id="main_content">
            	<div class="row">
                	<div class="col-lg-12 col-md-12">
                    	<div class="form-group">
                            <label>Tài khoản:</label>
                            <select class="form-control" name="User" onChange="Thay_doi_tai_khoan(this)">
                            {foreach $danh_sach_tai_khoan as $tai_khoan}
                                <option value="{$tai_khoan->UserID}" >{$tai_khoan->Email}</option>
                            {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
            	<h3 style="text-align:center">chi tiet</h3>
            	<form onSubmit="Xu_ly_cap_nhat(event)">
            	<div class="row">
                    <div class="col-lg-6">
                    	<div class="form-group">
                            <label for="usr">Email:</label>
                            <input type="email" class="form-control" name="Email" 
                            value="{$danh_sach_tai_khoan[0]->Email}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Mật khẩu mới (Để trống nếu không thay đổi):</label>
                            <input type="password" class="form-control" name="Password">
                        </div>
                        <div class="form-group">
                            <label for="usr">Họ tên:</label>
                            <input type="text" class="form-control" name="Name" 
                            value="{$danh_sach_tai_khoan[0]->Name}"required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    	<div class="form-group">
                            <label for="usr">Địa chỉ:</label>
                            <input type="text" class="form-control" name="Address"
                            value="{$danh_sach_tai_khoan[0]->Address}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Điện thoại:</label>
                            <input type="text" class="form-control" name="Mobile" 
                            value="{$danh_sach_tai_khoan[0]->Mobile}" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">Loại tài khoản:</label>
                            <select class="form-control" name="Role">
                            	{if ($danh_sach_tai_khoan[0]->Role == 1)}
                                <option value="1" selected>Admin quản lý</option>
                                <option value="2">Nhân viên quản lý</option>
                                {else}
                                <option value="1">Admin quản lý</option>
                                <option value="2" selected>Nhân viên quản lý</option>
                                {/if}
                            	
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    	<button type="submit" class="btn btn-info">Cập nhật</button>
                        <button type="reset" class="btn btn-danger">Mặc định</button>
                    </div>
                
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<script>
	var UserID = {$danh_sach_tai_khoan[0]->UserID}
    function Thay_doi_tai_khoan(e){
		UserID = $(e).children("option:selected").val()
		
		$.ajax({
			url: "manager.php",
			type: 'POST',
			dataType: 'json',
			data: {
				change: "1",
				UserID: UserID	
			}
		}).done(function(res){
			$("[name='Email']").val(res.Email)
			$("[name='Name']").val(res.Name)
			$("[name='Address']").val(res.Address)
			$("[name='Mobile']").val(res.Mobile)
			$("[name='Role']").children("option").each(function(){
				if($(this).val() == res.Role){
					$(this).attr("selected","selected");
				}
			})
		})
	}

	function Xu_ly_cap_nhat(e){
		e.preventDefault()
		var Email = $("[name='Email']").val()
		var Password = $("[name='Password']").val()
		var Name = $("[name='Name']").val()
		var Address = $("[name='Address']").val()
		var Mobile = $("[name='Mobile']").val()
		var Role = $("[name='Role']").val()

		if(UserID == '1'){
			$.notify({
				title: '<strong>Cẩn thận!! </strong>',
				message: 'Không thể cập nhật SUPERADMIN!!',
				
			},{
				type: 'warning',
				animate: {
					enter: 'animated flipInY',
					exit: 'animated flipOutX'
				},
				delay: 2500,
				allow_dismiss: false,
				placement: {
					from: 'top',
					align: 'center'
				},
			});
			return
		}

		$.ajax({
			url: 'manager.php',
			type: 'POST',
			data: {
				btnCapNhat: "1",
				UserID: UserID,
				Password: Password,
				Name: Name,
				Address: Address,
				Mobile: Mobile,
				Role: Role
			}
		}).done(function(res){
			if(res == 1){
				$('body').css({literal}{'pointer-events': 'none', 'opacity': '0.9'}{/literal})
				$.notify({
					title: '<strong>Thành công!! </strong>',
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
						align: 'center'
					},
				});
				setTimeout(function(){
					location.reload()
				},2000)
			}else{
				$.notify({
					title: '<strong>Thất bại!! </strong>',
					message: 'Lỗi hệ thống...!!',
					
				},{
					type: 'danger',
					animate: {
						enter: 'animated flipInY',
						exit: 'animated flipOutX'
					},
					delay: 2500,
					allow_dismiss: false,
					placement: {
						from: 'top',
						align: 'center'
					},
				});
			}
		})
	}
</script>