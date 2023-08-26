<?php
echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
echo "</pre>";








?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- <form action="/07.html" method="get"> -->
<form action="" method="post" enctype="multipart/form-data" >

<input type="text" name="name">
<input type="text" name="username">
<input type="password" name="password">
<input type="file" name="imgae">

<button type="submit">Submit</button>
</form>


</body>
</html>