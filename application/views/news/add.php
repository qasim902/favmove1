<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Add News</h3>
			</div>
			<?php echo form_open_multipart('news/add'); ?>
			<div class="box-body">
			<?php
if($this->session->flashdata('successsub'))
{
    echo "<br>
    <div class='col-md-offset-3 col-md-6'>
    <div  id='alert-pop' class='text-center alert alert-success'>";
    
echo $this->session->flashdata('successsub');
  echo "</div> 
  </div>";
echo "<script>
    window.location.hash = '#alert-pop';
    
</script>";
}
?>
			</div>
			<div class="box-body">

				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<div class="callus clearfix border_radius submit_property">
						<div class="row clearfix">
							<div class="col-md-6">
								<label for="title" class="control-label">
									<span class="text-danger">*</span>Title</label>
								<div class="form-group">
									<input type="text" name="title" placeholder="Title" autofocus value="<?php echo $this->input->post('title'); ?>" class="form-control" id="title" />
									<span class="text-danger">
										<?php echo form_error('title');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="author" class="control-label">
									<span class="text-danger">*</span>Author</label>
								<div class="form-group">
									<input type="text" name="author" placeholder="Author" autofocus  value="<?php echo $this->input->post('author'); ?>" class="form-control" id="author" />
									<span class="text-danger">
										<?php echo form_error('author');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="added_on" class="control-label">
									<span class="text-danger">*</span>Added On</label>
									<div class="form-group">
											<!-- DANISH isko carbon->now sy time pick krwao -->
										<input type="text" name="added_on" placeholder="Date should be automatically picked" autofocus value="<?php echo $this->input->post('added_on'); ?>" class="has-datetimepicker form-control"  id="added_on"  />
										
										<span class="text-danger">
											<?php echo form_error('added_on');?>
										</span>
									</div>
							</div>
							<div class="col-md-6">
								<label for="img_path" class="control-label">
									<span class="text-danger">*</span> Upload Image</label>
								<div class="form-group">
									<div class="input-group agncy_btn">
										<label class="input-group-btn">
											<span class="btn btn-primary">
												Upload Image&hellip; <input type="file" name="user_file" value="" class="form-control" id="img_path" style="display: block;" />
											</span>
										</label>
										<!-- <input name="img_path" type="text" value="" class="form-control"  readonly> -->
									</div>
									<span class="text-danger">
										<?php echo form_error('img_path');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="detail" class="control-label">
									<span class="text-danger">*</span>Detail</label>
								<div class="form-group">
									<textarea name="detail" placeholder="Add your Details" autofocus class="form-control" id="detail"><?php echo $this->input->post('detail'); ?></textarea>
									<span class="text-danger">
										<?php echo form_error('detail');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="tags" class="control-label">
									<span class="text-danger">*</span>Tags</label>
								<div class="form-group">
									<textarea  placeholder="eg. tag, demo, uk, house" autofocus  name="tags" class="form-control" id="tags"><?php echo $this->input->post('tags'); ?></textarea>
									<span class="text-danger">
										<?php echo form_error('tags');?>
									</span>
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