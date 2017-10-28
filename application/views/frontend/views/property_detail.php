
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
      <div class="col-md-7 listing1 property-details">
        <h2 class="text-uppercase"><?= $viewdata['property']['title'] ?></h2>
        <p class="bottom15"><?= $viewdata['property']['address'] ?></p>
        <div id="property-d-1" class="owl-carousel single">
          <div class="item"><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-1-1.jpg" alt="image"/></div>
          <div class="item"><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-1-1.jpg" alt="image"/></div>
        </div>
        <div id="property-d-1-2" class="owl-carousel single">
          <div class="item" ><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-s-1-1.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-s-1-2.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-s-1-3.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-s-1-4.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-s-1-5.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-s-1-1.jpg" alt="image"/></div>
          <div class="item" ><img src="<?= $assets;?>img/property-details/<?= $viewdata['prop_id'] ?>/property-d-s-1-2.jpg" alt="image"/></div>
        </div>
        <div class="property_meta bg-black bottom40">
          <span><i class="icon-select-an-objecto-tool"></i><?= $viewdata['prop_detail']['area'] ?> sq ft</span>
          <span><i class="icon-safety-shower"></i><?= $viewdata['prop_detail']['bathrooms'] ?> Bathroom</span>
          <span><i class="icon-bed"></i><?= $viewdata['prop_detail']['bedrooms'] ?> Bedroom</span>
          <span><i class="icon-old-television"></i><?= $viewdata['prop_detail']['lounge'] ?> TV Lounge</span>
          <span><i class="icon-garage"></i><?= $viewdata['prop_detail']['garage'] ?> Garage</span>
        </div>
      </div>
      <div class="col-md-5 listing1 property-details">  
        <h2 class="text-uppercase">Property Description</h2>
        <p><?= $viewdata['property']['description'] ?></p>
        </div>
      </div>

        <div class="col-md-12 listing1 property-details">
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
                  <td class="text-right">1991</td>
                </tr>
                <tr>
                  <td><b>Garages</b></td>
                  <td class="text-right"><?= $viewdata['prop_detail']['garage'] ?></td>
                </tr>
                <!-- <tr>
                  <td><b>Cross Streets</b></td>
                  <td class="text-right">Nordoff</td>
                </tr>
                <tr>
                  <td><b>Floors</b></td>
                  <td class="text-right">Carpet - Ceramic Tile</td>
                </tr>
                <tr>
                  <td><b>Plumbing</b></td>
                  <td class="text-right">Full Copper Plumbing</td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>

        <section id="about" class="padding_bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="uppercase">About Property</h2>
                <span class="bottom15">A few words about the house</span>
                <p class="heading_space">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="row number-counters text-center">
              <!-- first count item -->
              <div class="col-md-2 col-sm-4 col-xs-6 counters-item heading_space">
                <i class="icon-icons215"></i>
                <p>Years of Built</p>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <strong data-to="1991">1991</strong>
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
              <a href="#." class="btn-blue border_radius uppercase">Contact owner</a> 
              <a href="#." class="btn-dark border_radius uppercase">get directions</a>
            </div>
          </div>
        </section>


        <h2 class="text-uppercase bottom20">Features</h2>
        <div class="row bottom40">
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
          
          <!-- <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="pro-list">
              <li>
                Microwave
              </li>
              <li>
                Outdoor Shower
              </li>
              <li>
                Refrigerator
              </li>
              <li>
                Swimming Pool
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="pro-list">
              <li>
                Quiet Neighbourhood
              </li>
              <li>
                TV Cable & WIFI
              </li>
              <li>
                Window Coverings
              </li>
            </ul>
          </div> -->
        </div>
       
        <h2 class="text-uppercase bottom20">Video Presentation</h2>
        <div class="row bottom40">
          <div class="col-md-12 padding-b-20">
            <div class="pro-video">
              <figure class="wpf-demo-gallery">
                <video  class="video" controls>
                  <source src="<?= $assets;?>/video/video.mp4" type="video/mp4">
                  <source src="<?= $assets;?>/video/video.ogg" type="video/ogg">
                </video>
              </figure>
            </div>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">Property Map</h2>
        <div class="row bottom40">
          <div class="col-md-12 bottom20">
            <div class="property-list-map">
              <div id="property-listing-map" class="multiple-location-map" style="width:100%;height:430px;"></div>
            </div>
          </div>
          <div class="social-networks">
            <div class="social-icons-2">
              <span class="share-it">Share this Property</span>
              <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span>
              <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
              <span><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> Google +</a></span>
            </div>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">Contact Agent</h2>
        <div class="row">
          <div class="col-sm-4 bottom40">
            <div class="agent_wrap">
              <div class="image">
                <img src="<?= $assets;?>img/agents/<?= $viewdata['agentdata']['id'] ?>/prof.jpg" alt="Agents">
              </div>
            </div>
          </div>
          <div class="col-sm-4 bottom40">
            <div class="agent_wrap">
              <h3><?= $viewdata['agentdata']['name'] ?></h3>
              <p class="bottom30"><?= $viewdata['agentdata']['description'] ?></p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right"><!-- <?= $viewdata['agentdata']['phone'] ?> --></td>
                  </tr>
                  
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#."><?= $viewdata['agentdata']['email'] ?></a></td>
                  </tr>
                 
                </tbody>
              </table>
              <!-- <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
              <ul class="social_share">
                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-sm-4 bottom40">
            <form class="callus">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Message"></textarea>
              </div>
              <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
            </form>
            <br><br><br><br><br><br>
          </div>
          <div class="clearfix"></div>
          <!-- <div class="row"> -->
            <!-- <div class="col-sm-10">
            <h2 class="text-uppercase top20">Similar Properties</h2>
            <p class="bottom30">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
            <div  class="three-item owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="<?= $assets;?>img/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">£8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>45 Regent Street, London, UK</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#five" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="five">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="<?= $assets;?>img/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">£8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>45 Regent Street, London, UK</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="six">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="<?= $assets;?>img/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">£8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>45 Regent Street, London, UK</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#twoo" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="twoo">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="<?= $assets;?>img/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">£8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>45 Regent Street, London, UK</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#four" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="four">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="<?= $assets;?>img/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">£8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>45 Regent Street, London, UK</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#some" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="some">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="<?= $assets;?>img/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">£8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
                      <p>45 Regent Street, London, UK</p>
                    </div>
                    <div class="property_meta transparent"> 
                      <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
                      <span><i class="icon-bed"></i>2 Office Rooms</span> 
                      <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
                    </div>
                    <div class="property_meta transparent bottom30">
                      <span><i class="icon-old-television"></i>TV Lounge</span>
                      <span><i class="icon-garage"></i>1 Garage</span>
                      <span></span>
                    </div>
                    <div class="favroute clearfix">
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="three">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-sm-8 text-center">
            Total: <input type ="text" value="<?= $viewdata['property']['price'] ?>" name="total" id="total_amount" disabled=""  /><br/><br/>

Deposite(%): <input type="range" min="0" max="100" value="10" step="1" class="slider" id="deposite_range" name="deposite2">
<span id="deposite_value1"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span id="deposite_value2"></span><br/><br/>

Re-payment Time: <input type="range" min="5" max="35" value="25" step="1" class="slider" id="repayment_term" name="repayment_term2">
<span id="repayment_value1"></span><br/><br/>


Intrest(%): <input type="range" min="1.0" max="15.0" value="1.5" step="0.5" class="slider" id="intrest" name="intrest2" />
<span id="intrest_value1"></span><br/><br/>
<span id="intrest_value2"></span>


Final result: <span id="final_result"></span><br /><br />
</div>
<!-- <div class="col-sm-12 text-center">
            <ul class="pager">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--  Property Detail End -->

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