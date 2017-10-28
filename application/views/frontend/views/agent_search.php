
  <!-- Page Banner Start-->
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">Nearby Agents </h1>
          <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li class="active">Nearby Agents</li>
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
        <div class="col-md-9">
          <h2 class="uppercase">Nearby Agents </h2>
          <p class="heading_space"> Search for estate agents and letting agents on Favorite Move </p>

          <form class="callus" action="searchag" method="POST">
            <div class="row">
              <div class="col-md-12 col-sm-8">
                <div class="single-query form-group">
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
              

              <div class="col-md-2 col-sm-6">
                  <div class="ag_name">
                      <label for="name"><b>Agent Name:</b></label>
                  </div>
              </div>
              <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                      <input type="text" name="agname" placeholder="Agent Name" class="form-control" id="name">
                      <input type="hidden" name="type" value="ag">
                  </div>
              </div>
              <div class="col-md-12 col-sm-6 rad_btns">
                  <label for="radio"><b>Agent Type:</b></label>
                  <label class="radio-inline fchld"><input type="radio" name="agtype" value="snl" checked="checked">Sales and Lettings</label>
                  <label class="radio-inline"><input type="radio" value="sale" name="agtype">Sales</label>
                  <label class="radio-inline"><input type="radio" value="let" name="agtype">Lettings</label> 
              </div>
              <!-- <div class="col-md-9 col-sm-6">
                <div class="single-query form-group">
                  <input type="text" name="Agent Name:" placeholder="Agent Name:">
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="single-query form-group">
                  <label>Agent Name:</label>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="single-query form-group">
                  <input type="text"  name="Agent Type:" placeholder="Agent Type:">
                </div>
              </div> -->

              
              <div class="col-md-12 text-right form-group">
                <input name="type" type="hidden" value="prop">
                <button type="submit" class="btn-blue border_radius top15">Start Search</button>
              </div>
            </div>
          </form>

          <div class="bottom20 top30">
            <h3>You're 5x more likely to find a buyer for your property on Favorite Move</h3>
            <p class=" top10">If you're thinking of selling your property, make sure you choose an agent that can advertise your property on Favorite Move ; where sellers are 5x more likely to find a buyer for their property than on any other property website.</p>
           
          </div>
          
          <div class=" top20 bottom20">
              <h3>Why instruct an agent at all?</h3>
              <p class=" top10">Ask anyone who has sold a property before and they will tell you that selling a property is both complicated and time-consuming. By instructing an agent to sell your home you gain their knowledge of the local property market, as well as their expertise in selling property just like your own.</p>
          </div>


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
  <!-- Property Search area End -->
