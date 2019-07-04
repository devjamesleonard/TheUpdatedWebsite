<?php
if(isset($_COOKIE['signedin']) && $_COOKIE['signedin'] === 'true'){
  header("Location: postprofile.php");
}else{
setcookie('errortext','Could not identify user.');
header("Location: login.php");
}

?>
