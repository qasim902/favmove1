<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agency Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('agency/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Agency Logo</th>
						<th>Fb Link</th>
						<th>Linkedin Link</th>
						<th>Twit Link</th>
						<th>Gplus Link</th>
						<th>Youtube Link</th>
						<th>Address</th>
						<th>Created On</th>
						<th>Property List</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($agency as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['name']; ?></td>
						<td><?php echo $a['agency_logo']; ?></td>
						<td><?php echo $a['fb_link']; ?></td>
						<td><?php echo $a['linkedin_link']; ?></td>
						<td><?php echo $a['twit_link']; ?></td>
						<td><?php echo $a['gplus_link']; ?></td>
						<td><?php echo $a['youtube_link']; ?></td>
						<td><?php echo $a['address']; ?></td>
						<td><?php echo $a['created_on']; ?></td>
						<td><?php echo $a['property_list']; ?></td>
						<td>
                            <a href="<?php echo site_url('agency/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('agency/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
