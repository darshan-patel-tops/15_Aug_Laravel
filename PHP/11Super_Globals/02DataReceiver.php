<?php


//It Fetched Data From URL
echo "<pre>";
echo "Get Method<br>";
print_r($_GET);

//It Directly send data
echo "Post Method<br>";
print_r($_POST);

//It works for both
echo "Request Method<br>";
print_r($_REQUEST);
// print_r($_REQUEST["password"]);

echo "Files Method<br>";
print_r($_FILES);



?>

<form action="" method="post" enctype="multipart/form-data">

<input type="text" name="username" id="">
<input type="text" name="email" id="">
<input type="text" name="password" id="">
<input type="file" name="prof_pic">

<button>Submit</button>

</form>