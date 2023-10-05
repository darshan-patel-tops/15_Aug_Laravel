<?php



//1d Array with index or Numeric Value as key

$name = ['Admin',"Yash","Dev","Jatin"];


// echo $name;
echo "<pre>";
print_r($name);


//1d Array Assosiative Array  it is in key value pair
$city = array("ahmedabad"=>"gujarat","ahmedabad"=>"123","rajkot"=>"gujarat","kota"=>"rajasthan","mumbai"=>"maharashtra","modasa"=>"gujarat");
//it cannot same key twice or more 
print_r($city);

$info = [1=>23,"name"=>5.2,"city"=>true];
print_r($info);


$arr = ["city"=>"ahmedabad","name"=>1,600,"infio"=>"check",856];

print_r($arr);





//multidimensional Array

$school = array(
    "dps"=> array(
        "standard"=> array(
            "10th Standard" => array(
                "jatin" => array(
                    "subjects" => array(
                      "sports"=>89,
                      "music"=>56,
                      "drama"=>2000  
                    )
                    ),
                "yash" => array(
                    "subjects" => array(
                      "sports"=>45,
                      "music"=>89,
                      "drama"=>500  
                    )
                    ),
                    
                "dev" => array(
                    "subjects" => array(
                      "sports"=>95,
                      "music"=>90,
                      "drama"=>0  
                    )
                    ),
                    
                "saurav" => array(
                    "subjects" => array(
                      "sports"=>50,
                      "music"=>89,
                      "drama"=>10  
                    )
                    ),
                    
                )

        )
        
        ) 



);


print_r($school);

// print_r(array_column($school,"sports"));

$a = array_column($school["dps"]["standard"]["10th Standard"]["jatin"],"sports");
// echo $a;
print_r($a);

// foreach ($school as $key => $value) 
// {
//     echo "key is ".$key . " Value is ".$value;     
// }







?>