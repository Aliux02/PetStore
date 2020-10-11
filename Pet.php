

<?php

class Pet{
    public $category;
    public $type;
    public $name;
    public $lifeLength;
    public $lastFeedTime;
    public $statSold;//0
    public $statSelling;//1
    public $statDead;//2
    

    public function __construct($name,$type,$category){
        $this->category=$category;
        $this->type=$type;
        $this->name=$name;
        $this->lifeLength= $_SESSION['life']["$type"];
        //$this->lastFeedTime=$lastFeedTime;
        //$this->statSold=$statSold;
        //$this->statSelling=$statSelling;
        //$this->statDead=$statDead;

    }
}   
?>