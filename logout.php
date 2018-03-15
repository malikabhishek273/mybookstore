<?php

setcookie("id","",time()-60*60*60);
header("location: index.php");

?>