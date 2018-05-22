<?php
session_start();
$ProductID = $_POST['ProductID'];
$kieu = $_POST['kieu'];

if($kieu == 'tang_hang')
{
	foreach($_SESSION['your_cart'] as $product)
	{
		if($product->ProductID == $ProductID)
		{
			$product->Quantity += 1;
			echo '1';
			return;
		}
	}
}
else if($kieu == 'giam_hang')
{
	foreach($_SESSION['your_cart'] as $product)
	{
		if($product->ProductID == $ProductID)
		{
			if($product->Quantity == 1)
			{
				echo '0';
				return;
			}
			else
			{
				$product->Quantity -= 1;
				echo '1';
				return;	
			}
			
		}
	}
}
else if($kieu == 'xoa_hang')
{
	/*for($i = 0; $i < count($_SESSION['your_cart']); $i++)
	{
		if($_SESSION['your_cart'][$i]->ProductID == $ProductID)
		{
			unset($_SESSION['your_cart'][$i]);
			if(count($_SESSION['your_cart']) == 0){
				unset($_SESSION['your_cart']);
			}
			echo '1';
			return;
		}
	}*/
	
	foreach($_SESSION['your_cart'] as $elementKey => $product)
	{
		foreach($product as $key => $value)
		{
			if($key == 'ProductID' && $value == $ProductID)
			{
				unset($_SESSION['your_cart'][$elementKey]);
				if(count($_SESSION['your_cart']) == 0){
					unset($_SESSION['your_cart']);
					echo '111';
					return;
				}
				echo '1';
				return;
				
			}
			
		}
	}
}
?>