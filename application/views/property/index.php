<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Property Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('property/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <!-- <div class="box-body">
					<div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th>Property Id</th>
						<th>Title</th>
						<th>Address</th>
						<th>Features</th>
						<th>Town Id</th>
						<th>Agent Id</th>
						<th>Status</th>
						<th>Price</th>
						<th>Created On</th>
						<th>Sold On</th>
						<th>Is Featured</th>
						<th>Description</th>
						<th>Property Images</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($property as $p){ ?>
                    <tr>
						<td><?php echo $p['prop_id']; ?></td>
						<td><?php echo $p['title']; ?></td>
						<td><?php echo $p['address']; ?></td>
						<td><?php echo $p['features']; ?></td>
						<td><?php echo $p['town_id']; ?></td>
						<td><?php echo $p['agent_id']; ?></td>
						<td><?php echo $p['status']; ?></td>
						<td><?php echo $p['price']; ?></td>
						<td><?php echo $p['created_on']; ?></td>
						<td><?php echo $p['sold_on']; ?></td>
						<td><?php echo $p['is_feat']; ?></td>
						<td><?php echo $p['description']; ?></td>
						<td><?php echo $p['property_images']; ?></td>
						<td>
                            <a href="<?php echo site_url('property/edit/'.$p['prop_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('property/remove/'.$p['prop_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
				</table>
			</div>
                                
            </div> -->
        </div>
    </div>
</div>



<?php foreach($property as $p){ ?>
	<div class="col-md-12">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<div class="col-md-4">
					<!-- <img class="img-thumbnail" src="<?php echo base_url('resources/img/agents/'.$a['id']. '/prof.jpg');?>"> -->
	
					<!-- <h3 class="profile-username text-center">
						<?php echo $a['name']; ?>
					</h3> -->
	
					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Agent Id:</b>
							<a class="pull-right">
								<?php echo  $p['agent_id']; ?>
							</a>
						</li>
						<!-- <li class="list-group-item">
							<b>Town Id:</b>
							<a class="pull-right">
								<?php echo  $p['town_id']; ?>
							</a>
						</li> -->
						<li class="list-group-item">
							<b>Property Id:</b>
							<a class="pull-right"><?php echo  $p['prop_id']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Features:</b>
							<a class="pull-right"><?php echo  $p['features']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Status:</b>
							<a class="pull-right"><?php echo  $p['status']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Is Featured:</b>
							<a class="pull-right"><?php echo  $p['is_feat']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Price:</b>
							<a class="pull-right"><?php echo  $p['price']; ?></a>
						</li>
						<li class="list-group-item">
							<b>Sold On:</b>
							<a class="pull-right"><?php echo  $p['sold_on']; ?></a>
						</li>
					</ul>
	
				</div>
				<div class="col-md-8">
	
					<div class="tab-pane">
	
						<!-- Post -->
						<div class="post">
	
							<div class="pull-left text-center">
								<!-- <img class="img-responsive" src="http://media.rightmove.co.uk/8k/7730/branch_rmchoice_logo_7730_0002_t.jpeg" alt="Uk"> -->
								<span class="username">
									<b>Town Id: </b> <?php echo $p['town_id']; ?>
								</span>
							</div>
							<ul class="list-inline">
								
								<li class="pull-right">
									<a href="#" class="btn btn-primary link-white text-sm">
										<i class="fa fa-pencil margin-r-5"></i> Edit</a>
								</li>
								<li class="pull-right">
									<a href="#" class="btn btn-danger link-white text-sm">
										<i class="fa fa-trash margin-r-5"></i> Delete</a>
								</li>
							</ul>
							<div class="clearfix"></div>
							<h4 class="box-title"><b>Title</b></h4>
							<p>
								<?php echo $p['title']; ?>
							</p>
							<h4 class="box-title"><b>Address</b></h4>
							<p>
								<?php echo $p['address']; ?>
							</p>
							<h4 class="box-title"><b>Description</b></h4>
							<p>
								<?php echo $p['description']; ?>
							</p>
							
							
						</div>
						<!-- /.post -->
	
					</div>
	
				</div>
	
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
	<?php } ?>
	<div class="clearfix"></div>