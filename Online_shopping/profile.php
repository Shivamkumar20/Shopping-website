<?php
session_start();
if(!isset($_SESSION['name'])){
    header("location:login.php");
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
    include ("header.php");               //including header page
    ?>
        <div class="container-fluid">
        <div style="">
            <?php
            if(isset($_SESSION['name']))
                
            $email=$_SESSION['uname'];
            include ("db.php");
            $con= mysqli_connect(host,username,password);
            mysqli_select_db($con,dbname);
            $qry="select * from user_master where email='$email'";
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);
            echo "<img src='$row[6]' class='image-responsive' height=180px/><br>";
            echo "<table class='table table-responsive table-hover'>";
            echo "<caption class='bg-info'>Your Details</caption>";
            echo "<tr><th>Name: </th><td>$row[0]</td></tr>";
            echo "<tr><th>Phone no: </th><td>$row[1]</td></tr>";
            echo "<tr><th>Email address: </th><td>$row[2]</td></tr>";
            echo "<tr><th>Gender: </th><td>$row[3]</td></tr>";
            echo "<tr><th>Address: </th><td>$row[4]</td></tr>";
            echo "<tr><th>Password: </th><td>$row[5]</td></tr>";
            echo "</table>";
            ?>
            <form>
                <a href="up.php"><input type="button" name="Update" value="Update profile" class="btn-primary btn"/></a>
            </form>
        </div>
            </div>
        <?php 
    include ("footer.php");
    ?>
    </body>
</html>



