<div class="row">
        <div class="col-md-12 text-center">
            <ul class="f-p-links margin_bottom">
            	<?php if($this->session->userdata('userData')['role'] == "agent"){ ?>
                <li><a href="agprof" <?php if($_view == 'frontend/views/user_profile'){ ?> class="active" <?php }?>><i class="icon-icons230"></i>Profile</a></li>
                <li><a href="agent_home" <?php if($_view == 'frontend/views/my_prop'){ ?> class="active" <?php }?> ><i class="icon-icons215"></i> My Properties</a></li>
                <li><a href="ag_submit" <?php if($_view == 'frontend/views/submit_prop'){ ?> class="active" <?php }?> ><i class="icon-icons215"></i> Submit Property</a></li>
               
                <?php }
                else if($this->session->userdata('userData')['role'] == "user")
                { ?>
                	<li><a href="usprof" <?php if($_view == 'frontend/views/user_profile'){ ?> class="active" <?php }?>><i class="icon-icons230"></i>Profile</a></li>
                <!-- <li><a href="ag_submit" <?php if($_view == 'frontend/views/submit_prop'){ ?> class="active" <?php }?> ><i class="icon-icons215"></i> Submit Property</a></li> -->
                <li><a href="usmyfavs" <?php if($_view == 'frontend/views/fav_prop'){ ?> class="active" <?php }?>><i class="icon-icons43"></i> Favorite Properties</a></li>
                <?php }?>
            </ul>
        </div>
    </div>