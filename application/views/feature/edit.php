<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Feature Edit</h3>
            </div>
			<?php echo form_open('feature/edit/'.$feature['prop_id']); ?>
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
						<label for="AC" class="control-label">Air Conditioning</label>
						<div class="form-group">
							<input type="text" name="AC" value="<?php echo ($this->input->post('AC') ? $this->input->post('AC') : $feature['AC']); ?>" class="form-control" id="AC" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Barbeque" class="control-label">Barbeque</label>
						<div class="form-group">
							<input type="text" name="Barbeque" value="<?php echo ($this->input->post('Barbeque') ? $this->input->post('Barbeque') : $feature['Barbeque']); ?>" class="form-control" id="Barbeque" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Dryer" class="control-label">Dryer</label>
						<div class="form-group">
							<input type="text" name="Dryer" value="<?php echo ($this->input->post('Dryer') ? $this->input->post('Dryer') : $feature['Dryer']); ?>" class="form-control" id="Dryer" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Laundry" class="control-label">Laundry</label>
						<div class="form-group">
							<input type="text" name="Laundry" value="<?php echo ($this->input->post('Laundry') ? $this->input->post('Laundry') : $feature['Laundry']); ?>" class="form-control" id="Laundry" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Microwave" class="control-label">Microwave</label>
						<div class="form-group">
							<input type="text" name="Microwave" value="<?php echo ($this->input->post('Microwave') ? $this->input->post('Microwave') : $feature['Microwave']); ?>" class="form-control" id="Microwave" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Lawn" class="control-label">Lawn</label>
						<div class="form-group">
							<input type="text" name="Lawn" value="<?php echo ($this->input->post('Lawn') ? $this->input->post('Lawn') : $feature['Lawn']); ?>" class="form-control" id="Lawn" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Shower" class="control-label">Shower</label>
						<div class="form-group">
							<input type="text" name="Shower" value="<?php echo ($this->input->post('Shower') ? $this->input->post('Shower') : $feature['Shower']); ?>" class="form-control" id="Shower" />
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