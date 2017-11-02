<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Agents Listing</h3>
				<div class="box-tools">
					<a href="<?php echo site_url('agent/add'); ?>" class="btn btn-success btn-sm">Add Agents</a>
				</div>
			</div>
			<!-- <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Package Id</th>
						<th>Agency Id</th>
						<th>Password</th>
						<th>Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Agent Image</th>
						<th>Property List</th>
						<th>Last Logintime</th>
						<th>Added Date</th>
						<th>Address</th>
						<th>Activated</th>
						<th>Package Lastpayment</th>
						<th>Last Editip</th>
						<th>Payment Details</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['package_id']; ?></td>
						<td><?php echo $a['agency_id']; ?></td>
						<td><?php echo $a['password']; ?></td>
						<td><?php echo $a['name']; ?></td>
						<td><?php echo $a['username']; ?></td>
						<td><?php echo $a['email']; ?></td>
						<td><?php echo $a['agent_image']; ?></td>
						<td><?php echo $a['property_list']; ?></td>
						<td><?php echo $a['last_logintime']; ?></td>
						<td><?php echo $a['added_date']; ?></td>
						<td><?php echo $a['address']; ?></td>
						<td><?php echo $a['activated']; ?></td>
						<td><?php echo $a['package_lastpayment']; ?></td>
						<td><?php echo $a['last_editip']; ?></td>
						<td><?php echo $a['payment_details']; ?></td>
						<td><?php echo $a['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('agent/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('agent/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                   
                </table>
                                
            </div> -->
		</div>
	</div>
</div>

<?php foreach($agents as $a){ ?>
<div class="col-md-12">
	<!-- Profile Image -->
	<div class="box box-primary">
		<div class="box-body box-profile">
			<div class="col-md-3">
				<img class="img-thumbnail" src="<?php echo base_url('resources/img/agents/'.$a['image']);?>">

				<h3 class="profile-username text-center">
					<?php echo $a['title'] . " " . $a['fname'] ." ". $a['lname']; ?>
				</h3>

				<ul class="list-group list-group-unbordered">
					<li class="list-group-item">
						<b>Agent Id:</b>
						<a class="pull-right">
							<?php echo $a['id']; ?>
						</a>
					</li>
					<li class="list-group-item">
						<b>Phone No:</b>
						<a class="pull-right">
							<?php echo $a['phone']; ?>
						</a>
					</li>
					<li class="list-group-item">
						<b>Email:</b>
						<a class="pull-right">
							<?php echo $a['email']; ?>
						</a>
					</li>
					<li class="list-group-item">
						<b>Address:</b>
						<a class="pull-right">
							<?php echo $a['address']; ?>
						</a>
					</li>
<!--					<li class="list-group-item">-->
<!--						<b>User Type</b>-->
<!--						<a class="pull-right">Agent</a>-->
<!--					</li>-->
				</ul>

			</div>
			<div class="col-md-9">

				<div class="tab-pane">

					<!-- Post -->
					<div class="post">

						<!-- <div class="pull-left text-center">
							<img class="img-responsive" src="http://media.rightmove.co.uk/8k/7730/branch_rmchoice_logo_7730_0002_t.jpeg" alt="Uk">
							<span class="username">
								<a href="#">Agency Name</a>
							</span>
						</div> -->
						<ul class="list-inline">
						<li class="pull-right">
								<a href="#exampleModal" class="btn btn-primary link-white text-sm" data-toggle="modal" >
									<i class="fa fa-pencil margin-r-5"></i>Allow Phone No</a>
							</li>
							<li class="pull-right">
								<a href="/favmove1/agentquery?id=<?php echo $a['id']; ?>" class="btn btn-primary link-white text-sm">
									<i class="fa fa-pencil margin-r-5"></i>Show Inquiries</a>
							</li>
							<li class="pull-right">
								<a href="#" class="btn btn-primary link-white text-sm">
									<i class="fa fa-pencil margin-r-5"></i> Edit</a>
							</li>
							<li class="pull-right">
								<a href="#" class="btn btn-danger link-white text-sm">
									<i class="fa fa-trash margin-r-5"></i> Delete</a>
							</li>
							
						</ul>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="exampleModalLabel">Asign number to Id # <?php echo $a['id']; ?></h4>
								</div>
								<div class="modal-body">
									<form method="POST" action="/favmove1/phone_to_agent?id=<?php echo $a['id']; ?>">
									<div class="form-group">
										<label for="recipient-name" class="control-label">Number:</label>
										<input type="text" class="form-control" id="recipient-name">
									</div>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Send message</button>
								</div>
							</form>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>

						<h3 class="box-title">Description</h3>
						<p>
							<?php echo $a['description']; ?>
						</p>
						
						<div class="col-md-4">Empty Div</div>
						<div class="col-md-4">Empty Div</div>
						<div class="col-md-4">Empty Div</div>

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