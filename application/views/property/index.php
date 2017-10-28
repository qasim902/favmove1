<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Property Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('property/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Prop Id</th>
						<th>Prop Details</th>
						<th>Title</th>
						<th>Features</th>
						
						<th>Agent Id</th>
						<th>Town Id</th>
						<th>Address</th>
						<th>Status</th>
						<th>Video Embed</th>
						<th>Created On</th>
						<th>Sold On</th>
						<th>Is Feat</th>
						<th>Price</th>
						<th>Description</th>
						<th>Property Images</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($property as $p){ ?>
                    <tr>
						<td><?php echo $p['prop_id']; ?></td>
						<td><?php echo $p['prop_details']; ?></td>
						<td><?php echo $p['title']; ?></td>
						<td><?php echo $p['features']; ?></td>
						<td><?php echo $p['agent_id']; ?></td>
						<td><?php echo $p['town_id']; ?></td>
						<td><?php echo $p['address']; ?></td>
						<td><?php echo $p['status']; ?></td>
						<td><?php echo $p['video_embed']; ?></td>
						<td><?php echo $p['created_on']; ?></td>
						<td><?php echo $p['sold_on']; ?></td>
						<td><?php echo $p['is_feat']; ?></td>
						<td><?php echo $p['price']; ?></td>
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
        </div>
    </div>
</div>
