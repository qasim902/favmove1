<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Edit Agent </h3>
			</div>
			<?php echo form_open('agent/edit/'.$agent['id']); ?>
			<div class="box-body">
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<div class="callus clearfix border_radius submit_property">
						<div class="row clearfix">
							<div class="col-md-6">
								<label for="name" class="control-label">First Name</label>
								<div class="form-group">
									<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $agent['name']); ?>"
									 class="form-control" id="name" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="name" class="control-label">Last Name</label>
								<div class="form-group">
									<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $agent['name']); ?>"
									 class="form-control" id="name" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="username" class="control-label">Username</label>
								<div class="form-group">
									<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $agent['username']); ?>"
									 class="form-control" id="username" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="email" class="control-label">Email</label>
								<div class="form-group">
									<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $agent['email']); ?>"
									 class="form-control" id="email" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="password" class="control-label">Password</label>
								<div class="form-group">
									<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $agent['password']); ?>"
									 class="form-control" id="password" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="email" class="control-label">Contact</label>
								<div class="form-group">
									<input type="text" name="contact" value="<?php echo ($this->input->post('contact') ? $this->input->post('contact') : $agent['contact']); ?>"
									 class="form-control" id="contact" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="agent_image" class="control-label">Edit Agent Image</label>
								<div class="input-group agncy_btn">
									<label class="input-group-btn">
										<span class="btn btn-primary">
											Upload Image&hellip; <input type="file" name="agent_image" value="<?php echo ($this->input->post('agent_image') ? $this->input->post('agent_image') : $agent['agent_image']); ?>" class="form-control" id="upload_image" style="display: none;" />
										</span>
									</label>
									<input  type="text" id="upload_image_sho" value="<?php echo $this->input->post('agent_image'); ?>" class="form-control" readonly>
								</div>
							</div>
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
								<label for="email" class="control-label">Title</label>
								<div class="form-group">
									<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $agent['title']); ?>"
										class="form-control" id="title" />
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
							<div class="col-md-6">
								<label for="description" class="control-label">Description</label>
								<div class="form-group">
									<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $agent['description']); ?></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<label for="address" class="control-label">Address</label>
								<div class="form-group">
									<input type="text" name="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $agent['address']); ?>"
									 class="form-control" id="address" />
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

			<?php echo form_close(); ?>
		</div>
	</div>
</div>