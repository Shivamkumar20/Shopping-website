
            <?php
            $pid=$_GET['fid'];
            $page=$_GET['page'];
            if(isset($_COOKIE['cart']))
            {
                $x=$_COOKIE['cart'].",".$pid;
                setcookie("cart",$x,time()+60*60);
            }
            else{
                setcookie("cart",$pid,time()+60*60);
                echo "<h2>cart is empty!!!<h2>";
            }
            header("location:$page.php?pid=$pid");
        ?>


