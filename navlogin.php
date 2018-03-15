
<div>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<nav class="navbar navbar-expand-lg navbar" style="background-color:#1EA78D;">
  <a class="navbar-brand" href="index.php">Mybookstore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="position: relative; float :right">
      
           <ul class="navbar-nav mr-auto" style="position:relative; left:100px;" >
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
            $query="select firstname from tbl_users where user_id='".$_COOKIE['id']."' ";
            $result=mysqli_query($link,$query);
            $row=mysqli_fetch_array($result);
            echo $row[0];
            
            ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="account.php">Your Account</a>
          <a class="dropdown-item" href="orderhistory.php">Your Orders</a>
           <a class="dropdown-item" href="cart.php">Your Cart</a>
            <a class="dropdown-item" href="#">Sell Books</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Payment</a>
        </div>
      </li>
            <!--   <li class="nav-item">
        <a href="cart.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
        </a>
      </li>-->
    </ul>
    <a href="logout.php"><button class="btn btn-outline" style="background-color: white; height: 130%;">Log Out</button></a>
      </div>
  
</nav>
</div>