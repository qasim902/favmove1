

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


<!-- Property Search area Start -->
<section class="property-query-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="uppercase">Advanced Search</h2>
        <p class="heading_space"> We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <form class="callus" action="search?type=prop" method="POST">
    <div class="row">
       <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <input type="text" class="keyword-input" name="keyword" placeholder="Keyword (e.g. 'office')">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro town_dtl">
              <select name="town_id">
                <option value="">Select Town</option>
                <?php 
                
                foreach($defdata['all_uk_towns'] as $uk_town)
                {
                  $selected = ($uk_town['postcode'] == $this->input->post('town_id')) ? ' selected="selected"' : "";

                  echo '<option value="'.$uk_town['postcode'].'" '.$selected.'>'.$uk_town['postcode'].','.$uk_town['town'].', '.$uk_town['region'].', '.$uk_town['uk_region'].'.</option>';
                } 
                ?>
              </select>
            </div>
          </div>
        </div>
   
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="prop_stat">
                <option value="" class="active">Select Status</option>
                <option value="sale">For Sale</option>
                <option value="rent">For Rent</option>
                <option value="salag">Sale Agreed</option>
                <option value="renag">Rent Agreed</option>
                <option value="sold">Sold</option>
                <option value="rentd">Rented</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row ">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="bed">
                    <option value="" class="active">Min. Beds</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="bath">
                    <option value="" class="active">Min Baths</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" name="min_area" class="keyword-input" placeholder="Min Area (sq ft)">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" name="max_area" class="keyword-input" placeholder="Max Area (sq ft)">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8">
              <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="min_price">

                    <option value="" class="active">Price (Min)</option>
                    <option value="10000">£ 10000</option>
                    <option value="20000">£ 20000</option>
                    <option value="30000">£ 30000</option>
                    <option value="40000">£ 40000</option>
                    <option value="50000">£ 50000</option>
                    <option value="60000">£ 60000</option>
                    <option value="70000">£ 70000</option>
                    <option value="80000">£ 80000</option>
                    <option value="90000">£ 90000</option>
                    <option value="100000">£ 100000</option>
                    <option value="110000">£ 110000</option>
                    <option value="120000">£ 120000</option>
                    <option value="130000">£ 130000</option>
                    <option value="140000">£ 140000</option>
                    <option value="150000">£ 150000</option>
                    <option value="175000">£ 175000</option>
                    <option value="200000">£ 200000</option>
                    <option value="250000">£ 250000</option>
                    <option value="300000">£ 300000</option>
                    <option value="350000">£ 350000</option>
                    <option value="400000">£ 400000</option>
                    <option value="450000">£ 450000</option>
                    <option value="500000">£ 500000</option>
                    <option value="600000">£ 600000</option>
                    <option value="700000">£ 700000</option>
                    <option value="800000">£ 800000</option>
                    <option value="900000">£ 900000</option>
                    <option value="1000000">£ 1000000</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="max_price">
                    <option value="" class="active">Price (Max)</option>
                    <option value="10000">£ 10000</option>
                    <option value="20000">£ 20000</option>
                    <option value="30000">£ 30000</option>
                    <option value="40000">£ 40000</option>
                    <option value="50000">£ 50000</option>
                    <option value="60000">£ 60000</option>
                    <option value="70000">£ 70000</option>
                    <option value="80000">£ 80000</option>
                    <option value="90000">£ 90000</option>
                    <option value="100000">£ 100000</option>
                    <option value="110000">£ 110000</option>
                    <option value="120000">£ 120000</option>
                    <option value="130000">£ 130000</option>
                    <option value="140000">£ 140000</option>
                    <option value="150000">£ 150000</option>
                    <option value="175000">£ 175000</option>
                    <option value="200000">£ 200000</option>
                    <option value="250000">£ 250000</option>
                    <option value="300000">£ 300000</option>
                    <option value="350000">£ 350000</option>
                    <option value="400000">£ 400000</option>
                    <option value="450000">£ 450000</option>
                    <option value="500000">£ 500000</option>
                    <option value="600000">£ 600000</option>
                    <option value="700000">£ 700000</option>
                    <option value="800000">£ 800000</option>
                    <option value="900000">£ 900000</option>
                    <option value="1000000">£ 1000000</option>
                  </select>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-4 text-right form-group">

              <input name="type" type="hidden" value="prop">
              <button type="submit" class="btn-blue border_radius ">Search</button>
            </div>
          </div>
        </div>
 
    </div>
    <div class="group-button-search">
      <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
        <div class="text-1">Show more search options</div>
        <div class="text-2 hide">less more search options</div>
      </a>
    </div>
    <div class="search-propertie-filters collapse">
      <div class="container-2">
        <div class="row">
          <!-- <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Air Conditioning</span>
            </div>
          </div> -->
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class=" white">
              <input type="checkbox" name="AC" value="1">
              <span>Air Conditioning</span>
            </div>
          </div> 
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class=" white">
              <input type="checkbox" name="bbq" value="1">
              <span>Barbeque Grill</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class=" white">
              <input type="checkbox" name="Balcony" value="1">
              <span>Balcony</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              <input type="checkbox" name="Laundry" value="1">
              <span>Laundry</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              
                <input name="Theater" type="checkbox" value="1"> 
                <span>Theater</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              <input type="checkbox" name="Lawn" value="1">
              <span>Lawn</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              <input type="checkbox" name="Basement" value="1">
              <span>Basement</span>
            </div>
          </div>
          
        </div>
      </div>
    </div>
         </form>
  </div>
</section>
<!-- Property Search area End -->



    <!--Best Deal Properties-->
    <section id="deals" class="padding bg_light">
    <div class="container">
        <div class="row">

            <div class="col-sm-9">  
      <div class="row">
        <div class="col-sm-12 ">
          <h2 class="uppercase">Best Deal Properties</h2>
          <p class="pull-left pro_lis col-md-10">We are proud to present to you some of the best homes, apartments, offices e.g. across England for affordable prices.</p>
          <p class="pull-right"><?php echo count($viewdata); ?> Listings Found</p>
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
                    <a href="<?php echo base_url()."agent_detail?id=".$property['agentdata']['id']?>">
                    <i class="author"><img width="70px" src="<?php echo base_url('resources/img/agents/' . $property['agentdata']['image']);?>" alt="agency"></i>
                    <h4><?= $property['agentdata']['fname'] ." ". $property['agentdata']['lname']?> &nbsp; <small>- Agent</small></h4>
                    <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                  <span><i class="icon-phone4"></i><?= $property['agentdata']['phone']?></span> 
                      <!-- <a href="mailtoagentcontactform"> --><i class="icon-mail-envelope-closed3"></i><!-- </a>  -->
                      </a>
                    </div>
                  <div class=" favroute clearfix">
                    <p class="pull-md-left"<?= $property['agentdata']['fname'] ." ". $property['agentdata']['lname']?></p>
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
            
         
           <?php }?>
          
          
        


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
                        <td><b>Aberdeen City Scotland</b></td>
                        <td width="30%"><?php echo $avg['one'];?></td>
                        <td width="30%"><?php echo "£ ". (int)$avg['two'];?></td>
                    </tr>
                    <tr class="accordion-body collapse" id="accordion">
                      <td colspan='3' style="padding:0px">
                        <table class="table" style="margin: 0;" width="100%" cellspacing="0" cellpadding="0">
                          <tbody>
                       
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
  