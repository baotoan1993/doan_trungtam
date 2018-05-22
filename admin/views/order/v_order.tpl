<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong>{$content_heading}</strong></h2>
      </div>
      <div class="panel-body" id="main_content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 table-responsive">
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>Ten khach hang</th>
                    <th>Email</th>
                    <th>Dia chi</th>
                    <th>So dien thoai</th>
                    <th>Ghi chu</th>
                    <th style="text-align:center">Hoàn thành</th>
                  </tr>
                </thead>
                <tbody>
                
                {foreach $danh_sach_dat_hang as $don_hang}
                <tr CustomerID="{$don_hang->CustomerID}" style="cursor:pointer" onclick="Xu_ly_hoa_don(this)">
                  <td>{$don_hang->CustomerName}</td>
                  <td>{$don_hang->Email}</td>
                  <td>{$don_hang->Address}</td>
                  <td>{$don_hang->Phone}</td>
                  <td>{$don_hang->Note}</td>
                  <td style="text-align:center"> {if ($don_hang->Status) == 1}
                    <input type="checkbox" checked="checked" onclick="return false;">
                    {else}
                    <input type="checkbox" onclick="return false;">
                    {/if} </td>
                </tr>
                {/foreach}
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
	function Xu_ly_hoa_don(e){
		var CustomerID = $(e).attr("CustomerID")
		var url = "order.php?customerid=" + CustomerID
		window.location = url
	}
</script>