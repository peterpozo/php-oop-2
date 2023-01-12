<?php 


include_once(__DIR__ . '/Product.php');

class Tshirt extends Product {

    public $color;
    public $size;

    public function __construct($id, $name, $price, $size, $color) {
        parent::__construct($id, $name, $price);
        $this->size = $size;
        $this->color = $color;
    }

    public function set_size($size) {
        $this->size = $size;
      }
    
    public function get_size() {
      return $this->size;
    }
    public function get_color() {
      return $this->color;
    }
}

?>