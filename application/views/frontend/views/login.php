<!-- Login -->
<section id="login" class="padding">
<div class="container">
  <h3 class="hidden">hidden</h3>

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

  <div class="row">
    <div class="col-md-12 text-center">
      <div class="profile-login">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
          <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register as Agent</a></li>
        </ul>
        <!-- Tab panes -->

        

        <div class="tab-content padding_half">
          <div role="tabpanel" class="tab-pane fade in active" id="home">
            <div class="agent-p-form">
              <form action="user_login" method="POST" class="callus clearfix">
                <div class="single-query form-group col-sm-12">
                  <input type="text" class="keyword-input" name="username" placeholder="Username" required>
                </div>
                <div class="single-query form-group  col-sm-12">
                  <input type="password" name="password" required class="keyword-input" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="col-sm-6">
                      <div class="search-form-group white form-group text-left">
                        <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                        <span>Remember Me</span>
                      </div>
                    </div>
                    <div class="col-sm-6 text-right">
                      <a href="forgot_pass" class="lost-pass">Lost your password?</a>
                    </div>
                  </div>
                </div>
                <div class=" col-sm-12">
                  <input type="submit" value="submit now" class="btn-slide border_radius"> 
                </div>
              </form>
            </div>
          </div>


          <div role="tabpanel" class="tab-pane fade" id="profile">
            <div class="agent-p-form" id="#user_form">
              <form class="callus clearfix" action="user_reg" method="POST">
                <div class="single-query col-sm-12 form-group">
                  <input type="text" class="keyword-input" placeholder="username" name="username" >
                </div>
                <div class="single-query col-sm-12 form-group">
                  <input type="text" class="keyword-input" name="email" placeholder="Email Address"  >
                </div>
                <div class="single-query col-sm-12 form-group">
                  <input type="password" class="keyword-input" name="password" placeholder="Password" >
                </div>
                <div class="single-query col-sm-12 form-group">
                  <input type="password" class="keyword-input" name="cpassword" placeholder="Confirm  Password" >
                </div>
                <div class="search-form-group white col-sm-12 form-group text-left">
                  <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                  <span>Receive Newsletter</span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <div class="query-submit-button">
                    <input type="submit" value="Creat an Account" class="btn-slide">
                  </div>
                </div>
              </form>
            </div>
            


          </div>


          <!-- AGENT REGISTRATION -->
          <div role="tabpanel" class="tab-pane fade" id="register">
            <div class="agent-p-form">
              <form class="callus clearfix" method="post" id="agregform" action="addagent" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class=" col-sm-3 col-md-4">
                    <div class="form-group">
                      <select  class="form-control" name="title" required>
                        <option class="active">Title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="First Name" id="usr" name="fname" >
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Last Name" id="usr" name="lname" >
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username"  name="username">
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Address" name="email" >
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" >
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 ">
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirm  Password" name="cpassword" >
                    </div>

                  </div>

                  <div class="col-sm-12">
                      <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Description" rows="3"></textarea>
                      </div> 
                  </div>
                  <div class="col-sm-12">
                    <div class="input-group form-group image-preview">
                      <label style="color:white;" class="input-group form-group">Upload Profile Picture</label>
                        <input type="file" name="agentimg" placeholder="Upload Agent Image" > 
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <input type="text"  name="ag_phone"  class="form-control" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group bottom10">
                          <span class="input-group-addon"><i class="icon-facebook-1"></i></span>
                          <input  type="text" class="form-control" name="fb_link" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group bottom10">
                          <span class="input-group-addon"><i class="icon-twitter-1"></i></span>
                          <input  type="text" class="form-control" name="twit_link" placeholder="Twitter">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group bottom10">
                          <span class="input-group-addon"><i class="icon-google4"></i></span>
                          <input  type="text" class="form-control" name="gplus_link" placeholder="Google+">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group bottom10">
                          <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                          <input  type="text" class="form-control" name="li_link" placeholder="LinkedIn">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group bottom10">
                          <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                          <input  type="text" class="form-control" name="you_link" placeholder="Youtube">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group bottom10">
                          <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                          <input  type="text" class="form-control" name="pin_link" placeholder="Pinterest">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group bottom10">
                          <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                          <input type="text" class="form-control" name="insta_link" placeholder="Instagram">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      
                        <div class="query-submit-button">
                            <div class="btn-slide" id="show" >NEXT</div>
                        </div>
                     
                    </div>  
                  
                  <div class="" id="packagedeal" style="display:none;">
                    <?php
                  foreach($easy['allpackages'] as $val)
                  { ?>
                  <br >
                    <input type="radio" name="package" >
                   <?php echo $val['package_name'];
                   echo $val['package_price'];
                   echo $val['package_name'];
                   echo $val['num_listing_limit'];
                   echo $val['num_images_limit'];
                   echo $val['num_featured_limit'];

                   ?>
                 
                   
                    
                   <?php } ?>
                   </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      
                        <div class="query-submit-button top30">
                            <button type="submit" class="btn-slide">Submit</button>
                        </div>                   
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Login end -->
