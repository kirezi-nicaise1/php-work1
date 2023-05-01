<?php
$server='localhost';
$username='root';
$password='2021';
$db='work';

$conn=new mysqli($server,$username,$password,$db);

if(!$conn){
    echo'ooops! connection timed out';
}else{
    // echo'connected successfully'; 
}