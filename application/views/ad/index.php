<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ads Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ad/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Is Activated</th>
						<th>Is Hardlocked</th>
						<th>Is Random</th>
						<th>Code</th>
						<th>Title</th>
						<th>Type</th>
						<th>Description</th>
						<th>Width</th>
						<th>Height</th>
						<th>Link</th>
						<th>Repository Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ads as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['is_activated']; ?></td>
						<td><?php echo $a['is_hardlocked']; ?></td>
						<td><?php echo $a['is_random']; ?></td>
						<td><?php echo $a['code']; ?></td>
						<td><?php echo $a['title']; ?></td>
						<td><?php echo $a['type']; ?></td>
						<td><?php echo $a['description']; ?></td>
						<td><?php echo $a['width']; ?></td>
						<td><?php echo $a['height']; ?></td>
						<td><?php echo $a['link']; ?></td>
						<td><?php echo $a['repository_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('ad/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('ad/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
