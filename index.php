<?php
  

  abstract class Game {
  
  
      protected $name ;
      protected $price;
      protected $stock;
      protected $description;
       
      public function __construct(
          $name,
          $price,
          $stock,
          $description)
          {
              $this->name=$name;
              $this->price=$price;
              $this->stock=$stock;
              $this->$description=$description;
  }
   abstract public function upadetstcok();
  
  }
  
  
  
  class order extends Game{
    protected $order;
    public function __construct( $name,
    $price,
    $stock,
    $description,
    $order){
    parent::__construct($name,$price,$stock,$description);
    
        $this->order= $order;
    }
  
      public function upadetstcok(){
  return "10 ";
  
      }
  }
  
  $order =new order ;
  echo $order->upadetstcok();
  
  
  
  