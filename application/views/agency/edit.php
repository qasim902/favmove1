<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Agency</h3>
            </div>
			<?php echo form_open('agency/edit/'.$agency['id']); ?>
			<div class="box-body">
					<div class="col-sm-1 col-md-2"></div>
					<div class="col-sm-10 col-md-8">
						<div class="callus clearfix border_radius submit_property">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Agency Name</label>
						<div class="form-group">
							<input type="text" name="name" autofocus placeholder="Agency Name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $agency['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">
							<span class="text-danger">*</span>Ceo Name</label>
						<div class="form-group">
							<input type="text" name="ceo_name" autofocus placeholder="Ceo Name" value="" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">
							<span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" placeholder="Enter Email" autofocus value="" class="form-control" id="name" />
							<span class="text-danger">
								<?php echo form_error('email');?>
							</span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">
							<span class="text-danger">*</span>Number</label>
						<div class="form-group">
							<input type="text" name="email" placeholder="Enter Number" autofocus value="" class="form-control" id="name" />
							<span class="text-danger">
								<?php echo form_error('number');?>
							</span>
						</div>
					</div>
					<div class="col-lg-12">
						<label for="address" class="control-label"><span class="text-danger">*</span>Address</label>
						<div class="form-group">
							<textarea type="text" name="address" placeholder="Address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $agency['address']); ?>" class="form-control" id="address" ></textarea>
							<span class="text-danger"><?php echo form_error('address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="agency_logo" class="control-label">Agency Logo</label>
						<div class="form-group">
							<div class="input-group agncy_btn">
								<label class="input-group-btn">
									<span class="btn btn-primary">
										Upload Logo&hellip; <input type="file" name="agency_logo" value="<?php echo ($this->input->post('agency_logo') ? $this->input->post('agency_logo') : $agency['agency_logo']); ?>" class="form-control" id="agency_logo"  style="display: none;">
									</span>
								</label>
								<input  type="text" value="<?php echo ($this->input->post('agency_logo') ? $this->input->post('agency_logo') : $agency['agency_logo']); ?>" class="form-control"  readonly>
								<span class="text-danger"><?php echo form_error('agency_logo');?></span>
							</div>
						</div>
					</div>
							
					<div class="col-md-6">
						<label for="fb_link" class="control-label">Facebook Link</label>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
								<input type="text" name="fb_link" value="<?php echo ($this->input->post('fb_link') ? $this->input->post('fb_link') : $agency['fb_link']); ?>" class="form-control" id="fb_link" />
								<span class="text-danger"><?php echo form_error('fb_link');?></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label for="linkedin_link" class="control-label">Linkedin Link</label>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
								<input type="text" name="linkedin_link" value="<?php echo ($this->input->post('linkedin_link') ? $this->input->post('linkedin_link') : $agency['linkedin_link']); ?>" class="form-control" id="linkedin_link" />
								<span class="text-danger"><?php echo form_error('linkedin_link');?></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label for="twit_link" class="control-label">Twitter Link</label>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
								<input type="text" name="twit_link" value="<?php echo ($this->input->post('twit_link') ? $this->input->post('twit_link') : $agency['twit_link']); ?>" class="form-control" id="twit_link" />
								<span class="text-danger"><?php echo form_error('twit_link');?></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gplus_link" class="control-label">Google plus Link</label>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
								<input type="text" name="gplus_link" value="<?php echo ($this->input->post('gplus_link') ? $this->input->post('gplus_link') : $agency['gplus_link']); ?>" class="form-control" id="gplus_link" />
								<span class="text-danger"><?php echo form_error('gplus_link');?></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<label for="youtube_link" class="control-label">Youtube Link</label>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-youtube" aria-hidden="true"></i></span>
								<input type="text" name="youtube_link" value="<?php echo ($this->input->post('youtube_link') ? $this->input->post('youtube_link') : $agency['youtube_link']); ?>" class="form-control" id="youtube_link" />
								<span class="text-danger"><?php echo form_error('youtube_link');?></span>
							</div>
							
						</div>
					</div>
					
					
					<!-- <div class="col-md-6">
						<label for="property_list" class="control-label">Property List</label>
						<div class="form-group">
							<textarea name="property_list" class="form-control" id="property_list"><?php echo ($this->input->post('property_list') ? $this->input->post('property_list') : $agency['property_list']); ?></textarea>
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