<?php 

session_start();
if(!isset($_SESSION['name'])){
    header("location:login.php");
}
$msg="";
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $phone=$_POST['num'];
    $email=$_POST['mail'];
    $gender=$_POST['gender'];
    $address=$_POST['addr'];
    $password=$_POST['pass'];
    include ("db.php");
    $con=mysqli_connect(host,username,password);
    mysqli_select_db($con,dbname);
    $qry="update user_master set name='$name',phone=$phone,gender='$gender',address='$address',password='$password' where email='$email' ";
    mysqli_query($con,$qry);
    //mysqli_connect_error();  to check errors
    if(mysqli_affected_rows($con)>0)
        header("location:profile.php");
    else {
        $msg="error in submitting the form";
        //echo mysqli_error($con);  to print error message
    }
    mysqli_close($con);
}

?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    include ("header.php");               //including header page
    ?>
     
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-top: 30px">
            <fieldset
              style="
                background-color: bisque;
                margin: 5px 5px 5px 5px;
                padding: 0px 10px 10px 10px;
                border-radius: 10px;
              "
            >
              <legend class="text-center bg-info" style="border-radius: 5px">
                Update Details
               
              </legend>
              <div class="form-group">
                <div class="col-sm-6">
                  <label>Name</label>
                </div>
                <div class="col-sm-6">
                  <input
                    type="text"
                    name="name"
                    value="" placeholder="Enter your name"
                    class="form-control"
                  />
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-6"><label>Phone no.</label></div>
                <div class="col-sm-6">
                  <input
                      type="number"
                    name="num"
                    value="" placeholder="Enter your phone no."
                    class="form-control"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6"><label>Email id.</label></div>
                <div class="col-sm-6">
                  <input
                      type="email"
                    name="mail"
                    value=""  placeholder="Enter your email id."
                    class="form-control"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6"><label>Gender</label></div>
                <div class="col-sm-3">
                  <input
                      type="radio"
                    name="gender"
                    value="Male" 
                  />Male 
                </div>
                  <div class="col-sm-3">
               <input
                    type="radio"
                    name="gender"
                    value="Female"
                  />Female
                </div>
              </div>
                <div class="form-group">
                <div class="col-sm-6"><label>Address</label></div>
                <div class="col-sm-6">
                    <textarea id="id" name="addr" class="form-control"  placeholder="Enter your Address."></textarea>
                 
                  
                </div>
              </div>
                <div class="form-group">
                <div class="col-sm-6"><label>Password</label></div>
                <div class="col-sm-6">
                  <input
                    type="password"
                    name="pass"
                    value="" placeholder="Enter your password"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6"><label>Confirm Password</label></div>
                <div class="col-sm-6">
                  <input
                      type="password"
                    name="cnfpass"
                    value="" placeholder="Again enter your password"
                    class="form-control"
                  />
                </div>
              </div>
              <div>
                <div class="col-sm-6">
                  <input
                      type="submit"
                    name="update"
                    value="Update"
                    class="form-control btn-success btn-block"
                    style="margin: 5px"
                  />
                </div>
                
                
              </div>
            </fieldset>
          </form>
             <?php
            echo $msg;
            ?>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
        
    <?php 
    include ("footer.php");
    ?>
  </body>
</html>




