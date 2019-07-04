<?php

setcookie('errortext',' ');
setcookie('signedin',' ');

if(isset($_POST['submits'])){
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


  if(empty($data_missing)){
    require_once('mysqli_connect.php');
    $query = "SELECT usern,passn,datejoined FROM accounts";
    $stmt = mysqli_query($dbc, $query);
    $rower = false;
    while($row = mysqli_fetch_array($stmt)){
      if($row['usern'] === $user && $row['passn'] === $pass){
        $rower = true;
        break;
      }
    }
    mysqli_close($dbc);
    if($rower){

      setcookie('errortext','Successful Log In');
      setcookie('signedin','true');
      setcookie('username',$user);
      setcookie('password',$pass);
      if(isset($_COOKIE['lastpage'])){
      header("Location: ".$_COOKIE["lastpage"]);
    }else{
      header("Location: index.php");
    }
  }
  }else{
    setcookie('errortext','Missing Elements ');
    header("Location: login.php");
  }
}else{
    setcookie('errortext',' ');
    header("Location: login.php");
}
?>
