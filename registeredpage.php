<?php
setcookie("errortext"," ");
if(isset($_POST['submit'])){
  $data_missing = array();
  if(empty($_POST['usern'])){
    $data_missing[] = 'username';
  }else{
    $user = $_POST['usern'];
  }
  if(empty($_POST['passn'])){
    $data_missing[] = 'password';
  }else{
    $pass = $_POST['passn'];
  }
  if(empty($_POST['passntwo'])){
    $data_missing[] = 'passsecond';
  }else{
    $passtwo = $_POST['passntwo'];
  }
  require_once('mysqli_connect.php');
  $query = "SELECT usern,passn,datejoined FROM accounts";
  $stmt = mysqli_query($dbc, $query);
  $rower = true;
  while($row = mysqli_fetch_array($stmt)){
    if($row['usern'] === $user){
      $rower = false;
      break;
    }
  }
  if($rower){
    if(empty($data_missing)){
      require_once('mysqli_connect.php');

      $query = "INSERT INTO accounts(usern,passn) VALUES (?,?)";
      $stmt = mysqli_prepare($dbc, $query);
      mysqli_stmt_bind_param($stmt,"ss",$user,$pass);
      mysqli_stmt_execute($stmt);

      $affected_rows = mysqli_stmt_affected_rows($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($dbc);
      $rower = false;

      if($passtwo != $pass){
        setcookie("errortext","Passwords do not match!");
        header("Location: registerred.php");
      }else if($affected_rows == 1){
          header("Location: login.php");
        }
    }else{
        mysqli_close($dbc);
        setcookie("errortext","Missing Elements!");
      header("Location: registerred.php");

    }
  }else{
       setcookie("errortext","username already used!");
       header("Location: registerred.php");

  }
}else{
 header("Location: registerred.php");
}

?>
