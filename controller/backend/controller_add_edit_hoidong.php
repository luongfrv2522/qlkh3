<?php 
	class controller_add_edit_hoidong{
		public $model;
		public function __construct(){
			//------
			$this->model = new model();
			//------
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			

			//print '<script>alert("'.$fk_madetai_id.'");</script>';
			switch($act){
				//----
				case "edit":
					//lay 1 ban ghi truong ung voi id truyen vao
					$record = $this->model->get_a_record("select * from tbl_hoidong where pk_hoidong_id=$id");
					$form_action = "admin.php?controller=add_edit_hoidong&act=do_edit&id=$id";
					//load view
					include "view/backend/view_add_edit_hoidong.php";
				break;
				case "do_edit":
				
					$c_tenhoidong = $_POST["c_tenhoidong"];
					$fk_madetai_id = $_POST["fk_madetai_id"];
					
					
					//update ban ghi
					$this->model->execute("update tbl_hoidong set c_tenhoidong='$c_tenhoidong',fk_madetai_id='$fk_madetai_id' where pk_hoidong_id=$id");
					//di chuyen den trang 
					header("location:admin.php?controller=hoidong");
				break;
				//----
				case "add":
					$form_action = "admin.php?controller=add_edit_hoidong&act=do_add";
					//load view
					include "view/backend/view_add_edit_hoidong.php";
				break;
				//----
				case "do_add":
					
					$c_tenhoidong = $_POST["c_tenhoidong"];
					$fk_madetai_id = $_POST["fk_madetai_id"];
					
					$this->model->execute("insert into tbl_hoidong set c_tenhoidong='$c_tenhoidong', fk_madetai_id='$fk_madetai_id'");
					//di chuyen den trang 
					header("location:admin.php?controller=hoidong");
				break;
				//----
				case "delete":
					
					//--------
					$this->model->execute("delete from tbl_hoidong where pk_hoidong_id=$id");
					//di chuyen den trang 
					header("location:admin.php?controller=hoidong");
				break;
				//----
				default:
					//di chuyen den trang 
					header("location:admin.php?controller=hoidong");
				break;
				//----
			}
		}
	}
	new controller_add_edit_hoidong();
 ?>