<html>
    <head>
        <title>
            Property Detail Page
        </title>
    </head>
    <body>
       
    <div class="container">
  <h2>Property Deatil</h2>
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Title</label>
      <div class="col-sm-10">
        <h2 class="form-control-static"><?php echo $printme[0]['title'];?></h2>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Town ID: </label>
      <div class="col-sm-10">          
            <?php echo $printme[0]['prop_id'];?>
      </div>
    </div>
    <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Description: </label>
            <div class="col-sm-10">          
                    <?php echo $printme[0]['description'];?>
            </div>
          </div>
          <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Status: </label>
                <div class="col-sm-10">          
                        <?php echo $printme[0]['status'];?>
                </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Features:</label>
                    <div class="col-sm-10">  
                    <label class="control-label col-sm-2" for="pwd">AC:</label>
                        <div class="col-sm-10">  
                            <?php echo $featurep[0]['AC'];?>
                        </div>
                    </div>
                    <div class="col-sm-10">  
                        <label class="control-label col-sm-2" for="pwd">Barbeque Grill:</label>
                            <div class="col-sm-10">  
                                <?php echo $featurep[0]['Barbeque'];?>
                            </div>
                            </div>
                            <div class="col-sm-10">  
                                    <label class="control-label col-sm-2" for="pwd">Balcony:</label>
                                        <div class="col-sm-10">  
                                            <?php echo $featurep[0]['Balcony'];?>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">  
                                            <label class="control-label col-sm-2" for="pwd">Laundry:</label>
                                                <div class="col-sm-10">  
                                                    <?php echo $featurep[0]['Laundry'];?>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">  
                                                    <label class="control-label col-sm-2" for="pwd">Theater:</label>
                                                        <div class="col-sm-10">  
                                                            <?php echo $featurep[0]['theater'];?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-10">  
                                                            <label class="control-label col-sm-2" for="pwd">Lawn:</label>
                                                                <div class="col-sm-10">  
                                                                    <?php echo $featurep[0]['Lawn'];?>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-10">  
                                                                    <label class="control-label col-sm-2" for="pwd">Basement:</label>
                                                                        <div class="col-sm-10">  
                                                                            <?php echo $featurep[0]['Basement'];?>
                                                                        </div>
                                                                    </div>
                                                                    
                  </div>
                  <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Year Built: </label>
                        <div class="col-sm-10">          
                                <?php echo $printme[0]['yearb'];?>
                        </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Price: </label>
                            <div class="col-sm-10">          
                                    <?php echo $printme[0]['price'];?>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Property Type: </label>
                                <div class="col-sm-10">          
                                        <?php echo $printme[0]['prop_type'];?>
                                </div>
                         </div>
                              


  </form>
</div>
<script>
var winPrint = window.open('http://localhost/favmove1/printpro?id=4', 'left=0,top=0,width=800,height=600,toolbar=0,scrollbars=0,status=0');
winPrint.document.close();
winPrint.focus();
winPrint.print();
winPrint.close(); 
</script>
<?php //redirect($this->agent->referrer()); ?>
</body>

    </body>
</html>