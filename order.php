<?php
session_start();
include("connection.php");

?>


<!doctype html>
<html lang="en">
  <head>
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <style type="text/css">
       .total{
              position: relative;
              
              border:1px solid grey;
             
              margin-top: 50px;
              padding: 10px;
            height: 280px;
              width: 300px;
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
          .stage1{
             
               padding: 12px;
              border: 1px solid grey;
          }
          #hiddendiv1{
              display: none;
          }
          #hiddendiv2{
              display: none;
          }
          #loginid{
              background-color: none;
          }
          .cartbox{
              position: relative;
              left: 15px;
              background-color: yellow;
              border: 1px solid black;
              height: 270px;
              width: 80%;
              margin: 20px;
          }
          
          div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
          .total{
              position: fixed;
          }
        .subtract{
              color: black;
          }
          .add{
              color:black;
          }
          #trackorder{
              display: none;
          }
          #change3{
              float: right;
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
   
<div class="row">
          <div class="col-9" style="margin-top:50px; margin-left:15px;">
  <?php  
      $query="select product_id,frequency from cart where user_id='".$_COOKIE['id']."'";
      $result=mysqli_query($link,$query);
      $items=mysqli_num_rows($result);
     // echo "<p style='margin-top:10px;margin-left:10px;font-weight:bold;'>My cart(".$items.")</p>";
      $totprice=0;
      while($row=mysqli_fetch_array($result))
      {
          
          $query2="select name,price,image,edition from books where id='".$row[0]."'";
          $result2=mysqli_query($link,$query2);
          $row2=mysqli_fetch_array($result2);
          $image=$row2[2];
          $totprice+=$row2[1]*$row[1];
          
         // echo '<div class="cartbox polaroid row"><div class="col-3"><img style="margin: 10px;"id="myImg" src="images/'. $image.'" alt='.$row[0].' width="200" height="200">
          
          //<a href="javascript:;" class="subtract" data-id='.$row[0].'><i class="fas fa-minus" ></i></a>'. 
              
            //  '<input type="text" value='.$row[1].'  style="width:40%; text-align:center;" class="frequency"> 
          
         // <a href="javascript:;" class="add" data-id='.$row[0].'><i class="large material-icons" >add_box</i></a>
          
         // </div>';
          //echo '<div class="col-5" style="margin-top:30px;">'.$row2[0]."</br> Edition: ".$row2[3]."</br>Price: ".$row2[1]."<br>
          //<br><a href='#' style='color:blue'; class='remove' data-id='".$row[0]."'>Remove</a>
          //</div></div>";
      }
      ?>
        <div class="bordershadow stage1" >
            <div class="row">
            <div class="col" id="loginid">
                <h4 style="color:grey;"><span style="color:black;">1.</span> LOGIN  <span id="check1">&#10004;</span></h4>
            </div>
            <div class="col">
                <button class="btn btn-primary" style="float:right; margin:3px;" id="change1">CHANGE</button>
            </div>
            </div>
          <?php
            $query="select firstname,lastname,mobileno from tbl_users where user_id='".$_COOKIE['id']."'";
            $result=mysqli_query($link,$query);
            $row=mysqli_fetch_array($result);
            echo $row[0]." ".$row[1]." +91".$row[2];
            ?>
            
            <div id="hiddendiv1">
              <a href="logout.php">Logout and Sign up with another account</a>
                <br>
                <button class="btn btn-primary" id="checkout">CONTINUE CHECKOUT</button>
            </div>
            
       </div>
              
              <div class="bordershadow stage2" >
            <div class="row">
            <div class="col" id="addressid">
                <h4 style="color:grey;"><span style="color:black;">2.</span> DELIVERY ADDRESS <span id="check2">&#10004;</span></h4>
            </div>
            <div class="col">
                 <button class="btn btn-primary" style="float:right; margin:3px;" id="change2">CHANGE</button>
            </div>
            </div>
          <?php
            $query="select address from tbl_users where user_id='".$_COOKIE['id']."'";
            $result=mysqli_query($link,$query);
            $row=mysqli_fetch_array($result);
            echo $row[0];
            ?>
            <div id="hiddendiv2">
                <br>
               <button class="btn btn-primary" id="deliver">DELIVER HERE</button>
                <a href="account.php" style="float:right;">Edit</a>
            </div>
       </div>
              <div class="bordershadow stage3" >
            <div class="row">
                <div class="col">
                    <h4 style="color:grey;"><span style="color:black;">3.</span> ORDER SUMMARY <span id="check3">&#10004;</span></h4>
                </div>
                <div class="col">
                    <button class="btn btn-primary" id="change3">CHANGE</button>
                </div>
             </div>
                  <div id="cart">
                  <!--cart.php again-->
                  
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
          
          echo '<div class="cartbox polaroid row"><div class="col-3"><img style="margin: 10px;"id="myImg" src="images/'. $image.'" alt='.$row[0].' width="200" height="200">
          
          <a href="javascript:;" class="subtract" data-id='.$row[0].'><i class="fas fa-minus" ></i></a>'. 
              
              '<input type="text" value='.$row[1].'  style="width:40%; text-align:center; margin: 5px;" class="frequency"> 
          
          <a href="javascript:;" class="add" data-id='.$row[0].'><i class="large material-icons" >add_box</i></a>
          
          </div>';
          echo '<div class="col-5" style="margin-top:30px; left: 25px;">'.$row2[0]."</br> Edition: ".$row2[3]."</br>Price: ".$row2[1]."<br>
          <br><a href='#' style='color:blue'; class='remove' data-id='".$row[0]."'>Remove</a>
          </div></div>";
      }
                      echo '<button class="btn btn-primary" id="continue" >CONTINUE</button>';
      ?>
                
                  </div>          
                  
       </div>
              <div class="bordershadow stage4" >
            <div class="row">
                <div class="col">
                    <h4 style="color:grey;"><span style="color:black;">4.</span> PAYMENT  &#10004;</h4>
                    <div id="payment">
                        <p>Payment Mode: Cash On Delivery(COD)</p>
                        <button class="btn btn-primary" id="confirmorder">Confirm Order</button>
                        <a href="trackorder.php"><button class="btn btn-primary" id="trackorder">Track Order</button></a>
                    </div>
                </div>
            
            </div>
       </div>
          </div>
          <div class="col-2 ">
          <div class="total bordershadow">
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
          </div>
          </div>
      </div>
      
      <!--footer-->
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">
    $("#payment").hide();
    $("#change3").hide();
    
$("#change1").click(function(){
    $("#payment").hide();
    $("#cart").hide();
    $("#change2").hide();
    
    $("#check1").hide();
   $("#hiddendiv1").show();
   $("#change1").hide();
    $("#loginid").css("background","#8ED3C6");
    
});
    
    $("#checkout").click(function(){
        $("#cart").show();
    $("#change2").show();
    })

$("#checkout").click(function(){
    $("#hiddendiv1").hide();
    $("#change1").show();
    $("#check1").show();
    $("#loginid").css("background","none");
    
    
})
$("#change2").click(function(){
    $("#payment").hide();
    $("#change1").hide();
    $("#cart").hide();
   $("#hiddendiv2").show();
    $("#check2").hide();
   $("#change2").hide();
    $("#addressid").css("background","#8ED3C6");
    
});
$("#deliver").click(function(){
     $("#change1").show();
     $("#change2").show();
    $("#cart").show();
    $("#hiddendiv2").hide();
    $("#change2").show();
    $("#check2").show();
    $("#addressid").css("background","none");
    
    
}) 
    $("#continue").click(function(){
        $("#cart").hide();
        $("#change3").show();
        $("#payment").show();
        $("#change1").show();
        $("#change2").show();
        
        
    })
    $("#change3").click(function(){
        $("#change1").hide();
        $("#change2").hide();
        $("#payment").hide();
        $("#cart").show();
        
    })
    </script>
<script type="text/javascript">
    //disabling 

    
    
    
    //
    
    var totprice=<?php echo $totprice; ?>;
    var user_id=<?php echo $_COOKIE['id']; ?>;
         var nextid=<?php
        $query2="select order_id from orders order by order_id DESC LIMIT 1";
        $result2=mysqli_query($link,$query2);
        $row2=mysqli_fetch_array($result2);
        echo $row2[0]+1;
        ?>;
     //multiple entries
       var size=<?php
        
        $query="select product_id,frequency from cart where user_id='".$_COOKIE['id']."'";
        $result=mysqli_query($link,$query);
        echo $rows=mysqli_num_rows($result);
    ?>;
       
       var arr = new Array(size);
        for (var i = 0; i < 10; i++) {
  arr[i] = new Array(2);
}
    
    
        var x=0;
        var z=0;
    
        <?php
        
        
        while($row=mysqli_fetch_array($result))
        {
    ?>
         arr[x][0]=<?php echo $row[0]; ?>;
        arr[x][1]=<?php echo $row[1]; ?>  ;   
                x++;
    
        <?php 
        }
    ?>
    
    var i=0;
    var j=0;
    /*for(i=0;i<=size-1;i++)
        {
            for(j=0;j<=1;j++)
                console.log(arr[i][j] + " ");
            
            console.log("\n");
        }*/
    //end    
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
    $("#confirmorder").click(function(){
        $("#confirmorder").hide();  
        $("#trackorder").show();
        
        for(i=0;i<=size-1;i++)
        {
            
            $.ajax({

                type:"POST",
                url:"actions.php?action=confirmorder",
                data: "user_id=" + user_id + "&product_id=" + arr[i][0] + "&frequency=" + arr[i][1]+ "&nextid=" +nextid + "&amount=" +totprice,
                success:function(result)
                {
                    if(result=="1")
                        {
                             alert("Order confirmed");
                             window.location.assign("trackorder.php?orderid=" + nextid);
                        }
                    else
                        {
                            alert("Connection Problem! Please Try after some time");
                            window.location.assign("login.php");
                            
                        }
                        
                }
            })
            
        }
       
        
        
    
    })
</script>
