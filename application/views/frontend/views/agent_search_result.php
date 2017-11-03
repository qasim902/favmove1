<!-- Agent-3 Start -->
<section id="our-agent" class="padding_bottom_half padding_top bg_light">
  <div class="container">
    <div class="row">
        <?php 
     
        foreach($result as $res):?>
      <div class="ouragents clearfix">

        <div class="col-md-12">
            <div class="col-md-3 col-sm-6 heading_space">
                <div class="agnt_lst_img image">
                <img alt="arrow" src="<?php echo base_url('resources/img/agents/' . $res['image']);?>">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 bg_white agnt_lst heading_space">
                <h5><a href="agent_detail?id=<?php echo $res['id'];?>"><?php echo $res['fname'] . " " .$res['lname'] ;?></a></h5>
                <span><b>Tel:</b><?php echo $res['agphone'] ;?><small>
                <p><span><b>Address:</b><?php echo $res['address'];?></span></p>
                <p class="top10 bottom10"><?php echo $res['description'];?></p>
                <a class="btn-more" href="#"><i><img alt="arrow" src="resources/img/arrow-yellow.png"></i>
                    <span>Full Profile</span><i><img alt="arrow" src="resources/img/arrow-yellow.png"></i></a>
            </div>
        </div>
        
       
      </div>
<?php endforeach; ?>





      <div class="ouragents clearfix">

        <div class="col-md-12">
            <div class="col-md-3 col-sm-6 heading_space">
                <div class="agnt_lst_img image">
                    <img class="img-thumbnail" src="resources/img/logo_sticky.jpg" alt="Image">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 bg_white agnt_lst heading_space">
                <h5><a href="#">Admiral Property Partnership Ltd, London</a></h5>
                <span><b>Tel:</b> 020 8012 5765 <small><a href="#"> Local call rate</a></small></span>
                <p><span><b>Address:</b> This area is for address</span></p>
                <p class="top10 bottom10">If you want to let or sell your property soon, this should APPeal to you. If you're about to let or sell your property - or if you've been trying to for some time - why not APPoint a new letting or sales agent? You've nothing to lose by giving us a go. And our fresh APProach might just work wonders. Call us - Helen Kovari, Diane Parry or Ian Cundy - We think you will APProve of our service. </p>
                <a class="btn-more" href="#"><i><img alt="arrow" src="resources/img/arrow-yellow.png"></i>
                <span>Full Profile</span><i><img alt="arrow" src="resources/img/arrow-yellow.png"></i></a>
            </div>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- Agent-3 End -->