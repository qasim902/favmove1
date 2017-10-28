<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Uk Towns Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('uk_town/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>County</th>
						<th>Country</th>
						<th>Grid Reference</th>
						<th>Easting</th>
						<th>Northing</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Elevation</th>
						<th>Postcode Sector</th>
						<th>Local Government Area</th>
						<th>Nuts Region</th>
						<th>Type</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($uk_towns as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['name']; ?></td>
						<td><?php echo $u['county']; ?></td>
						<td><?php echo $u['country']; ?></td>
						<td><?php echo $u['grid_reference']; ?></td>
						<td><?php echo $u['easting']; ?></td>
						<td><?php echo $u['northing']; ?></td>
						<td><?php echo $u['latitude']; ?></td>
						<td><?php echo $u['longitude']; ?></td>
						<td><?php echo $u['elevation']; ?></td>
						<td><?php echo $u['postcode_sector']; ?></td>
						<td><?php echo $u['local_government_area']; ?></td>
						<td><?php echo $u['nuts_region']; ?></td>
						<td><?php echo $u['type']; ?></td>
						<td>
                            <a href="<?php echo site_url('uk_town/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('uk_town/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
