<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong>{$content_heading}</strong></h2>
      </div>
      <div class="panel-body" id="main_content">
        <table class="table table-striped table-advance table-hover" width="500px">
          <thead>
            <tr>
              <th>Loại hàng</th>
              <th>Điều chỉnh</th>
            </tr>
          </thead>
          <tbody>
          
          {foreach $danh_sach_loai_hang as $loai_hang}
          <tr>
            <td>{$loai_hang->CategoryName}</td>
            <td><div class="btn-group"> <a class="btn btn-primary" href="edit_category.php?CategoryID={$loai_hang->CategoryID}"><i class="icon_cog"></i></a> </div></td>
          </tr>
          {/foreach}
          </tbody>
          
        </table>
      </div>
    </div>
  </div>
</div>
