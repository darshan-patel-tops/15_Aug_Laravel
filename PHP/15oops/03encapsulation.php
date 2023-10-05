

<h1>WElcome to lecture of PHP encapsulation</h1>
<!-- 
<pre>
    rice
    oil
    tomato
    chili
    masala


    paneer 

</pre> -->

<?php 


//encapuslation wrapping up the data in a single unit
class mobile
{
    function sms()
    {
        echo "<br>sms";
    }
    function call()
    {
        echo "<br>call";
    }
    function youtube()
    {
        echo "<br>youtube";
    }
    function google()
    {
        echo "<br>google";
    }
    function msuic()
    {
        echo "<br>msuic";
    }
}



$object = new mobile;
$object->call();
$object->google();
$object->msuic();
$object->sms();



?>