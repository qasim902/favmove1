<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ad Add</h3>
            </div>
            <?php echo form_open('ad/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_activated" value="1"  id="is_activated" />
							<label for="is_activated" class="control-label">Is Activated</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_hardlocked" value="1"  id="is_hardlocked" />
							<label for="is_hardlocked" class="control-label">Is Hardlocked</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_random" value="1"  id="is_random" />
							<label for="is_random" class="control-label">Is Random</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="code" class="control-label">Code</label>
						<div class="form-group">
							<input type="text" name="code" value="<?php echo $this->input->post('code'); ?>" class="form-control" id="code" />
							<span class="text-danger"><?php echo form_error('code');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo $this->input->post('title'); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
							<span class="text-danger"><?php echo form_error('type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
							<span class="text-danger"><?php echo form_error('description');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="width" class="control-label">Width</label>
						<div class="form-group">
							<input type="text" name="width" value="<?php echo $this->input->post('width'); ?>" class="form-control" id="width" />
							<span class="text-danger"><?php echo form_error('width');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="height" class="control-label">Height</label>
						<div class="form-group">
							<input type="text" name="height" value="<?php echo $this->input->post('height'); ?>" class="form-control" id="height" />
							<span class="text-danger"><?php echo form_error('height');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="link" class="control-label">Link</label>
						<div class="form-group">
							<input type="text" name="link" value="<?php echo $this->input->post('link'); ?>" class="form-control" id="link" />
							<span class="text-danger"><?php echo form_error('link');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="repository_id" class="control-label">Repository Id</label>
						<div class="form-group">
							<input type="text" name="repository_id" value="<?php echo $this->input->post('repository_id'); ?>" class="form-control" id="repository_id" />
							<span class="text-danger"><?php echo form_error('repository_id');?></span>
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