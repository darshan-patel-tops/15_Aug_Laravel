<?php
require_once("header.php");
echo "<pre>";
// print_r($_FILES);
// print_r($_REQUEST);
print_r($_SESSION);
echo "</pre>";

if(isset($_REQUEST['upload_btn']))
{
    echo "inside if";

    echo "<pre>";
    print_r($_FILES);
    move_uploaded_file($_FILES['image']['tmp_name'],"upload/".time().uniqid().$_FILES['image']['name']);

    $_SESSION['product'][] = array("price"=>$_REQUEST["price"],"description"=>$_REQUEST['description'],"image"=>"upload/".time().uniqid().$_FILES['image']['name']);
    
    echo "</pre>";
}
else
{
    // echo "inside else";
}

?>

<h1>Product Upload Page</h1>



<form action="" method="post" enctype="multipart/form-data">

    <input type="text" placeholder="Enter Price" name="price">
    <input type="text" placeholder="Enter description" name="description">
    <input type="file" accept="image/*" name="image">

    <button type="submit" name="upload_btn">Save</button>
</form>

<?php
require_once("footer.php");
?>