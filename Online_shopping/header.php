<div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-4 bg-info">
          <img
            src="images/logo.jpg"
            height="62px" width="90px"
          />
        </div>
          <div class="col-sm-7 bg-info">
              <label style="font-family: cursive;text-shadow:2px 2px; font-weight:bold; font-size: 40px" class="text-primary">Express cart</label>
          </div>
          
          <div class="col-sm-1 bg-info">
              <a href="cart.php"><img
                      src="images/cart_logo.jpg"
            height="62px" width="90px"
            /></a>
        </div>
      </div>
      <div class="row bg-success text-primary">
          <div class="col-sm-4">
              
          </div>
          <nav class="col-sm-5">
          <ul class="nav navbar-nav">
            <li>
                <a href="home.php">Home</a>
            </li>
            
            <li>
              <a href="">Mobile</a>
            </li>
            <li>
              <a href="">Camera</a>
            </li>
             <li>
                 <a href="laptop.php">Laptop</a>
            </li>
            <li>
              <a href="" class="dropdown-toggle" data-toggle="dropdown"
                ><?php
                if(isset($_SESSION['name']))
                {
                    echo $_SESSION['name'];
                }
                else{
                    echo "Member";
                }
                ?><span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                  <?php
                  if(isset($_SESSION['name'])){
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";  
                  }
                  
                  else {
                     echo "<li><a href='login.php'>Sign In</a></li>";
                     echo "<li><a href='signup.php'>Sign Up</a></li>";
                  }
                  ?>
              </ul>
            </li>
            <li>
                <a href="help.php">Help</a>
            </li>
            
          </ul>
        </nav>
        <div class="col-sm-3"></div>
      </div>
    </div>