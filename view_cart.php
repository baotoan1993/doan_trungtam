<?php
session_start();
$tongtien = 0;
?>
<?php if(isset($_SESSION['your_cart'])): ?>
<?php foreach ($_SESSION['your_cart'] as $san_pham):?>
<tr>
	<td>
    	<img style="width:100%" src="public/images/product/<?php echo $san_pham->Image ?>" onerror="this.src='public/images/updating.jpg'; this.style.width='100%'" />
    </td>
	<td>
    	<a href="detail.php?ma_san_pham=<?php echo $san_pham->ProductID ?>">
			<?php echo $san_pham->ProductName ?>
        </a>
    </td>
    <td style="text-align:center;">
         <div class="quantity"> 
            <div class="quantity-select">                           
                <div class="entry value-minus"
                	ProductID="<?php echo $san_pham->ProductID?>" 
                    Quantity="<?php echo $san_pham->Quantity?>"
                    onclick="Giam_so_luong(this)" >&nbsp;
                </div>
                <div class="entry value"><span><?php echo $san_pham->Quantity ?></span></div>
                <div class="entry value-plus active"
                	ProductID="<?php echo $san_pham->ProductID?>" 
                    Quantity="<?php echo $san_pham->Quantity?>"
                    onclick="Tang_so_luong(this)" >&nbsp;
                </div>
            </div>
        </div>
    </td>
    <td><?php echo number_format($san_pham->Price)?></td>
    <td>
        <button onclick="Xoa_hang_trong_gio(this)" 
        		ProductID='<?php echo $san_pham->ProductID ?>'
                class="btn btn-warning" >
            X
        </button>
    </td>
    <?php $tongtien = $tongtien + ($san_pham->Quantity * $san_pham->Price) ?>
</tr>
<?php endforeach ?>
<tr class="info">
	<td colspan="3" style="text-align: center; color:black; font-size:17pt">TỔNG CỘNG</td>
    <td><h3 style="color: red"><?php echo number_format($tongtien)?> đ</h3></td>
    <td>
</tr>

<?php else: ?>
<tr>
    <td colspan="5">
    	<h1>Giỏ hàng trống!!!</h1>
    </td>
</tr>
<?php endif ?>