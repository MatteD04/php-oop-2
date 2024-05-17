<?php
require_once __DIR__ . '/petProducts.php';
require_once __DIR__ . '/traits/size.php';

class dog extends petProducts {
    use Size;
    public $category;

    public function __construct($_image, $_title, $_price, $_type,  $_category) {
        parent::__construct($_image, $_title, $_price, $_type);

        $this->category = $_category;
    }

}

?>