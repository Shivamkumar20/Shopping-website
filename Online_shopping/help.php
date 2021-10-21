<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php 
    include ("header.php");               //including header page
    ?>
      <div class="form-group">
          <div class="col-sm-12 bg-primary text-center" style="font-size: 40px; margin-top:20px;">
          <label>Query</label>
          </div>
      <div class="row">
          
          <div class="col-sm-6" style="margin-top: 50px;">
              <p style="font-size:20px; margin: 5px 5px 5px 5px;
                padding: 0px 10px 10px 10px;"> Head office "Bangalore"<br><br>
                  Sub office Delhi,Calcutta,Bihar<br><br>
                  Contact us on:<br><br>
                  Phone no.- +91 7676895654/45643<br><br>
                  Email id. address- Expresscart@gmail.com<br><br>  
              </p>
          </div>
              
          
      
      
          <div class="col-sm-6" style="margin-top: 50px;">
              <form class="form-horizontal">
                  <fieldset style="
                background-color: darkturquoise;
                margin: 5px 5px 5px 5px;
                padding: 0px 10px 10px 10px;
                border-radius: 10px;
              ">
                      <legend class="bg-danger text-center">Query form</legend>
                  <div class="form-group">
                      <div class="col-sm-6">
                          <label>Name</label></div>
                      <div class="col-sm-6"><input type="text" name="qname" value=""  placeholder="Enter your name" class="form-control">
                      </div>  
                      </div>
                  <div class="form-group">
                      <div class="col-sm-6">
                          <label>Phone no.</label></div>
                      <div class="col-sm-6"><input type="number" name="qnumber" value="" placeholder="Enter your phone no." class="form-control">
                      </div>  
                      </div>
                  <div class="form-group">
                      <div class="col-sm-6">
                          <label>Query</label></div>
                      <div class="col-sm-6"><textarea  class="form-control" placeholder="Write your querry"></textarea>
                      </div>  
                      </div>
                      <div class="form-group">
                      <div class="col-sm-12">
                          
                          <input type="submit" name="query" value="SUBMIT" class="form-control btn-block btn-success"/>
                      </div>  
                      </div>
                  </fieldset>
              </form>
          </div>
                  
              
              </div>
                </div>

          
          
      
           
       <?php 
    include ("footer.php");
    ?>
  </body>
</html>
     

