<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit news</div>
			<div class="card-body">
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tiêu đề</div>
							<div class="col-md-10">
<input type="text" name="c_name" value="<?php echo isset($record->c_name)?$record->c_name:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Danh mục</div>
							<div class="col-md-10">
<select name="fk_category_news_id">
	<?php 
		$category = $this->model->get_all("select * from tbl_category_news order by pk_category_news_id desc");
		foreach($category as $rows):
	 ?>
	<option <?php if(isset($record->fk_category_news_id)&&$record->fk_category_news_id==$rows->pk_category_news_id): ?> selected <?php endif; ?> value="<?php echo $rows->pk_category_news_id; ?>"><?php echo $rows->c_name; ?></option>
	<?php endforeach; ?>
</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới thiệu</div>
							<div class="col-md-10">
								<textarea name="c_description" id="c_description">
									<?php echo isset($record->c_description)?$record->c_description:''; ?>
								</textarea>
				<script type="text/javascript">
					ClassicEditor
	                .create(document.querySelector( '#c_description' ));
				</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Chi tiết</div>
							<div class="col-md-10">
								<textarea name="c_content" id="c_content">
									<?php echo isset($record->c_content)?$record->c_content:''; ?>
								</textarea>
				<script type="text/javascript">
					ClassicEditor
	                .create(document.querySelector( '#c_content' ));
				</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
	<input type="checkbox" <?php if(isset($record->c_hotnews)&&$record->c_hotnews==1): ?> checked <?php endif; ?> name="c_hotnews"> Tin nổi bật
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh</div>
							<div class="col-md-10">
							<input type="file" name="c_img">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>