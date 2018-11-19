<?php 
	class controller_add_edit_khoanmucdiem{
		public $model;
		public function __construct(){
			//------
			$this->model = new model();
			//------
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			switch($act){
				case "add":
					$form_action = "hoidong.php?controller=add_edit_khoanmucdiem&act=do_add";
					//load view
					include "view/backend/w_hoidong/view_add_edit_khoanmucdiem.php";
				break;
				//----
				case "do_add":
					$diem_chu_tich = $_POST["diem_chu_tich"];
					$diem_phan_bien_1 = $_POST["diem_phan_bien_1"];
					$diem_phan_bien_2 = $_POST["diem_phan_bien_2"];
					$y_kien = $_POST["y_kien"];
					$ghi_chu = $_POST["ghi_chu"];
					$xep_loai = $_POST["xep_loai"];
					$this->model->execute("insert into tbl_diem_phieucham set diem_chu_tich=$diem_chu_tich, diem_phan_bien_1=$diem_phan_bien_1, diem_phan_bien_2=$diem_phan_bien_2, y_kien='$y_kien', ghi_chu='$ghi_chu', xep_loai=$xep_loai");
					//di chuyen den trang 
					header("location:hoidong.php?controller=khoanmucdiem");
				break;
				//----
				case "delete":
					
					//--------
					$this->model->execute("delete from tbl_phieucham where pk_khoanmucdiem_id=$id");
					//di chuyen den trang news
					header("location:hoidong.php?controller=khoanmucdiem");
				break;
				//----
				default:
					//di chuyen den trang news
					header("location:hoidong.php?controller=khoanmucdiem");
				break;
				//----
			}
		}
	}
	new controller_add_edit_khoanmucdiem();
 ?>