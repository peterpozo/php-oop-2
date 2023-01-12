<?php 

include_once(__DIR__ . '/Product.php');
class Service extends Product {

    public $description;
    public $startDate;
    public $endDate;

    public function __construct($id, $name, $price, $description, $startDate, $endDate) {
        parent::__construct($id, $name, $price);
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function get_description() {
        return $this->description;
    }
    public function get_startDate() {
        return $this->startDate;
    }
    public function get_endDate() {
        return $this->endDate;
    }
}

?>