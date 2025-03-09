<?php 
   $servername = "localhost";
   $username = "root";
   $password = " ";
   $dbname = "data_buying";

   $conn = mysqli_connect($servername, $username, $password, $dbname);

   if($conn){
      //  echo"<script>";
      //  echo"alert('connection Successful')";
      //  echo" </script>";
    }else{
       echo"<script>";
       echo"alert('connection not Successful')";
       echo" </script>";
    }