<?php
if (isset($_FILES["photo"]))
{
    $conn= mysqli_connect("localhost","root","","alex.php");
    $target_dir = "uploads/";
    $unik=rand(10000,1000000000);
    $target_file = $target_dir .$unik. basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $today=date("y-m-d");
        $sql="insert into uploads values (null ,'$target_file','$today')";
        mysqli_query($conn,$sql) or die();
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file uploads</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<div class="container">
 <div class="row justify-content-center">
   <div class="col-sm-5">
    <h3>UPLOAD FORM</h3>
       <form action="file_upload.php" method="post" enctype="multipart/form-data">

           <div class="form-group">
               <label for="email">your picture:</label>
               <input type="file" class="form-control" required name="photo">
           </div>

           <button type="submit" class="btn btn-primary">upload</button>
       </form>





   </div>

 </div>

</div>

<div class="container">
 <div class="row">
    <?php
    $conn= mysqli_connect("localhost","root","","alex.php");
    $sql="select * from uploads";
    $results=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($results))
    {
        extract($row);/*$id $photo $date*/
        echo"<img src='photo'>";
    }


    ?>

 </div>

</div>
</body>
</html>