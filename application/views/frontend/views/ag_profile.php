
  <!-- Page Banner Start-->
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">User Profile</h1>
          <ol class="breadcrumb text-center ">
            <li><a href="#">Home</a></li>
            <li><a href="#">Agent</a></li>
            <li class="active">Agent Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Banner End -->
  <!-- <?php if (isset($curr_login)){ ?>
    <div class="container-fluid">
        <div class="row" style="margin-top: 25px">
            <div class="col-md-12">
            <div align="center">
                <?php $this->load->view('frontend/layouts/usernav.php', $_view);?>
            </div>
            </div>
        </div>  
    </div>
  <?php } ?> -->
  <!-- User Profile -->
  <section id="agents" class="padding_bottom_half padding_top">
    <div class="container-fluid">

      <div class="col-md-2 col-xs-12">
        <div class="listing1">
          <div class="bottom40">

            <div class="agent_wrap">
              <div class="image user_img">
                <img class="img-responsive" src="<?= $assets.'img/agents/'. $viewdata['agentdata']['id'].'/prof.jpg'?>" alt="User">
              </div>
              <div class="usr_nam">
                <h3><?= $viewdata['agentdata']['name']?></h3>
              </div>
              <!-- required for floating -->
              <!-- Nav tabs -->
              <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#home" data-toggle="tab">My Listings</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Inquiries</a></li>
                <li><a href="#settings" data-toggle="tab">Inbox</a></li>
              </ul>

            </div>

          </div>
        </div>

      </div>
      <div class="col-md-10 col-xs-12">
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <!-- Content -->
            <div id="deals" class="bottom40">
              <div class="row">
                <div class="col-sm-12">

                   <?php foreach($viewdata['my_prop'] as $property) {  ?>
    
      <div class="row" style="margin-top:50px;margin-bottom:50px;">
        <div class="col-sm-10">      
         
            <div class="item">
              <div class="media <?php 
              if ($property['is_feat'] == "1")
              {
                echo "fea_dtls";
              }


              ?> deal_media proerty_content">
                <div class="media-left">
                  <a href="property_detail?id=<?php echo $property['prop_id']; ?>">

                  <img class="media-object" src="<?= $assets ?>img/properties/<?php echo $property['prop_id']."/cover.jpg"?>" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <div  class="pull-right ">
              <?php 
              if ($property['is_feat'] == "1")
              {?>
                <img class="start_tag" src="http://localhost/favmove1/resources/img/favruite.png" alt="property">
              <?php }


              ?>
                   
                  </div>
                  <div class="price <?php if ($property['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['status'] == "rent" || $property['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['status'] == "sold" || $property['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['status'] == "salag" || $property['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> default_clr">
                      
                    <h4>£ <?= $property['price']?> <? if($property['status'] == 'rent') echo "Per Month" ?> - <small><?php if ($property['is_feat'] == "1")
              {
                echo "Featured";
              }
              else if ($property['status'] == "sale")
              {
                echo "For Sale";
              }
              else if ($property['status'] == "rent")
              {
                echo "For Rent";
              }
               else if ($property['status'] == "salag" )
              {
                echo "Sale Agreed";
              }
              else if ($property['status'] == "rentag")
              {
                echo "Rent Agreed";
              }
              else if ($property['status'] == "sold")
              {
                echo "Sold";
              }
              else if ( $property['status'] == "rentd")
              {
                echo "Rented";
              }



              ?> </small></h4>
                  </div>
                  <div class="proerty_text pro_dtl">
                    <h3 class="bottom15"> <a href="property_detail?id=<?php echo $property['prop_id']; ?>"><?= $property['title'] ?></a></h3>
                    <p class="block-with-text">
                      <?= $property['description'] ?>
                    </p>
                  </div>
                  <div class="dealer clearfix"> 
                  
                    <i class="author"><img width="70" src="<?php echo $assets."img/agency/".$viewdata['agentdata']['agency_id']?>/logo.png" alt="agency"></i>
                    <h4><?= $viewdata['agentdata']['name']?> &nbsp; <small>- Agent</small></h4>
                    <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                  <span><i class="icon-phone4"></i><?= $viewdata['agentdata']['phone']?></span> 
                      <a href="mailtoagentcontactform"><i class="icon-mail-envelope-closed3"></i></a> 
                    </div>
                  <div class=" favroute clearfix">
                    <p class="pull-md-left"<?= $viewdata['agentdata']['name']?></p>
                    <p class="pull-md-left"><?= $property['address']?> </small></p>
                    <ul class="pull-right">
                      <!-- <li><a href="javascript:void(0)" data-toggle="tooltip" title="Favourite"><i class="icon-like"></i></a></li> -->
                      <li><a href="javascript:void(0)" data-toggle="tooltip" title="Edit"><i class="icon-edit"></i></a></li>
                      <li><a href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="icon-trash"></i></a></li>
                    </ul>
                  </div>
                  <div class="<?php if ($property['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['status'] == "rent" || $property['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['status'] == "sold" || $property['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['status'] == "salag" || $property['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> property_meta"> 
                    <span><i class="icon-select-an-objecto-tool"></i><?= $property['prop_details']['area']?> sq ft</span>
                    <span><i class="icon-bed"></i><?= $property['prop_details']['bedrooms']?> Bedrooms</span> 
                    <span><i class="icon-safety-shower"></i><?= $property['prop_details']['bathrooms']?> Bedrooms</span> 
                    <span><i class="icon-old-television"></i><?= $property['prop_details']['lounge']?>TV Lounge</span> 
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>
            <?php } ?>
                </div>
              </div>
            </div>


          </div>
          <div class="tab-pane" id="profile"></div>

          <div class="tab-pane" id="messages">
            <?php  
            if(!empty($viewdata['my_inq'])){
            foreach ($viewdata['my_inq'] as $inq) { ?>
              <div class="box box-primary">
              <div class="box-body box-profile">
                  <div class="col-md-6">

                      <div class="tab-pane">

                          <div class="invoice-col">
                              <br>
                              <div class="col-md-12">
                                  <div class="col-md-12">
                                      <h3 class="box-title">
                                          <b>User Detail</b>
                                      </h3>
                                  </div>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Name:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                      <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['fullname'];
                                          
                                          
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Option:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                          
                                              echo $inq['useroption'];
                                          
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Email:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                         <?php
                                              echo $inq['email'];
                                          
                                          
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Phone:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['phone'];
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>

                                  <div class="col-md-12">
                                      <h5 class="box-title">
                                          <b>Description</b>
                                      </h5>
                                      <p>
                                      <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['message'];
                                          
                                      
                                          ?>
                                      </span>
                                      </p>
                                  </div>
                              </div>
                          </div>


                          <div class="clearfix"></div>
                      </div>

                  </div>

                  <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>
        <?php  }
        }
        else
        {
          echo "<h2>No inquiry for you.</h2>";
        }
            ?>
            </div>
          
          <div class="tab-pane" id="settings">
            <?php  
            if(!empty($viewdata['my_inbox'])){
            foreach ($viewdata['my_inbox'] as $inq) { ?>
              <div class="box box-primary">
              <div class="box-body box-profile">
                  <div class="col-md-6">

                      <div class="tab-pane">

                          <div class="invoice-col">
                              <br>
                              <div class="col-md-12">
                                  <div class="col-md-12">
                                      <h3 class="box-title">
                                          <b>User Detail</b>
                                      </h3>
                                  </div>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Name:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                      <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['name'];
                                          
                                          
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Option:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                          
                                              echo $inq['phone'];
                                          
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Email:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                         <?php
                                              echo $inq['email'];
                                          
                                          
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Phone:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['message'];
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>

                                  
                              </div>
                          </div>


                          <div class="clearfix"></div>
                      </div>

                  </div>

                  <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>
        <?php  }
        }
        else
        {
          echo "<h2>No inbox for you.</h2>";
        }
            ?>

          </div>

        </div>
      </div>
      <div class="clearfix"></div>

    </div>
  </section>
  <!-- User Profile End -->
