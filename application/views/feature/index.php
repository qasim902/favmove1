<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Features Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('feature/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Prop Id</th>
						<th>Air Conditioning</th>
						<th>Barbeque</th>
						<th>Dryer</th>
						<th>Laundry</th>
						<th>Microwave</th>
						<th>Lawn</th>
						<th>Shower</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($features as $f){ ?>
                    <tr>
						<td><?php echo $f['prop_id']; ?></td>
						<td><?php echo $f['AC']; ?></td>
						<td><?php echo $f['Barbeque']; ?></td>
						<td><?php echo $f['Dryer']; ?></td>
						<td><?php echo $f['Laundry']; ?></td>
						<td><?php echo $f['Microwave']; ?></td>
						<td><?php echo $f['Lawn']; ?></td>
						<td><?php echo $f['Shower']; ?></td>
						<td>
                            <a href="<?php echo site_url('feature/edit/'.$f['prop_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('feature/remove/'.$f['prop_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
