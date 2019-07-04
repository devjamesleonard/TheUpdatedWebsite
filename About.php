<?php
setcookie('currentpage','About.php');
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>BitsFixStudio.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Format/AdditionalPageFormat.css">
    <link rel="stylesheet" href="Format/HomePageFormat.css">
    <link rel="stylesheet" href="Format/ButtonFormat.css">
    <title>BitsFixStudio.com</title>
    <link rel="shortcut icon" href="Images/shortlogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src= "main.js"></script>
</head>
<body>
  <div id="FullMenu">
    <div id="TransBack">
      <button id="TransBack" type ="button" onclick ="OpenMenu(document.getElementById('FullMenu'),document.getElementById('TopRight'))" >  </button>
  </div>

  <div class="rectangle" id="SideBar">

   <button id="Menu2" class='menus'  type ="button" onclick ="OpenMenu(document.getElementById('FullMenu'),document.getElementById('TopRight'))" ><hr id="buttonbars"> <hr id="buttonbars"> <hr id="buttonbars">   </button>
<?php
if(isset($_COOKIE['signedin']) && $_COOKIE['signedin'] === 'true'){
echo'<a href = "profile.php">  <button class="login" type = "button" onclick = "lastpage("About.php")"> Profile </button></a>';
}else{
echo'<a href = "submissionpage.php">  <button class="login" type = "button" onclick = "lastpage("About.php")"> Sign In </button></a>';
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
  <div id="TopPart">

    <div id="TopRight">
        <button id="Menu" class='menus' type ="button" onclick ="OpenMenu(document.getElementById('TopRight'),document.getElementById('FullMenu'))" ><hr id="buttonbars"> <hr id="buttonbars"> <hr id="buttonbars"> </button>

    </div>
    <div id="title">
      Student Led and Run!
    </div>
  </div>
  <div id="split">  </div>
  <div id="MidRange">
    <div id="Header">
        Excerpts
    </div>
    <div id="Paragraph">
      Lorem ipsum dolor sit amet, duo ponderum qualisque cotidieque at, ad sit unum malis. Nulla quando veniam vim ut.
      Eam no magna audire. Sed inimicus dignissim intellegebat et. Id eos minim temporibus, cu mea nulla eligendi conceptam.

      Vim enim choro consequuntur ad, ei dicat nostro per. Ut zril populo copiosae vix, quot vivendum voluptaria usu in.
      No qui suavitate molestiae forensibus, id quodsi utamur suscipiantur duo. Falli deseruisse at est. Case officiis ne ius, usu ut copiosae sensibus.
      Iriure propriae intellegam ut duo, rationibus instructior eam ut.
    </div>
  <br>
  </div>
  <div id="split">  </div>
  <div id="MidRange">
    <div id="Header">
        Excerpts
    </div>
    <div id="Paragraph">
      Lorem ipsum dolor sit amet, duo ponderum qualisque cotidieque at, ad sit unum malis. Nulla quando veniam vim ut.
      Eam no magna audire. Sed inimicus dignissim intellegebat et. Id eos minim temporibus, cu mea nulla eligendi conceptam.

      Vim enim choro consequuntur ad, ei dicat nostro per. Ut zril populo copiosae vix, quot vivendum voluptaria usu in.
      No qui suavitate molestiae forensibus, id quodsi utamur suscipiantur duo. Falli deseruisse at est. Case officiis ne ius, usu ut copiosae sensibus.
      Iriure propriae intellegam ut duo, rationibus instructior eam ut.
    </div>
  <br>
  </div>
  <div id="split">  </div>
  <div id="MidRange">
    <div id="Header">
        Excerpts
    </div>
    <div id="Paragraph">
      Lorem ipsum dolor sit amet, duo ponderum qualisque cotidieque at, ad sit unum malis. Nulla quando veniam vim ut.
      Eam no magna audire. Sed inimicus dignissim intellegebat et. Id eos minim temporibus, cu mea nulla eligendi conceptam.

      Vim enim choro consequuntur ad, ei dicat nostro per. Ut zril populo copiosae vix, quot vivendum voluptaria usu in.
      No qui suavitate molestiae forensibus, id quodsi utamur suscipiantur duo. Falli deseruisse at est. Case officiis ne ius, usu ut copiosae sensibus.
      Iriure propriae intellegam ut duo, rationibus instructior eam ut.
    </div>
  <br>
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
