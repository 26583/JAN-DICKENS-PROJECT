<?php
  session_start();
  $host = '127.0.0.1';
  $user = 'c3666Pelle';
  $password = 'saai123';
  $database = 'c3666passjandickens';
  $q = $_GET['q'];
    $conn = mysqli_connect($host, $user, $password, $database) or die('Failed to connect: ' . mysqli_error());

    $query="SELECT * FROM info";
    $result=mysqli_query($conn, $query);


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
        if ($result) {
            while($row = $result->fetch_assoc()){
              echo $row[loggedin];
               }
            }
       ?>
     <?php }else{
       if ($result) {
           while($row = $result->fetch_assoc()){
             echo $row[loggedout];
              }
           }
      } ?>
    </div>
  </body>
</html>
<?php
  session_destroy();
 ?>
