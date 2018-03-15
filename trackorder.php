<?php
session_start();
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      
      <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <title>Track Order</title>
      <style type="text/css">
          body{
              font-family: "Arial", "Helvetica", sans-serif;
          }
          .upper{
              margin-top: 20px;
              width: 80%;
              height: 150px;
          }
           .lower{
              margin-top: 20px;
              width: 90%;
              height: 300px;
          }
          .vertical{
              position: relative;
              top: -11px;
              height: 150px;
              
              border-right-style: solid;
              border-right-width: 1px;
              
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
          .head{
              text-decoration: underline;
              position: relative;
              top: 15px;
              text-align: center;
              font-weight: bold;
              font-size: 15px;
    
          }
          #check1{
              color: lawngreen;
              font-size: 160%;
          }
          .bs-wizard {margin-top: 40px;}

/*Form Wizard*/
.bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
.bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 18px; margin-bottom: 5px;}
.bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 16px;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #fbe8aa; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;} 
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; } 
.bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #fbe8aa;}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
.bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
.bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
          
          #processdiv{
              width: 120%;
          }
/*END Form Wizard*/
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
      
      <!--first div-->
<div class="container upper bordershadow">
  <div class="row">
    <div class="col-sm vertical">
      <span class="head">ORDER DETAILS</span>
        <br>
        <br>
        <div style="margin-top:5px; position:relative;float:left;">
        Order Id:
            <?php
            echo $_GET['orderid'];
            ?>
        <br>
        Order Date:
            <?php
            $query="select date,amount from orders where order_id='".$_GET['orderid']."'";
            $result=mysqli_query($link,$query);
            $row=mysqli_fetch_array($result);
            echo $row[0];
            ?>
        <br>
            Total Amount:
            <?php echo $row[1]; ?>
        </div>
    </div>
    <div class="col-sm vertical">
      <span class="head">ADDRESS</span>
        <br>
        <br>
        <?php 
        
        $query="select firstname,lastname,address,mobileno from tbl_users where user_id='".$_COOKIE['id']."' ";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        echo "<h6 style='font-weight:bold;'><span style='font-size: 120%;'>".$row[0]." ".$row[1]."</span></h6>";
        echo $row[2]."<br><br>";
        echo "<span style='font-weight:bold;'>Phone:-</span> ".$row[3];
        
        
        ?>
    </div>
    <div class="col-sm vertical" >
     <span class="head">CONTACT US</span>
        <br>
        <br><br>
        <a href="#">Need Help?</a>
        <br><br>
        <a href="orderhistory.php">View Your Order</a>
    </div>
  </div>
</div>
      <div class="container lower bordershadow">
  <div class="row">
    
      
    <div class="col">
        
    <?php
        
        $query="select process,delivery_date from orders where order_id='".$_GET['orderid']."' LIMIT 1";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if($row[0]==4)
            echo "<h4><strong>Your product has been delivered on ". $row[1]." <span id='check1'>&#10004;</span><h4></strong>"; 
        
    ?>
     <!--process-->
        <div class="container" id="processdiv">
		
        
            <div class="row bs-wizard" style="border-bottom:0;">
                
                <div class="col-xs-3 bs-wizard-step first ">
                  <div class="text-center bs-wizard-stepnum">Order Received</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Your Order is being processed</div>
                </div>
                
                <div class="col-xs-3 bs-wizard-step second disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Shipped</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Your package has left the courier facility </div>
                </div>
                
                <div class="col-xs-3 bs-wizard-step third disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Payment Received</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Your payment has been received successfully. </div>
                </div>
                
                <div class="col-xs-3 bs-wizard-step fourth disabled"><!-- active -->
                  <div class="text-center bs-wizard-stepnum">Delivered</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center"> Thanks for shopping from MyBookStore!! See you in future</div>
                </div>
            </div>
        
        
        
        
        
	</div>
     <!--end-->
    </div>
    
  </div>
</div>
      
      <!--footer-->
      
      <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

      <!--end-->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
      <script type="text/javascript">
      
      var process=<?php
          
          $query="select process from orders where order_id='".$_GET['orderid']."' LIMIT 1";
          $result=mysqli_query($link,$query);
          $row=mysqli_fetch_array($result);
          echo $row[0];
          
          ?>;
      
      if(process==1)
          $(".first").addClass("complete");
      else if(process==2)
          {
               $(".first").removeClass("disabled");
              $(".first").addClass("complete");
              $(".second").removeClass("disabled");   
              $(".second").addClass("complete");
          }
        else if(process==3)
            {
                $(".first").removeClass("disabled");
                $(".first").addClass("complete");
                $(".second").removeClass("disabled"); 
                 $(".second").addClass("complete");
                $(".third").removeClass("disabled");   
              $(".third").addClass("complete");
            }
        else if(process==4)
            {
                 $(".first").removeClass("disabled");
                $(".first").addClass("complete");
                $(".second").removeClass("disabled"); 
                 $(".second").addClass("complete");
                 $(".third").removeClass("disabled");
                 $(".third").addClass("complete");
                 $(".fourth").removeClass("disabled");   
              $(".fourth").addClass("complete");
            }
          
      
      </script>
  </body>
</html>