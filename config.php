<?php 


    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "suitup";

    $baglanti = mysqli_connect($host,$username,$password,$database);

    if(mysqli_connect_errno() > 0){
        die("hata: ".mysqli_connect_errno());
    }

   

?>