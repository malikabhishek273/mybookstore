<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysqli_connect("localhost", "root", "divyansh2428","mybookstore");
  $sql = "SELECT * FROM books WHERE id='".$id."'";
  $result = mysqli_query($link,$sql);
  $row = mysql_fetch_row($result);
  header("Content-Type: image/jpg");
  echo $row['image'];

?>
