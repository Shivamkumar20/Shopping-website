<?php
session_start();
if(isset($_POST['btnreg'])){
    $p_id=$_POST['txtid'];
    $p_name=$_POST['txtname'];
    $p_price=$_POST['txtprice'];
    $p_type=$_POST['txttype'];
include ("db.php");
        $con= mysqli_connect(host,username,password);
        mysqli_select_db($con,dbname);
        $qry="insert into product_master values($p_id,'$p_name',$p_price,'$p_type','$p_img')";
        mysqli_query($con,$qry);
        if(mysqli_affected_rows($con)>0)
           $msg="Data submitted successfully!!!!!!";
        else {
           $msg="error in submitting the Data";    
    }
    mysqli_close($con);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
    include ("checkout.php");               //including header page
    ?>
        <div class="container-fluid">
         <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" class="form-horizontal" style="margin-top: 30px">
            <fieldset
              style="
                background-color: bisque;
                margin: 5px 5px 5px 5px;
                padding: 0px 10px 10px 10px;
                border-radius: 10px;
              "
            >
              <legend class="text-center bg-info" style="border-radius: 5px">
                Order description
              </legend>
              <div class="form-group">
                <div class="col-sm-6">
                  <label>Name</label>
                </div>
                <div class="col-sm-6">
                  <input
                      type="text"
                    name="name"
                    value="" placeholder="Enter your Name"
                    class="form-control"
                  />
                </div>
              </div>
                <div class="form-group">
                <div class="col-sm-6">
                  <label>Phone no.</label>
                </div>
                <div class="col-sm-6">
                  <input
                      type="number"
                    name="num"
                    value="" placeholder="Enter your Mobile no."
                    class="form-control"
                  />
                </div>
              </div>
                <div class="form-group">
                <div class="col-sm-6">
                  <label>Pincode</label>
                </div>
                <div class="col-sm-6">
                  <input
                      type="number"
                    name="pin"
                    value="" placeholder="Enter your pincode"
                    class="form-control"
                  />
                </div>
              </div>
                <div class="form-group">
                <div class="col-sm-6">
                  <label>Address</label>
                </div>
                <div class="col-sm-6">
                    <textarea id="id" name="addr" class="form-control"  placeholder="Enter your Address."></textarea>
                 
                  
                </div>
              </div>
                <div class="form-group">
                <div class="col-sm-6">
                  <label>Payment Method</label>
                </div>
                <div class="col-sm-6">
                    <select class="form-control"><option value="">-select payment method-</option><option value="UPI">UPI</option><option value="cash on delivery">CASH ON DELIVERY</option></select>
                 
                  
                </div>
              </div>
              
              </div>
                <div class="form-group">
                <div class="col-sm-12">
                  <input
                    type="submit"
                    name="done"
                    value="Login"
                    class="form-control btn-success btn-block"
                    style="margin: 5px"
                  />
                </div>
                
                 <div class="form-group">
                  
                     <div class="col-sm-12 text-center text-primary">
                     <?php
                    echo $msg;
                      ?>
                  </div>

                     
                </div>
                   
              </div>
            </fieldset>
                
          </form>
        </div>
        <div class="col-sm-3"></div>
        
      </div>
          <?php 
    include ("footer.php");
    ?>
    </body>
</html>
