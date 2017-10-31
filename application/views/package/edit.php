<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Package Edit</h3>
			</div>
			<?php echo form_open('package/edit/'.$package['packageid']); ?>
			<div class="box-body">
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<div class="callus clearfix border_radius submit_property">

						<div class="row clearfix">
							<!-- <div class="col-md-6">
								<div class="form-group">
									<input type="checkbox" name="show_private_listings" value="1" <?php echo ($package[ 'show_private_listings']==1 ?
									 'checked="checked"' : ''); ?> id='show_private_listings' />
									<label for="show_private_listings" class="control-label">Show Private Listings</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="checkbox" name="auto_activation" value="1" <?php echo ($package[ 'auto_activation']==1 ? 'checked="checked"'
									 : ''); ?> id='auto_activation' />
									<label for="auto_activation" class="control-label">Auto Activation</label>
								</div>
							</div> -->
							<!--<div class="col-md-6">
								<label for="date_modified" class="control-label">Date Modified</label>
								<div class="form-group">
									<input type="text" name="date_modified" value="<?php echo ($this->input->post('date_modified') ? $this->input->post('date_modified') : $package['date_modified']); ?>"
									 class="has-datetimepicker form-control" id="date_modified" />
								</div>
							</div> -->
							<div class="col-md-6">
								<label for="package_name" class="control-label">Package Name</label>
								<div class="form-group">
									<input type="text" name="package_name" value="<?php echo ($this->input->post('package_name') ? $this->input->post('package_name') : $package['package_name']); ?>"
									 class="form-control" id="package_name" />
									<span class="text-danger">
										<?php echo form_error('package_name');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="package_price" class="control-label">Package Price</label>
								<div class="form-group">
									<input type="text" name="package_price" value="<?php echo ($this->input->post('package_price') ? $this->input->post('package_price') : $package['package_price']); ?>"
									 class="form-control" id="package_price" />
									<span class="text-danger">
										<?php echo form_error('package_price');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="num_listing_limit" class="control-label">Listing Limit</label>
								<div class="form-group">
									<input type="text" name="num_listing_limit" value="<?php echo ($this->input->post('num_listing_limit') ? $this->input->post('num_listing_limit') : $package['num_listing_limit']); ?>"
									 class="form-control" id="num_listing_limit" />
									<span class="text-danger">
										<?php echo form_error('num_listing_limit');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="num_featured_limit" class="control-label">Featured allowed</label>
								<div class="form-group">
									<input type="text" name="num_featured_limit" value="<?php echo ($this->input->post('num_featured_limit') ? $this->input->post('num_featured_limit') : $package['num_featured_limit']); ?>"
										class="form-control" id="num_featured_limit" />
									<span class="text-danger">
										<?php echo form_error('num_featured_limit');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="user_type" class="control-label">User Type</label>
									<div class="single-query">
										<div class="intro">
											<select name="user_type" class="form-control">
												<option value="<?php echo ($this->input->post('user_type') ? $this->input->post('user_type') : $package['user_type']); ?>" selected disabled><?php echo ($this->input->post('user_type') ? $this->input->post('user_type') : $package['user_type']); ?></option>
												<option value="agent">Agent</option>
												<option value="user">User</option>
											</select>
										</div>
										<span class="text-danger">
											<?php echo form_error('user_type');?>
										</span>
									</div>
									<!-- <input type="text" name="user_type" value="<?php echo ($this->input->post('user_type') ? $this->input->post('user_type') : $package['user_type']); ?>"
									 class="form-control" id="user_type" /> -->
							</div>
							<div class="col-md-6">
								<label for="package_days" class="control-label">Package Duration</label>
								<div class="form-group">
									<input type="text" name="package_days" value="<?php echo ($this->input->post('package_days') ? $this->input->post('package_days') : $package['package_days']); ?>"
									 class="form-control" id="package_days" />
									<span class="text-danger">
										<?php echo form_error('package_days');?>
									</span>
								</div>
							</div> 
							<div  class="col-lg-6" >
								<label for="add_locations" class="control-label">Edit Locations</label>
								<div class="form-group">
									<input type="text" name="add_locations" placeholder="Enter Locations" value="" class="form-control" id="tags-input" data-role="tagsinput"  />
								</div>
							</div>
							<!-- <div class="col-md-6">
								<label for="currency_code" class="control-label">Currency Code</label>
								<div class="form-group">
									<input type="text" name="currency_code" value="<?php echo ($this->input->post('currency_code') ? $this->input->post('currency_code') : $package['currency_code']); ?>"
									 class="form-control" id="currency_code" />
									<span class="text-danger">
										<?php echo form_error('currency_code');?>
									</span>
								</div>
							</div> -->
							
							
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