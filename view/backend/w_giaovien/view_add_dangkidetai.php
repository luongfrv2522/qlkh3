        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Đăng kí đề tài</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên đề tài <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<input type="text" name="c_tendetai" value="<?php echo isset($record->c_tendetai)?$record->c_tendetai:""; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung nghiên cứu 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="c_noidungnghiencuu" value="<?php echo isset($record->c_noidungnghiencuu)?$record->c_noidungnghiencuu:""; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kinh phí 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="c_kinhphi" value="<?php echo isset($record->c_kinhphi)?$record->c_kinhphi:""; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ ngày 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="c_tungay" value="<?php echo isset($record->c_tungay)?$record->c_tungay:""; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Đến ngày 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="c_denngay" value="<?php echo isset($record->c_denngay)?$record->c_denngay:""; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">File mô tả 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="file_mo_ta" value="<?php echo isset($record->file_mo_ta)?$record->file_mo_ta:""; ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <td class=" last">
                           <button type="button" value="<?php echo isset($record->c_trangthai)?$record->c_trangthai==0:""; ?>" class="btn btn-default btn-xs">Chờ phê duyệt</button>
                          </td>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button"><a href="giaovien.php?controller=dangkidetai" style="color: white;">Cancel</a></button>
						              <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
                          <button type="submit" value="Process" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            </div>
            </div>
          </div>
        </div>
        <!-- /page content -->



