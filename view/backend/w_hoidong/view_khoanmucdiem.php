  
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
          <div class="x_title">
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">

                      <div class="form-group">
                         <label class="control-label col-md-1 col-sm-1 col-xs-12" >Đề tài <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"> 
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-12" >Bộ môn <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"> 
                        </div>
                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-1 col-sm-1 col-xs-12" >Hội đồng <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12"> 
                        </div>

                         <label class="control-label col-md-1 col-sm-1 col-xs-12" >Chủ nhiệm đề tài <span class="required">*</span>
                        </label>
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
                    <th>
                      <input type="checkbox" id="check-all" class="flat">
                    </th>
                   
                    <th class="column-title">STT </th>
                    <th class="column-title">Nội dung đánh giá </th>
                    <th class="column-title">Điểm tối đa </th>
                    <th class="column-title">Điểm đánh giá </th>
               
                    
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $tongdiem=0;$tongdanhgia=0; ?>
                <?php foreach($arr as $rows): ?>
                  <?php 
                      if($rows->c_diemtoida>0) $tongdiem+=$rows->c_diemtoida;
                      if($rows->c_diemdanhgia>0) $tongdanhgia+=$rows->c_diemdanhgia;
                   ?>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                   
                    <td class=" "></td>
                    <td class=" " style="font-weight: bold;"><?php echo $rows->c_tenkhoanmuc; ?></td>
                    <td class=" " style="font-weight: bold;"><?php echo $rows->c_diemtoida; ?></td>
                    <td class=" " style="font-weight: bold;"><?php echo $rows->c_diemdanhgia; ?></td>
                   
                  </tr>
                  <?php $arr1= $this->model->get_all("select * from tbl_phieucham where parentId={$rows->pk_khoanmucdiem_id} order by pk_khoanmucdiem_id  limit $from,$record_per_page");?>
                  <?php foreach($arr1 as $rows1): ?>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
               
                    <td class=" "></td>
                    <td class=" "><?php echo $rows1->c_tenkhoanmuc; ?></td>
                    <td class=" "><?php echo $rows1->c_diemtoida; ?></td>
                    <td class=" "><?php echo $rows1->c_diemdanhgia; ?></td>
                  
                  </tr>
                <?php endforeach; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
 
            </div>
             <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
                 <div class="form-group">
                     <label class="control-label col-md-1 col-sm-1 col-xs-12" >Ý kiến và kiến nghị khác 
                    </label>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <textarea class="form-control" rows="2"></textarea>
                    </div>
                   
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" >Ghi chú 
                    </label>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <textarea class="form-control" rows="2"></textarea>
                    </div>

                  </div>

                   <div class="form-group">
                      <label class="control-label col-md-1 col-sm-1 col-xs-12" >Xếp loại <span class="required">*</span>
                      </label>
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <input class="form-control col-md-7 col-xs-12"> 
                      </div>
                  </div>

                   <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button"><a href="hoidong.php?controller=phieuchamdetai" style="color: white;">Cancel</a></button>
                          <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
                          <button type="submit" value="Process" class="btn btn-success">Submit</button>
                        </div>
                      </div>
            </form>



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