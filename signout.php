<?php

setcookie('signedin','false');
if(isset($_COOKIE['lastpage'])){
  header("Location: ".$_COOKIE["lastpage"]);
}else{
header("Location: index.php");
}
 ?>
