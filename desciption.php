<?php
include("connection.php");
//include("connection2.php");


$query="select image,name from books where id='".$_GET['id']."' ";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);        
$image=$row[0]; 

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">
      <script src="js/modernizr-2.6.2.min.js"></script>
      <script src="raty/jquery.raty.js" type="text/javascript"></script>
      <style type="text/css">
          #review {
    font-family: Arial;
    margin: 0 auto; /* Center website */
    max-width: 800px; /* Max width */
    padding: 20px;
}
    #rightdiv{
        position: relative;
        top: 100px;
    }
    #bookname{
        color: black;
        font-size: 220%;
    }
          .footer{
              margin-top: 200px;
          }
        
          #mybut{
              background-color: #1ea78d;
              color: white;
          }
          /* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 50%;
    max-width: 500px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 50%;
    max-width: 5s00px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption { 
    animation-name: zoom;
    animation-duration: 0.6s;
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
          * {
    box-sizing: border-box;
}
          .fa {
            font-size: 25px;
            }

          .checked {
                color: orange;
        }
          .heading {
                font-size: 15px;
                color: black;
          }
          /* Three column layout */
.side {
    position: relative;
    float: left;
    width: 12%;
    margin-top:10px;
}

.middle {
    margin-top:10px;
    float: left;
    width: 70%;
}

/* Place text to the right */
.right {
    position: relative;
    left: 0px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 60%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}
          #reviews{
              margin-left: 10px;
          }

/* Individual bars */
.bar-5 {height: 18px; background-color: #4CAF50;}
.bar-4 {width: 90%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}
          /* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    .right {
        display: none;
    }
}
          #logo{
              width: 100px;
              height: 100px;
            
          }
          #buy{
            margin-top: 90px;
            width: 185px;
            height: 220px;
            border-style: solid;
            border-width: 1px;
            border-color: gray;
            border-radius: 5px;
            
            
          }
          .buybut{
             margin-left: 40px;
             margin-top: 20px;
          }
          #desiption{
            font-family: inherit;
          }
      </style>
    <title>mybookstore</title>
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
 <div class="row" id="rightdiv">
        <div class="col-6 col-md-3">
          <!--<img src="images/" style="width: 300px; height:300px;" >-->
            <img style="margin: 10px;"id="myImg" src="images/<?php echo $image;  ?>" alt='<?php echo $row[1] ;?>' width="250" height="300">
            <!--this is star rating-->
             
            
            <!-- this is the end of rating star-->
            
            <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
      <span class="close">&times;</span>

      <!-- Modal Content (The Image) -->
      <img class="modal-content" id="img01">

      <!-- Modal Caption (Image Text) -->
      <div id="caption"></div>
</div>
          </div>
     
    <div class="col-6 col-md-7">
     <?php
        //Books description
        $query="SELECT * FROM BOOKS WHERE id='".$_GET['id']."'";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        echo "<p id='bookname'>".$row['name']."</p>";
        echo "<p style='margin-top: 5px;'>Edition: ". $row['edition']."</p>";
        echo "<hr>";
        ?>
        <p style="color: red; font-size: 120%;">
        Price &#x20B9;
            <?php
          echo " ".$row["price"];
            echo "<h4 id='desiption'>" .$row['description']."</h4>";
        ?>
        
        </p>
          </div>
     <div class="col-6 col-md-2">
         <a href="login.php"> <button class="btn " id="mybut">View all books</button></a>
         <br>
         <div id="buy">
         <button class="btn buybut" style="background-color:#E49128;">Buy Now</button>
             <br>
             <?php 
                
                $query="select * from cart where user_id='".$_COOKIE['id']."' and product_id='".$_GET['id']."'";
                $result=mysqli_query($link,$query);
                if(mysqli_num_rows($result)>=1)
                    echo '<a href="cart.php"><button class="btn buybut" style="background-color:#E49128;" id="cartbut">Go to cart</button></a>';
            else
                echo '<button class="btn buybut" style="background-color:#E49128;" id="cartbut">Add to cart</button>';
            
                ?>
         </div>

          </div>
     
</div> 
      <!--Reviews section-->
      <div id="review" style="position: relative; top: 120px; margin-left:5px; " >
      <hr>
        <h3>Customer Reviews</h3>
          <br>
          <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id='".$_GET['id']."'";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
            
            echo "  <div id='review3'>" . round($score,1) . " out of 5 stars based on ".$rows." reviews</div>";
            
    $query="select * from tbl_products_ratings where ratings_score='5' and product_id='".$_GET['id']."'" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id='".$_GET['id']."'";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id='".$_GET['id']."'";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id='".$_GET['id']."'";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id='".$_GET['id']."'";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id='".$_GET['id']."' ";
     $result=mysqli_query($link,$query);
            
        $totalreviews=mysqli_num_rows($result);
        
    
         echo ' <hr style="border:3px solid #f1f1f1">
        <div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:'. ($s5*100/$totalreviews) .'%' . ';" ></div>'. '
    </div>
  </div>
  <div class="side right">
    <div>'.round(($s5/$totalreviews)*100,1) .'%' .'</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:'. ($s4/$totalreviews)*100 .'%' . ';" ></div>'. '
    </div>
  </div>
  <div class="side right">
    <div>'.round(($s4/$totalreviews)*100,1) .'%'.'</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:'. ($s3/$totalreviews)*100 .'%' . ';" ></div>'. '
    </div>
  </div>
  <div class="side right">
    <div>'.round(($s3/$totalreviews)*100,1) .'%'.'</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:'. ($s2/$totalreviews)*100 .'%' . ';" ></div>'. '
    </div>
  </div>
  <div class="side right">
    <div>'.round(($s2/$totalreviews)*100,1) .'%'.'</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width:'. ($s1/$totalreviews)*100 .'%' . ';" ></div>'. '
    </div>
  </div>
  <div class="side right">
    <div>'.round(($s1/$totalreviews)*100,1) .'%'.'</div>
  </div>
</div>';
        }
        ?>  
        </div>
      <!--Posting a review-->
      
      <div style="position:relative; top: 150px;margin-left:15px;">
           <div id="reviews">
               <h2>Some reviews for this product</h2>
               <hr>
      <?php 
        $query="SELECT review,user_id,datetime,ratings_score FROM tbl_products_ratings WHERE product_id='".$_GET['id']."' order by datetime desc LIMIT 10";
        $result=mysqli_query($link,$query);
        while($row=mysqli_fetch_array($result))
        {
            $usrid=$row[1];
            $query2="SELECT firstname,lastname FROM tbl_users WHERE user_id='".$usrid."' ";
            $result2=mysqli_query($link,$query2);
            $row2=mysqli_fetch_array($result2);
            echo "<i class='fa fa-user-circle-o'></i>". "         <span style='font-size:130%;color:black;'>". $row2[0]." ".$row2[1]."</span>";
                        $rat=$row[3];
            
            echo "<br>";
            $time=$row[2];
            echo date("j/m/Y g:i:sa", strtotime($time));
            echo "</br>" ;
            for($i=1;$i<=$rat;$i++)
                echo '<span class="fa fa-star checked"></span>';
            for($i=$rat+1;$i<=5;$i++)
                echo '<span class="fa fa-star"></span>';
            
            echo "<li style='font-size:110%;'>" . "<span style='margin-left: 25px;'>$row[0]</span></li><br>";
        }
      ?>
     </div>
      
        <br>
        <?php
          
          if(isset($_COOKIE['id'])){
          $query="select * from tbl_products_ratings where product_id='".$_GET['id']."' and user_id='".$_COOKIE['id']."' ";
          $result=mysqli_query($link,$query);
        
          if(mysqli_num_rows($result)>=1)
          {
              
              echo '<h2>You have already reviewed this product</h2>';
          }
              
          else echo '
          
        <h2 >Posting a review</h2>
          <hr>
         
       <div id="prd"></div>
          <div class="form-group">
    <label for="area">Write your review</label>
    <textarea class="form-control" id="area" rows="3" style="width:50%;"></textarea>
              <button type="submit" class="btn btn-success" id="postbut" style="margin-top:10px;width:10%;">Post</button>
  </div>
          
      </div>';
          }
        
        ?>
      
      <!--Footer-->
      <footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="" alt="">
							<p></p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>subscribe and like us on other social sites. </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Explore</h6>
							<ul>
								<li><a href="#">Inside Us</a></li>
								<li><a href="#">Flickr</a></li>
								<li><a href="#">Google</a></li>
								<li><a href="#">Forum</a></li>
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6>Support</h6>
							<ul>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Market Blog</a></li>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Pressroom</a></li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2015 <a href="http://themefisher.com/"></a>. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Newbies.</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
        
    <!-- Optional JavaScript -->
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS --><script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript">
      
      // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    $("#mynav").hide();
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
  $("#mynav").show();
}
      
      </script>
      
      <!--Ratings-->
      <!-- include the rating javascript file -->
<script src="raty/jquery.raty.js" type="text/javascript"></script>

<!-- to display rating bind this div -->
<script>
  $(function() {
    $('#prd').raty({
      number: 5, starOff: 'raty/img/star-off-big.png', starOn: 'raty/img/star-on-big.png', width: 180, scoreName: "score",
    });
  });
</script>


      <script type="text/javascript">
          var id=<?php echo $_GET["id"]; ?>;
          var usid=<?php echo $_COOKIE['id'] ?>;
        $("#postbut").click(function(){
        $.ajax({
            type: "POST",
            url: "actions.php?action=postreview",
            data: "score=" + $("#score").val() + "&review=" + $("#area").val() + "&productid=" + id,
            success: function(result) {
                /*if(result==1)
                    alert("posted");
                else
                    alert("not");*/
                alert(result);
            }
            
        })
    });
          $("#cartbut").click(function(){
              
             $.ajax({
                 type:"POST",
                 url:"actions.php?action=cart",
                 data:"product_id="+id +"&user_id=" + usid,
                 success:function(result)
                 {
                     if(result==1)
                         window.location.assign("cart.php");
                 }
             }) 
          });
      </script>
      <script>
         // setInterval(function() {
         $("#review").load(location.href+" #review>*","");
         }, 1000);
           setInterval(function() {
         $("#review3").load(location.href+" #review3>*","");
         }, 1000);
          
      </script>
    
  </body>
</html>