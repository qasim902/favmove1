<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">News Edit</h3>
			</div>
			
			<?php echo form_open('news/edit/'.$news['id']); ?>
			<div class="box-body">
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<div class="callus clearfix border_radius submit_property">
				
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $news['title']); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="author" class="control-label"><span class="text-danger">*</span>Author</label>
						<div class="form-group">
							<input type="text" name="author" value="<?php echo ($this->input->post('author') ? $this->input->post('author') : $news['author']); ?>" class="form-control" id="author" />
							<span class="text-danger"><?php echo form_error('author');?></span>
						</div>
					</div>
					<div class="col-lg-12">
						<label for="img_path" class="control-label"><span class="text-danger">*</span>Edit Image</label>
						<div class="form-group">
							<div class="input-group agncy_btn">
								<label class="input-group-btn">
									<span class="btn btn-primary">
										Upload Image&hellip; <input type="file" name="img_path" value="" class="form-control" id="upload_image" style="display: none;" />
									</span>
								</label>
								<input id="upload_image_sho" name="img_path" type="text" value="<?php echo ($this->input->post('image_path') ? $this->input->post('image_path') : $news['image_path']); ?>" class="form-control"  readonly>
							</div>
							<span class="text-danger">
								<?php echo form_error('img_path');?>
							</span>
						</div>
					</div>
					<div class="col-lg-12">
						<label for="detail" class="control-label"><span class="text-danger">*</span>Detail</label>
						<div class="form-group">
							<textarea name="detail" class="form-control" id="detail"><?php echo ($this->input->post('detail') ? $this->input->post('detail') : $news['detail']); ?></textarea>
							<span class="text-danger"><?php echo form_error('detail');?></span>
						</div>
					</div>
					
				</div>
				<div class="box-footer">
					<div class="col-md-6 col-md-offset-3">
						<button type="submit" class="btn btn-block btn-success">
							<i class="fa fa-check"></i> Save
						</button>
					</div>
				</div>
				</div>
				</div>
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-4"></div>
			</div>
							
			<?php echo form_close(); ?>
		</div>
    </div>
</div>