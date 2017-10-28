<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">News Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('news/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Title</th>
						<th>Added On</th>
						<th>Author</th>
						<th>Comment Id</th>
						<th>Excerpt</th>
						<th>Detail</th>
						<th>Tags</th>
						<th>Img Path</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($news as $n){ ?>
                    <tr>
						<td><?php echo $n['id']; ?></td>
						<td><?php echo $n['title']; ?></td>
						<td><?php echo $n['added_on']; ?></td>
						<td><?php echo $n['author']; ?></td>
						<td><?php echo $n['comment_id']; ?></td>
						<td><?php echo $n['excerpt']; ?></td>
						<td><?php echo $n['detail']; ?></td>
						<td><?php echo $n['tags']; ?></td>
						<td><?php echo $n['img_path']; ?></td>
						<td>
                            <a href="<?php echo site_url('news/edit/'.$n['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('news/remove/'.$n['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
