  <?php 
  	if(isset($_GET['action']) && $_GET['action']=='test'){
  		print_r($_POST);
  	}
  ?>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Phiếu chấm đề tài</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <!-- <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span> -->
          </div>
        </div>
      </div>
    </div>

      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title" >
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
                      <?php 
                        $arrDt = $this->model->get_all('select * from tbl_detai dt join tbl_user u on dt.fk_user_id = u.pk_user_id join tbl_bomon bm on bm.pk_mabomon_id = u.fk_mabomon_id join tbl_hoidong hd on hd.fk_madetai_id = dt.pk_madetai_id where dt.c_trangthai=2 ');
                      ?>
                       <div class="form-group">

                        <label class="control-label col-md-1 col-sm-1 col-xs-12" >Bộ môn 
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select name="fk_mabomon_id" class="form-control col-md-7 col-xs-12">
                            <?php 
                              $bomon = $this->model->get_all("select * from tbl_bomon order by pk_mabomon_id desc");
                              foreach($bomon as $rows):
                             ?>
                            <option <?php if(isset($record->fk_mabomon_id)&&$record->fk_mabomon_id==$rows->pk_mabomon_id): ?> selected <?php endif; ?> value="<?php echo $rows->pk_mabomon_id; ?>"><?php echo $rows->c_tenbomon; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        
                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Đề tài</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select name="fk_madetai_id" class="form-control col-md-7 col-xs-12">
                            <?php 
                              
                              foreach($arrDt as $rows):
                             ?>
                            <option <?php if(isset($record->fk_madetai_id)&&$record->fk_madetai_id==$rows->pk_madetai_id): ?> selected <?php endif; ?> value="<?php echo $rows->pk_madetai_id; ?>"><?php echo $rows->c_tendetai; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>

                        
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" >Ngày họp 
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input type="date" name="ngay_hop" value="<?php echo isset($record->ngay_hop)?$record->ngay_hop:""; ?>" required class="form-control col-md-7 col-xs-12"> 
                        </div>

                         <label class="control-label col-md-1 col-sm-1 col-xs-12" >Địa điểm 
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input type="text" name="dia_diem" value="<?php echo isset($record->dia_diem)?$record->dia_diem:""; ?>" required class="form-control col-md-7 col-xs-12"> 
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" >Hội đồng 
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                           <div class="table-responsive">
                              <table class="table table-striped jambo_table ">
                                <thead>
                                   <tr class="headings">
                                      <th class="column-title">Vai Trò  </th>
                                      <th class="column-title">Tên </th>
                                    </tr>
                                  </thead>
                                    <tbody>
                                       <tr class="even pointer">
                                          <td class=" ">2</td>
                                          <td class=" ">3</td>      
                                        </tr>
                                    </tbody>
                                  </table>
                                </div>
                        </div>

                         <label class="control-label col-md-1 col-sm-1 col-xs-12" >Chủ nhiệm đề tài </label>
                          <div class="col-md-5 col-sm-5 col-xs-12">
                            <input class="form-control col-md-7 col-xs-12"> 
                          </div>
                      </div>
              </form>
          <div>	
			</div>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title" >STT </th>
                    <th class="column-title">Nội dung đánh giá </th>
                    <th class="column-title">Điểm tối đa </th>
                    <th class="column-title" >Điểm đánh giá </th>
                    <th class="column-title" >Điểm đánh giá </th>
                    <th class="column-title" >Điểm đánh giá </th>
                  </tr>

                   <tr class="headings"> 
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>Chủ tịch</td>
                      <td>Phản biện 1</td>
                      <td>Phản biện 2</td>
                    </tr>
                </thead>
                <tbody>
                  <?php $tongdiem=0; $index=0;?>
                  <?php $arr= $this->model->get_all("select * from tbl_phieucham where parentId=0 order by pk_khoanmucdiem_id");?>
                <?php foreach($arr as $rows): ?>
                  <?php 
                      if($rows->c_diemtoida>0) $tongdiem+=$rows->c_diemtoida;
                   ?>
                  <tr class="even pointer linePoint">
                    <td class=" "><?=++$index?></td>
                    <td class=" " style="font-weight: bold; width: 250px;"><?php echo $rows->c_tenkhoanmuc; ?></td>
                    <td class=" " style="font-weight: bold;"><?=$rows->c_diemtoida?></td>
                    <td class=" " style="font-weight: bold;">
                      <input type="text" class="diem_chu_tich" value="<?=$rows->pk_khoanmucdiem_id?>">
                    </td>
                    <td class=" " style="font-weight: bold;">
                      <input type="text" class="diem_phan_bien_1" value="<?=$rows->pk_khoanmucdiem_id?>">
                    </td>
                    <td class=" " style="font-weight: bold;">
                      <input type="text" class="diem_phan_bien_2" value="<?=$rows->pk_khoanmucdiem_id?>">
                      <input type="text" name="" class="pk_khoanmucdiem_id" value="<?=$rows->pk_khoanmucdiem_id?>" hidden>
                    </td>
                   
                  </tr>
                  <?php $arr1= $this->model->get_all("select * from tbl_phieucham where parentId={$rows->pk_khoanmucdiem_id} order by pk_khoanmucdiem_id");?>
                  <?php foreach($arr1 as $rows1): ?>
                  <tr class="even pointer linePoint">
                    <td class=" "></td>
                    <td class=" "><?php echo $rows1->c_tenkhoanmuc; ?></td>
                    <td class=" "><?=$rows1->c_diemtoida?></td>
                    <td class=" "><input type="text" class="diem_chu_tich" value="<?=$rows1->pk_khoanmucdiem_id?>"></td>
                    <td class=" "><input type="text" class="diem_phan_bien_1" value="<?=$rows1->pk_khoanmucdiem_id?>"></td>
                    <td class=" ">
                      <input type="text" class="diem_phan_bien_2" value="<?=$rows1->pk_khoanmucdiem_id?>">
                      <input type="text" name="" class="pk_khoanmucdiem_id" value="<?=$rows1->pk_khoanmucdiem_id?>" hidden>
                    </td>
                  </tr>
                <?php endforeach; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
 
            </div>
             <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>"> -->
             	<div class="form-horizontal form-label-left">
                 <div class="form-group">
                     <label class="control-label col-md-1 col-sm-1 col-xs-12" >Ý kiến 
                    </label>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <input type="text" name="y_kien" value="<?php echo isset($record->y_kien)?$record->y_kien:""; ?>" required class="form-control col-md-7 col-xs-12" id="yKien"> 
                    </div>
                   
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" >Ghi chú 
                    </label>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <input type="text" name="ghi_chu" value="<?php echo isset($record->ghi_chu)?$record->ghi_chu:""; ?>" required class="form-control col-md-7 col-xs-12" id="ghiChu"> 
                    </div>
                  </div>

                   <div class="form-group">
                      <label class="control-label col-md-1 col-sm-1 col-xs-12" >Xếp loại <span class="required">*</span>
                      </label>
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <input class="form-control col-md-7 col-xs-12" id="xepLoai" readonly="readonly"> 
                      </div>
                  </div>

                   <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button"><a href="hoidong.php?controller=phieuchamdetai" style="color: white;">Cancel</a></button>
                          <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
                          <button onclick="submitForm(this);" type="" value="Process" class="btn btn-success">Submit</button>
                        </div>
                      </div>
            </div>



          </div>
        </div>
      </div>
    </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
  </div>
</div>
<!-- /page content -->
<script type="text/javascript">
  /*`$(function(){
  	$('#demo-form2').submit(function(e){
  		e.preventDefault();
  		debugger
  		 var listPoint = [];
	    $('.linePoint').each(function(){
	      let diem_chu_tich = $(this).find('.diem_chu_tich').val();
	      let diem_phan_bien_1 = $(this).find('.diem_phan_bien_1').val();
	      let diem_phan_bien_2 = $(this).find('.diem_phan_bien_2').val();
	      let pk_khoanmucdiem_id = $(this).find('.pk_khoanmucdiem_id').val();
	      var item = {
	        pk_khoanmucdiem_id: pk_khoanmucdiem_id?pk_khoanmucdiem_id:0,
	        diem_chu_tich : diem_chu_tich?diem_chu_tich:0,
	        diem_phan_bien_1 : diem_phan_bien_1?diem_phan_bien_1:0,
	        diem_phan_bien_2 : diem_phan_bien_2?diem_phan_bien_2:0
	      };
	      listPoint.push(item);
	    });
	    var objReturn = {
	      ghiChu : $('#ghiChu').val(),
	      yKien : $('#yKien').val(),
	      listPoint : listPoint
	    }
	    console.log(objReturn);
  	});
  });*/
  function submitForm(){
    debugger
    var listPoint = [];
    $('.linePoint').each(function(){
      let diem_chu_tich = $(this).find('.diem_chu_tich').val();
      let diem_phan_bien_1 = $(this).find('.diem_phan_bien_1').val();
      let diem_phan_bien_2 = $(this).find('.diem_phan_bien_2').val();
      let pk_khoanmucdiem_id = $(this).find('.pk_khoanmucdiem_id').val();
      var item = {
        pk_khoanmucdiem_id: pk_khoanmucdiem_id?pk_khoanmucdiem_id:0,
        diem_chu_tich : diem_chu_tich?diem_chu_tich:0,
        diem_phan_bien_1 : diem_phan_bien_1?diem_phan_bien_1:0,
        diem_phan_bien_2 : diem_phan_bien_2?diem_phan_bien_2:0
      };
      listPoint.push(item);
    });
    var objReturn = {
      ghiChu : $('#ghiChu').val(),
      yKien : $('#yKien').val(),
      listPoint : listPoint
    }
    console.log(objReturn);
    $.ajax({
        url: "controller/backend/w_hoidong/controller_add_diem_phieucham.php",
        type: "post",
        contentType : 'application/json; charset=utf-8',
        dataType: "json",
        data: JSON.stringify(objReturn),
        success: function(data){
        	debugger
        	console.log(data);
        }
    });
  }
</script>