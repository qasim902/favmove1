<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Edit</h3>
            </div>
			<?php echo form_open('agent/edit/'.$agent['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="package_id" class="control-label">Package</label>
						<div class="form-group">
							<select name="package_id" class="form-control">
								<option value="">select package</option>
								<?php 
								foreach($all_packages as $package)
								{
									$selected = ($package['id'] == $agent['package_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$package['id'].'" '.$selected.'>'.$package['package_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="agency_id" class="control-label">Agency</label>
						<div class="form-group">
							<select name="agency_id" class="form-control">
								<option value="">select agency</option>
								<?php 
								foreach($all_agency as $agency)
								{
									$selected = ($agency['id'] == $agent['agency_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$agency['id'].'" '.$selected.'>'.$agency['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $agent['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $agent['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $agent['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $agent['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="agent_image" class="control-label">Agent Image</label>
						<div class="form-group">
							<input type="text" name="agent_image" value="<?php echo ($this->input->post('agent_image') ? $this->input->post('agent_image') : $agent['agent_image']); ?>" class="form-control" id="agent_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="property_list" class="control-label">Property List</label>
						<div class="form-group">
							<input type="text" name="property_list" value="<?php echo ($this->input->post('property_list') ? $this->input->post('property_list') : $agent['property_list']); ?>" class="form-control" id="property_list" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_logintime" class="control-label">Last Logintime</label>
						<div class="form-group">
							<input type="text" name="last_logintime" value="<?php echo ($this->input->post('last_logintime') ? $this->input->post('last_logintime') : $agent['last_logintime']); ?>" class="has-datetimepicker form-control" id="last_logintime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="added_date" class="control-label">Added Date</label>
						<div class="form-group">
							<input type="text" name="added_date" value="<?php echo ($this->input->post('added_date') ? $this->input->post('added_date') : $agent['added_date']); ?>" class="form-control" id="added_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $agent['address']); ?>" class="form-control" id="address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="activated" class="control-label">Activated</label>
						<div class="form-group">
							<input type="text" name="activated" value="<?php echo ($this->input->post('activated') ? $this->input->post('activated') : $agent['activated']); ?>" class="form-control" id="activated" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_lastpayment" class="control-label">Package Lastpayment</label>
						<div class="form-group">
							<input type="text" name="package_lastpayment" value="<?php echo ($this->input->post('package_lastpayment') ? $this->input->post('package_lastpayment') : $agent['package_lastpayment']); ?>" class="has-datetimepicker form-control" id="package_lastpayment" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_editip" class="control-label">Last Editip</label>
						<div class="form-group">
							<input type="text" name="last_editip" value="<?php echo ($this->input->post('last_editip') ? $this->input->post('last_editip') : $agent['last_editip']); ?>" class="form-control" id="last_editip" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="payment_details" class="control-label">Payment Details</label>
						<div class="form-group">
							<input type="text" name="payment_details" value="<?php echo ($this->input->post('payment_details') ? $this->input->post('payment_details') : $agent['payment_details']); ?>" class="form-control" id="payment_details" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $agent['description']); ?></textarea>
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