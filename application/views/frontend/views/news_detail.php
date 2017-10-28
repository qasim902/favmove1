<?php 
$news = $viewdata['news'];
?>
<!-- Page Banner Start-->
<section class="page-banner padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h1 class="text-uppercase">News Detail</h1>
            <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
            <ol class="breadcrumb text-center">
               <li><a href="#">Home</a></li>
               <li class="active">News Detail</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-- Page Banner End -->

<!-- News Details Start -->
<section id="news-section-1" class="news-section-details property-details padding_top">
  <div class="container">
        
    <div class="row heading_space">
    
      <div class="col-md-8">
      
      	<div class="row">
        
        	<div class="news-1-box clearfix">
            	<div class="col-md-12 col-sm-12 col-xs-12">
                	<img src="resources/img/news-d-1.jpg" alt="image" class="img-responsive"/>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12 top30">
                
                	<div class="news-details bottom10">
                    	<span><i class="icon-icons230"></i> by <?= $news['author']?></span>
                		<span><i class="icon-icons228"></i><?= $news['added_on']?></span>
                    </div>
                    
                	<h3><?= $news['title']?></h3>
                    
                   <?= $news['detail']?>
                </div>
            </div>
            
         </div>
         
        <div class="row">
            
            <div class="news-1-box clearfix">
            	<div class="col-md-6 col-sm-6 col-xs-12">
                	<img src="resources/img/news-d-2.jpg" alt="image"  class="img-responsive bottom15"/>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12 padding-left-25">
                	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. 
                    Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>
                    
                     <p class="bottom30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                     Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec.
                      <b>Quisque bibendum orci ac nibh facilisis</b>, at malesuada orci congue.</p>
                </div>
                
                <div class="col-md-12">
                	<p class="top10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                     Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec.
                     Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>
                </div>
                
            </div>
            
          </div>
            
        <div class="row">
            
            <div class="col-md-12">
            	<div class="text-it-p">
                	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                    sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet. 
                    consectetuer elit sed diam power nonummy</p>
                </div>
            </div>
            </div>
            
        <div class="row heading_space">
        
          <div class="news-2-tag">
          <div class="col-md-5 col-sm-5 col-xs-12 top15">
            <h4>Tags:</h4>
            <p class="p-font-15"><?= $news['tags']?></p>
          </div>
          
          <div class="col-md-7 col-sm-7 col-xs-12 text-right">
            <div class="social-icons">
              <h4>Share:</h4>
              <ul class="social_share">
                  <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                  <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                  <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
               </ul>
            </div>
          </div>
          </div>
                
       </div>
       
        <div class="row">
        	<div class="col-md-12 bottom20">
            	<h2 class="text-uppercase">Similar News</h2>
            </div>
            
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<div class="sim-lar-p">
                	<img src="resources/img/news-d-3.jpg" alt="image">
                    <div class="sim-lar-text top10">
                    	<h3 class="bottom10">Sample News 1</h3>
                        <p class="bottom10"><span>By:</span> Admin <span>|</span> <span>Date:</span> Feb 22, 2017</p>
                        <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                        sed diam power nonummy nibh tempor cum soluta nobis eleifend...</p>
                        
                        <a href="javascript:void(0)" class="btn-more">
            <i><img src="resources/img/arrowl.png" alt="arrow"></i>
            <span>More Detail</span>
            <i><img src="resources/img/arrowr.png" alt="arrow"></i>
            </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<div class="sim-lar-p">
                	<img src="resources/img/news-d-4.jpg" alt="image" class="bottom15">
                    <div class="sim-lar-text top10">
                    	<h3 class="bottom10">Sample News 2</h3>
                        <p class="bottom10"><span>By:</span> Admin <span>|</span> <span>Date:</span> Feb 22, 2017</p>
                        <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                        sed diam power nonummy nibh tempor cum soluta nobis eleifend...</p>
                        <a href="javascript:void(0)" class="btn-more">
            <i><img src="resources/img/arrowl.png" alt="arrow"></i>
            <span>More Detail</span>
            <i><img src="resources/img/arrowr.png" alt="arrow"></i>
            </a>
                      
                    </div>
                </div>
            </div>
            
            
        </div>
        
         <div class="row heading_space">
        	<div class="col-md-12 bottom10">
            	<h2 class="text-uppercase">Comments</h2>
            </div>
         </div>
         
         <div class="row bottom10">
        	<div class="col-md-2 col-sm-2 col-xs-12">
            	<img src="resources/img/news-comnts-1.jpg" alt="image"/>
            </div>
            
            <div class="col-md-10 col-sm-10 col-xs-12">
            
            	<div class="news-comnts-text">
                	<h4>Alison Johnson <span>Feb 22, 2017</span></h4>
                    <a href="#">Reply <i class="icon-arrow-right2"></i></a>
                    <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                </div>
                	
            </div>
            
         </div>
         
         <hr>
         
         <div class="row padding-b-10 bottom10">
        	<div class="col-md-3 col-sm-3 col-xs-12 bottom20 text-right">
            	<img src="resources/img/news-comnts-1.jpg" alt="image"/>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 bottom20">
            
            	<div class="news-comnts-text margin-0">
                	<h4>Alison Johnson <span>Feb 22, 2017</span></h4>
                    <a href="#">Reply <i class="icon-arrow-right2"></i></a>
                    <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales</p>
                </div>
                	
            </div>
            
         </div>
         
         <hr>
         
         <div class="row bottom10">
        	<div class="col-md-2 col-sm-2 col-xs-12 bottom20">
            	<img src="resources/img/news-comnts-1.jpg" alt="image"/>
            </div>
            
            <div class="col-md-10 col-sm-10 col-xs-12 bottom20">
            
            	<div class="news-comnts-text">
                	<h4>Alison Johnson <span>Feb 22, 2017</span></h4>
                    <a href="#">Reply <i class="icon-arrow-right2"></i></a>
                    <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                </div>
                	
            </div>
            
         </div>
        
        <hr>
        
        <div class="row">
        	<div class="col-md-12 margin40">
            	<h2 class="text-uppercase bottom20">LEAVE A COMMENT</h2>
            </div>
         </div>
        
        <form class="callus padding_bottom">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 row">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                    </div>
                  </div>
                </div>
              </div>
            </form>
       </div>
       <aside class="col-md-4 col-xs-12">
          <div class="property-query-area clearfix">
            <div class="col-md-12">
              <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
            </div>
            <form class="callus">
              <div class="single-query form-group col-sm-12">
                <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
              </div>
              <div class="single-query form-group col-sm-12">
                <div class="intro">
                  <select>
                    <option selected="" value="any">Location</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
              <div class="single-query form-group col-sm-12">
                <div class="intro">
                  <select>
                    <option class="active">Property Type</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
              <div class="single-query form-group col-sm-12">
                <div class="intro">
                  <select>
                    <option class="active">Property Status</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
              <div class="search-2 col-sm-12">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <div class="intro">
                        <select>
                          <option class="active">Min Beds</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <div class="intro">
                        <select>
                          <option class="active">Min Baths</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="single-query form-group">
                      <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 bottom10">
                <div class="single-query-slider">
                  <label><strong>Price Range:</strong></label>
                  <div class="price text-right">
                    <span>$</span>
                    <div class="leftLabel"></div>
                    <span>to $</span>
                    <div class="rightLabel"></div>
                  </div>
                  <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 form-group">
                <button type="submit" class="btn-blue border_radius">Search</button>
              </div>
            </form>
            <div class="col-sm-12">
              <div class="group-button-search">
                <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter bottom15">
                  <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                  <div class="text-1">Show more search options</div>
                  <div class="text-2 hide">less more search options</div>
                </a>
              </div>
            </div>
            <div class="search-propertie-filters collapse">
              <div class="container-2">
                <div class="row">
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="search-form-group white">
                      <input type="checkbox" name="check-box" />
                      <span>Rap music</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3 class="bottom40 margin40">Featured Properties</h3>
            </div>
          </div>
          <div class="row bottom20">
            <div class="col-md-4 col-sm-4 col-xs-6 p-image">
              <img src="resources/img/f-p-1.png" alt="image"/>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-6">
              <div class="feature-p-text">
                <h4>Historic Town House</h4>
                <p class="bottom15">45 Regent Street, London, UK</p>
                <a href="#.">View</a>
              </div>
            </div>
          </div>
          <div class="row bottom20">
            <div class="col-md-4 col-sm-4 col-xs-6 p-image">
              <img src="resources/img/f-p-1.png" alt="image"/>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-6">
              <div class="feature-p-text">
                <h4>Historic Town House</h4>
                <p class="bottom15">45 Regent Street, London, UK</p>
                <a href="#.">View</a>
              </div>
            </div>
          </div>
          <div class="row bottom20">
            <div class="col-md-4 col-sm-4 col-xs-6 p-image">
              <img src="resources/img/f-p-1.png" alt="image"/>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-6">
              <div class="feature-p-text">
                <h4>Historic Town House</h4>
                <p class="bottom15">45 Regent Street, London, UK</p>
                <a href="#.">View</a>
              </div>
            </div>
          </div>
        </aside>
                    
    </div>
              
  </div>
</section>
<!-- News Details End --> 


