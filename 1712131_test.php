<?php
    class Car {
        function __construction(){
            print "构造函数被调用\n";
        }
        function __destruction(){
            print "析构函数被调用\n";
        }
        public $speed = 0;
        //增加speedUp方法，使speed加10
        public function speedUP(){
            $this->speed += 10;
        }
        
    }
    $car = new Car();
    while($car->speed <= 100){
        $car->speedUp();
        echo $car->speed."\n";
    }
    unset($car);
?>
