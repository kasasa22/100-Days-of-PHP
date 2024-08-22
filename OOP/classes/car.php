<?php
class Car{
  //property/fields
  protected  $brand;
  protected  $color;
  public $vehicle_type="car";

  //constructor
  public function __construct($brand, $color){
    $this->brand = $brand;
    $this->color = $color;
  }

  //getter and setter methods
 public function getBrand(){
    return $this->brand;
  }

  public function setBrand($brand){
    $this->brand = $brand;
  }

  public function getColor(){
    return $this->color;
  }

  public function setColor($color){
    $this->color = $color;
  }

  //METHODS
  public function getCarInfo(){
    return "This is a $this->color $this->brand $this->vehicle_type.";
  }

  
}

$car01 = new Car("subaru","red");
echo $car01->getCarInfo();