
<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Agent Profile</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center ">
          <li><a href="#">Home</a></li>
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

<!-- Agent Profile -->
<section id="agents" class="padding">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
      <?php
      if($this->session->flashdata('successsub'))
      {
          echo "<br>
          <div class='col-md-offset-3 col-md-6'>
          <div  id='alert-pop' class='text-center alert alert-danger'>";
          
      echo $this->session->flashdata('successsub');
        echo "</div> 
        </div>";
      echo "<script>
          window.location.hash = '#alert-pop';
            
      </script>";
      }
      ?>
        </div>
      <div class="col-sm-3 bottom40">
          <div class="agent_wrap">
              <div class="panel panel-primary">
                  <div class="panel-heading">Contact Details</div>
                  <div class="panel-body">
            <div class=" main_ag_img bottom10 image">
               <img src="resources/img/logo_sticky.jpg" alt="Agents"> 
             <!-- <img src="https://st.zoocdn.com/zoopla_static_agent_logo_(156629).png" alt="Agents">-->
              <div class="dtl_ag top10">
                  <p><b>username2527</b></p>
                <p>7-8 Regency Parade, Finchley Road, Hampstead, London, NW3 5EG</p>
                <p>example@gmail.com</p>
                <p><?= $viewdata['agent']['phone'];?></p>
              </div>

            </div>
              <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
              <ul class="social_share">
                <li><a href="<?= $viewdata['agent']['fblink'];?>" class="facebook"><i class="icon-facebook-1"></i></a></li>
                <li><a href="<?= $viewdata['agent']['twiterlink'];?>" class="twitter"><i class="icon-twitter-1"></i></a></li>
                <li><a href="<?= $viewdata['agent']['gpluslink'];?>" class="google"><i class="icon-google4"></i></a></li>
                <li><a href="<?= $viewdata['agent']['linkedin'];?>" class="linkden"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?= $viewdata['agent']['instagramlink'];?>" class="vimo"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
            </div>

          </div>
        </div>
      <div class="col-sm-6 bottom40">
        <div class="agent_wrap main_ag">
          <h3><?= $viewdata['agent']['fname'] ." ". $viewdata['agent']['lname'];?> </h3>
          <p class="top10 bottom30">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing. 
              <!-- <?= $viewdata['agent']['description'];?>  -->
          </p>
          
        </div>
      </div> 
      <?php  ?>
<<<<<<< HEAD
      <div class="col-sm-3 bottom40">
          <div class="bottom20">
              <h3>Contact <?= $viewdata['agent']['fname'] ." ". $viewdata['agent']['lname'];?> </h3>
          </div>
        <form class="callus" action="inboxagent?id=<?php $viewdata['agent']['id']?>" method="POST">
=======
      <div class="col-sm-4 bottom40">
        <form class="callus" action="inboxagent?id=<?php $viewdata['agent']['userid']?>" method="POST">
>>>>>>> 78933295e50600f9933014af4cfc3dea5dc72479
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" placeholder="Phone Number" name="phone">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Message" name="message"></textarea>
          </div>
          <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
        </form>
      </div>

      

      
      <div class="col-md-12 bottom30 top20">
        <h2 class="text-uppercase">Agent's Properites</h2>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>

      <?php foreach($viewdata['properties'] as $prop){ ?>
      <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            
            <a href="property_detail?id=<?php echo $prop['prop_id']; ?>"><img alt="image" src="<?= $assets?>img/b-d-property.jpg"></a>
              <?php if ($prop['is_feat'] == "1")
              { 
                echo " <span class=\"tag_l\">Featured</span>";
              }
              if ($prop['status'] == "sale")
              {
                 echo "<span class='tag_t'>For Sale</span>";
              }else if ($prop['status'] == "rent")
              {
               echo " <span class=\"tag_t\">For Rent</span>";
              } 
              else if ($prop['status'] == "rentd")
              {
               echo " <span class=\"tag_t\">Rented</span>";
              } 
              
              else if ($prop['status'] == "sold")
              {
               echo " <span class=\"tag_t\">Sold</span>";
              }
              else if ($prop['status'] == "rentd")
              {
               echo " <span class=\"tag_t\">Rented</span>";
              }
               else if ($prop['status'] == "salag")
              {
                echo " <span class=\"tag_t\">Sale Agreed</span>";
              }
              else if ( $prop['status'] == "rentag")
              {
                echo " <span class=\"tag_t\">Letting Agreed</span>";
              }
              ?>
           
            
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="addtofav?id=<?php echo $prop['prop_id']; ?>"><i class="icon-like"></i></a></span>
              <a href="property_detail?id=<?php echo $prop['prop_id']; ?>">
                <h3><?= $prop['title'] ?></h3>
                <p><?= $prop['address'] ?>, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i><?= $prop['prop_details']['area'] ?> sq ft</span><span><i class=" icon-bed"></i><?= $prop['prop_details']['bedrooms'] ?> Bedrooms</span><span><i class="icon-safety-shower"></i><?= $prop['prop_details']['bathrooms'] ?> Bathrooms</span><span class="border-l"><?= $prop['price'] ?>
                  <?php if ($prop['status'] == 'rent' ||$prop['status'] == 'rentd' || $prop['status'] == 'rentag')
                  echo "pm"?>
                  

                </span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
     <!--  <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="<?= $assets?>img/b-d-property2.jpg">
             



             
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#"><i class="icon-like"></i></a></span>
              <a href="#.">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="<?= $assets?>img/b-d-property3.jpg">
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#"><i class="icon-like"></i></a></span>
              <a href="#.">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="listing_full">
          <div class="image">
            <img alt="image" src="<?= $assets?>img/b-d-property4.jpg">
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span>
          </div>
          <div class="listing_full_bg">
            <div class="listing_inner_full">
              <span><a href="#"><i class="icon-like"></i></a></span>
              <a href="#.">
                <h3>Park Avenue Apartment</h3>
                <p>Towson London, MR 21501</p>
              </a>
              <div class="favroute clearfix">
                <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
<!--      <div class="col-sm-12 text-center">-->
<!--        <ul class="pager">-->
<!--          <li><a href="#">1</a></li>-->
<!--          <li class="active"><a href="#">2</a></li>-->
<!--          <li><a href="#">3</a></li>-->
<!--        </ul>-->
<!--      </div>-->
    </div>
  </div>
</section>
<!-- Agent Profile End -->

