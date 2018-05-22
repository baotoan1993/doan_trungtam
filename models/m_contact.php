<?php
include_once("models/database.php");
class M_Contact extends Database
{
		public function __construct()
		{
			parent::__construct();	
		}
		
		public function Them_lien_he($ten_khach_hang,$email,$so_dt,$chu_de,$noi_dung,$trang_thai)
		{
			$sql="INSERT INTO contact ";
			$sql.="VALUES(?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$parram=array(NULL,$ten_khach_hang,$email,$so_dt,$chu_de,$noi_dung,$trang_thai);
			
			return $this->execute($parram);
		}
		
		public function Cap_nhat_lien_he($ten_khach_hang,$email,$so_dt,$chu_de,$noi_dung,$trang_thai)
		{
			$sql="UPDATE contact SET ten_khach_hang=?, email=?, so_dien_thoai=?, chu_de=?, noi_dung=?, trang_thai=? ";
			$sql.="WHERE id=?";
			$this->setQuery($sql);
			$parram=array($ten_khach_hang,$email,$so_dt,$chu_de,$noi_dung,$trang_thai,$id);
			return $this->execute($parram);	
		}
}
?>