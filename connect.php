<?php
$HOSTNAME='127.0.0.1';
$USERNAME='root';
$PASSWORD='';
$DATABASE='contact_t';
$PORT = 3306;

$conn=mysqli_connect("$HOSTNAME,$USERNAME,$PASSWORD,$DATABASE,$PORT");

if($conn->connect_error){
    die('Connection Failed:'. $conn->connect_error);
}
?>