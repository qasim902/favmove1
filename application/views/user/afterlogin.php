 <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Userid</th>
                        <th>Password</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Usertype</th>
                        <th>Created On</th>
                        <th>Payment Details</th>
                        <th>Myfavorites</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
                        <td>
                            <?php echo $u['userid']; ?>
                        </td>
                        <td>
                            <?php echo $u['password']; ?>
                        </td>
                        <td>
                            <?php echo $u['username']; ?>
                        </td>
                        <td>
                            <?php echo $u['email']; ?>
                        </td>
                        <td>
                            <?php echo $u['usertype']; ?>
                        </td>
                        <td>
                            <?php echo $u['created_on']; ?>
                        </td>
                        <td>
                            <?php echo $u['payment_details']; ?>
                        </td>
                        <td>
                            <?php echo $u['myfavorites']; ?>
                        </td>
                        <td>
                            <a href="<?php echo site_url('user/edit/'.$u['userid']); ?>" class="btn btn-info btn-xs">
                                <span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('user/remove/'.$u['userid']); ?>" class="btn btn-danger btn-xs">
                                <span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>



        </div>

    </div>
 

    <div class="col-md-12">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <div class="col-md-3">
                    <img class="profile-user-img img-responsive img-circle" src="../resources/img/user4-128x128.jpg" alt="User profile picture">

                    <h3 class="profile-username text-center"><?php echo $u['username']; ?></h3>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>User Id:</b>
                            <a class="pull-right"><?php echo $u['userid']; ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>User Type</b>
                            <a class="pull-right"><?php echo $u['usertype']; ?></a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-9">

                    <div class="tab-pane">
                        <h3 class="box-title">Description</h3>
                        <!-- Post -->
                        <div class="post">

                            <p>
                                Lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome tools to help create filler
                                text for everyone from bacon lovers to Charlie Sheen fans.
                            </p>
                            <h4 class="box-title">Town:</h4>
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                            </p>
                            <div class="col-md-4">Empty Div</div>
                            <div class="col-md-4">Empty Div</div>
                            <div class="col-md-4">Empty Div</div>
                            <ul class="list-inline">
                                <li class="pull-right">
                                    <a href="#" class="btn btn-primary link-white text-sm">
                                        <i class="fa fa-pencil margin-r-5"></i> Edit</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#" class="btn btn-danger link-white text-sm">
                                        <i class="fa fa-trash margin-r-5"></i> Delete</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.post -->

                    </div>

                </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

</div>