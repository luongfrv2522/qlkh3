<?php 
	class controller_dangkidetai{
		public $model;
		public function __construct(){
			//------
			$this->model = new model();
			//------
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			switch($act){
				case "add":
					$form_action = "giaovien.php?controller=add_dangkidetai&act=do_add";
					//load view
					include "view/backend/w_giaovien/view_add_dangkidetai.php";
				break;
				//----
				case "do_add":
					$c_tendetai = $_POST["c_tendetai"];
					$c_noidungnghiencuu = $_POST["c_noidungnghiencuu"];
					$c_kinhphi = $_POST["c_kinhphi"];
					$c_tungay = $_POST["c_tungay"];
					$c_denngay = $_POST["c_denngay"];
					
					$file_mo_ta = $_POST["file_mo_ta"];
					$c_trangthai = $_POST["c_trangthai"];
					$this->model->execute("insert into tbl_detai set c_tendetai='$c_tendetai', c_noidungnghiencuu='$c_noidungnghiencuu', c_kinhphi=$c_kinhphi, c_tungay='$c_tungay', c_denngay='$c_denngay',  file_mo_ta='$file_mo_ta', c_trangthai=$c_trangthai");
					//di chuyen den trang 
					header("location:giaovien.php?controller=dangkidetai");
				break;
				default:
					//di chuyen den trang news
					header("location:giaovien.php?controller=dangkidetai");
				break;
				//----
			}
		}
	}
	new controller_dangkidetai();
 ?>