<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agents Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('agent/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
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
                    <?php foreach($agents as $a){ ?>
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
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
