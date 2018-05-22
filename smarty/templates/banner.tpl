<div class="banner">
  <div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> 
      	<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
      <ul class="nav navbar-nav nav_1">
        {foreach $danh_sach_loai_hang as $loai1}
        {if ($loai1->CategoryParentID == NULL)}
        <li class="dropdown mega-dropdown active"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {$loai1->CategoryName}<span class="caret"></span>
            </a>
          <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
            <div class="w3ls_vegetables">
              <ul>
                {foreach $danh_sach_loai_hang as $loai2}
                {if ($loai2->CategoryParentID == $loai1->CategoryID)}
                <li style="margin-bottom:0"><a href="products.php?ma_loai={$loai2->CategoryID}">{$loai2->CategoryName}</a></li>
                <hr style="margin:0" />
                {/if}
                {/foreach}
              </ul>
            </div>
          </div>
        </li>
        {/if}
        
        {/foreach}
      </ul>
    </div>
  </div>
  </nav>
	</div>
    <div class="w3l_banner_nav_right">
    {if isset($view2)}
	{include file=$view2}
	{/if}
    </div>
    <!--<div class="clearfix"></div>-->

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@2 -->

{block name="banner_right"}{include file="banner_right.tpl"}{/block}