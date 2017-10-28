<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Property Add</h3>
            </div>
            <?php echo form_open('property/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="prop_details" class="control-label"><span class="text-danger">*</span>Prop Detail</label>
						<div class="form-group">
							<select name="prop_details" class="form-control">
								<option value="4">select prop_detail</option>
								<?php 
								foreach($all_prop_details as $prop_detail)
								{
									$selected = ($prop_detail['property_id'] == $this->input->post('prop_details')) ? ' selected="selected"' : "";

									echo '<option value="'.$prop_detail['property_id'].'" '.$selected.'>'.$prop_detail['property_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('prop_details');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="features" class="control-label"><span class="text-danger">*</span>Feature</label>
						<div class="form-group">
							<select name="features" class="form-control">
								<option value="4">select feature</option>
								<?php 
								foreach($all_features as $feature)
								{
									$selected = ($feature['prop_id'] == $this->input->post('features')) ? ' selected="selected"' : "";

									echo '<option value="'.$feature['prop_id'].'" '.$selected.'>'.$feature['prop_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('features');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="agent_id" class="control-label"><span class="text-danger">*</span>Agent</label>
						<div class="form-group">
							<select name="agent_id" class="form-control">
								<option value="">select agent</option>
								<?php 
								foreach($all_agents as $agent)
								{
									$selected = ($agent['id'] == $this->input->post('agent_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$agent['id'].'" '.$selected.'>'.$agent['id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('agent_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="town_id" class="control-label">Uk Town</label>
						<div class="form-group">
							<select name="town_id" class="form-control">
								<option value="">select uk_town</option>
								<?php 
								foreach($all_uk_towns as $uk_town)
								{
									$selected = ($uk_town['id'] == $this->input->post('town_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$uk_town['id'].'" '.$selected.'>'.$uk_town['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('town_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label"><span class="text-danger">*</span>Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
							<span class="text-danger"><?php echo form_error('address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="video_embed" class="control-label">Video Embed</label>
						<div class="form-group">
							<input type="text" name="video_embed" value="<?php echo $this->input->post('video_embed'); ?>" class="form-control" id="video_embed" />
							<span class="text-danger"><?php echo form_error('video_embed');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="sold_on" class="control-label">Sold On</label>
						<div class="form-group">
							<input type="text" name="sold_on" value="<?php echo $this->input->post('sold_on'); ?>" class="form-control" id="sold_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_feat" class="control-label">Is Feat</label>
						<div class="form-group">
							<input type="text" name="is_feat" value="<?php echo $this->input->post('is_feat'); ?>" class="form-control" id="is_feat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="price" class="control-label"><span class="text-danger">*</span>Price</label>
						<div class="form-group">
							<input type="text" name="price" value="<?php echo $this->input->post('price'); ?>" class="form-control" id="price" />
							<span class="text-danger"><?php echo form_error('price');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="property_images" class="control-label">Property Images</label>
						<div class="form-group">
							<textarea name="property_images" class="form-control" id="property_images"><?php echo $this->input->post('property_images'); ?></textarea>
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