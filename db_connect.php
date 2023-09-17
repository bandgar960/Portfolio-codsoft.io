<?php
    $servername="localhost";
    $Username="root";
    $password="";
    $conn =  mysqli_connect("localhost","root","","portfolio");
if(!$conn){
    die("connection to this database failed due to ".mysqli_connect_error()) ;
}
?>
