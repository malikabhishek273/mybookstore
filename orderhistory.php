<?php

    session_start();    
    include("connection.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
      <style type="text/css">
      
          .link{
              display: inline;
          }
        
          .container{
              margin-top: 20px;
          }
          #completeorders{
              display: none;
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
          #myImg{
              margin: 5px;
              width: 150px;
              height: auto;
          }
          .box{
              height:auto;
              margin-top: 50px;
              border: 1px solid black;
          }
          .track{
              position: relative;
              left: 80px;
          }
          .total{
            margin-top: 25px;
            border:1px solid grey;
              height: 300px;
              width: 400px;
            
          }
          .data{
              position: relative;
              left: 180px;
          }
          
          #link1{
              margin-right: 10px;
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
      <div class="container">
      <h2 style="text-decoration: underline;">Your Orders</h2>
      <div id="top">
          <br>
          <div class="link" id="link1"><a href="javascript:;">Current Orders  </a></div>
          <div class="link" id="link2"><a href="javascript:;">Completed Orders</a></div>  
      </div>
          <div id="bottom">
          <div id="currentorders">
          
              <?php
                
                $query="select DISTINCT order_id from orders where user_id='".$_COOKIE['id']."' and process<4 ORDER BY date DESC";
                $result=mysqli_query($link,$query);
                if(mysqli_num_rows($result)==0)
                    echo "<br>There are not any current orders!!";
              else
            {
                while($row=mysqli_fetch_array($result))
                {
                    $id=$row[0];
                    $query2="select product_id,frequency,amount from orders where order_id='".$id."' and user_id='".$_COOKIE['id']."' ";
                    $result2=mysqli_query($link,$query2);
                
                    echo '<div class=" bordershadow box row">';
                    $c=0;
                    echo '<div class="col-6">';
                    while($row2=mysqli_fetch_array($result2))
                    {
                        $totamount=$row2[2];
                        $c++;
                        $bookid=$row2[0];
                        $query3="select name,price,image,edition from books where id='".$bookid."'";
                        $result3=mysqli_query($link,$query3);
                        $row3=mysqli_fetch_array($result3);
                        echo "
                        <div class='row'>
                            <div class='col-1'>
                                <img id='myImg' src='images/" . $row3[2]. "'>" . "
                            </div>
                            <div class='col-5 data' >". 
                            
                            "<p><a href='desciption.php?id=".$row2[0]."'>". $row3[0]. "</a></p>". "<p>Edition: ". $row3[3]. "</p>". "<p>Price: ". $row3[1] . "</p><p>". "<strong>x</strong>". $row2[1]. "</p>"."  
                            </div>
                            
                        </div>
                        
                        ";
                    }
                    echo '</div>';
                ?>
              <div class="total col-4">
              <h5 style="margin:3px;color:grey;">PRICE DETAILS:-</h5>
              <hr>
              <?php
              echo "<div class='row margin'><div class='col-9'><h5>Price (" .$c. " items)</h5></div><div class='col-2'>" . $totamount."</div></div>";
              
              
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

                        <h5>'. $totamount.'</h5>
                    </div>    
              
              </div>';
              ?>
              <hr>
              <a href="login.php"><button class="btn btn-success" style="position: relative; left: 10px;">Continue Shopping</button></a>
        
    
          </div>
              
              <?php
                     echo '<a class="track" href="trackorder.php?orderid='.$id.'">Track Order?</a>';
                    echo '</div>';
                }
              }
                 
              ?>
             
          </div>
             <div id="completeorders"> 
          <?php
                
                $query="select DISTINCT order_id from orders where user_id='".$_COOKIE['id']."' and process=4 ORDER BY date DESC";
                $result=mysqli_query($link,$query);
                while($row=mysqli_fetch_array($result))
                {
                    $id=$row[0];
                    $query2="select product_id,frequency,amount from orders where order_id='".$id."' and user_id='".$_COOKIE['id']."' ";
                    $result2=mysqli_query($link,$query2);
                
                    echo '<div class=" bordershadow box row">';
                    $c=0;
                    echo '<div class="col-6">';
                    while($row2=mysqli_fetch_array($result2))
                    {
                        $totamount=$row2[2];
                        $c++;
                        $bookid=$row2[0];
                        $query3="select name,price,image,edition from books where id='".$bookid."'";
                        $result3=mysqli_query($link,$query3);
                        $row3=mysqli_fetch_array($result3);
                        echo "
                        <div class='row'>
                            <div class='col-1'>
                                <img id='myImg' src='images/" . $row3[2]. "'>" . "
                            </div>
                            <div class='col-5 data' >". 
                            
                            "<p><a href='desciption.php?id=".$row2[0]."'>". $row3[0]. "</a></p>". "<p>Edition: ". $row3[3]. "</p>". "<p>Price: ". $row3[1] . "</p><p>". "<strong>x</strong>". $row2[1]. "</p>"."  
                            </div>
                            
                        </div>
                        
                        ";
                    }
                    echo '</div>';
                ?>
              <div class="total col-4">
              <h5 style="margin:3px;color:grey;">PRICE DETAILS:-</h5>
              <hr>
              <?php
              echo "<div class='row margin'><div class='col-9'><h5>Price (" .$c. " items)</h5></div><div class='col-2'>" . $totamount."</div></div>";
              
              
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

                        <h5>'. $totamount.'</h5>
                    </div>    
              
              </div>';
              ?>
              <hr>
              <a href="login.php"><button class="btn btn-success" style="position: relative; left: 10px;">Continue Shopping</button></a>
        
    
          </div>
              
              <?php
                     echo '<a class="track" href="trackorder.php?orderid='.$id.'">Track Order?</a>';
                    echo '</div>';
                }
                 
              ?>
             
          </div>
      </div>
      
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">
  $("#link1").click(function(){
   $("#link1").css("text-decoration","underline");
   $("#link2").css("text-decoration","none");
   $("#currentorders").show();
   $("#completeorders").hide();
  });
 $("#link2").click(function(){
    $("#link2").css("text-decoration","underline");
    $("#link1").css("text-decoration","none");
    $("#currentorders").hide();  
    $("#completeorders").show();
 });
    
</script>