<html>
<head>
    <meta charset="utf-8" />
    <title>BitsFixStudio.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Format/AdditionalPageFormat.css">
    <link rel="stylesheet" href="Format/HomePageFormat.css">
    <link rel="stylesheet" href="Format/ButtonFormat.css">
    <title >BitsFixStudio.com</title>
    <link rel="shortcut icon" href="Images/shortlogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src= "main.js"></script>
    <style>
      div[id = "error"]{
        font-style: italic;
        padding-top: 3%;
        padding-left:-5%;
      }

      div[id="formarea"]{
        background-color: #E75400;
        padding-left: 44%;
        height: 80%;
        size: 130%;

        padding-top: 5%;
        font-size: 140%;


      }


    </style>
</head>
<body>
  <div id="FullMenu">
    <div id="TransBack">
      <button id="TransBack" type ="button" onclick ="OpenMenu(document.getElementById('FullMenu'),document.getElementById('TopRight'))" > </button>
  </div>

  <div class="rectangle" id="SideBar">
  <button id="Menu2" class='menus'  type ="button" onclick ="OpenMenu(document.getElementById('FullMenu'),document.getElementById('TopRight'))" ><hr id="buttonbars"> <hr id="buttonbars"> <hr id="buttonbars">   </button>
  <?php
  if(isset($_COOKIE['signedin']) && $_COOKIE['signedin'] === 'true'){
  echo'<a href = "profile.php">  <button class="login" type = "button" onclick = "lastpage("index.php")"> Profile </button></a>';
  }else{
  echo'<a href = "submissionpage.php">  <button class="login" type = "button" onclick = "lastpage("index.php")"> Sign In </button></a>';
  }
  ?>
  </br>
   <div id="LeftSide">
     <a href = "index.php"><button id="Option"> HOME </button></a>
      </br>
    <a href = "About.php"><button id="Option"> ABOUT </button></a>
      </br>
      <a href = "GetInvolved.php">  <button id="Option"> GET  INVOLVED </button></a>
      </br>
  <a href = "Branches.php">    <button id="Option"> BRANCHES </button></a>
      </br>
    <a href = "Services.php">  <button id="Option"> SERVICES </button></a>
      </br>
    <a href = "ContactUs.php">  <button id="Option"> CONTACT US </button></a>

   </div>

  </div>
  </div>
  <div id="TopRight">
      <button id="Menu" class='menus' type ="button" onclick ="OpenMenu(document.getElementById('TopRight'),document.getElementById('FullMenu'))" ><hr id="buttonbars"> <hr id="buttonbars"> <hr id="buttonbars"> </button>

  </div>
  <div id= "introtext">
    Register Page

  </div>
  <div id= split></div>
  <div id = "formarea">
  <form action='registeredpage.php' method="post">
<div id = "itemtext">
  Username:
</div>
<input  id="texta"  maxlength = "20" name = "usern" type = "textarea"></input>
<div id = "itemtext">
  Password:
</div>
<input id="texta" maxlength = "20" name = "passn" type ="textarea"></input>
<div id = "itemtext">
  Re-Enter Password:
</div>
<input id="texta" maxlength = "20" name = "passntwo" type ="textarea"></input>
</br>
<input id="sub" type= "submit" value = "submit" name="submit"></input>
<a href = "submissionpage.php.php"> <button id="sub" type = "button"> Login </button></a>
<a href = "forgotpass.php"> <button id="sub" type = "button"> Forgot Password</button></a>
</br>
<div id="error">

<?php
$errortext="";
if(isset($_COOKIE['errortext'])){
$errortext = $_COOKIE['errortext'];
}
echo "".$errortext;
 ?>
</div>
</form>
</div>

<div id="split">
</div>
<div id="bottom">
<div id="absolutebottom">
  <a href = "index.php"><button id="bottombutton"> HOME </button></a>
  <a href = "About.php"><button id="bottombutton"> ABOUT </button></a>
  <a href = "Branches.php"><button id="bottombutton"> BRANCHES </button></a>
</div>
<div id="Copyright"> &copy; BitFix 4 19, 2019 All rights reserved.</div>

</div>
</body>
<script>
    OpenMenu(document.getElementById('FullMenu'),document.getElementById('TopRight'));

</script>

</html>
