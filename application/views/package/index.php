<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Packages Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('package/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Show Private Listings</th>
						<th>Auto Activation</th>
						<th>Date Created</th>
						<th>Date Modified</th>
						<th>Package Name</th>
						<th>Package Price</th>
						<th>Package Days</th>
						<th>Num Listing Limit</th>
						<th>Currency Code</th>
						<th>User Type</th>
						<th>Num Images Limit</th>
						<th>Num Amenities Limit</th>
						<th>Num Featured Limit</th>
						<th>Forarea</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($packages as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['show_private_listings']; ?></td>
						<td><?php echo $p['auto_activation']; ?></td>
						<td><?php echo $p['date_created']; ?></td>
						<td><?php echo $p['date_modified']; ?></td>
						<td><?php echo $p['package_name']; ?></td>
						<td><?php echo $p['package_price']; ?></td>
						<td><?php echo $p['package_days']; ?></td>
						<td><?php echo $p['num_listing_limit']; ?></td>
						<td><?php echo $p['currency_code']; ?></td>
						<td><?php echo $p['user_type']; ?></td>
						<td><?php echo $p['num_images_limit']; ?></td>
						<td><?php echo $p['num_amenities_limit']; ?></td>
						<td><?php echo $p['num_featured_limit']; ?></td>
						<td><?php echo $p['forarea']; ?></td>
						<td>
                            <a href="<?php echo site_url('package/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('package/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
