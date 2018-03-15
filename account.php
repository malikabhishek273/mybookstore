<?php
session_start();
include("connection.php");

?>
<!doctype html>
<html lang="en">
  <head>
      <style type="text/css">
              div.polaroid {
          width: 250px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          text-align: center;
        }

        div.container {
          padding: 10px;
        }
          #photo{
              position: relative;
              top: 20px;
          }
          #info{
              width: 200%;
              border-style: solid;
              border-color: black;
          }
          .heading{
              font-weight: bold;
              
          }
          #but{
              display: none;
              width: 101%;
              height: 101%;
          }
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include("navlogin.php"); ?>
                  <div class="container">
              <div class="row">
                <div class="col-3">
                    <div class="polaroid" id="photo">
          <img src="img/team/profile.png" alt="Norway" style="width:100%">
          <div class="container">
            <p><?php
                $query="select firstname ,lastname,email,password,mobileno,address from tbl_users where user_id='".$_COOKIE['id']."'";
                $result=mysqli_query($link,$query);
                $row=mysqli_fetch_array($result);
                echo $row[0]." ".$row[1];
            ?></p>
          </div>
        </div>

                </div>
                <div class="col-9" style="margin-top: 30px;">
                    
                    <div class="row">
                        <div class="col">
                          <h1>Update your profile</h1>
                        </div>
                        <div class="col">
                          <button class="btn" id="but" style="background-color: #1FA78D;">Save</button>
                        </div>
                      </div>
                    
                    <a href="#" id="togglelink">Edit</a>
                    <br><br>
                    <form>
                    <span class="heading">First Name & Last Name</span>
                    <br>
                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control inp" id="firstname" value="<?php  echo $row[0]; ?>" disabled>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control inp" id="lastname" value="<?php  echo $row[1]; ?>" disabled>
                        </div>
                      </div>
                    <br>
                     <span class="heading">Email Address</span>
                    <br>
                    <input type="text" id="email" class="inp form-control"  value="<?php  echo $row[2]; ?>" disabled>
                    <br>
                    <span class="heading">Password</span>
                    <br>
                    <input type="password" id="password" class="inp form-control" value="<?php  echo $row[3]; ?>" disabled>
                    <br>
                     <span class="heading">Mobile No.</span>
                    <br>
                    <input type="text" id="mobileno" class="inp form-control" value="<?php  echo $row[4]; ?>" disabled>
                    <br>
                     <span class="heading">Address</span>
                    <br>
                    <input type="text" id="address" class="inp form-control" value="<?php  echo $row[5]; ?>" disabled>
                        </form>
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
$('#togglelink').click(function(){
        $("#but").css("display","block");
        $("#but").html("Save");
        $('.inp').prop('disabled', false);
        $("#but").css("background-color","#1FA78D");
        
});
    $("#but").click(function(){
        
     $.ajax({
         type:"POST",
         url:"actions.php?action=profileupdate",
        data:"firstname="+$("#firstname").val()+"&lastname="+$("#lastname").val()+"&email="+$("#email").val()+"&password="+$("#password").val()+"&mobileno="+$("#mobileno").val()+"&address="+$("#address").val(),
         success:function(result)
         {
             if(result==1)
                 {
                     $("#but").css("background-color","green");
                     $("#but").html("Updated Successfully");
                      $('.inp').prop('disabled', true);
                 }
             else 
                 {
                     $("#but").css("background-color","red");
                     $("but").html("Oops! something went wrong");
                 }
         }
     })
    })
</script>