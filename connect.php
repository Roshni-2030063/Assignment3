<?php
// $HOSTNAME='127.0.0.1';
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
// $DATABASE='contact_t';
$DATABASE='demo_test';
// $PORT = 3306;

// $conn=mysqli_connect("$HOSTNAME,$USERNAME,$PASSWORD,$DATABASE");
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn->connect_error){
    die('Connection Failed:'. $conn->connect_error);
}
?>