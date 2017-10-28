 <!-- Page Banner Start-->
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">Property for sale </h1>
          <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li class="active">For Sale</li>
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
          <h2 class="uppercase">Property for sale </h2>
          <p class="heading_space"> Search for houses and flats for sale across the UK</p>

          <form class="callus" action="search?type=prop" method="POST">
            <div class="row">
              <div class="col-md-12 col-sm-6">
                <div class="single-query form-group">
                  <input type="text" class="keyword-input" name="keyword" placeholder="Keyword (e.g. 'Waterloo Station')">
                </div>
              </div>

              <div class="col-md-6 col-sm-6">
                <div class="single-query form-group">
                  <div class="intro">
                    <select name="prop_type">
                  <option class="active">Select Property Type</option>
                  <option value="all">Show all types</option>
                  <option value="bus">Business</option>
                  <option value="com">Commercial</option>
                  <option value="res">Residential</option>
                </select>
                  </div>
                </div>
              </div>


              <div class="col-md-6 col-sm-6">
                <div class="row search-2">
                  <div class="col-md-12 col-sm-6">
                    <div class="single-query form-group">
                      <div class="intro">
                        <select name="bed">
                      <option class="active">Min. Bedrooms</option>
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

              <div class="col-md-6 col-sm-6">
                <div class="single-query form-group">
                  <div class="intro">
                    <select name="min_price">

                    <option class="active">Price (Min)</option>
                    <option value="10,000">£ 10,000</option>
                    <option value="20,000">£ 20,000</option>
                    <option value="30,000">£ 30,000</option>
                    <option value="40,000">£ 40,000</option>
                    <option value="50,000">£ 50,000</option>
                    <option value="60,000">£ 60,000</option>
                    <option value="70,000">£ 70,000</option>
                    <option value="80,000">£ 80,000</option>
                    <option value="90,000">£ 90,000</option>
                    <option value="100,000">£ 100,000</option>
                    <option value="110,000">£ 110,000</option>
                    <option value="120,000">£ 120,000</option>
                    <option value="130,000">£ 130,000</option>
                    <option value="140,000">£ 140,000</option>
                    <option value="150,000">£ 150,000</option>
                    <option value="175,000">£ 175,000</option>
                    <option value="200,000">£ 200,000</option>
                    <option value="250,000">£ 250,000</option>
                    <option value="300,000">£ 300,000</option>
                    <option value="350,000">£ 350,000</option>
                    <option value="400,000">£ 400,000</option>
                    <option value="450,000">£ 450,000</option>
                    <option value="500,000">£ 500,000</option>
                    <option value="600,000">£ 600,000</option>
                    <option value="700,000">£ 700,000</option>
                    <option value="800,000">£ 800,000</option>
                    <option value="900,000">£ 900,000</option>
                    <option value="1,000,000">£ 1,000,000</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="single-query form-group">
                  <div class="intro">
                    <select name="max_price">
                    <option class="active">Price (Max)</option>
                    <option value="10,000">£ 10,000</option>
                    <option value="20,000">£ 20,000</option>
                    <option value="30,000">£ 30,000</option>
                    <option value="40,000">£ 40,000</option>
                    <option value="50,000">£ 50,000</option>
                    <option value="60,000">£ 60,000</option>
                    <option value="70,000">£ 70,000</option>
                    <option value="80,000">£ 80,000</option>
                    <option value="90,000">£ 90,000</option>
                    <option value="100,000">£ 100,000</option>
                    <option value="110,000">£ 110,000</option>
                    <option value="120,000">£ 120,000</option>
                    <option value="130,000">£ 130,000</option>
                    <option value="140,000">£ 140,000</option>
                    <option value="150,000">£ 150,000</option>
                    <option value="175,000">£ 175,000</option>
                    <option value="200,000">£ 200,000</option>
                    <option value="250,000">£ 250,000</option>
                    <option value="300,000">£ 300,000</option>
                    <option value="350,000">£ 350,000</option>
                    <option value="400,000">£ 400,000</option>
                    <option value="450,000">£ 450,000</option>
                    <option value="500,000">£ 500,000</option>
                    <option value="600,000">£ 600,000</option>
                    <option value="700,000">£ 700,000</option>
                    <option value="800,000">£ 800,000</option>
                    <option value="900,000">£ 900,000</option>
                    <option value="1,000,000">£ 1,000,000</option>
                  </select>
                  </div>
                </div>
              </div>

              <div class="col-md-12 text-right form-group">
                <input name="type" type="hidden" value="prop">
                <button type="submit" class="btn-blue border_radius top15">Search</button>
              </div>
            </div>
          </form>

          <div class="bottom20 top30">
            <h3>Find your next home to buy with Favorite Move</h3>
            <p class=" top10">Search 519,740 properties for sale from thousands of estate agents and developers. Use our smarter property search
              tools to refine, sort and customise your results in a variety of ways. From new homes to old homes, shared
              ownership homes to retirement homes, we've got it all. Start your search above or browse using the links below.
              .</p>
            <button type="submit" class="btn-dark bottom20 border_radius top15">Create property alert</button>
          </div>
          
          <div class=" top20 bottom20">
              <h3>Browse property for sale by area *</h3>
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
                    <td><b>West Midlands</b></td>
                    <td width="30%">12,398</td>
                    <td width="30%">£199,535</td>
                </tr>
                <tr class="accordion-body collapse" id="accordion">
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
  <!-- Property Search area End -->

