<?php 
class petProducts {
    // variabili d'istanza
    public $image;
    public $title;
    public $price;
    public $type;

    //costruttore
    public function __construct($_image, $_title, $_price, $_type) {
        $this ->image = $_image;
        $this ->title = $_title;
        $this ->price = $_price;
        $this ->type = $_type;
    }

    // fnzione 
    // public function getTitle() {
    //     return $this->title;
    // }

}
?>