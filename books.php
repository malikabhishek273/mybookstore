<?php

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
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style type="text/css">
      
    ul#menu li {
        display:inline;
        position: relative;
        top: 75px;
        left: 450px;
        
}
          .card-img-top{
              height: 250px;
              
          }
          .card{
              /*border: 1px solid #1EA78D; */
              border: none;
              text-align: center;
              margin-top: 5px;
              padding: 5px;
              
          }
           #all{
              position: relative;
              top: 100px;
              margin: 5px;
          }
          #engineering{
              display: none;
              position: relative;
              top: 100px;
              margin: 5px;
          }
          #law{
              display: none;
              position: relative;
              top: 100px;
              margin: 5px;
          }
          #architecture{
              display: none;
              position: relative;
              top: 100px;
              margin: 5px;
          }
          #others{
              display: none;
              position: relative;
              top: 100px;
              margin: 5px;
              
          }
          .footer{
              margin-top: 200px;
          }
          * {
    box-sizing: border-box;
}
          a {
                background-color: none;
                color: grey;
              
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
    float: right;
    width: 15%;
    margin-top:5px;
}

.middle {
    margin-top:5px;
    float: left;
    width: 70%;
}

/* Place text to the right */
.right {
    text-align: left;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 85%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}
          #mydrop{
              width: 410px;
              height: 200px;
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
      </style>

    <title>Hello, world!</title>
      
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
      
      <!--2nd navbar-->
      
      <div class="nav2">
      
      <ul id="menu">
            <li><button class="btn btn-primary" id="allbut">All</button></li>  
           <li><button class="btn btn-success" id="engineeringbut">Engineering</button></li>
           <li><button class="btn btn-danger" id="lawbut">Law</button></li>
           <li><button class="btn btn-secondary" id="architecturebut">Architecture</button></li>
           <li><button class="btn btn-information" id="othersbut">Others</button></li>
        </ul>
      
      </div>
      
      <!---All-->
      <div id="all">
`       <div class="card-deck">
  <div class="card">
      <a href="desciption.php?id=1"><img class="card-img-top " src="img/works/item-1.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title"><a href="desciption.php?id=1">Introduction to Algorithms by TH Cormen</a></h5>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=1";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=1" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=1";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=1";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=1";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=1";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=1";
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
            ?>
          </div>
</div>
    </div>
  </div>
  <div class="card">
      <a href="desciption.php?id=2"><img class="card-img-top " src="img/works/item-2.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=2"><h5 class="card-title">Let us C by Yashwant kanetkar</h5></a> 
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=2";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=2" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=2";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=2";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=2";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=2";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=2";
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
            ?>
          </div>
</div>
    </div>
  </div>
  <div class="card">
      <a href="desciption.php?id=3"><img class="card-img-top " src="img/works/item-3.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title"><a href="desciption.php?id=3">Electronic Devices and Circuits by S Salivahanan</a></h5>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=3";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=3" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=3";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=3";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=3";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=3";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=3";
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
            ?>
          </div>
</div>
    </div>
      
  </div>
    <div class="card">
        <a href="desciption.php?id=4"><img class="card-img-top " src="img/works/item-4.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title"><a href="desciption.php?id=4">Digital Signal Processing by Schaum`s Series</a></h5>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=4";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=4" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=4";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=4";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=4";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=4";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=4";
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
            ?>
          </div>
</div>
    </div>
        
  </div>
      <div class="card">
          <a href="desciption.php?id=5"><img class="card-img-top " src="img/works/item-5.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title"><a href="desciption.php?id=5">Sachin Tendulkar-Playing it my way</a></h5>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=5";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=5" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=5";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=5";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=5";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=5";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=5";
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
            ?>
          </div>
</div>
    </div>
  </div>
      
</div>
      
      <div class="card-deck">
  <div class="card">
      <a href="desciption.php?id=6"><img class="card-img-top " src="img/works/item-6.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title"><a href="desciption.php?id=6">Modern Architecture</a></h5>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=6";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=6" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=6";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=6";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=6";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=6";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=6";
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
            ?>
          </div>
</div>
    </div>
  </div>
  <div class="card">
      <a href="desciption.php?id=7"><img class="card-img-top " src="img/works/item-7.jpeg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title"><a href="desciption.php?id=7">DBMS by H.Korth</a></h5>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id='7'";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=7" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=7";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=7";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=7";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=7";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=7";
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
            ?>
          </div>
</div>
    </div>
  </div>
 <div class="card">
     <a href="desciption.php?id=8"><img class="card-img-top " src="img/works/item-8.jpeg" alt="Card image cap"></a>
    <div class="card-body">
        <h5 class="card-title"><a href="desciption.php?id=8">Indian Penal Code by Ratanlal & Dhirajlal</a></h5>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=8";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=8" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=8";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=8";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=8";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=8";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=8";
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
            ?>
          </div>
</div>
    </div>
  </div>
    <div class="card">
    <img class="card-img-top " src="img/works/coming%20soon.jpg" >
        
    <div class="card-body">
    </div>
  </div>
 <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
</div>
      </div>
      
      <!--ENgineering-->
      <div id="engineering">
      <div class="card-deck" >
  <div class="card">
      <a href="desciption.php?id=1"><img class="card-img-top " src="img/works/item-1.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=1"><h5 class="card-title">Introduction to Algorithms by TH Cormen</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=1";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=1" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=1";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=1";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=1";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=1";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=1";
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
            ?>
          </div>
</div>
    </div>
  </div>
  <div class="card">
      <a href="desciption.php?id=2"> <img class="card-img-top " src="img/works/item-2.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=2"><h5 class="card-title">Let us C by Yashwant kanetkar</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=2";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=2" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=2";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=2";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=2";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=2";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=2";
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
            ?>
          </div>
</div>
        
    </div>
  </div>
  <div class="card">
      <a href="desciption.php?id=3"><img class="card-img-top " src="img/works/item-3.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=3"><h5 class="card-title">Electronic Devices and Circuits by S Salivahanan</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=3";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=3" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=3";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=3";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=3";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=3";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=3";
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
            ?>
          </div>
</div>
    </div>
      
  </div>
    <div class="card">
        <a href="desciption.php?id=4"><img class="card-img-top " src="img/works/item-4.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=4"><h5 class="card-title">Digital Signal Processing by Schaum`s Series</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=4";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=4" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=4";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=4";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=4";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=4";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=4";
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
            ?>
          </div>
</div>
    </div>
        
  </div>
      <div class="card">
          <a href="desciption.php?id=7"><img class="card-img-top " src="img/works/item-7.jpeg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=7"><h5 class="card-title">DBMS by H.Korth</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=7";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=7" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=7";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=7";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=7";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=7";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=7";
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
            ?>
          </div>
</div>
    </div>
  </div>
</div>
      </div>
      
      <!-- Law-->
      <div id="law">
      <div class="card-deck" >
   <div class="card">
       <a href="desciption.php?id=8"><img class="card-img-top " src="img/works/item-8.jpeg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=8"><h5 class="card-title">Indian Penal Code by Ratanlal & Dhirajlal</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=8";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=8" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=8";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=8";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=8";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=8";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=8";
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
            ?>
          </div>
</div>
    </div>
  </div>
  <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
  <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
   <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
    <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
</div>
  </div>          
  <!-- Architecture-->
      <div id="architecture">
      <div class="card-deck ">
   <div class="card">
       <a href="desciption.php?id=6"><img class="card-img-top " src="img/works/item-6.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=6"><h5 class="card-title">Modern Architecture</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=6";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=6" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=6";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=6";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=6";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=6";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=6";
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
            ?>
          </div>
</div>
    </div>
  </div>
  <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
  <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
   <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
    <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
</div>
      </div>      
<!--Others-->
      <div id="others">
        <div class="card-deck">
   <div class="card">
       <a href="desciption.php?id=5"><img class="card-img-top " src="img/works/item-5.jpg" alt="Card image cap"></a>
    <div class="card-body">
        <a href="desciption.php?id=5"><h5 class="card-title">Sachin Tendulkar-Playing it my way</h5></a>
        <?php
        
        $query="select ratings_score from tbl_products_ratings where product_id=5";
        $result=mysqli_query($link,$query);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            echo "No Ratings";
        else
        {
            $score=0;
            while($row=mysqli_fetch_array($result))
             $score=$score+$row[0];
        }
        $score=$score/$rows;
        for($i=1;$i<=$score;$i++)
        {
            echo '<span class="fa fa-star checked"></span>' ;
        }
        $sc=$i;
        for($i=$sc;$i<=5;$i++)
            echo '<span class="fa fa-star"></span>';
     
        ?>
        <div class="w3-dropdown-hover">
          <p class="w3-button" style="color:blue;">User ratings</p>
          <div class="w3-dropdown-content w3-bar-block w3-border" id="mydrop">
            <?php
             $query="select * from tbl_products_ratings where ratings_score='5' and product_id=5" ;
     $result=mysqli_query($link,$query);
        $s5=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='4' and product_id=5";
     $result=mysqli_query($link,$query);
        $s4=mysqli_num_rows($result);
    $query="select * from tbl_products_ratings where ratings_score='3' and product_id=5";
     $result=mysqli_query($link,$query);
        $s3=mysqli_num_rows($result);
        $query="select * from tbl_products_ratings where ratings_score='2' and product_id=5";
     $result=mysqli_query($link,$query);
        $s2=mysqli_num_rows($result);
            $query="select * from tbl_products_ratings where ratings_score='1' and product_id=5";
     $result=mysqli_query($link,$query);
        $s1=mysqli_num_rows($result);
            
         $query="select * from tbl_products_ratings where product_id=5";
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
            ?>
          </div>
</div>
    </div>
  </div>
  <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
  <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
   <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
    <div class="card">
   <img class="card-img-top " src="img/works/coming%20soon.jpg" >
    <div class="card-body">
    </div>
  </div>
</div>
            
</div>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">
    $("#engineeringbut").click(function(){
      $("#all").hide(); 
      $("#law").hide();
      $("#architecture").hide();
      $("#others").hide();
      $("#engineering").show();
    });
     $("#allbut").click(function(){
      $("#all").show(); 
      $("#law").hide();
      $("#architecture").hide();
      $("#others").hide();
      $("#engineering").hide();
    });
     $("#lawbut").click(function(){ 
      $("#all").hide();
      $("#architecture").hide();
      $("#others").hide();
      $("#engineering").hide();
         $("#law").show(); 
    });
     $("#othersbut").click(function(){
      $("#all").hide();
      $("#architecture").hide();
      $("#engineering").hide();
      $("#law").hide(); 
      $("#others").show();
    });
     $("#architecturebut").click(function(){
      $("#all").hide();
      $("#engineering").hide();
      $("#law").hide(); 
      $("#others").hide();
      $("#architecture").show();
    });

</script>