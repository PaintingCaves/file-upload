<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
</head>
<body>
    
<?php


$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

?>


<img src=" <?php echo $target_file ?>" alt="">



</body>
</html>