<?php

echo "Welcome to lecture of API Calling";



?>


<div id="data"></div>






<script>

fetch("https://jsonplaceholder.typicode.com/photos").then((res)=>res.json()).then((response)=>{
        // console.log(response);

        var apidata = "";

        response.forEach(data =>
        {
            apidata +=
            `       
                        <div>
                        <p>Id : ${data.id}</p>
                        <p>Id : ${data.albumId}</p>
                        <p>Title : ${data.title}</p>
                        <img src="${data.thumbnailUrl}" alt="" height="50px" width="100px">            
                        </div>
                        `
                        // console.log(data); 
                        
            

        });

        document.getElementById('data').innerHTML =apidata;
});




</script>