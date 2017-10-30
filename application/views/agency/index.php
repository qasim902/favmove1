<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agency Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('agency/add'); ?>" class="btn btn-success btn-sm">Add Agency</a> 
                </div>
            </div>
            <div class="box-body">
				<div class="table-responsive">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Agency Logo</th>
						<!-- <th>Fb Link</th>
						<th>Linkedin Link</th>
						<th>Twit Link</th>
						<th>Gplus Link</th>
						<th>Youtube Link</th> -->
						<th>Address</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($agency as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['name']; ?></td>
						<td><?php echo $a['agency_logo']; ?></td>
						<!-- <td><a href="<?php echo $a['fb_link']; ?>"><?php echo $a['fb_link']; ?></a></td>
						<td><a href="<?php echo $a['linkedin_link']; ?>"><?php echo $a['linkedin_link']; ?></a></td>
						<td><a href="<?php echo $a['twit_link']; ?>"><?php echo $a['twit_link']; ?></a></td>
						<td><a href="<?php echo $a['gplus_link']; ?>"><?php echo $a['gplus_link']; ?></a></td>
						<td><a href="<?php echo $a['youtube_link']; ?>"><?php echo $a['youtube_link']; ?></a></td> -->
						<td><?php echo $a['address']; ?></td>
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
</div>
