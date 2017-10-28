<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">News Edit</h3>
            </div>
			<?php echo form_open('news/edit/'.$news['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $news['title']); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="added_on" class="control-label"><span class="text-danger">*</span>Added On</label>
						<div class="form-group">
							<input type="text" name="added_on" value="<?php echo ($this->input->post('added_on') ? $this->input->post('added_on') : $news['added_on']); ?>" class="form-control" id="added_on" />
							<span class="text-danger"><?php echo form_error('added_on');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="author" class="control-label"><span class="text-danger">*</span>Author</label>
						<div class="form-group">
							<input type="text" name="author" value="<?php echo ($this->input->post('author') ? $this->input->post('author') : $news['author']); ?>" class="form-control" id="author" />
							<span class="text-danger"><?php echo form_error('author');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment_id" class="control-label"><span class="text-danger">*</span>Comment Id</label>
						<div class="form-group">
							<input type="text" name="comment_id" value="<?php echo ($this->input->post('comment_id') ? $this->input->post('comment_id') : $news['comment_id']); ?>" class="form-control" id="comment_id" />
							<span class="text-danger"><?php echo form_error('comment_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="excerpt" class="control-label"><span class="text-danger">*</span>Excerpt</label>
						<div class="form-group">
							<textarea name="excerpt" class="form-control" id="excerpt"><?php echo ($this->input->post('excerpt') ? $this->input->post('excerpt') : $news['excerpt']); ?></textarea>
							<span class="text-danger"><?php echo form_error('excerpt');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="detail" class="control-label"><span class="text-danger">*</span>Detail</label>
						<div class="form-group">
							<textarea name="detail" class="form-control" id="detail"><?php echo ($this->input->post('detail') ? $this->input->post('detail') : $news['detail']); ?></textarea>
							<span class="text-danger"><?php echo form_error('detail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tags" class="control-label"><span class="text-danger">*</span>Tags</label>
						<div class="form-group">
							<textarea name="tags" class="form-control" id="tags"><?php echo ($this->input->post('tags') ? $this->input->post('tags') : $news['tags']); ?></textarea>
							<span class="text-danger"><?php echo form_error('tags');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="img_path" class="control-label"><span class="text-danger">*</span>Img Path</label>
						<div class="form-group">
							<textarea name="img_path" class="form-control" id="img_path"><?php echo ($this->input->post('img_path') ? $this->input->post('img_path') : $news['img_path']); ?></textarea>
							<span class="text-danger"><?php echo form_error('img_path');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>