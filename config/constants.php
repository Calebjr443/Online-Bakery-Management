<?php 
    //Create Constants to Store Non Repeating Values
 $url = 'http://'.$_SERVER['SERVER_NAME'].'/Cake-My-Day-master/';

const LOCALHOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'food-order';

    $conn = mysqli_connect('localhost', 'root', '','food-order') or die(mysqli_connect_error()); //Database Connection
    $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_connect_error()); //SElecting Database

//Start Session
session_start();

?>


