<?php
require_once('database.php'); 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PHP Images</title>
</head>

<body class="bg-primary">
    <form method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input class="form-control" type="file" id="myfile" max-size="4000" name="image"
                accept="image/x-png, image/jpeg, image/jpg" required/>
            <label for="myfile">Upload Profile Image</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="file" id="files" max-size="4000" name="files[]"
                accept="image/x-png, image/jpeg, image/jpg" multiple required/>
            <label for="inputEmail">Upload Multiple Images</label>
        </div>
        <div class="mt-4 mb-0">
            <input class="btn btn-primary btn-block form-control" id="" type="submit" name="submit"
                value="SUBMIT" />
        </div>
    </form>
</body>
</html>