  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="." class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text" onkeyup="Tim_san_pham(this)">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="public/#">
                            <span class="profile-ava">
                                <img alt="" src="public/img/avatar1_small.jpg">
                            </span>
                            <span class="username">{$smarty.session.admin->Name}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="#"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="#"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    
    <script>
		function Tim_san_pham(a){
			var ProductName = $(a).val();
			console.log(ProductName)
			$.ajax({
				url: 'search_product.php',
				type: 'POST',
				data: {
					ProductName : ProductName
				},
				success: function(res)
				{
					$("#main_content").html(res)
				}
			})
		}
	</script>