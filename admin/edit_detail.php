<?php
$CategoryID=$idCha=$idCon = NULL;
if(isset($_GET['CategoryID']))
	$CategoryID = $_GET['CategoryID'];
	
if(isset($_GET['idCon']))
	$idCon = $_GET['idCon'];

if(isset($_GET['idCha']))
	$idCha = $_GET['idCha'];
	
include("models/m_category.php");
$m_category = new M_category();
$danh_Sach_loai_con = $m_category->Lay_danh_sach_loai_con_theo_cha($CategoryID);
?>

<?php if($CategoryID == $idCha): ?>
	<?php foreach($danh_Sach_loai_con as $con): ?>
		<?php if($con->CategoryID == $idCon): ?>
        	<option value="<?php echo $con->CategoryID ?>" selected><?php echo $con->CategoryName ?></option>
        <?php else: ?>
        	<option value="<?php echo $con->CategoryID ?>"><?php echo $con->CategoryName ?></option>
        <?php endif ?>
    <?php endforeach ?>
<?php else: ?>
	<?php foreach($danh_Sach_loai_con as $con): ?>
    	<option value="<?php echo $con->CategoryID ?>"><?php echo $con->CategoryName ?></option>
    <?php endforeach ?>
<?php endif ?>

