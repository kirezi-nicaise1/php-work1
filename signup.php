<?php
include 'connection.php';
if(isset($_POST{'submit'})){
    $name=$_POST['name'];
    $pass=MD5($_POST['pass']);
    $email=$_POST['email'];
    $sql="INSERT INTO work(name,password,email) values ('$name','$pass','$email')";
    $result=$conn->query($sql);
    if(!$result){
        echo'error'.$ql.'<br>'.$conn->error;
    }else{
        // 
        header('location:display.php');
    }
}