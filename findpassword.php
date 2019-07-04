<?php

setcookie('errortext',' ');

if(isset($_POST['Next'])){
  $data_missing = array();
  if(empty($_POST['oldpass'])){
    $data_missing[] = 'oldpassword';
  }else{
    $oldpass = $_POST['oldpass'];
  }
  if(empty($_POST['passn'])){
    $data_missing[] = 'password';
  }else{
    $pass = $_POST['passn'];
  }
  if(empty($_POST['passntwo'])){
    $data_missing[] = 'passwordtwo';
  }else{
    $passtwo = $_POST['passntwo'];
  }
  require_once('mysqli_connect.php');
  $uase = mysqli_real_escape_string($dbc,$_COOKIE['username']);
  $query = "SELECT accounts.usern,accounts.passn,accounts.datejoined FROM accounts WHERE usern = '$uase'";
  $stmt = mysqli_query($dbc, $query);
  $row = mysqli_fetch_row($stmt);
  $passn = $row[1];
  if(empty($data_missing) && $pass === $passtwo && $passn === $oldpass){
      $escapedpass = mysqli_real_escape_string($dbc,$pass);
      $escapedoldpass = mysqli_real_escape_string($dbc,$oldpass);
      $query = "UPDATE accounts SET passn = '$escapedpass' WHERE passn = '$escapedoldpass'";
      $stmt = mysqli_prepare($dbc, $query);
      mysqli_stmt_execute($stmt);
      $affected_rows = mysqli_stmt_affected_rows($stmt);
      mysqli_close($dbc);
      if($affected_rows == 1){
        setcookie('errortext','Password changed!');
        setcookie('password',$pass);
      }
      if(isset($_COOKIE['lastpage'])){
        header("Location: ".$_COOKIE["lastpage"]);
      }else{
        header("Location: index.php");
      }
  }else if(empty($data_missing) && $pass === $passtwo){
        mysqli_close($dbc);
    setcookie('errortext', 'Incorrect password entered!');
    header("Location: postfindpassword.php");
  }else if(empty($data_missing) && $passn === $oldpass){
        mysqli_close($dbc);
    setcookie('errortext', 'New passwords don\'t match!');
    header("Location: postfindpassword.php");
  }else if(empty($data_missing)){
        mysqli_close($dbc);
    setcookie('errortext', 'Incorrect elements entered.');
    header("Location: postfindpassword.php");
  }else{
        mysqli_close($dbc);
    setcookie('errortext','Missing Elements ');
    header("Location: postfindpassword.php");
  }
}else{
    setcookie('errortext',' ');
    header("Location: postfindpassword.php");
}
?>
