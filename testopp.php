<?php


class Person{

   public $name;
   public $age;
    public function __construct(){
            $this->name = "ahmad";
            $this->age = 25;
            
        echo "constructor";
    }
    public static function test1(){
         return new self();
        }
}

person::test1();

  ?>