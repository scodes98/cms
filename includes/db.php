<?php ob_start();

$connection = mysqli_connect('localhost', 'root','','cms2');



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}








?>