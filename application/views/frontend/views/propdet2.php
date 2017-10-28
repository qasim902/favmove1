

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Property Details</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Properties</a></li>
          <li class="active">Property Details</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->


<!-- Property Detail -->
<section id="property" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 listing1 property-details">
        <h2 class="text-uppercase"><?= $viewdata['property']['title'] ?></h2>
        <p class="bottom10"><?= $viewdata['property']['address'] ?></p>
        <div id="property-d-1" class="owl-carousel single">
          <div class="item"><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
        </div>
        <div id="property-d-1-2" class="owl-carousel single">
          <div class="item" ><img src="<?= $assets;?>img/property-details/property-d-1-1.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/property-d-s-1-2.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/property-d-s-1-3.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/property-d-s-1-4.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/property-d-s-1-5.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/property-d-s-1-1.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/property-d-s-1-2.jpg" alt="image"/></div>
        </div>
        <div class="property_meta bg-black bottom40">
          <span><i class="icon-select-an-objecto-tool"></i><?= $viewdata['prop_detail']['area'] ?> sq ft</span>
          <span><i class="icon-safety-shower"></i><?= $viewdata['prop_detail']['bathrooms'] ?> Bathroom</span>
          <span><i class="icon-bed"></i><?= $viewdata['prop_detail']['bedrooms'] ?> Bedroom</span>
          <span><i class="icon-old-television"></i><?= $viewdata['prop_detail']['lounge'] ?> TV Lounge</span>
          <span><i class="icon-garage"></i><?= $viewdata['prop_detail']['garage'] ?> Garage</span>
        </div>

        <h2 class="text-uppercase">Description</h2>
      <p><?= $viewdata['property']['description'] ?></p>

      </div>
      <div class="col-md-4 listing1 property-details">  
        <h2 class="text-uppercase top10">Property Description</h2>
        <div class="top15 bottom15">
            <div class="agent_wrap">
                <p><b>Property is marketed by:</b></p>
                <div class="text-center">
                     <img src="<?php echo $assets."img/agency/".$viewdata['agentdata']['agency_id']?>/logo.png" alt="agency">
                </div>
              <!-- <div class="image">
                <img src="<?= $assets;?>img/agent-one.jpg" alt="Agents">
              </div> -->
            </div>
          </div>
          <div class="bottom40">
            <div class="agent_wrap">
              <!-- <h3>Bohdan Kononets</h3> -->
              <div class="bottom10 agnt_dtl">
                <a href="#"><?= $viewdata['agency']['name'] ?></a>
              </div>
              <p class="bottom10"><?= $viewdata['agency']['address'] ?></p>
              <div class="agnt_dtl">
                <a href="#">View properties from this agent</a>
                <a class="btn btn-default btn-block top10 bottom10" href="#">Request Details</a>
              </div>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right"><?= $viewdata['agency']['phone'] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#."><?= $viewdata['agentdata']['email'] ?></a></td>
                  </tr>
                  <tr>
                    <td><strong><a href="addtofav?id=<?php echo $viewdata['property']['prop_id']; ?>"><i class="icon-heart"></i>Save Property
              
                     <!-- <input type="hidden" name="propid" value="<?= $viewdata['property']['prop_id'] ?>"> -->
                    </a></strong></td>
                    <td class="text-right"><strong><a href="#"> <i class="icon-file"></i>Print</a></strong></td>
                  </tr>
                  <tr>
                    <td><strong><a href="#"> <i class="icon-pencil"></i>Add notes</a></strong></td>
                    <td class="text-right"><strong><a href="#"> <i class="icon-mail"></i>Send to Friend</a></strong></td>
                  </tr>
                  
                </tbody>
              </table>
              <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
              <ul class="social_share">
                <li><a href="https://www.facebook.com/sharer.php?u=<?php echo current_url();?>" class="facebook"><i class="icon-facebook-1"></i></a></li>
                <li><a href="https://plus.google.com/share?url=<?php echo current_url();?>"class="google"><i class="icon-google4"></i> </a></li>
                <li><a href="http://twitter.com/share?text=<?php echo $viewdata['property']['title'];?>&url=<?php echo current_url();?>" class="twitter"><i class="icon-twitter-1"></i></a></li>
                <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo current_url();?>" class="linkden"><i class="fa fa-linkedin"></i></a></li>
     
              </ul>
            </div>
            <div class="image top20">
              <img class="img-responsive" src="<?php echo $assets."img/agency/".$viewdata['agentdata']['agency_id']?>/ad.jpg" alt="agency">
                <!-- <img class="img-responsive" src="http://media.rightmove.co.uk/46k/45383/1491465779150_bp_mpu_r.jpg" alt="Roffeys Residential, Sales logo"> -->
            </div>
            
          </div>
      </div>


        <div class="col-md-12 listing1 property-details">
          
      <div class="tabbable-panel">
          <div class="tabbable-line">

            <ul class="nav nav-tabs ">
              <li class="active">
                <a href="#tab_default_1" data-toggle="tab">
                Details </a>
              </li>
              <li>
                <a href="#tab_default_2" data-toggle="tab">
                Features </a>
              </li>
              <li>
                <a href="#tab_default_3" data-toggle="tab">
                 Video  </a>
              </li>
              <li>
                  <a href="#tab_default_4" data-toggle="tab">
                   Map  </a>
              </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane active" id="tab_default_1">
                  <h2 class="text-uppercase bottom20">Quick Summary</h2>
                  <div class="row property-d-table bottom40">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <table class="table table-striped table-responsive">
                        <tbody>
                          <tr>
                            <td><b>Property Id</b></td>
                            <td class="text-right"><?= $viewdata['property']['prop_id'] ?></td>
                          </tr>
                          <tr>
                            <td><b>Price</b></td>
                            <td class="text-right">£ <?= $viewdata['property']['price'] ?> / month</td>
                          </tr>
                          <tr>
                            <td><b>Property Size</b></td>
                            <td class="text-right"><?= $viewdata['prop_detail']['area'] ?> sq ft</td>
                          </tr>
                          <tr>
                            <td><b>Bedrooms</b></td>
                            <td class="text-right"><?= $viewdata['prop_detail']['bedrooms'] ?></td>
                          </tr>
                          <tr>
                            <td><b>Bathrooms</b></td>
                            <td class="text-right"><?= $viewdata['prop_detail']['bathrooms'] ?></td>
                          </tr>
                          <tr>
                            <td><b>Available From</b></td>
                            <td class="text-right"><?= $viewdata['property']['created_on'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <table class="table table-striped table-responsive">
                        <tbody>
                          <tr>
                            <td><b>Status</b></td>
                            <td class="text-right"><?= $viewdata['property']['status'] ?></td>
                          </tr>
                          <tr>
                            <td><b>Year Built</b></td>
                            <td class="text-right"><?= $viewdata['property']['yearb'] ?></td>
                          </tr>
                          <tr>
                            <td><b>Garages</b></td>
                            <td class="text-right"><?= $viewdata['prop_detail']['garage'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
          
                  <section id="about" class="padding_bottom">
                    <div class="">
                      <div class="row">
                        <div class="col-sm-12">
                          <h2 class="uppercase">About Property</h2>
                          <span class="bottom15">A few words about the house</span>
                          <p class="heading_space"><?= $viewdata['property']['excerpt'] ?></p>
                        </div>
                      </div>
                      <div class="row number-counters text-center">
                        <!-- first count item -->
                        <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
                          <i class="icon-icons215"></i>
                          <p>Years of Built</p>
                          <!-- Set Your Number here. i,e. data-to="56" -->
                          <strong data-to="<?= $viewdata['property']['yearb'] ?>"><?= $viewdata['property']['yearb'] ?></strong>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
                          <i class="icon-bed"></i>
                          <p>Number of Bedrooms</p>
                          <strong data-to="<?= $viewdata['prop_detail']['bedrooms'] ?>"><?= $viewdata['prop_detail']['bedrooms'] ?></strong>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
                          <i class="icon-safety-shower"></i>
                          <p>Number of Bathrooms</p>
                          <strong data-to="<?= $viewdata['prop_detail']['bathrooms'] ?>"><?= $viewdata['prop_detail']['bathrooms'] ?></strong>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
                          <i class="icon-old-television"></i>
                          <p>TV Lounge</p>
                          <strong data-to="<?= $viewdata['prop_detail']['lounge'] ?>"><?= $viewdata['prop_detail']['lounge'] ?></strong>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
                          <i class="icon-garage"></i>
                          <p>Parking Garage</p>
                          <strong data-to="<?= $viewdata['prop_detail']['garage'] ?>"><?= $viewdata['prop_detail']['garage'] ?></strong>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
                          <i class="icon-select-an-objecto-tool"></i>
                          <p>Square Feet</p>
                          <strong data-to="<?= $viewdata['prop_detail']['area'] ?>"><?= $viewdata['prop_detail']['area'] ?></strong>
                        </div>
                      </div>
                      <div class="text-center">
                        <a href="contact_agent?id=<?= $viewdata['agentdata']['id'] ?>" class="btn-blue border_radius uppercase">Contact owner</a> 
                        <a href="#." class="btn-dark border_radius uppercase">get directions</a>
                      </div>
                    </div>
                  </section>
          
          
                
              </div>

              <div class="tab-pane" id="tab_default_2">
                  <h2 class="text-uppercase bottom20">Features</h2>
                  <div class="bottom40">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                        <?php foreach($viewdata['features'] as $key => $feature){
                if ($feature == "1" && $key != "prop_id")
                {
                ?> 
              <li>
                <?= $key ?>
              </li>
              <?php }} ?>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <!-- Empty Section -->
                    </div>
                  </div>
                  <h2 class="text-uppercase">Features</h2>
                  <p class="bottom20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, 
                    vulputate mauris. Ut adipiscing gravida tincidunt.
                  </p>
                  <div class="row bottom40">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="pro-img">
                        <figure class="wpf-demo-gallery">
                          <img src="<?= $assets;?>img/property-details/property-d-1-f-1.jpg" alt="image"/>
                          <figcaption class="view-caption">    
                            <a data-fancybox-group="gallery" class="fancybox" href="<?= $assets;?>img/property-details/property-d-1-f-1.jpg"><i class="icon-focus"></i></a>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="pro-img">
                        <figure class="wpf-demo-gallery">
                          <img src="<?= $assets;?>img/property-details/property-d-1-f-2.jpg" alt="image"/>
                          <figcaption class="view-caption">    
                            <a data-fancybox-group="gallery" class="fancybox" href="<?= $assets;?>img/property-details/property-d-1-f-1.jpg"><i class="icon-focus"></i></a>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="pro-img">
                        <figure class="wpf-demo-gallery">
                          <img src="<?= $assets;?>img/property-details/property-d-1-f-3.jpg" alt="image"/>
                          <figcaption class="view-caption">    
                            <a data-fancybox-group="gallery" class="fancybox" href="<?= $assets;?>img/property-details/property-d-1-f-1.jpg"><i class="icon-focus"></i></a>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                  </div>
              </div>
              <?php if ($viewdata['property']['video_embed']){ ?> 
              
              <div class="tab-pane" id="tab_default_3">
                  <h2 class="text-uppercase bottom20">Video Presentation</h2>
                  <div class="bottom40">
                    <div class="col-md-12 padding-b-20">
                      <div class="pro-video">
                        <figure class="wpf-demo-gallery">
                          <video  class="video" controls>
                            <source src="<?= $assets;?>/video/video.mp4" type="video/mp4">
                            <!-- <source src="<?= $assets;?>/video/video.ogg" type="video/ogg"> -->
                          </video>
                        </figure>
                      </div>
                    </div>
                  </div>
              </div>
              <?php } ?>
              <div class="tab-pane" id="tab_default_4">
                  <h2 class="text-uppercase bottom20">Property Map</h2>
                  <div class=" bottom40">
                    <div class="col-md-12 bottom20">
                      <div class="property-list-map">
                        <div id="property-listing-map" class="multiple-location-map" style="width:100%;height:430px;"></div>
                      </div>
                    </div>
                    <!-- <div class="social-networks">
                      <div class="social-icons-2">
                        <span class="share-it">Share this Property</span>
                        <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span>
                        <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
                        <span><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Google +</a></span>
                      </div>
                    </div> -->
                  </div>
              </div>
              

            </div>
          </div>
        </div>
        
        
        

      <div class="col-md-12  top20">
            <div class="alert alert-info">
              <div class="col-md-12  bottom20">To view this property or request more details, contact:</div>
              <div class="top10">
                  <div class="col-md-2">
                      <a href="#">
                        <img src="<?php echo $assets."img/agency/".$viewdata['agentdata']['agency_id']?>/logo.png" alt="agency">
                      </a>
                  </div>
                  <div class="col-md-6">
                      <div class="agent_wrap">
                          <!-- <h3>Bohdan Kononets</h3> -->
                          <div class="bottom10 agnt_dtl">
                            <a href="#"><?= $viewdata['agency']['name'] ?></a>
                          </div>
                          <p class="bottom10"><?= $viewdata['agency']['address'] ?></p>
                          <div class="agnt_dtl">
                            <a href="properties?ag=<?= $viewdata['agentdata']['id'] ?>">View properties from this agent</a>
                          </div>
                          
                        </div>
                  </div>

              </div>
              <div class="clearfix"></div>
            </div>
      </div>
<div class="col-md-12  top20">
         
          <!-- <div class="col-md-12  bottom20">
            <h2 class="uppercase">Monthly running costs</h2>
          </div> -->
          <div class="top10 col-md-5">
              <h3 class=" bottom20 uppercase"><b>Monthly running costs</b></h3>
            <div class="mortgage">
                <div class="mortgage_hdng">
                  <h4>Mortgage</h4>
                </div>
                
                <div class="mortgage_cal">
                  <div class="col-md-12">
                    <div class="pull-left">
                      <h4 class="uppercase">Total:</h4>
                    </div>
                    <div class="pull-right">
                      <input class="mortgage_input" type ="text" value="8600.00" name="total" id="total_amount"  disabled="" />
                    </div>
                  </div>

                  <div class="col-md-12 top20">
                    <div class="pull-left bottom20">
                      <h4 class="uppercase">Deposite( <span id="deposite_value1"></span> %): </h4>
                    </div>
                    <div class="pull-right bottom20">
                        <span class="mortgage_input"  id="deposite_value2"></span>
                    </div>
                    <div class=" top20">
                      <input type="range" min="0" max="100" value="10" step="1" class="slider" id="deposite_range" name="deposite2">
                    </div>
                  </div>
                
                  <div class="col-md-12 top20">
                    <div class="pull-left bottom20">
                      <h4 class="uppercase">Re-payment Time:<span id="deposite_value1"></span> </h4>
                    </div>
                    <div class="pull-right bottom20">
                        <span id="repayment_value1"></span>
                    </div>
                    <div class=" top20">
                        <input type="range" min="5" max="35" value="25" step="1" class="slider" id="repayment_term" name="repayment_term2">
                    </div>
                  </div>
                  
                  <div class="col-md-12 top20">
                    <div class="pull-left bottom20">
                        <h4 class="uppercase">Intrest (<span id="intrest_value1"></span>%): </h4>
                    </div>
                    <div class="pull-right bottom20">
                        <span id="intrest_value2"></span>
                    </div>
                    <div class=" top20">
                        <input type="range" min="1.0" max="15.0" value="1.5" step="0.5" class="slider" id="intrest" name="intrest2" />
                    </div>
                  </div>
                
                
                  <div class="col-md-12 top20">
                    <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="pull-left">
                            <h4 class="uppercase">Your Payment:</h4>
                          </div>
                          <div class="pull-right">
                            <h4><span>£ </span><span id="final_result"></span><span> /month</span></h4>
                          </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                <div class="clearfix"></div>
                </div>

            </div>

          </div>
          <script>

var total_amount = document.getElementById("total_amount");

var deposite_range = document.getElementById("deposite_range");
var deposite_value1 = document.getElementById("deposite_value1");
var deposite_value2 = document.getElementById("deposite_value2");

var repayment_term = document.getElementById("repayment_term");
var repayment_value1 = document.getElementById("repayment_value1");
var intrest_value2 = document.getElementById("intrest_value2");

var intrest = document.getElementById("intrest");
var intrest_value1 = document.getElementById("intrest_value1");
var intrest_value2 = document.getElementById("intrest_value2");

var final_result = document.getElementById("final_result");

oninput = function() {
 deposite_value2.innerHTML = (deposite_range.value*total_amount.value)/100;
 deposite_value1.innerHTML =  deposite_range.value;
 repayment_value1.innerHTML = repayment_term.value;
 intrest_value1.innerHTML = intrest.value;

    var a = total_amount.value; // Total amount of property
    var b = deposite_range.value; //Deposite value
    var d = (a/100)*b; // Create percentage amount of total value of total value 
  var c = a - d; // deposite minus from total
  var inter = intrest.value; //Intrest value in percentage
  var inter_num = intrest.value/100; //convert percentage into num
  var intrest_final = inter_num/12; //divide by 12 [ percentage num value ] for monthly mortgage calculation. Will use in expression 
  var repay = repayment_term.value; // Re-payment time value
  var repay_months = repay*12; // Re-payment multiply with 12. Requirement for expression
  
  // Expression
  // monthly_mortgage = c* [   { r*(pow((r+1), n)) }  / { pow((r+1), n) -1 }   ]
  
  var upper = (intrest_final*(Math.pow((intrest_final+1),repay_months)));
  var down = (Math.pow((intrest_final+1),repay_months)-1);
  final_result.innerHTML = Math.floor(c*(upper/down)); // Use Math.floor function to avoid float value.
  
  
}
</script>
          <div class="top10 col-md-7">
              <h3 class=" bottom20 uppercase"><b>Contact <?= $viewdata['agency']['name'] ?> about this property</b></h3>
              <form method="POST" action="userinquiry">
              <div class="row top20">
                <div class="col-md-3">
                  <div class="ag_name">
                    <label for="name"><b>Name: *</b></label>
                  </div>
                </div>
                <div class=" col-md-9">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name" id="usr" name="fullname">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="ag_name">
                    <label for="email"><b>Email: *</b></label>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="ag_name">
                    <label for="phone"><b>Phone: *</b></label>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" placeholder="Phone" class="form-control" name="phone" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="ag_name">
                    <label for="postcode"><b>My Postcode:</b></label>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" placeholder="Postcode" class="form-control" name="postcode" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="ag_name">
                    <label for="message"><b>Message (Optional): </b></label>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <textarea type="text" placeholder="Message" class="form-control" name="message"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label><b>About me: </b></label>
                </div>
                <div class="col-md-9">
                  <div class=" form-group">
                    <select  class=" form-control" name="useroption">
                        <option value="">Please select:</option>
                        <option value="property_to_sell">I have a property to sell</option>
                        <option value="property_to_let">I have a property to let</option>
                        <option value="offer_on_own_property">I have an offer on my property</option>
                        <option value="recently_sold">I have recently sold</option>
                        <option value="first_time_buyer">I am a first-time buyer</option>
                        <option value="looking_to_invest">I am an investor/I'm hoping to invest</option>
                        <option value="no_property_to_sell">I do not have a property to sell</option>
                        <option value="other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="checkbox">
                        <label><input type="checkbox" value="1" name="favmoveInfo">I wish to receive information from Favorite Move or selected partners</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="1" name="mailcopy">Send a copy to my email address</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="1" name="currServices"> Contact me about currency services (beat the bank and save 2-3% on purchase prices) </label>
                    </div> 
                </div>
                <div class="col-md-9">
                  <input type="submit" value="Send Message" class="btn-blue border_radius top15">
                </div>
              </div>
              <input type="hidden" name="agemail" value="<?php echo $viewdata['agentdata']['email']; ?>">
              <input type="hidden" name="agid" value="<?php echo $viewdata['agentdata']['id']; ?>">
            </form>
              <div class="col-md-12 text-right form-group">
                <input name="type" type="hidden" value="prop">
                
              </div>
          </div>
          <div class="clearfix"></div>
          
        </div>


      </div>

      </div>

     

    </div>
  </div>
</section>
<!--  Property Detail End -->
