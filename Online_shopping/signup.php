<?php 
$msg="";
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $phone=$_POST['num'];
    $email=$_POST['mail'];
    $gender=$_POST['gender'];
    $address=$_POST['addr'];
    $password=$_POST['pass'];
    $img=$_FILES['pic']['name'];
    
    if(move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$_FILES['pic']['name'])){
                         
        header("location:login.php");
    }        
        else 
        {
                     echo "file uploading failed";    
                     
             }
          
   
    
    include ("db.php");
           $con=mysqli_connect(host,username,password);
           mysqli_select_db($con,dbname);
    $qry="insert into user_master values('$name',$phone,'$email','$gender','$address','$password','$img')";
    mysqli_query($con,$qry);
    if(mysqli_affected_rows($con)>0)
        $msg="Form submitted successfully!!!!!!";
    else {
        $msg="error in submitting the form";    
    }
    mysqli_close($con);
}
?>
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
                User SignUp
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
                <div class="form-group">
                <div class="col-sm-6"><label>Upload Profile pic</label></div>
                <div class="col-sm-6">
                  <input
                      type="file"
                    name="pic"
                    value=""
                    class="form-control"
                  />
                </div>
              </div>
             
                <div class="col-sm-6">
                  <input
                      type="reset"
                    name="clear"
                    value="Reset"
                    class="form-control btn-danger btn-block"
                    style="margin: 5px"
                  />
                </div>
              <div>
                <div class="col-sm-6">
                  <input
                    type="submit"
                    name="signup"
                    value="SignUp"
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
