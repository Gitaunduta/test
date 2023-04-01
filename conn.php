<?php 
$severname="localhost";
$username="username";
$password="password";
$dbname="auction";

$conn=new mysqli($severname,$username,$password,$dbname);

if($conn->connect_error)
{
    die("database connection failed".$conn->connect_error);
}
?>