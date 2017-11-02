<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Add a Package</h3>
			</div>
			<?php echo form_error();?>
			<form action="pkg_add" method="POST">
			<div class="box-body">
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<div class="callus clearfix border_radius submit_property">
						<div class="row clearfix">

								<?php
								if($this->session->flashdata('successsub'))
								{
									echo "<br>
									<div class='col-md-offset-3 col-md-6'>
									<div  id='alert-pop' class='text-center alert alert-warning'>";
									
								echo $this->session->flashdata('successsub');
								  echo "</div> 
								  </div>";
								
								}
								?>
							<!-- <div class="col-md-6">
						<label for="date_modified" class="control-label">Date Modified</label>
						<div class="form-group">
							<input type="text" name="date_modified" placeholder="Date should be automatically picked" value="<?php echo $this->input->post('date_modified'); ?>" class="has-datetimepicker form-control" id="date_modified" />
						</div>
					</div> -->
							<div class="col-md-6">
								<label for="package_name" class="control-label">Package Name</label>
								<div class="form-group">
									<input type="text" name="package_name" placeholder="Enter Name" autofocus value="<?php echo $this->input->post('package_name'); ?>"
									 class="form-control" id="package_name" />
									<span class="text-danger">
										<?php echo form_error('package_name');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="package_price" class="control-label">Package Price</label>
								<div class="form-group">
									<input type="text" name="package_price" placeholder="Enter Price" autofocus value="<?php echo $this->input->post('package_price'); ?>"
									 class="form-control" id="package_price" />
									<span class="text-danger">
										<?php echo form_error('package_price');?>
									</span>
								</div>
							</div>
							
						
							<div class="col-md-6">
								<label for="num_listing_limit" class="control-label">Listing Limit</label>
								<div class="form-group">
									<input type="text" placeholder="Listing" name="num_listing_limit" value="<?php echo $this->input->post('num_listing_limit'); ?>"
									 class="form-control" id="num_listing_limit" />
									<span class="text-danger">
										<?php echo form_error('num_listing_limit');?>
									</span>
								</div>
							</div>
							<!--					<div class="col-md-6">-->
							<!--						<label for="currency_code" class="control-label">Currency Code</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="currency_code" value="-->
							<?php //echo $this->input->post('currency_code'); ?>
							<!--" class="form-control" id="currency_code" />-->
							<!--							<span class="text-danger">-->
							<?php //echo form_error('currency_code');?>
							<!--</span>-->
							<!--						</div>-->
							<!--					</div>-->

							<!--					<div class="col-md-6">-->
							<!--						<label for="num_images_limit" class="control-label">Num Images Limit</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="num_images_limit" value="-->
							<?php //echo $this->input->post('num_images_limit'); ?>
							<!--" class="form-control" id="num_images_limit" />-->
							<!--							<span class="text-danger">-->
							<?php //echo form_error('num_images_limit');?>
							<!--</span>-->
							<!--						</div>-->
							<!--					</div>-->
							<!--					<div class="col-md-6">-->
							<!--						<label for="num_amenities_limit" class="control-label">Num Amenities Limit</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="num_amenities_limit" value="-->
							<?php //echo $this->input->post('num_amenities_limit'); ?>
							<!--" class="form-control" id="num_amenities_limit" />-->
							<!--							<span class="text-danger">-->
							<?php //echo form_error('num_amenities_limit');?>
							<!--</span>-->
							<!--						</div>-->
							<!--					</div>-->
							<div class="col-md-6">
								<label for="num_featured_limit" class="control-label">Featured allowed</label>
								<div class="form-group">
									<input type="number" min="0" name="num_featured_limit" value="<?php echo $this->input->post('num_featured_limit'); ?>" class="form-control"
									 id="num_featured_limit" />
									<span class="text-danger">
										<?php echo form_error('num_featured_limit');?>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="user_type" class="control-label">User Type</label>
								<div class="form-group">
									<div class="single-query">
										<div class="intro">
											<select name="user_type" class="form-control">
												<option value="" selected="" disabled="">Select User Type</option>
												<option value="agent">Agent</option>
												<option value="user">User</option>
											</select>
										</div>
										<span class="text-danger">
											<?php echo form_error('user_type');?>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-6">
									<label for="package_days" class="control-label">Package Duration</label>
	
									<!-- <input type="text" name="package_days" placeholder="Make me dropdown rizwan" value="<?php echo $this->input->post('package_days'); ?>" class="form-control" id="package_days" /> -->
									<div class="form-group">
									<div class="single-query">
										<div class="intro">
											<select id="packges_d" name="package_durations" class="form-control">
												<option value="">Select package</option>
												<option value="days">Days</option>
												<option value="weekly">Weekly</option>
												<option value="monthly">Monthly</option>
												<option value="yearly">Yearly</option>
												<!-- <?php 
											foreach($package_days as $package)
											{
												$selected = ($package['id'] == $this->input->post('package_id')) ? ' selected="selected"' : "";
	
												echo '<option value="'.$package['id'].'" '.$selected.'>'.$package['package_name'].'</option>';
											} 
										?> -->
											</select>
										</div>
										<span class="text-danger">
											<?php echo form_error('package_days');?>
										</span>
									</div>
									</div>

								</div>
								
							<!--					<div class="col-md-6">-->
							<!--						<label for="forarea" class="control-label"><span class="text-danger">*</span>Forarea</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="forarea" value="-->
							<?php //echo $this->input->post('forarea'); ?>
							<!--" class="form-control" id="forarea" />-->
							<!--							<span class="text-danger">-->
							<?php //echo form_error('forarea');?>
							<!--</span>-->
							<!--						</div>-->
							<!--					</div>-->

							<!-- <div class="col-md-6 top30">
								<div class="form-group top10">
									<label for="show_private_listings" class="checkbox-inline">
										<input name="show_private_listings" type="checkbox" value="1" id="show_private_listings">Show Private Listings</label>
									<label for="auto_activation" class="checkbox-inline">
										<input name="auto_activation" type="checkbox" value="1" id="auto_activation">Auto Re-activation</label>
								</div>
							</div> -->
							<div id="daily_pac" class="col-md-6" style="display:none">
								<label for="date_created" class="control-label">Days Package</label>
								<div class="form-group">
									<input type="text" name="package_days" placeholder="Enter Days" value="" class="form-control" id="package_days" />
								</div>
							</div>
							
							<div class="col-md-6 top10">
								<div class="form-group " id="mar_chkbx">
									<label for="set_location" class="checkbox-inline">
									<input name="set_location" type="checkbox" value="1" id="set_location">Set Location</label>
								</div>
							</div>
							<div id="loc_form" class="col-lg-6" >
								<label for="add_locations" class="control-label">Add Locations</label>
								<div class="form-group">
									<input type="text" name="add_locations" placeholder="Enter Locations" value="" class="form-control" id="tags-input" data-role="tagsinput"  />
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

									</form>
		</div>
	</div>
</div>