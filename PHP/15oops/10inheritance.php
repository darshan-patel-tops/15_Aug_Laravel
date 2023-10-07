<?php


class bjp 
{
    public function modi()
    {
        echo "Modiji<br>";
    }
    public function amit()
    {
        echo "Amitji<br>";
    }

    protected  function hardik()
    {
        echo "Hardik<br>";
        $this->arvind();
    }

    private  function arvind()
    {
        echo "Arvindji <br>";
    }
    private function oveshi()
    {
        echo "Oveshi<br>";
    }
}

class congress extends bjp
{
    public function rahul()
    {
        echo "Rahulji<br>";
        $this->hardik();
        bjp::modi();
        bjp::hardik();
        // bjp::oveshi();
        // $this->oveshi();
        // $this->arvind();
        
    }
}


$sircar = new congress;

$sircar->amit();
$sircar->modi();
$sircar->rahul();
// $sircar->hardik();














?>