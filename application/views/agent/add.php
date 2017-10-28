<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Add Agent</h3>
			</div>
			<?php echo form_open('agent/add'); ?>
			<div class="box-body">
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<div class="callus clearfix border_radius submit_property">
						<div class="row clearfix">
							
							<div class="col-md-6">
								<label for="name" class="control-label">Name</label>
								<div class="form-group">
									<input type="text"  placeholder="Enter Name" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="username" class="control-label">Username</label>
								<div class="form-group">
									<input type="text" name="username"  placeholder="Enter Username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username"
									/>
								</div>
							</div>
							<div class="col-md-6">
								<label for="email" class="control-label">Email</label>
								<div class="form-group">
									<input type="text" name="email" placeholder="Email Id" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="password" class="control-label">Password</label>
								<div class="form-group">
									<input type="password" placeholder="Enter Password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password"
									/>
								</div>
							</div>
							<div class="col-md-6">
								<label for="contact" class="control-label">Contact</label>
								<div class="form-group">
									<input type="tel" placeholder="Contact Number"  name="contact" value="<?php echo $this->input->post('email'); ?>" class="form-control" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="agent_image" class="control-label">Agent Image</label>
								<div class="form-group">
									<div class="input-group agncy_btn">
										<label class="input-group-btn">
											<span class="btn btn-primary">
												Upload Logo&hellip; <input type="file" name="agent_image" value="<?php echo $this->input->post('agent_image'); ?>" class="form-control" id="agent_image" style="display: none;" />
											</span>
										</label>
										<input  type="text" value="<?php echo $this->input->post('agent_image'); ?>" class="form-control" readonly>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<label for="package_id" class="control-label">Package</label>
								<div class="single-query">
									<div class="intro">
										<select name="package_id" class="form-control">
											<option value="">Select package</option>
											<?php 
									foreach($all_packages as $package)
									{
										$selected = ($package['id'] == $this->input->post('package_id')) ? ' selected="selected"' : "";

										echo '<option value="'.$package['id'].'" '.$selected.'>'.$package['package_name'].'</option>';
									} 
									?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<label for="agency_id" class="control-label">Agency</label>
								<div class="single-query">
									<div class="intro">
										<select name="agency_id" class="form-control">
											<option value="">Select agency</option>
											<?php 
									foreach($all_agency as $agency)
									{
										$selected = ($agency['id'] == $this->input->post('agency_id')) ? ' selected="selected"' : "";

										echo '<option value="'.$agency['id'].'" '.$selected.'>'.$agency['name'].'</option>';
									} 
									?>
										</select>
									</div>
								</div>
							</div>
							
							<!--					<div class="col-md-6">-->
							<!--						<label for="property_list" class="control-label">Property List</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="property_list" value="-->
							<?php //echo $this->input->post('property_list'); ?>
							<!--" class="form-control" id="property_list" />-->
							<!--						</div>-->
							<!-- 					</div>-->
							<!--					<div class="col-md-6">-->
							<!--						<label for="last_logintime" class="control-label">Last Logintime</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="last_logintime" value="-->
							<?php //echo $this->input->post('last_logintime'); ?>
							<!--" class="has-datetimepicker form-control" id="last_logintime" />-->
							<!--						</div>-->
							<!--					</div>-->

							<div class="col-lg-12">
								<label for="address" class="control-label">Address</label>
								<div class="form-group">
									<textarea type="text" placeholder="Address" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<!-- <label for="activated" class="control-label">Activated</label> -->
								<div class="form-group">
									<div class="checkbox">
										<label><input type="checkbox" value="<?php echo $this->input->post('activated'); ?>" id="activated">Activated</label>
									</div>
								</div>
							</div>
							<!--					<div class="col-md-6">-->
							<!--						<label for="package_lastpayment" class="control-label">Package Lastpayment</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="package_lastpayment" value="-->
							<?php //echo $this->input->post('package_lastpayment'); ?>
							<!--" class="has-datetimepicker form-control" id="package_lastpayment" />-->
							<!--						</div>-->
							<!--					</div>-->
							<!--					<div class="col-md-6">-->
							<!--						<label for="last_editip" class="control-label">Last Editip</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="last_editip" value="-->
							<?php //echo $this->input->post('last_editip'); ?>
							<!--" class="form-control" id="last_editip" />-->
							<!--						</div>-->
							<!--					</div>-->
							<!--					<div class="col-md-6">-->
							<!--						<label for="payment_details" class="control-label">Payment Details</label>-->
							<!--						<div class="form-group">-->
							<!--							<input type="text" name="payment_details" value="-->
							<?php //echo $this->input->post('payment_details'); ?>
							<!--" class="form-control" id="payment_details" />-->
							<!--						</div>-->
							<!--					</div>-->
							<!--					<div class="col-md-6">-->
							<!--						<label for="description" class="control-label">Description</label>-->
							<!--						<div class="form-group">-->
							<!--							<textarea name="description" class="form-control" id="description">-->
							<?php //echo $this->input->post('description'); ?>
							<!--</textarea>-->
							<!--						</div>-->
							<!--					</div>-->
							<!--				</div>-->
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

				<?php echo form_close(); ?>
			</div>
		</div>
	</div>