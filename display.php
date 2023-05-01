<?php
include 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    
    <button class="btn btn-primary my-5"><a href="signup.html" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id </th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="select * from work";
$result=$conn->query($sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $pass=$row['password'];
        $email=$row['email'];
        echo 'tr
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$pass.'</td>
        <td>'.$email.'</td>
        <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light"  >Update</a></button>
    <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id.'"  class="text-light">Delete</a></button>
   </td>
      </tr>';
    }
}
  ?>
   
  </tbody>
</table> 
  </div>  
</body>
</html>