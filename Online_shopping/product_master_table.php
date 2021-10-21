<?php
 $msg="";
if(isset($_POST['btnreg'])){
    $p_id=$_POST['txtid'];
    $p_name=$_POST['txtname'];
    $p_price=$_POST['txtprice'];
    $p_type=$_POST['txttype'];
    $p_img=$_FILES['img']['name'];
    
    if(move_uploaded_file($_FILES['img']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Online_shopping/images/".$_FILES['img']['name'])){
                         
        echo "file uploaded successfully";
    }        
        else 
        {
                     echo "file uploading failed";    
                     
             }
          
   
    
    include ("db.php");
           $con=mysqli_connect(host,username,password);
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
        
        <title></title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
        <table>
            <caption><h2>Product registration form</h2></caption>
                <tr>
                <td>Product id</td>
                <td><input type="number" name="txtid" value="" /></td>
                </tr>
                 <tr>
                <td>Product Name</td>
                <td><input type="text" name="txtname" value="" /></td>
                 </tr>
                 <tr>
                <td>Product price</td>
                <td><input type="number" name="txtprice" value="" /></td>
                 </tr>
                 <tr>
                <td>Product type</td>
                <td><input type="text" name="txttype" value="" /></td>
                 </tr>
                
                  <tr>
                <td>Product image</td>
                <td><input type="file" name="img" value="" /></td>
                 </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnreg" value="Upload" /></td>
                 </tr>
        </table>
            <?php
            echo $msg;
            ?>
            </form>
      
    </body>
</html>
