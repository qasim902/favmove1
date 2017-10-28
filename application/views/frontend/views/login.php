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

allpackages

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
                    <input type="text" class="keyword-input" placeholder="username" name="username" required>
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" name="email" placeholder="Email Address" required >
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" name="password" placeholder="Password" required>
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" name="cpassword" placeholder="Confirm  Password" required>
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

            <?php 

                foreach($viewdata['allpackages'] as $agency)
                {
                  var_dump($agency['package_name']); die();
                } 
                ?>

            <div role="tabpanel" class="tab-pane fade" id="register">
              <div class="agent-p-form">
                <form class="callus clearfix" method="post" id="agregform" action="ag_signup" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" placeholder="First Name" id="usr" name="fname" required>
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" id="usr" name="lname" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Username" required name="username">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" name="email" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12 ">
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm  Password" name="cpassword" required>
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
                          <input type="file" name="agentimg" placeholder="Upload Agent Image" > <!-- don't give a name === doesn't send on POST/GET -->
                          <!-- <span class="input-group-btn">
                              image-preview-clear button
                              <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                  <span class="glyphicon glyphicon-remove"></span> Clear
                              </button>
                              image-preview-input
                              <div class="btn btn-default image-preview-input">
                                  <span class="glyphicon glyphicon-folder-open"></span>
                                  <span class="image-preview-input-title">Browse</span>
                                  <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> rename it
                              </div>
                          </span> -->
                      </div><!-- /input-group image-preview [TO HERE]--> 
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12">
                      <ul class="nav nav-tabs agn_btn" role="tablist">
                        <li class="active"><a href="#panel-298128" data-toggle="tab" contenteditable="true" aria-expanded="true">Select Agency</a></li>
                        <li class=""><a href="#panel-687443" data-toggle="tab" contenteditable="true" aria-expanded="false">Add Agency</a></li>
                      </ul>
                    </div>

                    <div class="tab-content">
        <div class="tab-pane active" id="panel-298128">
          <div class="col-md-6">
            <label for="agency_id" class="control-label">Agency</label>
            <div class="form-group">
              <!-- <input type="hidden" name="agencyflag" value="old"> -->
              <select name="agency_id" class="form-control">
                <option value="">Select Agency</option>
                <?php 

                foreach($viewdata['all_agency'] as $agency)
                {
                  $selected = ($agency['id'] == $this->input->post('agency_id')) ? ' selected="selected"' : "";

                  echo '<option value="'.$agency['id'].'" '.$selected.'>'.$agency['name'].'</option>';
                } 
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="panel-687443">
      
          <div class="col-md-12 col-sm-12"> 
                      <div class="panel panel-info ">
                        <div class="panel-heading">Agency</div>
                          <div class="panel-body">
                              <div class="col-md-12 col-sm-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="agencyname" placeholder="Name">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <!-- <div class="input-group image-preview input-file">
                                          <input type="text" class="form-control" placeholder='Choose Agency Logo...' />      
                                              <span class="input-group-btn">
                                              <span class="glyphicon glyphicon-folder-open"></span>
                                              <button class="btn btn-default btn-choose" type="button">Upload</button>
                                          </span>
                                  
                                  
                                      </div> -->
                                      <label for="agencylogo">Upload Agency Logo</label>
                                       <input type="file" class="form-control btn" name="agencylogo" placeholder="Upload Agency Image">
                                      
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <div class="form-group">
                                    <input type="text" name="ag_address" class="form-control" placeholder="Address">
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
                                
                          </div>
                      </div>
                    </div>
        </div>
      </div>
                    
                    <div class="col-sm-12">
                      <div class="rmbr_me form-group text-left">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="subscribe">Receive Newsletter
                          </label>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="search-form-group white col-sm-12 form-group text-left">
                      <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                      <span>Receive Newsletter</span>
                    </div> -->
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="query-submit-button">
                          <input type="submit" value="Create an Account" onclick="$(document).('#agregform').submit()" class="btn-slide">
                        </div>
                    </div>


                    
                  </div>
                    
                  <!-- <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="Email Address">
                  </div> -->
                 
                  
                  
                </form>
              </div>
            </div>
          










            <div role="tabpanel" class="tab-pane fade" id="register">
              <div class="agent-p-form" id="#user_form">
                <form class="callus clearfix">
                  <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="username" required>
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="text" class="keyword-input" placeholder="Email Address">
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" placeholder="Password">
                  </div>
                  <div class="single-query col-sm-12 form-group">
                    <input type="password" class="keyword-input" placeholder="Confirm  Password" readonly>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login end -->


 