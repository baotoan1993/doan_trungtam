<div class="banner">
  <div class="w3l_banner_nav_right"> 
    <!-- login -->
    <div class="w3_login">
    	{if isset($fail_status_login)}
    	{if $fail_status_login == 0}
        	<div class="alert alert-danger" style="text-align:center">
              <strong>Đăng nhập thất bại!</strong> Kiểm tra lại thông tin đăng nhập.
            </div>
        {/if}
        {/if}
        {if isset($fail_status_register)}
    	{if $fail_status_register == 1}
        	<div class="alert alert-danger" style="text-align:center">
              <strong>Đăng ký thất bại!</strong> Tài khoản đã tồn tại.
            </div>
        {/if}
        {/if}
      <h3>Đăng nhập - Đăng ký</h3>
      <div class="w3_login_module">
        <div class="module form-module">
          <div class="toggle"><i class="fa fa-times fa-pencil"></i>
            <div class="tooltip">Thay đổi</div>
          </div>
          {if !isset($smarty.session.user)}
          <div class="form">
            <h2>Đăng nhập tài khoản</h2>           
            <form onsubmit="event.preventDefault(); Kiem_tra_dang_nhap()">
              <input type="email" name="l_Email" placeholder="Email" required>
              <input type="password" name="l_Password" placeholder="Mật khẩu" required>
              <input type="submit" value="Đăng nhập" id="btnLogin">
            </form>
          </div>
          {/if}
          <div class="form">
            <h2>Đăng ký tài khoản</h2>
            <form action="register_check.php" method="post">
              <input type="text" name="r_Username" placeholder="Họ tên" required>
              <input type="email" name="r_Email" placeholder="Email" required>
              <input type="password" name="r_Password" placeholder="Mật khẩu" required>
              <input type="text" name="r_Phone" placeholder="Điện thoại">
              <input type="text" name="r_Mobile" placeholder="Di động" required>
              <input type="text" name="r_Address" placeholder="Địa chỉ">
              <input type="submit" value="Đăng ký" id="btnRegister">
            </form>
          </div>
          <!--<div class="cta"><a href="#">Quên mật khẩu?</a></div>-->
        </div>
      </div>
      <script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script> 	
    <script>
    	$(document).ready(function(e) {

        });
    </script>
    </div>
    <!-- //login --> 
  </div>
  <div class="clearfix"></div>
</div>
