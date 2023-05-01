<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="Delete from work where id=$id";
    $result=$conn->query($sql);
    if(!$result){
        echo'error';
    }else{
        header('location:display.php');
    }
}