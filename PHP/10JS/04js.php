<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<div id="product">

</div>







<script>

username = "admin"
password = "123"

// document.getElementById("product").innerHTML = "Welcome to product page
//  this is another line "
// document.getElementById("product").innerHTML = "Welcome to product page "+username + " Password is : " +password
//With Double quotation you cannot write 

// document.getElementById("product").innerHTML = 'Welcome to product page username '+username + " Password is : " +password

document.getElementById("product").innerHTML = ` you can write anything 
<br>
another line """"       
 <br>

'''''''


 ${username}
 ${1+1276}
 ${password}

`



</script>



</body>
</html>