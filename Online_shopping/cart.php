<html>
    <head>
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
            <div style="height:100%" >
            <?php
            include ("header.php"); 
            if(isset($_COOKIE['cart'])){
                $x= $_COOKIE['cart'];
                
                include ("db.php");
                $con= mysqli_connect(host,username,password);
                mysqli_select_db($con,dbname);
                $qry="select * from product_master where p_id in ($x)";
                $result=mysqli_query($con,$qry);
                
                echo "<table class='table table-responsive table-hover'>";
                $sum=0;
                while($row= mysqli_fetch_array($result))
                {
                    echo "<tr><td><img src='$row[4]' width='50' height='50'/></td><td>$row[1]</td><td>$row[2]</td><td><a href='deleteproduct.php?pid=$row[0]'/>Remove from cart</a></td>";
                    echo "<td><select><option value=1>1</option><option value=2>2</option><option value=3>3</option></select></td>";
                    echo "</tr>";
                    $sum=$sum+$row[2];   
                                

                echo "</table>";
                
                echo "<h3 class='text-right'>Sum total: $sum</h3>";
                }
                echo "<form>";
                echo "<a href='order_desc.php'/><input type='button' name='checkout' value='Prodced To Checkout' class='btn btn-success'/></a>";
                echo"</form>";
                
            }
            
              else {
               echo "<h2>cart is empty!!!!!!</h2>";
         }
            ?>
            
        </div>
            </div>
        <?php 
    include ("footer.php");
    ?>
    </body>
</html>

