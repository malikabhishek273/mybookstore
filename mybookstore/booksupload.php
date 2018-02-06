<?php
session_start();
include("connection.php");
if(isset($_POST["submit"])){
    $error="";
    $target="images/". basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    
    $query="update books set image='$image' where id=8 ";
    
    if(!mysqli_query($link,$query))
        $error.= "Error in inserting in database";
    else{
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
        echo "<div class='alert alert-success'><strong>Image uploaded successfully</strong></div>";
    else
        $error.="Photo not uploaded";
    }
    if($error!="")
        echo "<div class='alert alert-danger'><strong>". $error. "</strong></div>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    
        #logout{
            float: right;
        }
        .container{
            width: 500px;
            height: 250px;
            margin: 30px;
            border: 1px black solid;
            background-color: aqua;
        }
        #style{
            font-family: fantasy;
            font-weight: bold;
            font-size: 200%;
        }
    
    </style>
</head>

<body>

    <!-- Start your project here-->
    <!-- /Start your project here-->
    <div class="container">
    <form method="post" enctype="multipart/form-data">
        <span id="style">Select image to upload:</span>
        <br>
        <input type="file" name="image">
        <br><br>
        <button class="btn btn-secondary" type="submit" name="submit">Upload Photo</button>
    </form>
    </div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
