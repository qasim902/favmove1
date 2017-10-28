

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Select Package</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center ">
          <li><a href="#">Home</a></li>
          <li class="active">Agent Register</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- Agent Start -->
<section id="agent-2" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
       

<!-- Array ( [0] => 



Array ( [id] => 3 [date_created] => 2017-10-19 00:00:00 [date_modified] => 2017-10-19 00:00:00 [package_name] => Premium [package_price] => 20.00 [package_days] => 30 [num_listing_limit] => 10 [currency_code] => GBP [show_private_listings] => 1 [user_type] => agent [auto_activation] => 1 [num_images_limit] => 10 [num_amenities_limit] => 10 [num_featured_limit] => 1 [forarea] => ) 






  [1] => Array ( [id] => 2 [date_created] => 2017-10-19 00:00:00 [date_modified] => 2017-10-19 00:00:00 [package_name] => Basic [package_price] => 10.00 [package_days] => 30 [num_listing_limit] => 5 [currency_code] => GBP [show_private_listings] => 1 [user_type] => agent [auto_activation] => 1 [num_images_limit] => 10 [num_amenities_limit] => 5 [num_featured_limit] => 0 [forarea] => ) 







  [2] => Array ( [id] => 1 [date_created] => 2017-10-19 00:00:00 [date_modified] => 2017-10-19 00:00:00 [package_name] => Free [package_price] => 0.00 [package_days] => 10 [num_listing_limit] => 1 [currency_code] => GBP [show_private_listings] => 1 [user_type] => agent [auto_activation] => 1 [num_images_limit] => 5 [num_amenities_limit] => 1 [num_featured_limit] => 0 [forarea] => ) ) -->

      <form action="selectpackage" method="POST">
      <?php 


      foreach($viewdata['packages'] as $package) {
?>
      <div class="cbp-item" style="width: 360px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
        <div class="property_item">
          <div class="image">
            <a href="makepayments?id=<?=$package['id']?>"><img src="<?=$assets?>img/packages/<?=$package['img_path']?>" alt="package image" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">£<?=$package['package_price']?> Per Month</span>
            </div>
             </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><?=$package['package_name']?></h3>
              <p><?=$package['package_days']?> days</p>
            </div>
            <div class="property_meta transparent"> 
              <span>
                <!-- <i class="icon-select-an-objecto-tool"></i> -->
             <i class="icon icon-plus"></i> <?=$package['num_listing_limit']?> Listings
            </span> 

              <span>
                <!-- <i class="icon-bed"></i> -->
             <i class="icon icon-image"></i><?=$package['num_images_limit']?> Images
            </span> 
              
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon icon-star"></i><?=$package['num_featured_limit']?> Featured Listings</span>   
              <!-- <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span> -->
            </div>
            <div align="center" class="favroute clearfix">
              <p><input type="radio" group="package" name="package" value="<?=$package['id']?>">Select Package</p>
              <ul class="pull-right">
                <!-- <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li> -->
                <!-- <li><a href="#seventy<?=$package['id']?>" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li> -->
              </ul>
            </div>

            <!-- <div class="toggle_share collapse" id="seventy<?=$package['id']?>">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div></div>
       
     
<?php
       
      }
        ?>
       <!--   <select multiple name="town_id">
                
                <?php 
                foreach($defdata['all_uk_towns'] as $uk_town)
                {
                  $selected = ($uk_town['postcode'] == $this->input->post('town_id')) ? ' selected="selected"' : "";

                  echo '<option value="'.$uk_town['postcode'].'" '.$selected.'>'.$uk_town['postcode'].','.$uk_town['town'].', '.$uk_town['region'].', '.$uk_town['uk_region'].'.</option>';
                } 
                ?>
              </select>
 -->
            <input type="submit" value="Submit">  
        
        </form>
       
      <!-- div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="<?= $assets."img/agents/".$agent['id']."/prof.jpg" ?>" alt="Agents">
            <div class="img-info">
              <h3><?= $agent['agent']['name']?></h3>
              <span><?= $agent['agency']['name']?></span>
              <p class="top20 bottom30"><?= $agent['agent']['description'] ?></p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right"><?= $agent['agency']['phone'] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#."> <?= $agent['agent']['email']?></a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_detail?id=<?= $agent['agent']['id']?>">
              <i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div> -->
      
 <!-- 
    </div>
  </div>
</section> -->
<!-- Agent End -->
