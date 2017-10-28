<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Prop Po Add</h3>
            </div>
            <?php echo form_open('prop_position/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="prop_id" class="control-label">Property</label>
						<div class="form-group">
							<select name="prop_id" class="form-control">
								<option value="">select property</option>
								<?php 
								foreach($all_property as $property)
								{
									$selected = ($property['prop_id'] == $this->input->post('prop_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$property['prop_id'].'" '.$selected.'>'.$property['prop_id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="position" class="control-label">Position</label>
						<div class="form-group">
							<select name="position" class="form-control">
								<option value="">select</option>
								<?php 
								$position_values = array(
									'home_top'=>'Home Carousel',
									'home_best'=>'Best Deal Listing',
									'home_list'=>'Home Properties List',
								);

								foreach($position_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('position')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
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