
<?php
session_start();
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
    <style>
    .box{
      border-style:solid;
      background-color: #d8ede6;
      margin: 5px ;
      text-align: center;
      font-family: cursive;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
      <div class="container-fluid">
    <?php 
        include ("header.php"); 
        include ("db.php");
        $con= mysqli_connect(host,username,password);
        mysqli_select_db($con,dbname);
        $result=mysqli_query($con,"select * from product_master where p_type='laptop'");
        if(mysqli_num_rows($result)>0){
            $x=0;
            while($row=mysqli_fetch_array($result))
            {
                if($x==0)
                    echo "<div class='row'>";
                      echo "<div class='col-sm-3'>";
                      echo "<div class='box'>";
                         echo "<div class='row'><div class='col-sm-12'><a href='laptop_desc.php?pid=$row[0]'><img src='$row[4]'class='img-responsive' width=450px/></a></div></div>";
                         echo "<div class='row'><div class='col-sm-12'>$row[1]</div></div>";
                         echo "<div class='row'><div class='col-sm-12'>Price: $row[2]</div></div>";
                         echo "</div>";
                echo "</div>";
                $x++;
                if($x==4)
                    echo "</div>";
                
            }
        }
        else {
            echo "No product available!!!!!!";
        }
        mysqli_close($con);
    ?>
     </div>
  </body>
</html>
