<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Add</h3>
            </div>
            <?php echo form_open('agent/add'); ?>
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
									$selected = ($package['id'] == $this->input->post('package_id')) ? ' selected="selected"' : "";

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
									$selected = ($agency['id'] == $this->input->post('agency_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$agency['id'].'" '.$selected.'>'.$agency['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="agent_image" class="control-label">Agent Image</label>
						<div class="form-group">
							<input type="text" name="agent_image" value="<?php echo $this->input->post('agent_image'); ?>" class="form-control" id="agent_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="property_list" class="control-label">Property List</label>
						<div class="form-group">
							<input type="text" name="property_list" value="<?php echo $this->input->post('property_list'); ?>" class="form-control" id="property_list" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_logintime" class="control-label">Last Logintime</label>
						<div class="form-group">
							<input type="text" name="last_logintime" value="<?php echo $this->input->post('last_logintime'); ?>" class="has-datetimepicker form-control" id="last_logintime" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="activated" class="control-label">Activated</label>
						<div class="form-group">
							<input type="text" name="activated" value="<?php echo $this->input->post('activated'); ?>" class="form-control" id="activated" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_lastpayment" class="control-label">Package Lastpayment</label>
						<div class="form-group">
							<input type="text" name="package_lastpayment" value="<?php echo $this->input->post('package_lastpayment'); ?>" class="has-datetimepicker form-control" id="package_lastpayment" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_editip" class="control-label">Last Editip</label>
						<div class="form-group">
							<input type="text" name="last_editip" value="<?php echo $this->input->post('last_editip'); ?>" class="form-control" id="last_editip" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="payment_details" class="control-label">Payment Details</label>
						<div class="form-group">
							<input type="text" name="payment_details" value="<?php echo $this->input->post('payment_details'); ?>" class="form-control" id="payment_details" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
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
		  
		  <div class="box box-info">
				<div class="box-header with-border">
					  <h3 class="box-title">Agent Add</h3>
				</div>
      <div class="text-center">
          <div class="tab-content padding_half">
            
              <div class="agent-p-form">
                <form class="callus clearfix">
                  <div class="col-md-12">
                    <div class=" col-sm-3 col-md-4">
                      <div class="form-group">
                        <select  class="form-control" name="bed">
                          <option class="active">Title</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" id="usr">
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" id="usr">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm  Password">
                      </div>

                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Description" rows="3"></textarea>
                        </div> 
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group form-group image-preview">
                          <input type="text" class="form-control image-preview-filename" placeholder="Upload Agent Image" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                          <span class="input-group-btn">
                              <!-- image-preview-clear button -->
                              <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                  <span class="glyphicon glyphicon-remove"></span> Clear
                              </button>
                              <!-- image-preview-input -->
                              <div class="btn btn-default image-preview-input">
                                  <span class="glyphicon glyphicon-folder-open"></span>
                                  <span class="image-preview-input-title">Browse</span>
                                  <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                              </div>
                          </span>
                      </div><!-- /input-group image-preview [TO HERE]--> 
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12">
                      <div class="panel panel-info ">
                        <div class="panel-heading">Agency</div>
                          <div class="panel-body">
                              <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <div class="input-group input-file">
                                          <input type="text" class="form-control" placeholder='Choose Agency Logo...' />			
                                              <span class="input-group-btn">
                                              <span class="glyphicon glyphicon-folder-open"></span>
                                              <button class="btn btn-default btn-choose" type="button"  style="height: 44px;">Upload</button>
                                          </span>
                                  
                                  
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address">
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group bottom10">
                                      <span class="input-group-addon"><i class="fa fa-fw fa-facebook-official"></i></span>
                                      <input  type="text" class="form-control" name="" placeholder="Facebook">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group bottom10">
                                      <span class="input-group-addon"><i class="fa fa-fw  fa-twitter"></i></span>
                                      <input  type="text" class="form-control" name="" placeholder="Twitter">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group bottom10">
                                      <span class="input-group-addon"><i class="fa fa-fw  fa-google-plus"></i></span>
                                      <input  type="text" class="form-control" name="" placeholder="Google+">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group bottom10">
                                      <span class="input-group-addon"><i class="fa fa-fw  fa-linkedin"></i></span>
                                      <input  type="text" class="form-control" name="" placeholder="LinkedIn">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group bottom10">
                                      <span class="input-group-addon"><i class="fa fa-fw  fa-youtube"></i></span>
                                      <input  type="text" class="form-control" name="" placeholder="Youtube">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group bottom10">
                                      <span class="input-group-addon"><i class="fa fa-fw fa-pinterest"></i></span>
                                      <input  type="text" class="form-control" name="" placeholder="Pinterest">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group bottom10">
                                      <span class="input-group-addon"><i class="fa fa-fw fa-instagram"></i></span>
                                      <input  type="text" class="form-control" name="" placeholder="instagram">
                                    </div>
                                </div>
                                  
                          </div>
                      </div>
                    </div>
                    


                    
                  </div>
                    
                  <!-- <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="Email Address">
                  </div> -->
                 
                  
                  
                </form>
              </div>
		  </div>
		  
	  </div>
	  <div class="box-footer">
		<button type="submit" class="btn btn-success">
			<i class="fa fa-check"></i> Save
		</button>
	</div>
	</div>
	

    </div>
</div>
