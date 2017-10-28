<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Package Add</h3>
            </div>
            <?php echo form_open('package/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="show_private_listings" value="1"  id="show_private_listings" />
							<label for="show_private_listings" class="control-label">Show Private Listings</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="auto_activation" value="1"  id="auto_activation" />
							<label for="auto_activation" class="control-label">Auto Activation</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo $this->input->post('date_created'); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_modified" class="control-label">Date Modified</label>
						<div class="form-group">
							<input type="text" name="date_modified" value="<?php echo $this->input->post('date_modified'); ?>" class="has-datetimepicker form-control" id="date_modified" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_name" class="control-label">Package Name</label>
						<div class="form-group">
							<input type="text" name="package_name" value="<?php echo $this->input->post('package_name'); ?>" class="form-control" id="package_name" />
							<span class="text-danger"><?php echo form_error('package_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_price" class="control-label">Package Price</label>
						<div class="form-group">
							<input type="text" name="package_price" value="<?php echo $this->input->post('package_price'); ?>" class="form-control" id="package_price" />
							<span class="text-danger"><?php echo form_error('package_price');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_days" class="control-label">Package Days</label>
						<div class="form-group">
							<input type="text" name="package_days" value="<?php echo $this->input->post('package_days'); ?>" class="form-control" id="package_days" />
							<span class="text-danger"><?php echo form_error('package_days');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_listing_limit" class="control-label">Num Listing Limit</label>
						<div class="form-group">
							<input type="text" name="num_listing_limit" value="<?php echo $this->input->post('num_listing_limit'); ?>" class="form-control" id="num_listing_limit" />
							<span class="text-danger"><?php echo form_error('num_listing_limit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="currency_code" class="control-label">Currency Code</label>
						<div class="form-group">
							<input type="text" name="currency_code" value="<?php echo $this->input->post('currency_code'); ?>" class="form-control" id="currency_code" />
							<span class="text-danger"><?php echo form_error('currency_code');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_type" class="control-label">User Type</label>
						<div class="form-group">
							<input type="text" name="user_type" value="<?php echo $this->input->post('user_type'); ?>" class="form-control" id="user_type" />
							<span class="text-danger"><?php echo form_error('user_type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_images_limit" class="control-label">Num Images Limit</label>
						<div class="form-group">
							<input type="text" name="num_images_limit" value="<?php echo $this->input->post('num_images_limit'); ?>" class="form-control" id="num_images_limit" />
							<span class="text-danger"><?php echo form_error('num_images_limit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_amenities_limit" class="control-label">Num Amenities Limit</label>
						<div class="form-group">
							<input type="text" name="num_amenities_limit" value="<?php echo $this->input->post('num_amenities_limit'); ?>" class="form-control" id="num_amenities_limit" />
							<span class="text-danger"><?php echo form_error('num_amenities_limit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_featured_limit" class="control-label">Num Featured Limit</label>
						<div class="form-group">
							<input type="text" name="num_featured_limit" value="<?php echo $this->input->post('num_featured_limit'); ?>" class="form-control" id="num_featured_limit" />
							<span class="text-danger"><?php echo form_error('num_featured_limit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="forarea" class="control-label"><span class="text-danger">*</span>Forarea</label>
						<div class="form-group">
							<input type="text" name="forarea" value="<?php echo $this->input->post('forarea'); ?>" class="form-control" id="forarea" />
							<span class="text-danger"><?php echo form_error('forarea');?></span>
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