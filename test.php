<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style type="text/css">
      
          #topc{
              position: relative;
              left: 340px;
               top: 50px;
                width: 700px;
              height: 715px;
              border: 1px black solid;
              border-radius: 5px;
          }
        ul#menu li {
            display:inline;
          }
          .toggle{
              width: 250px;
              height: 60px;
              margin-top: 40px;
              margin-left: 20px;
          }
          #login{
              position: relative;
              margin-left: 0px;
              background-color: grey;
              
          }
          #signup{
              background-color: #1A9A77;
          }
          input[type=text]{
              width: 85%;
          }
          input[type=password]{
              width: 90%;
          }
          input[type=email]{
              width: 90%;
          }
          label{
              margin-left: 27px;
          }
          #log{
              display: none;
          } 
          
      </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div style="background-color: #293841; " id="topc">
    
        <ul id="menu">
            <li><button class="btn toggle" id="signup"><strong><span style="font-size: 30px; color: white;">Sign Up</span></strong></button></li>
            <li><button class="btn toggle" id="login"><strong><span style="font-size: 30px; color: white; ">Login</span></strong></button>L</li>
        </ul>    
        <div id="sign">
        
        <form>
            <div class="form-group">
            <h2 style="color:white; position:relative; left:190px; top:7px;  ">Sign Up for free</h2>
                <br>
            <div class="form-row">
    <div class="col">
        <label for="firstname" style="color: white; ">First name</label>
      <input type="text"  style="color:white; background-color: #293841; border-radius:0px; margin-left: 30px;" class="form-control" placeholder="First name" id="firstname" required />
    </div>
    <div class="col">
        <label for="lastname" style="color: white; margin-left: 1px;">Last name</label>
      <input type="text"  style="color:white;  background-color: #293841; border-radius:0px; " class="form-control" placeholder="Last name" id="lastname" required />
    </div>
  </div>
                <br>
            <div class="form-group">
    <label for="email" style="color: white; ">Email address</label>
    <input type="email"  style="color:white; background-color: #293841; border-radius:0px; margin-left:27px; "class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required />
    
  </div>
            <div class="form-group">
    <label for="password" style="color: white;">Password</label>
    <input type="password"  style="color:white; background-color: #293841; border-radius:0px; margin-left: 27px;" class="form-control" id="password" placeholder="Password" required />
  </div>
                   <div class="form-group">
    <label for="mobileno" style="color: white;">Mobile No.</label>
    <input type="text"  style="color:white; background-color: #293841; border-radius:0px; margin-left: 27px;" class="form-control" id="mobileno" placeholder="Mobile No." required />
  </div>
                   <div class="form-group">
    <label for="address" style="color: white;">Address</label>
    <input type="text"  style="color:white; background-color: #293841; border-radius:0px; margin-left: 27px;" class="form-control" id="address" placeholder="Enter your address" required />
  </div>
                
            <button type="submit" id="signupbut" class="btn btn-primary" style=" width: 560px; height: 65px; position: relative; left: 50px; background-color: #1A9A77;"><strong><span style="font-size: 37px;">GET STARTED</span></strong></button>
                </div>
            </form>
        
        
        
        
        </div>
        <div id="log">
        
            <form>
            <h2 style="color:white; position:relative; left:190px; top:7px;  ">Welcome Back</h2>
            <div class="form-group">
    <label for="email2" style="color: white; ">Email address</label>
    <input type="email"  style="color:white; background-color: #293841; border-radius:0px; margin-left:27px; "class="form-control" id="email2" aria-describedby="emailHelp" placeholder="Enter email" required />
    <br>
                <div class="form-group">
    <label for="password2" style="color: white;">Password</label>
    <input type="password"  style="color:white; background-color: #293841; border-radius:0px; margin-left: 27px;" class="form-control" id="password2" placeholder="Password" required />
  </div>
                <br>
                <button type="submit" id="loginbut"class="btn btn-primary" style=" width: 560px; height: 65px; position: relative; left: 20px; background-color: #1A9A77;"><strong><span style="font-size: 37px;">LOG IN</span></strong></button>
  </div>
            </form>
        
        
        </div>
      
    </div>
<!--
<form method="get">
  <div class="form-group">
        <ul id="menu">
            <li><button class="btn toggle" id="signup">Sign Up</button></li>
            <li><button class="btn toggle" id="login">Login</button>L</li>
        </ul>    
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript">
      
      $("#signup").click(function(){
          $("#login").css("background-color","grey");
          $("#signup").css("background-color","#1A9A77");
          $("#log").hide();
          $("#sign").show();
          //start
          
      })
         $("#login").click(function(){
          $("#signup").css("background-color","grey");
          $("#login").css("background-color","#1A9A77");
            $("#sign").hide();
          $("#log").show();
      })
          $("#signupbut").click(function(){
            $.ajax({
            type: "POST",
            url: "actions.php?action=signup",
            data: "firstname=" + $("#firstname").val() + "&lastname=" + $("#lastname").val() + "&email=" +$("#email").val() + "&password=" + $("#password").val()+ "&mobileno=" + $("#mobileno").val() + "&address=" + $("#address").val(),
            success: function(result) {
                alert(result);
            }
            
        })  
          })
          $("#loginbut").click(function(){
            $.ajax({
            type: "POST",
            url: "actions.php?action=login",
            data: "email=" +$("#email2").val() + "&password=" + $("#password2").val(),
            success: function(result) {
             if(result=="1")
                 {
                    window.location.assign("http://localhost/mybookstore/login.php");   
                 }
                else
                    alert(result);
            }
            
        })  
          })
          
    
          
      
      </script>
  </body>
</html>