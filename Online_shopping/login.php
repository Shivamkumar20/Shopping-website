<?php
  session_start();
  $msg="";
  if(isset($_POST['done'])){
      $username=$_POST['mail'];
      $password=$_POST['pass'];
      include ("db.php");
      $con= mysqli_connect(host,username,password);
        mysqli_select_db($con,dbname);
        $result=mysqli_query($con,"select * from user_master where email='$username' and password='$password'");
        if(mysqli_num_rows($result)>0){
            $r= mysqli_fetch_array($result);
            if(isset($_POST['remember'])){
                setcookie("username",$username,time()+60*5);
                setcookie("password",$password,time()+60*5);
            }
            header("location:home.php");
            $_SESSION['uname']=$username;
            $_SESSION['name']=$r[0];

        }
      else {
          $msg="<label class='text-uppercase text-danger'>Login unsuccess!!!!!!!!!</label>";
      }
      mysqli_close($con);
      
  }

?>
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
                User login
              </legend>
              <div class="form-group">
                <div class="col-sm-6">
                  <label>Email address</label>
                </div>
                <div class="col-sm-6">
                  <input
                      type="email"
                    name="mail"
                    value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" placeholder="Enter your email"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6"><label>Password</label></div>
                <div class="col-sm-6">
                  <input
                    type="password"
                    name="pass"
                    value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" placeholder="Enter your password"
                    class="form-control"
                  />
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
                     <div class="col-sm-6 text-primary text-center" >
                         <input type="checkbox" name="remember"/><label style="padding: 10px"
                      >Remember password</label
                    >
                  </div>
                
                  <div class="col-sm-6 text-center text-primary">
                    <label style="padding: 10px"
                      ><a href=""> Forget Password?</a></label
                    >
                  </div>
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
        
      </div><br><br><br><br><br><br><br>
    <?php 
    include ("footer.php");
    ?>
      
  </body>
</html>
