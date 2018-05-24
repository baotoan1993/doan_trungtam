<?php
class C_contact
{
	public function Hien_thi_Lien_He()
	{
		//models
			include("models/m_category.php");
			$m_category = new M_category();
			$danh_sach_loai_hang = $m_category->Lay_danh_sach_loai_hang();
		
		
		if(isset($_POST["Btn_Gui_Lien_He"]))
		{
			$ten_khach_hang=NULL;
			$so_dt=NULL;
			$email=NULL;
			$chu_de=NULL;
			$noi_dung=NULL;
			
			$ten_khach_hang=$_POST["Name"];
			
			$so_dt=$_POST["Telephone"];
			$email=$_POST["Email"];
			$chu_de=$_POST["Subject"];
			$noi_dung=$_POST["Message"];
			$trang_thai=0;
			//echo "$ten_khach_hang $email $so_dt $chu_de $noi_dung $trang_thai";
			
			
			
				include("models/m_contact.php");
				$m_contact=new M_Contact();
				$kq=$m_contact->Them_lien_he($ten_khach_hang,$email,$so_dt,$chu_de,$noi_dung,$trang_thai);
			//echo $kq->rowCount();
			
			if($kq->rowCount()>0)
			{
				//gửi mail
				include_once("models/thu_vien.php");
				
				$noi_dung_mail="<p><b>Từ: $ten_khach_hang</b></p><p><b>Email: $email</b></p><p><b>Điện thoại:$so_dt</b></p>$noi_dung";
				$kq=thu_vien::Gui_mail_lien_he($chu_de, $noi_dung_mail, $email);
				
				if($kq)
				{
					echo "<script>alert('Chúng tôi đã ghi nhận nội dung liên hệ của bạn! Cảm ơn bạn hỗ trợ BÁCH HOÁ MINI')</script>";
				}
				else
				{
					echo "<script>alert('Lỗi gửi liên hệ')</script>";
				}	
			}
			
		}
		
		//views
			include("controllers/smarty_sieuthi.php");
			$smarty=new Smarty_sieuthi();
			$view="views/contact/v_contact_map.tpl";
			$view2="views/contact/v_contact.tpl";
			$smarty->assign("view2",$view2); // Nghĩa mới thêm vào $view2 ở smarty/templates/banner/
			$smarty->assign("view",$view);
			$smarty->assign("category_name","Liên hệ");
			
			$smarty->assign("danh_sach_loai_hang", $danh_sach_loai_hang);
			$smarty->display("contact/layout_contact.tpl");	
	}
	
	
}
?>