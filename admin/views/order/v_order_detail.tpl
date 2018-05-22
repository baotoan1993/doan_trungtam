<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong>{$content_heading}</strong></h2>
      </div>
      <div class="panel-body" id="main_content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h3 style="display:inline">Khách hàng: </h3>
              <h1 style="display:inline; font-family:'Roboto', sans-serif">{$ten_khach_hang}</h1>
            </div>
          </div>
          <br >
          <div class="row">
            <div class="col-lg-12"> {$tong=0}
              <table class="table table-hover table-striped table-bordered">
                <thead style="background:#FC6">
                  <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                  </tr>
                </thead>
                <tbody>
                
                {foreach $chi_tiet_dat_hang as $chi_tiet}
                <tr>
                  <td>{$chi_tiet->ProductName}</td>
                  <td>{$chi_tiet->Quantity}</td>
                  <td>{number_format($chi_tiet->Price)}</td>
                </tr>
                {$tong = $tong + ($chi_tiet->Quantity * $chi_tiet->Price)}
                {/foreach}
                <tr>
                  <td colspan="2" style="text-align:center; font-size:18pt"><b>TỔNG CỘNG</b></td>
                  <td style="font-size:16pt; color:red">{number_format($tong)}</td>
                </tr>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
