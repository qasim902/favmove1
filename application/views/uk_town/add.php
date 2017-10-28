<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Uk Town Add</h3>
            </div>
            <?php echo form_open('uk_town/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="county" class="control-label">County</label>
						<div class="form-group">
							<input type="text" name="county" value="<?php echo $this->input->post('county'); ?>" class="form-control" id="county" />
							<span class="text-danger"><?php echo form_error('county');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo $this->input->post('country'); ?>" class="form-control" id="country" />
							<span class="text-danger"><?php echo form_error('country');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="grid_reference" class="control-label">Grid Reference</label>
						<div class="form-group">
							<input type="text" name="grid_reference" value="<?php echo $this->input->post('grid_reference'); ?>" class="form-control" id="grid_reference" />
							<span class="text-danger"><?php echo form_error('grid_reference');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="easting" class="control-label">Easting</label>
						<div class="form-group">
							<input type="text" name="easting" value="<?php echo $this->input->post('easting'); ?>" class="form-control" id="easting" />
							<span class="text-danger"><?php echo form_error('easting');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="northing" class="control-label">Northing</label>
						<div class="form-group">
							<input type="text" name="northing" value="<?php echo $this->input->post('northing'); ?>" class="form-control" id="northing" />
							<span class="text-danger"><?php echo form_error('northing');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="latitude" class="control-label">Latitude</label>
						<div class="form-group">
							<input type="text" name="latitude" value="<?php echo $this->input->post('latitude'); ?>" class="form-control" id="latitude" />
							<span class="text-danger"><?php echo form_error('latitude');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="longitude" class="control-label">Longitude</label>
						<div class="form-group">
							<input type="text" name="longitude" value="<?php echo $this->input->post('longitude'); ?>" class="form-control" id="longitude" />
							<span class="text-danger"><?php echo form_error('longitude');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="elevation" class="control-label">Elevation</label>
						<div class="form-group">
							<input type="text" name="elevation" value="<?php echo $this->input->post('elevation'); ?>" class="form-control" id="elevation" />
							<span class="text-danger"><?php echo form_error('elevation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="postcode_sector" class="control-label">Postcode Sector</label>
						<div class="form-group">
							<input type="text" name="postcode_sector" value="<?php echo $this->input->post('postcode_sector'); ?>" class="form-control" id="postcode_sector" />
							<span class="text-danger"><?php echo form_error('postcode_sector');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="local_government_area" class="control-label">Local Government Area</label>
						<div class="form-group">
							<input type="text" name="local_government_area" value="<?php echo $this->input->post('local_government_area'); ?>" class="form-control" id="local_government_area" />
							<span class="text-danger"><?php echo form_error('local_government_area');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nuts_region" class="control-label">Nuts Region</label>
						<div class="form-group">
							<input type="text" name="nuts_region" value="<?php echo $this->input->post('nuts_region'); ?>" class="form-control" id="nuts_region" />
							<span class="text-danger"><?php echo form_error('nuts_region');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
							<span class="text-danger"><?php echo form_error('type');?></span>
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