<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title"> Add User</h3>
            </div>
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
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
			<div class="col-sm-1 col-md-2"></div>
			<div class="col-sm-10 col-md-8">
				<div class="callus clearfix border_radius submit_property">
					
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
							<div class="form-group">
								<input type="text" placeholder="Enter Name" autofocus name="username" value="" class="form-control" id="username" />
								<span class="text-danger"><?php echo form_error('username');?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
							<div class="form-group">
								<input type="text" placeholder="Enter Email" autofocus name="email" value="" class="form-control" id="email" />
								<span class="text-danger"><?php echo form_error('email');?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="password"  class="control-label"><span class="text-danger">*</span>Password</label>
							<div class="form-group">
								<input type="password" placeholder="Enter Password" autofocus name="password" value="" class="form-control" id="password" />
								<span class="text-danger"><?php echo form_error('password');?></span>
							</div>
						</div>
						
	<!--					<div class="col-md-6">-->
	<!--						<label for="created_on" class="control-label"><span class="text-danger">*</span>Created On</label>-->
	<!--						<div class="form-group">-->
	<!--							<input type="text" name="created_on" value="--><?php //echo $this->input->post('created_on'); ?><!--" class="form-control" id="created_on" />-->
	<!--							<span class="text-danger">--><?php //echo form_error('created_on');?><!--</span>-->
	<!--						</div>-->
	<!--					</div>-->
	                        <div class="col-md-6">
								<label for="agent_image" class="control-label">User Image</label>
								<div class="input-group form-group agncy_btn">
									<label class="input-group-btn">
										<span class="btn btn-primary">
											Upload Image… <input name="user_file" value="" class="form-control" id="upload_image" style="display: none;" type="file">
										</span>
									</label>
									<input id="upload_image_sho" value="" class="form-control" readonly="" type="text">
									<span class="text-danger">
																	</span>
								</div>
							</div>
						
	<!--					<div class="col-md-6">-->
	<!--						<label for="myfavorites" class="control-label">Myfavorites</label>-->
	<!--						<div class="form-group">-->
	<!--							<textarea name="myfavorites" class="form-control" id="myfavorites">--><?php //echo $this->input->post('myfavorites'); ?><!--</textarea>-->
	<!--						</div>-->
	<!--					</div>-->
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