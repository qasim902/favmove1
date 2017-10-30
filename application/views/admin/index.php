<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>


                <div class="box-body">
                        <div class='col-md-12'>
                            <?php
                            if($this->session->flashdata('successsub'))
                            {
                                echo "<br>
                                <div class='col-md-offset-3 col-md-6'>
                                <div  id='alert-pop' class='text-center alert alert-success'>";
                                
                            echo $this->session->flashdata('successsub');
                            echo "</div> 
                            </div>";
                            
                            }
                            ?>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Password</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach($admin as $a){ ?>
                            <tr>
                                <td>
                                    <?php echo $a['id']; ?>
                                </td>
                                <td>
                                    <?php echo $a['password']; ?>
                                </td>
                                <td>
                                    <?php echo $a['username']; ?>
                                </td>
                                <td>
                                    <?php echo $a['email']; ?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('admin/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">
                                        <span class="fa fa-pencil"></span> Edit</a>
                                    <a href="<?php echo site_url('admin/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">
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