<!-- <?php echo form_open('property/edit/'.$property['prop_id']); ?>
			
	<?php echo form_close(); ?> -->
		

<section id="property" class="content">

	<div class="row">
		<div class="box box-primary">
			<div class="box-body box-profile">
				<div class="col-sm-1 col-md-2"></div>
				<div class="col-sm-10 col-md-8">
					<h2 class="text-uppercase bottom40">Edit Your Property</h2>
					<form class="callus clearfix border_radius submit_property" method="post" action="ag_submit" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-6">

								<div class="single-query form-group bottom20">
									<label>Title</label>
									<input type="text" name="title" class="keyword-input" placeholder="Enter your property title">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="single-query bottom20">
									<label>Property Type </label>
									<div class="intro">
											<select name="prop_details" class="form-control">
												<option value="">Select Property Detail</option>
												<?php
									foreach($all_prop_details as $prop_detail)
									{
										$selected = ($prop_detail['property_id'] == $property['prop_details']) ? ' selected="selected"' : "";
	
										echo '<option value="'.$prop_detail['property_id'].'" '.$selected.'>'.$prop_detail['property_id'].'</option>';
									} 
									?>
											</select>
									</div>
								</div>
							</div>


							<div class="col-sm-6">
								<div class="single-query bottom20">
									<label>Town</label>
									<div class="intro">
										<select name="town_id" class="form-control">
												<option value="">select uk_town</option>
												<?php 
									foreach($all_uk_towns as $uk_town)
									{
										$selected = ($uk_town['id'] == $property['town_id']) ? ' selected="selected"' : "";

										echo '<option value="'.$uk_town['id'].'" '.$selected.'>'.$uk_town['name'].'</option>';
									} 
									?>
											</select>
									</div>
								</div>
							</div>

							<div class="col-sm-6">

								<div class="single-query form-group bottom20">
									<label>Year Built</label>
									<input type="number" min="0" maxlength="4" required name="yearb" class="keyword-input" placeholder="Year the property was built">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="single-query bottom20">
									<label>Status </label>
									<div class="intro">
										<select name="status">
											<option class="active"><?php echo ($this->input->post('status') ? $this->input->post('status') : $property['status']); ?></option>
											<option value="sale">For Sale</option>
											<option value="rent">For Rent </option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="single-query form-group bottom20">
									<label>Price</label>
									<input type="number" value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $property['price']); ?>" name="price" min="0" step="0.01" class="keyword-input" placeholder="£ 45,000">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="single-query form-group bottom20">
									<label>Address</label>
									<textarea type="text" class="keyword-input" name="address" placeholder="Enter Property Address" style="width: 100%"><?php echo ($this->input->post('address') ? $this->input->post('address') : $property['address']); ?></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<h3 class="margin40 bottom15">Property Photos
									<i class="fa fa-info-circle help" data-toggle="tooltip" title="add images to upload for property!"></i>
								</h3>



								<!-- <div class="file_uploader bottom20">
				<div id="upload-widget" name="files" class="dropzone">
				<div class="dz-default dz-message">
		<span> -->
								<div class="col-md-6">

									<i class="fa fa-plus-circle">&nbsp;&nbsp;Listing Image</i>
									<br>
									<br>
									<!-- <input type="file" multiple="multiple" name="listing" id="file">
					  <label for="agent_image" class="control-label">Agent Image</label> -->
									<div class="form-group">
										<div class="input-group agncy_btn">
											<label class="input-group-btn">
												<span class="btn btn-primary">
													Upload Images&hellip;
													<input type="file" multiple="multiple" name="listing" id="upload_image" style="display: none;"
													/>
												</span>
											</label>
											<input type="text" name="listing"  id="upload_image_sho" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<i class="fa fa-plus-circle">&nbsp;&nbsp;Detailed Images</i>
									<br>
									<br>
									<div class="form-group">
										<div class="input-group agncy_btn">
											<label class="input-group-btn">
												<span class="btn btn-primary">
													Upload Image&hellip;
													<input type="file" multiple="multiple" value="<?php echo ($this->input->post('property_images') ? $this->input->post('property_images') : $property['property_images']); ?>" name="pic[]" id="upload_mlt_images" style="display: none;"
													/>
												</span>
											</label>
											<input type="text" name="pic[]" value="<?php echo ($this->input->post('property_images') ? $this->input->post('property_images') : $property['property_images']); ?>" id="sho_mlt_images" class="form-control" id="file" readonly>
										</div>

									</div>
									<!-- <input type="file" multiple="multiple" name="pic[]" id="file"> -->
								</div>

								<!-- </span>
		</div>
				</div>
			  </div>-->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h3 class="bottom15 margin40">Property Details</h3>
							</div>
						</div>

						<div class="row">

							<div class="col-sm-6">

								<div class="single-query form-group bottom20">
									<label>Area in Sq. Ft</label>
									<div class="intro">
										<input type="text" name="area" id="area" placeholder="5,543 sq ft.">
									</div>
								</div>

							</div>
							<div class="col-sm-6">

								<div class="single-query form-group bottom20">
									<label>Bedrooms</label>
									<div class="intro">
										<select name="bedrooms">
											<option class="active">Number of Bedrooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>

										</select>
									</div>
								</div>

							</div>
							<div class="col-sm-12">

								<div class="single-query  form-group bottom20">
									<label>Bathrooms</label>
									<div class="intro">
										<select name="bathrooms">
											<option class="active">Number of Bathrooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

							</div>


							<div class="col-sm-4">

								<div class="single-query form-group bottom20">
									<label>TV Lounge</label>
									<div class="intro">
										<select name="lounge">
											<option class="active">Number of TV Lounges</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

							</div>
							<div class="col-sm-4">

								<div class="single-query form-group  bottom20">
									<label>Garages</label>
									<div class="intro">
										<select name="garage">
											<option class="active">Number of Garages</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

							</div>

							<div class="col-sm-4 top30">
								<div class="top20">
									<div class="checkbox-inline">
										<label>
											<input type="checkbox" value="<?php echo ($this->input->post('is_feat') ? $this->input->post('is_feat') : $property['is_feat']); ?>" name="is_feat"> Featured
										</label>
									</div>
									<div class="checkbox-inline">
										<label>
											<input type="checkbox" name="new_build"> New Build
										</label>
									</div>
								</div>
								<!-- <div class="single-query form-group bottom20">
						<label>New Build</label>
						<div class="intro">
						  <input type="checkbox" name="new_build">
						</div>
					  </div> -->

							</div>
							<div class="col-sm-12">
								<h3 class="bottom15 margin40">Property Description </h3>
								<textarea id="txtEditor" style="width: 100%" name="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $property['description']); ?></textarea>
								
							</div>
							<!--  <div class="col-sm-12">
				<h3 class="bottom15 margin40">Quick Summary</h3>
				<div class="table-responsive summery_table">
				  <table class="table">
					<tr>
					<td>
					<i class="fa fa-bars titles"></i>
					</td>
					<td>
					<div class="single-query form-group">
			  <label>Title</label>
					  <input type="text" class="keyword-input">
					</div>
					</td>
					<td>
					<div class="single-query form-group">
			  <label>Value</label>
					  <input type="text" class="keyword-input">
					</div>
					</td>
					<td>
					<a href="#." class="close-t"><i class="fa fa-close"></i></a>
					</td>
					</tr>
				 
				  
					
				  </table>
				  <a href="#."  class="add-new"><i class="fa fa-plus"></i> Add New</a>
			  </div>
			  </div> -->
							<div class="col-sm-12">
								<h3 class="bottom15 margin40">Property Features</h3>
								<div class="search-propertie-filters">
									<div class="container-2">
										<div class="row">
											<div class="col-md-4 col-sm-4">
												<div class="checkbox">
													<label>
														<input type="checkbox" value="1" value="1" name="AC" />Air Conditioning</label>
												</div>
												<div class=" checkbox">
													<label>
														<input type="checkbox" value="1" name="Barbeque" /> Barbeque Grill</label>
												</div>
												<div class=" checkbox">
													<label>
														<input type="checkbox" value="1" name="Basement" /> Basement
													</label>
												</div>
											</div>
											<div class="col-md-4 col-sm-4">

												<div class=" checkbox">
													<label>
														<input type="checkbox" value="1" name="Lawn" /> Lawn
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" value="1" name="Balcony" /> Balcony
													</label>
												</div>
											</div>
											<div class="col-md-4 col-sm-4">
												<!-- <div class="col-md-4 col-sm-4">
								  <div class=" checkbox">
									  <input type="checkbox" value="1" name="Swimming Pool" />
									  <span>Swimming Pool</span>
								  </div>
							  </div> -->
												<div class=" checkbox">
													<label>
														<input type="checkbox" value="1" name="Laundry" /> Laundry Room</label>
												</div>

												<div class=" checkbox">
													<label>
														<input type="checkbox" value="1" name="Home Theater" /> Home Theater</label>
												</div>
											</div>
											<!--  <div class="col-md-4 col-sm-4">
								  <div class=" checkbox">
									  <input type="checkbox" name="Smoking allowed" />
									  <span>Smoking allowed</span>
								  </div>
							  </div> -->
											<!--  <div class="col-md-4 col-sm-4">
								  <div class=" checkbox">
									  <input type="checkbox" name="Cable TV" />
									  <span>Cable TV</span>
								  </div>
							  </div> -->
											<!--  <div class="col-md-4 col-sm-4">
								  <div class=" checkbox">
									  <input type="checkbox" name="Window Coverings" />
									  <span>Window Coverings</span>
								  </div>
							  </div> -->
										</div>

									</div>
								</div>


								<div class="col-sm-12">
									<h3 class="bottom15 margin40">Video Presentation</h3>
									<div class="single-query form-group bottom15">
										<label>Vimeo or Youtube URL</label>
										<input type="text" class="keyword-input" placeholder="https://vimeo.com">
									</div>
								</div>
								<!-- <div class="col-sm-12">
				<h3 class="bottom15 margin40">Place on Map</h3>
				<div class="single-query form-group bottom15">
			  <label>Property Address</label>
					  <input type="text" class="keyword-input" placeholder="Enter a Location">
					</div>
					<div id="single_map"></div>
			  </div> -->
								<div class="col-md-4">
									<button type="submit" class="btn-blue border_radius margin40">submit property</button>
								</div>

							</div>








					</form>


					</div>
					<div class="col-sm-1 col-md-2"></div>



					<div class="col-sm-4">





					</div>
				</div>
			</div>

		</div>

</section>