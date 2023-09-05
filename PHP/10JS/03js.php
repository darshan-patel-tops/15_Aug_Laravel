<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="" method="post">

<input type="text" name="email" id="email" placeholder="Enter Your Email" onblur="checkemail()">
<span id="value"></span>
<span id="message"></span>

<input type="text" name="username" id="username" placeholder="Enter Your Username" >
<button>Save</button>
</form>


<script>

function checkemail()
{
    console.log("Inside Function");
    
    var userinput = "";
    
    console.log(document.getElementById("email").value)
    
    userinput = document.getElementById("email").value
    
    document.getElementById("value").innerHTML = userinput
    var email = "admin@mail.com"

    if(userinput == email)
    {
        console.log("inside if");
        document.getElementById("message").innerHTML = "<h3 style='color:red;'>This email already exists</h3>"
    }
    else
    {
        console.log("inside else");
        document.getElementById("message").innerHTML = ""

    }


}



</script>

</body>
</html>