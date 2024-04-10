<?php

$servername = "localhost";
$username = "mysql";
$password = "";
$dbname = "registeruser";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("connection Fail". mysqli_connect_error());
}
else {

}



