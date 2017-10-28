<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">News Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('news/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <!-- <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Title</th>
						<th>Added On</th>
						<th>Author</th>
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
                                
            </div> -->
        </div>
    </div>
</div>



<?php foreach($news as $n){ ?>
    <div class="col-md-12">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <div class="col-md-3">
                    <img class="img-thumbnail" src="<?php echo base_url('resources/img/agents/'.$n['id']. '/prof.jpg');?>">
    
                    <h3 class="profile-username text-center">
                        <?php echo $n['author']; ?>
                    </h3>
    
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Agent Id:</b>
                            <a class="pull-right">
                                <?php echo $n['id']; ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Added On:</b>
                            <a class="pull-right">
                                <?php echo $n['added_on']; ?>
                            </a>
                        </li>
                    </ul>
    
                </div>
                <div class="col-md-9">
    
                    <div class="tab-pane">
    
                        <!-- Post -->
                        <div class="post">
    
                            <!-- <div class="pull-left text-center">
                                <img class="img-responsive" src="http://media.rightmove.co.uk/8k/7730/branch_rmchoice_logo_7730_0002_t.jpeg" alt="Uk">
                                <span class="username">
                                    <a href="#">Agency Name</a>
                                </span>
                            </div> -->
                            <ul class="list-inline">
                                
                                <li class="pull-right">
                                    <a href="<?php echo site_url('news/edit/'.$n['id']); ?>" class="btn btn-primary link-white text-sm">
                                        <i class="fa fa-pencil margin-r-5"></i> Edit</a>
                                </li>
                                <li class="pull-right">
                                    <a href="<?php echo site_url('news/remove/'.$n['id']); ?>" class="btn btn-danger link-white text-sm">
                                        <i class="fa fa-trash margin-r-5"></i> Delete</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <h4 class="box-title"><b>Title</b></h4>
                            <p>
                                <?php echo $n['title']; ?>
                            </p>
                            <h4 class="box-title"><b>Description</b></h4>
                            <p>
                                <?php echo $n['detail']; ?>
                            </p>
                        </div>
                        <!-- /.post -->
    
                    </div>
    
                </div>
    
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <?php } ?>
    <div class="clearfix"></div>