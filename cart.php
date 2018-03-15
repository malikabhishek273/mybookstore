<?php
session_start();
include("connection.php");


?>


<!doctype html>
<html lang="en">
  <head>
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
      <style type="text/css">
      
          .cartbox{
              border: 1px solid black;
              height: 270px;
              width: 90%;
              margin-left: 20px;
                
          }
          
          div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
          .bordershadow {
                margin-bottom: 20px;
                padding: 12px;
                    border:1px solid grey;
                    border-radius: 3px;
                    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
                    transition: all 200ms ease-out;
                    }
          
            .bordershadow:hover {
                    box-shadow: 0 0 6px rgba(1, 1, 1, 1);
                    }
          .total{
              position: fixed;
              
            border:1px solid grey;
              height: 280px;
              width: 300px;
              margin-top: 50px;
              border-bottom-color: 
          }
          

          .margin{
              margin: 3px;
          }

          #ending{
              position: fixed;
          }
          .subtract{
              color: black;
          }
          .add{
              color:black;
          }
      </style>
  </head>
  <body>
    <?php
      if(isset($_COOKIE["id"]))
        include("navlogin.php");
      else
      {
          
  echo '<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mynav" style="background-color: #1EA78D;">
  <a class="navbar-brand" href="index.php">MyBookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    
  </div>
      </nav>';
      }
      ?>
      
      <div class="row">
          <div class="col-9" >
  <?php  
      $query="select product_id,frequency from cart where user_id='".$_COOKIE['id']."'";
      $result=mysqli_query($link,$query);
      $items=mysqli_num_rows($result);
      echo "<p style='margin-top:10px;margin-left:10px;font-weight:bold;'>My cart(".$items.")</p>";
      $totprice=0;
      while($row=mysqli_fetch_array($result))
      {
          
          $query2="select name,price,image,edition from books where id='".$row[0]."'";
          $result2=mysqli_query($link,$query2);
          $row2=mysqli_fetch_array($result2);
          $image=$row2[2];
          $totprice+=$row2[1]*$row[1];
          
          echo '<div class="cartbox bordershadow row"><div class="col-3"><img style="margin: 10px;"id="myImg" src="images/'. $image.'" alt='.$row[0].' width="200" height="200">
          
          <a href="javascript:;" class="subtract" data-id='.$row[0].'><i class="fas fa-minus" ></i></a>'. 
              
              '<input type="text" value='.$row[1].'  style="width:40%; text-align:center; margin: 5px;" class="frequency"> 
          
          <a href="javascript:;" class="add" data-id='.$row[0].'><i class="large material-icons" >add_box</i></a>
          
          </div>';
          echo '<div class="col-5" style="margin-top:30px; left:25px;">'.$row2[0]."</br> Edition: ".$row2[3]."</br>Price: ".$row2[1]."<br>
          <br><a href='#' style='color:blue'; class='remove' data-id='".$row[0]."'>Remove</a>
          </div></div>";
      }
      ?>
          </div>
          <div class="col-2">
          <div class="total">
              <h5 style="margin:3px;color:grey;">PRICE DETAILS:-</h5>
              <hr>
              <?php
              echo "<div class='row margin'><div class='col-9'><h5>Price (" .$items. " items)</h5></div><div class='col-2'>" . $totprice."</div></div>";
              
              
                echo '<div class="row margin">
              
                    <div class="col-9">
                        <h5>Delivery Charges</h5>
                    </div>

                    <div class="col-2">

                        <h5 style="color: green">FREE</h5>
                    </div>    
              
              </div>';
            
              echo '<hr style="border-top: dotted 1px;" />';
              echo '<div class="row margin">
              
                    <div class="col-9">
                        <h5>Amount payable</h5>
                    </div>

                    <div class="col-2">

                        <h5>'. $totprice.'</h5>
                    </div>    
              
              </div>';
              ?>
              <hr>
              <a href="login.php"><button class="btn btn-success" style="position: relative; left: 10px;">Continue Shopping</button></a>
        <a href="order.php"><button class="btn" style="background-color: #FB641B; position:relative; left: 20px;" >Place Order</button></a>
    
          </div>
          </div>
      </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">
    var user_id=<?php echo $_COOKIE['id']; ?>
        
    $(".remove").click(function(){
    
        
        var id=$(this).data("id");
        $.ajax({
            type:"POST",
            url: "actions.php?action=remove",
            data: "product_id="+ id + "&user_id=" + user_id,
            success: function(result){
                if(result=="1")
                    window.location.reload();
                else
                    alert("Connection Problem");
                    
            }
            
            })
    });
    
    $(".add").click(function(){
        
        var id=$(this).data("id");
    
        $.ajax({
            type: "POST",
            url: "actions.php?action=add",
            data: "user_id="+ user_id + "&product_id=" + id,
            success: function(result)
            {
                 window.location.reload();
            }
        })
        
    })
    $(".subtract").click(function(){
        var id=$(this).data("id");
        $.ajax({
            type: "POST",
            url: "actions.php?action=subtract",
            data: "user_id="+ user_id + "&product_id=" + id,
            success: function(result)
            {
                window.location.reload();  
            }
        })
    })
</script>