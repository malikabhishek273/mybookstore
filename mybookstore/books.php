<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
      </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #1EA78D;">
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
</nav>
      
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
    <img class="card-img-top " src="img/works/item-1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Introduction to Algorithms by TH Cormen</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top " src="img/works/item-2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Let us C by Yashwant kanetkar</h5>
        
    </div>
  </div>
  <div class="card">
    <img class="card-img-top " src="img/works/item-3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Electronic Devices and Circuits by S Salivahanan</h5>
    </div>
      
  </div>
    <div class="card">
    <img class="card-img-top " src="img/works/item-4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Digital Signal Processing by Schaum`s Series</h5>
    </div>
        
  </div>
      <div class="card">
    <img class="card-img-top " src="img/works/item-5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Sachin Tendulkar-Playing it my way</h5>
    </div>
  </div>
      
</div>
      
      <div class="card-deck">
  <div class="card">
    <img class="card-img-top " src="img/works/item-6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Modern Architecture</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top " src="img/works/item-7.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">DBMS by H.Korth</h5>
    </div>
  </div>
 <div class="card">
    <img class="card-img-top " src="img/works/item-8.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Indian Penal Code by Ratanlal & Dhirajlal</h5>
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
      <div class="card-deck" id="engineering">
  <div class="card">
    <img class="card-img-top " src="img/works/item-1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Introduction to Algorithms by TH Cormen</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top " src="img/works/item-2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Let us C by Yashwant kanetkar</h5>
        
    </div>
  </div>
  <div class="card">
    <img class="card-img-top " src="img/works/item-3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Electronic Devices and Circuits by S Salivahanan</h5>
    </div>
      
  </div>
    <div class="card">
    <img class="card-img-top " src="img/works/item-4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Digital Signal Processing by Schaum`s Series</h5>
    </div>
        
  </div>
      <div class="card">
    <img class="card-img-top " src="img/works/item-7.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">DBMS by H.Korth</h5>
    </div>
  </div>
</div>
      
      <!-- Law-->
      
      <div class="card-deck" id="law">
   <div class="card">
    <img class="card-img-top " src="img/works/item-8.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Indian Penal Code by Ratanlal & Dhirajlal</h5>
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
            
  <!-- Architecture-->
      <div class="card-deck " id="architecture">
   <div class="card">
    <img class="card-img-top " src="img/works/item-6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Modern Architecture</h5>
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
            
<!--Others-->
        <div class="card-deck" id="others">
   <div class="card">
    <img class="card-img-top " src="img/works/item-5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Sachin Tendulkar-Playing it my way</h5>
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
      $("#others").show();
      $("#architecture").show();
    });
    
    
</script>