

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Property Listing</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li class="active">Property Listing</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->


    <!--Best Deal Properties-->
    <section id="deals" class="padding bg_light">
    <div class="container">
        <div class="row">

            <div class="col-sm-9">  
      <div class="row">
        <div class="col-sm-12">
          <h2 class="uppercase">Best Deal Properties</h2>
          <br>
          <p class="pull-left heading_space col-md-10">We are proud to present to you some of the best homes, apartments, offices e.g. across England for affordable prices.</p><p class="pull-right heading_space"><?php echo count($viewdata); ?> Listings Found</p>
        </div>
      </div>
      
          <?php foreach($viewdata as $property) {  ?>
    
      <div class="row" style="margin-top:10px;margin-bottom:50px;">
        <div class="col-sm-12">      
         
            <div class="item">
              <div class="media <?php 
              if ($property['property']['is_feat'] == "1")
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
              if ($property['property']['is_feat'] == "1")
              {?>
                <img class="start_tag" src="http://localhost/favmove1/resources/img/favruite.png" alt="property">
              <?php }


              ?>
                   
                  </div>
                  <div class="price <?php if ($property['property']['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['property']['status'] == "rent" || $property['property']['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['property']['status'] == "sold" || $property['property']['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['property']['status'] == "salag" || $property['property']['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> default_clr">
                      
                    <h4>£ <?= $property['property']['price']?> <? if($property['property']['status'] == 'rent') echo "Per Month" ?> - <small><?php if ($property['property']['is_feat'] == "1")
              {
                echo "Featured";
              }
              else if ($property['property']['status'] == "sale")
              {
                echo "For Sale";
              }
              else if ($property['property']['status'] == "rent")
              {
                echo "For Rent";
              }
               else if ($property['property']['status'] == "salag" )
              {
                echo "Sale Agreed";
              }
              else if ($property['property']['status'] == "rentag")
              {
                echo "Rent Agreed";
              }
              else if ($property['property']['status'] == "sold")
              {
                echo "Sold";
              }
              else if ( $property['property']['status'] == "rentd")
              {
                echo "Rented";
              }



              ?> </small></h4>
                  </div>
                  <div class="proerty_text pro_dtl">
                    <h3 class="bottom15"> <a href="property_detail?id=<?php echo $property['prop_id']; ?>"><?= $property['property']['title'] ?></a></h3>
                    <p class="block-with-text">
                      <?= $property['property']['description'] ?>
                    </p>
                  </div>
                  <div class="dealer clearfix">
                    <a href="<?php echo base_url()."/agent_detail?id=".$property['agentdata']['id']?>">
                    <i class="author"><img width="100%" src="<?php echo $assets."img/agency/".$property['agentdata']['agency_id']?>/logo.png" alt="agency"></i>
                    <h4><?= $property['agentdata']['name']?> &nbsp; <small>- Agent</small></h4>
                    <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                  <span><i class="icon-phone4"></i><?= $property['agencydata']['phone']?></span> 
                      <!-- <a href="mailtoagentcontactform"> --><i class="icon-mail-envelope-closed3"></i><!-- </a>  -->
                      </a>
                    </div>
                  <div class=" favroute clearfix">
                    <p class="pull-md-left"<?= $property['agentdata']['name']?></p>
                    <p class="pull-md-left"><?= $property['property']['address']?> </p>
                    <ul class="pull-right">
                      <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                    </ul>
                  </div>
                  <div class="<?php if ($property['property']['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['property']['status'] == "rent" || $property['property']['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['property']['status'] == "sold" || $property['property']['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['property']['status'] == "salag" || $property['property']['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> property_meta"> 
                    <span><i class="icon-select-an-objecto-tool"></i><?= $property['prop_detail']['area']?> sq ft</span>
                    <span><i class="icon-bed"></i><?= $property['prop_detail']['bedrooms']?> Bedrooms</span> 
                    <span><i class="icon-safety-shower"></i><?= $property['prop_detail']['bathrooms']?> Bedrooms</span> 
                    <span><i class="icon-old-television"></i><?= $property['prop_detail']['lounge']?>TV Lounge</span> 
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>
            <?php } ?>


            <div class=" top20 bottom20">
                <h3>Browse property for sale by area</h3>
                <p class=" top10">* Please note that these counts include sold subject to contract</p>
            </div>

            <table class="table table-hover table-striped sal_area">
                <thead>
                    <th>Region</th>
                    <th>No. properties</th>
                    <th>Avg. asking price</th>
                </thead>
                <tbody>
                    <tr class="accordion-toggle" data-toggle="collapse" data-target="#accordion">
                        <td><b>West Midlands</b></td>
                        <td width="30%">12,398</td>
                        <td width="30%">£199,535</td>
                    </tr>
                    <tr class="accordion-body collapse" id="accordion">
                      <td colspan='3' style="padding:0px">
                        <table class="table" style="margin: 0;" width="100%" cellspacing="0" cellpadding="0">
                          <tbody>
                            <tr>
                              <td>Herefordshire</td>
                              <td width="30%">6,744</td>
                              <td width="30%">£456,646</td>
                            </tr>
                            <tr>
                              <td>Wiltshire</td>
                              <td width="30%">6,744</td>
                               <td width="30%">£456,646</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="accordion-toggle" data-toggle="collapse" data-target="#accordion2">
                        <td><b>North West England</b></td>
                        <td width="30%">59,398</td>
                        <td width="30%">£199,535</td>
                        <!-- <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i></td> -->
                      </tr>
                      <tr class="accordion-body nestd_tbl collapse" id="accordion2">
                        <td colspan="3" style="padding:0px">
                            <table class=" table " style="margin: 0;" width="100%" cellspacing="0" cellpadding="0">
                            
                            <tbody>
                              <tr>
                                  <td>Berkshire</td>
                                  <td width="30%">6,744</td>
                                  <td width="30%">£456,646</td>
                              </tr>
                              <tr>
                                  <td>Berkshire</td>
                                  <td width="30%">6,744</td>
                                  <td width="30%">£456,646</td>
                              </tr>
                              <tr>
                                  <td>Berkshire</td>
                                  <td width="30%">6,744</td>
                                  <td width="30%">£456,646</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr class="accordion-toggle" data-toggle="collapse" data-target="#accordion3">
                          <td><b>West Midlands</b></td>
                          <td width="30%">12,398</td>
                          <td width="30%">£199,535</td>
                      </tr>
                      <tr class="accordion-body collapse" id="accordion3">
                        <td colspan='3' style="padding:0px">
                          <table class="table" style="margin: 0;" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                  <td>Herefordshire</td>
                                  <td width="30%">6,744</td>
                                  <td width="30%">£456,646</td>
                              </tr>
                              <tr>
                                <td>Wiltshire</td>
                                <td width="30%">6,744</td>
                                 <td width="30%">£456,646</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                </tbody>
              </table>

            </div>

            <div class="col-sm-3 bottom10 top30">
                <div class="top30">
                  <aside class="col-md-12 col-xs- top30">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="#">
                          <div class="image-2">
                            <img src="https://tpc.googlesyndication.com/simgad/15734968460721435892" alt="" class="img_ad" width="300" height="160" border="0">
    
                          </div>
                        </a>
                      </div>
                    </div>
                  </aside>
                </div>
            </div>
    

    </div>
    </div>
  </section>
  