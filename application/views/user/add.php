<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="usertype" class="control-label"><span class="text-danger">*</span>Usertype</label>
						<div class="form-group">
							<input type="text" name="usertype" value="<?php echo $this->input->post('usertype'); ?>" class="form-control" id="usertype" />
							<span class="text-danger"><?php echo form_error('usertype');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_on" class="control-label"><span class="text-danger">*</span>Created On</label>
						<div class="form-group">
							<input type="text" name="created_on" value="<?php echo $this->input->post('created_on'); ?>" class="form-control" id="created_on" />
							<span class="text-danger"><?php echo form_error('created_on');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="payment_details" class="control-label">Payment Details</label>
						<div class="form-group">
							<textarea name="payment_details" class="form-control" id="payment_details"><?php echo $this->input->post('payment_details'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="myfavorites" class="control-label">Myfavorites</label>
						<div class="form-group">
							<textarea name="myfavorites" class="form-control" id="myfavorites"><?php echo $this->input->post('myfavorites'); ?></textarea>
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