<?php 
	class controller_detaihoanthanh{
		public $model;
		public function __construct(){
			$this->model = new model();
			//---------
			//phan trang
			$id=isset($_GET['id'])?$_GET['id']:0;
			
			$year = date("Y");
			
			if(isset($_GET["year"])){
				$year = $_GET["year"];
			}
			
			if(isset($_POST['Process'])){
				$year = $_POST['nam'];
				
			}
			$form_action = "truongbomon.php?controller=detaihoanthanh&act=xem&id=$id";
			//quy dinh so ban ghi hien thi tren mot trang
			$record_per_page = 5;
			//tinh tong so ban ghi
			$total = $this->model->num_rows("select dt.pk_madetai_id from tbl_user u join tbl_detai dt on u.pk_user_id = dt.fk_user_id where dt.c_trangthai in (3) ".($year!=0?" and year(dt.c_denngay) in($year) ":""));
			//tinh so trang
			$num_page = ceil($total/$record_per_page);
			//lay bien p truyen tu url, bien nay se chi trang hien tai
			$p = (isset($_GET["p"])&&$_GET["p"]>0) ? ($_GET["p"]-1) : 0;
			//lay tu ban ghi nao trong chuoi sql
			$from = $p * $record_per_page;			
			//---------
			//lay toan bo ban ghi co phan trang
			$arr = $this->model->get_all("select * from tbl_user u join tbl_detai dt on u.pk_user_id = dt.fk_user_id where dt.c_trangthai in (3) ".($year!=0?" and year(dt.c_denngay) in($year) ":"")." order by pk_madetai_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/w_truongbomon/view_detaihoanthanh.php";
		}
	}
	new controller_detaihoanthanh();
 ?>