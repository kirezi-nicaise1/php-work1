<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="select * FROM work where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result );
$name=$row['name'];
$pass=$row['password'];
$email=$row['email'];



if(isset($_POST['submit'])){
    // $id=$_GET['updateid'];
    $name=$_POST['name'];
    $pass=MD5($_POST['pass']);
    $email=$_POST['email'];
    $sql="update work set name='$name', password='$pass', email='$email' where id=$id ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        // echo'error'.$sql.'<br>'.$conn->error;
        die(mysqli_error($conn));
    }else{
        // 
        header('location:display.php');
        // echo'updated';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $id=$_GET['updateid'];

    $sql="SELECT * FROM work WHERE id=$id LIMIT 1";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
    
    <form  method="post">
        <fieldset>
            Name: <input type="text" name="name" value=<?php echo $name; ?>><br>
            Password: <input type="password" name="pass" value=<?php echo $pass;?>><br>
            Email: <input type="email" name="email" value=<?php echo $email; ?>><br>
            <input type="submit" name="submit" value="Update">
            


        </fieldset>
    </form>
</body>
</html>






