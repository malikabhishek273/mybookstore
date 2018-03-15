<?php
include("connection.php");
session_start();
$var=0;
if(array_key_exists("action",$_GET))
{
    if($_GET["action"]=="postreview")
    { 
        $query="insert into tbl_products_ratings values('".$_POST['productid']."','".$_COOKIE['id']."','".$_POST['score']."','".$_POST['review']."',CURRENT_TIMESTAMP)";
        
        if(mysqli_query($link,$query))
            echo 1;
        else
            echo 2;
    }
    if($_GET["action"]=="signup")
    {
        $error="";
        if($_POST["firstname"]=="")
            $error.="Please enter first name";
        if($_POST["lastname"]=="")
            $error.="Please enter last name";
        if($_POST["email"]=="")
            $error.="Please enter your email address";
        if($_POST["password"]=="")
            $error.="Please enter password";
        if($_POST["mobileno"]=="")
            $error.="Please enter mobile no";
        if($_POST["address"]=="")
            $error.="Please enter address";
        
        if($error=="")
        {
            $query="select * from tbl_users where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($link,$query);
            if(mysqli_num_rows($result)>=1)
                echo "User already exists";
            else
            {
                $query="insert into tbl_users(firstname,lastname,email,password,mobileno,address) values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['mobileno']."','".$_POST['address']."')";
                if(mysqli_query($link,$query))
                    echo "Signed Up successfully";
                else
                    echo "Connection Problem";
            }
        }
        else
            echo $error;
            
    }
    if($_GET["action"]=="login")
    {
        $error="";
        if($_POST["email"]=="")
            $error.="Please enter your email address";
        if($_POST["password"]=="")
            $error.="Please enter password";
        if($error=="")
        {
            $query="select * from tbl_users where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($link,$query);
            if(mysqli_num_rows($result)>=1)
            {
                $row=mysqli_fetch_array($result);
                setcookie("id",$row[0],time() +60*60*60);
                echo "1";
            }
            else
                echo "No record found";
        }
        else
            echo $error;
    }
    if($_GET['action']=="profileupdate")
    {
        
        $query="update tbl_users set firstname='".$_POST['firstname']."',lastname='".$_POST['lastname']."',email='".$_POST['email']."',password='".$_POST['password']."',mobileno='".$_POST['mobileno']."',address='".$_POST['address']."' where user_id='".$_COOKIE['id']."'";
        
        if($result=mysqli_query($link,$query))
            echo 1;
        else
            echo 2;
    }
    if($_GET["action"]=="cart")
    {
        $var=1;
        $query="insert into cart values('".$_POST['user_id']."','".$_POST['product_id']."','".$var."')";
        if($result=mysqli_query($link,$query))
            echo "1";
        else
            echo "2";
    }
    if($_GET['action']=="remove")
    {
        $query="delete from cart where user_id='".$_POST['user_id']."' and product_id='".$_POST['product_id']."'";
        if($result=mysqli_query($link,$query))
            echo "1";
        else
            echo "2";
    }
    
    if($_GET['action']=="add")
    {
        $query="select frequency from cart where user_id='".$_POST['user_id']."' and product_id='".$_POST['product_id']."'";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        $freq=$row[0]+1;
        $query="update cart set frequency='".$freq."' where user_id='".$_POST['user_id']."' and product_id='".$_POST['product_id']."'";
        $result=mysqli_query($link,$query);
        echo $freq;
    }
    if($_GET['action']=="subtract")
    {
        $query="select frequency from cart where user_id='".$_POST['user_id']."' and product_id='".$_POST['product_id']."'";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        $freq=$row[0]-1;
        if($freq<=0)
        {
            $query2="delete from cart where user_id='".$_POST['user_id']."' and product_id='".$_POST['product_id']."'";
            $result2=mysqli_query($link,$query2);
        }
        else
        { 
            $query="update cart set frequency='".$freq."' where user_id='".$_POST['user_id']."' and product_id='".$_POST['product_id']."'";
            $result=mysqli_query($link,$query);
            echo $freq;
        }
    }
    if($_GET["action"]=="confirmorder")
    {
       /* $flag=false;
        if(!flag)
        {
        $query="select order_id from orders order by order_id DESC LIMIT 1";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        $var=$row[0]+1;
        $flag=true;
        }*/
        
        $query="insert into orders (order_id,user_id,product_id,frequency,process,date,amount) values('".$_POST['nextid']."','".$_POST['user_id']."','".$_POST['product_id']."','".$_POST['frequency']."','1',CURRENT_TIMESTAMP,'".$_POST['amount']."')";
        if($result=mysqli_query($link,$query))
            echo "1";
        else
            echo "2";   
    }
    if($_GET["action"]=="query")
    {
        $query="insert into contactus(name,email,message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
        if($result=mysqli_query($link,$query))
            echo "1";
        else
            echo "2";
    }
    
    
    
}


?>