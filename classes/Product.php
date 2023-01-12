<?php

class Product {
  // Properties
  public $id;
  public $name;
  public $price;

  public function __construct($id, $name, $price) {
    $this->id = $id;
    $this->name = $name;
    $this->price = '0.01';
    if ($price > 0) {
      $this->price = $price;
    }
    
  }
  // Methods
  public function set_id($id) {
    $this->id = $id;
  }

  public function get_id() {
    return $this->id;
  }

  public function set_name($name) {
    $this->name = $name;
  }

  public function get_name() {
    return $this->name;
  }

  public function set_price($price) {
    // positive price
    if ($price > 0) {
      $this->price = $price;
    }
  }

  public function get_price() {
    return $this->price;
  }

}

?>