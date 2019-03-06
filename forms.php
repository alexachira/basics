<?php
if (isset($_POST["submit"]))
{
/*var_dump($_POST);*/
    //laravel
    extract($_POST);
    echo "$names $email $password $age";
    file_put_contents("form.txt","\n$names $email $password $age",FILE_APPEND);
    $password=crypt($password,"gtuguherfgwehtrtegerteuhe");
    $sql="insert into users values (null ,'$names','$email','$password','$age')";
    //connect
    $conn=mysqli_connect("localhost","root","","php");

    mysqli_query($conn,$sql) or die(mysqli_error($conn));

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forms</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

</head>
<body>
<div class="container">
 <div class="row justify-content-center">
   <div class="col-sm-4">
   <h2>Register Here</h2>
       <form action="forms.php" method="post">
           <div class="form-group">
               <label for="text">full names:</label>
               <input type="text"name="names" class="form-control" required>
           </div>
           <div class="form-group">
               <label for="number">Your age:</label>
               <input type="number" name="age" class="form-control" required>
           </div>
           <div class="form-group">
               <label for="email">Email address:</label>
               <input type="email" name="email" class="form-control" required>
           </div>
           <div class="form-group">
               <label for="pwd">Password:</label>
               <input type="password" name="password" class="form-control" required>
           </div>

           <button type="submit" name="submit" class="btn btn-primary btn btn-block">register</button>
       </form>

   </div>

 </div>

</div>
<div class="container">
<div class="row justify-content-center">
    <div class="col-sm8">
        <h2>Users</h2>
      <table class="table table-dark">
      <tr>
          <th>id</th>
          <th>names</th>
          <th>email</th>
          <th>age</th>
<th>delete</th>
      </tr>

<?php
$sql="select *from users";
$conn=mysqli_connect("localhost","root","","php");
$results= mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($results))
{
/*  var_dump($row);
  die();*/
extract($row);
echo     "<tr>
              <td>$id</td>
              <td>$names</td>
              <td>$email</td>
              <td>$age</td>
           <td><a href='delete.php' class='btn btn-danger'>delete</a></td>
          </tr>";
}

?>
      </table>

    </div>

</div>

</div>

</body>
</html>