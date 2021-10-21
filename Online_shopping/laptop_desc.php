<?php
session_start();
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
        <div class="container-fluid">
    <?php 
        include ("header.php"); 
        include ("db.php");
        $id=$_GET['pid'];
        $con= mysqli_connect(host,username,password);
        mysqli_select_db($con,dbname);
        $result=mysqli_query($con,"select * from laptop_specification where p_id='$id'");
        $result1=mysqli_query($con,"select * from product_master where p_id='$id'"); 
        mysqli_connect_error();
        if(mysqli_num_rows($result1)>0){
          while($row=mysqli_fetch_array($result1)){ 
              echo "<div class='row' style='margin-top:10px'>";
              echo "<div class='col-sm-4'><img src='$row[4]'class='img-responsive' width=450px/></div>";
              echo "<div class='form-group'>";
              echo "<form class='form-horizontal' style='margin-top: 200px'>";
              echo "<div class='col-sm-2'><a href='mycart.php?fid=$id&page=laptop_desc'/><input type='button' name='add' value='Add To Cart' class='btn form-control btn-block btn-success'/></a></div>";
              echo mysqli_error($con);
              echo "<div class='col-sm-2'><input type='submit' name='buy' value='Buy Now' class='btn form-control btn-block btn-danger'/></div>";
              echo "</form>";
              echo "</div>";
              
              
          } 
        }
         
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                echo "<table class='table table-resposive table-bordered table-hover' >";
                echo "<caption class='text-center text-uppercase bg-info'> Laptop description </caption>";
                echo "<tr>";
                echo "<th> Product Brand </th><td>$row[1]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Product Name </th><td>$row[2]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Processor </th><td>$row[3]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Generation </th><td>$row[4]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> SSD </th><td>$row[5]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> HDD </th><td>$row[6]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Ram </th><td>$row[7]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Graphics </th><td>$row[8]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Operating system </th><td>$row[9]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Weight </th><td>$row[10]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Touch </th><td>$row[11]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Screen size </th><td>$row[12]</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th> Warranty </div><td>$row[13]</td>";
                echo "</tr>";
                echo "</table>";
                
            }
        }
       
        
        
        ?>
             <?php 
    include ("footer.php");
    ?>
        </div>
    </body>
</html>
