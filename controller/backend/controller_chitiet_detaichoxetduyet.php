<?php 
	class controller_chitiet_detaichoxetduyet{
		public $model;
		public function __construct(){
			//------
			$this->model = new model();
			//------
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			switch($act){
				//----
				case "xem":
					//lay 1 ban ghi truong ung voi id truyen vao
					$record = $this->model->get_a_record("select * from tbl_detai where pk_madetai_id=$id");
					$form_action = "admin.php?controller=chitiet_detaichoxetduyet&act=xem&id=$id";
					//load view
					include "view/backend/view_chitiet_detaichoxetduyet.php";
				break;
				default:
					//di chuyen den trang 
					header("location:admin.php?controller=detaichoxetduyet");
				break;
				//----
			}
		}
	}
	new controller_chitiet_detaichoxetduyet();
 ?>