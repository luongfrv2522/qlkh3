
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Hội đồng nghiệm thu</h3>
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
                    
                    <th class="column-title">Tên hội đồng </th>
                    <th class="column-title">Đề tài </th>
                    <th class="column-title">Bộ môn </th>
                    <th class="column-title">Thành viên hội đồng </th>
                    
                    
                    
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($arr as $rows): ?>
                  <tr  class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    
                    <td class=" "><?php echo $rows->c_tenhoidong; ?></td>
                     <td class=" ">
                      <?php 
                        $detai = $this->model->get_a_record("select c_tendetai from tbl_detai where pk_madetai_id={$rows->fk_madetai_id}");
                        echo isset($detai->c_tendetai)?$detai->c_tendetai:"";
                      ?>
                    </td>
                    <?php $bomon = $this->model->get_a_record("select * from tbl_detai dt join tbl_user u on u.pk_user_id = dt.fk_user_id join tbl_bomon bm on bm.pk_mabomon_id=u.fk_mabomon_id where dt.pk_madetai_id =".$rows->fk_madetai_id); ?>
                    <td class=""><?=$bomon->c_tenbomon?></td>

                    <td class=" ">
                      <button type="button" class="btn btn-success btn-xs">
                      <a href="giaovien.php?controller=thongtinhoidongnghiemthu&IdHoiDong=<?=$rows->pk_hoidongnghiemthu_id?>&TenHoiDong=<?=$rows->c_tenhoidong?>&IdDeTai=<?=$rows->fk_madetai_id?>"style="color: white;">Thành viên hội đồng</a>
                    </td>
                  </button>
 
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>


            <div>
        <script type="text/javascript">
          function DeleteMulti(){
            if(window.confirm('Are you sure?')){
              var listId = "";
              $('tr.selected').each(function(){
                listId += $(this).attr('id')+",";
              });
              listId = listId.substr(0,listId.length - 1);
              //alert(listId);
              var listId = "";
              $('tr.selected').each(function(){
                listId += $(this).attr('id')+",";
              });
              listId = listId.substr(0,listId.length - 1);
              //alert(listId);
              $('#btn_mutiDelete').attr('href',$('#btn_mutiDelete').attr('href')+","+ listId);
              
            }
          }
        </script>
				
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