<div class="row">
<form class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="col-lg-4"> 
  	<img src="../public/images/product/full/{$san_pham->Image}"> 
    <input type="file" name="hinh" id="changeImage" onchange="changeImageFunc(this)" />
    <div style="width:200px; height:200px; border:1px solid black;">
    	<img src="" id="image-tag" style="width:100%"> 
    </div>
    
  </div>

    <div class="col-lg-3" style="margin: 15px">
        <div class="form-group">
            <label for="usr">Tên SP:</label>
            <input type="text" class="form-control" placeholder="tên sản phẩm" value="{$san_pham->ProductName}">
        </div>
        
        <div class="form-group">
            <label for="usr">Giá bán:</label>
            <input type="text" 
            class="form-control" 
            value="{number_format($san_pham->Price)}" 
            onkeypress="validate(event)"
            onkeyup="hihi(this);" >
        </div>
        
        <div class="form-group">
            <label for="sel1">Thuộc Loại:</label>
            <select class="form-control" onChange="Thay_doi_loai_cha(this.value, {$san_pham->CategoryID}, {$loai_cha->CategoryID})">
                {foreach $danh_sach_loai_cha as $cha}
                {if ($cha->CategoryID == $loai_cha->CategoryID)}
                <option value="{$cha->CategoryID}" selected>{$cha->CategoryName}</option>
                {else}
                <option value="{$cha->CategoryID}">{$cha->CategoryName}</option>
                {/if}
                {/foreach}
            </select>
        </div>
        
        <div class="form-group">
            <label for="sel1">Chi tiết loại:</label>
            <select class="form-control" id="sl_loaicon">
                {foreach $danh_sach_loai_con as $con}
                {if ($con->CategoryID == $san_pham->CategoryID)}
                <option value="{$con->CategoryID}" selected>{$con->CategoryName}</option>
                {else}
                <option value="{$con->CategoryID}">{$con->CategoryName}</option>
                {/if}
                {/foreach}
            </select>
        </div>
        
        <div class="form-group">
            <label for="sel1">Nhà sản xuất:</label>
            <select class="form-control">
                {foreach $danh_sach_nha_san_xuat as $nsx}
                {if ($nsx->SupplierID == $san_pham->SupplierID)}
                <option value="{$nsx->SupplierID}" selected>{$nsx->SupplierName}</option>
                {else}
                <option value="{$nsx->SupplierID}">{$nsx->SupplierName}</option>
                {/if}
                {/foreach}
            </select>
        </div>
    
    </div>
    
    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3" style="margin: 15px">
    	 <div class="form-group">
            <label for="usr">Nhãn hiệu:</label>
            <input type="text" class="form-control" placeholder="nhãn hiệu" value="{$san_pham->ProductType}">
        </div>
        
        <div class="form-group">
            <label for="usr">Đơn vị tính:</label>
            <input type="text" class="form-control" placeholder="nhãn hiệu" value="{$san_pham->SubUnit}">
        </div>
        
        <div class="form-group">
            <label for="usr">Giảm giá (%):</label>
            <input type="number" class="form-control" value="{$san_pham->Discount}" min="0"> 
        </div>
        
       
        
        
        
        
        
        <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-danger">Cập nhật</button>
        </div>
        </div>
    </div>
</form>
</div>


<script>
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

</script>