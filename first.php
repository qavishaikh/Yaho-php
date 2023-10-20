<?php
    echo"First Practice";
    echo"<br>";
    echo"<b>Qavi</b> <h1>Shaikh</h1>";
    echo 786;

    print"<br>";
    print"Qavi Shaikh";


    $A = "<br> Ali Hasan ";
    echo"$A";

    $age = 20;
    echo"<h1>".$age."</h1>";

    $name = "Qavi";
    echo"How are You : ".$name."<br>";
    var_dump($name);

    $arr1 = array("Qavi","Hamdan","Hassan");
    var_dump($arr1);

    echo"<br>";
    class Bike{
        public $color;
        public $model;
        public function __construct($color,$model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
            return "My Car is ". $this->color . " " . "Model is " .  $this->model . "!";
        }
    }

    $myBike = new Bike("Red","Honda");
    echo $myBike -> message();
    echo"<br>";
    $myBike = new Bike("Black","MG");
    echo $myBike -> message();


    // echo "\n"; it add a new line
    # Single line comment
    // Single line comment
    /*
    Muti line 
    Comment
    */
?>