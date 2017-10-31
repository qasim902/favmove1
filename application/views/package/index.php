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
				<?php
if($this->session->flashdata('successsub'))
{
    echo "<br>
    <div class='col-md-offset-3 col-md-6'>
    <div  id='alert-pop' class='text-center alert alert-success'>";
    
echo $this->session->flashdata('successsub');
  echo "</div> 
  </div>";
echo "<script>
	window.location.hash = '#alert-pop';

</script>";
}
?>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>

							<th>Package Name</th>
							<th>Package Price</th>
							<th>Listing Limit</th>
							<th>Featured Limit</th>
							<th>User Type</th>
							<th>Duration</th>
							<!-- <th>Show Private Listings</th>
							<th>Auto Re-activate</th> -->
							<th>Action</th>
						</tr>
						<?php foreach($packages as $p){ ?>
						<tr>

							<td>
								<?php echo $p['package_name']; ?>
							</td>
							<td>
								<?php echo "£ ". $p['package_price']; ?>
							</td>
							<td>
								<?php echo $p['num_listing_limit']; ?>
							</td>
							<td>
								<?php echo $p['num_featured_limit']; ?>
							</td>
							<td>
								<?php echo $p['user_type']; ?>
							</td>
							<td>
								<?php echo $p['package_duration']; ?>
							</td>
							<td>
								<a href="<?php echo site_url('package/edit/'.$p['packageid']); ?>" class="btn btn-info btn-xs">
									<span class="fa fa-pencil"></span> Edit</a>
								<a href="<?php echo site_url('package/remove/'.$p['packageid']); ?>" class="btn btn-danger btn-xs">
									<span class="fa fa-trash"></span> Delete</a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>