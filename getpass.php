<?php
  $host = '127.0.0.1';
  $user = 'c3666Pelle';
  $password = 'saai123';
  $database = 'c3666passjandickens';
  $q = $_GET['q'];
    $conn = mysqli_connect($host, $user, $password, $database) or die('Failed to connect: ' . mysqli_error());

    $query="SELECT * FROM password";
    $result=mysqli_query($conn, $query);
    if ($result) {
        while($row = $result->fetch_assoc()){
           if($row["password"] == $q){
             session_start();
             $_SESSION['loggedin'] = true;
             echo "http://26583.hosts2.ma-cloud.nl/HACKETON";
           }
        }
    }
 ?>
