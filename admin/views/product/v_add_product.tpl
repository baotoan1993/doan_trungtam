<div class="row">
<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="Xu_ly.php">
        <div class="col-lg-4"> 
            <input type="file" 
                    name="Image" 
                    id="changeImage" 
                    onchange="changeImageFunc(this)"
                    accept="image/*" />
            <div style="width:200px; height:200px; border:1px solid black;">
                <img src="" id="image-tag" style="width:100%"> 
            </div>
            <hr>
            
            
          </div>
    
        <div class="col-lg-3" style="margin: 15px">
            <div class="form-group">
                <label for="usr">Tên SP:</label>
                <input type="text" class="form-control" placeholder="tên sản phẩm" name="ProductName" required>
            </div>
            
            <div class="form-group">
                <label for="usr">Giá bán:</label>
                <input type="text" 
                class="form-control" 
                value="1,000" 
                onkeypress="validate(event)"
                
                onKeyUp="keyUp(this)"
                name="Price" required>
            </div>
            
            <div class="form-group">
                <label for="sel1">Thuộc Loại:</label>
                <select class="form-control" onChange="Thay_doi_loai_cha(this.value)">
                    {foreach $danh_sach_loai_cha as $cha}
                    <option value="{$cha->CategoryID}" >{$cha->CategoryName}</option>
                    {/foreach}
                </select>
            </div>
            
            <div class="form-group">
                <label for="sel1">Chi tiết loại:</label>
                <select class="form-control" id="sl_loaicon" name="CategoryID">
                    {foreach $danh_sach_loai_con as $con}
                    <option value="{$con->CategoryID}">{$con->CategoryName}</option>
                    {/foreach}
                </select>
            </div>
            
            
        
        </div>
        
        <div class="col-lg-1">
        </div>
        
        <div class="col-lg-3" style="margin: 15px">
        	<div class="form-group">
                <label for="sel1">Nhà sản xuất:</label>
                <select class="form-control" name="SupplierID">
                    {foreach $danh_sach_nha_san_xuat as $nsx}
                    <option value="{$nsx->SupplierID}">{$nsx->SupplierName}</option>
                    {/foreach}
                </select>
            </div>
            
             <div class="form-group">
                <label for="usr">Nhãn hiệu:</label>
                <input type="text" class="form-control" placeholder="nhãn hiệu" name="ProductType" required>
            </div>
            
            <div class="form-group">
                <label for="usr">Đơn vị tính:</label>
                <input type="text" class="form-control" placeholder="Đơn vị tính" name="SubUnit" required>
            </div>
            
            <div class="form-group">
                <label for="usr">Giảm giá (%):</label>
                <input type="number" class="form-control" min="0" value="0" name="Discount"> 
            </div>
    
            
        </div>
        
        
    
    <div class="clearfix"></div>
    <div class="col-lg-4"></div>
    <div class="col-lg-8">
    	<label>Mô tả:</label>
        <textarea name="Description" class="ckeditor form-control" rows="5"></textarea>
        <br>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-4"></div>
     <div class="col-lg-7" style="text-align:center">
		   <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                	<button type="submit" class="btn btn-danger">Thêm sản phẩm</button>
                </div>
            </div>  
    </div>   
</form>
</div>



<script>
function keyUp(e)
{
	if(e.value == '' || e.value == '₫'){
		e.value='0'
		return
	}
	
	var price = e.value.replace(/\,|\₫/g,'')
	price = parseInt(price)
	var option = { style: "currency", currency: "VND" };
	$(e).val(price.toLocaleString("en-EN", option))
}


function Thay_doi_loai_cha(e)
{
	console.log(e)
	$.ajax({
		url: 'edit_detail.php',
		method: 'get',
		data: {
			CategoryID: e
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
	var price = e.value.toString().replace(/\./g,"")
	var price = e.value.toString().replace(/\,/g,"")
	price = parseInt(price)
	$(e).val(price.toLocaleString("vi-VN"))
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