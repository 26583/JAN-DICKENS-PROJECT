<?php
  session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jan-Dickens</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="nav">
      <h2 id="name">Jan Dickens</h2>
      <h2><a href="login.html" id="login">LOG IN</a></h2>
    </div>
    <img src="banner.png" alt="banner" class="banner">
    <div class="mainTxt">
      <?php
      if (isset($_SESSION['loggedin'])) {

       ?>
       SECRETS
     <?php }else{ ?>
       You must log in to see secrets
     <?php } ?>
    </div>
  </body>
</html>
